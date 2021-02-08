<?php

namespace App\Http\Controllers\Auth;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Alert;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nip' => ['required', 'digits:18'],
            'full_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $employee = Employee::where('nip', $data['nip'])->first();
        return User::create([
            'employee_id' => $employee->id,
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_active' => 1
        ])->assignRole('Pegawai');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $employee = Employee::where('nip', $request->nip)->first();

        if (!$employee) {
            Alert::warning('Registrasi Gagal', 'NIP anda tidak terdaftar sebagai pegawai BKPP');
            return redirect()->route('register')->withInput();
        } else {
            if (\Str::slug($request->full_name) != \Str::slug($employee->nama)) {
                Alert::warning('Registrasi Gagal', 'Nama anda tidak sesuai dengan NIP didalam data pegawai');
                return redirect()->route('register')->withInput();
            } else {
                $user = User::where('employee_id', $employee->id)->first();
                if ($user) {
                    Alert::warning('Registrasi Gagal', 'Anda sudah memiliki akun yang terdaftar sebelumnya');
                    return redirect()->route('register')->withInput();
                } else {
                    event(new Registered($user = $this->create($request->all())));

                    $this->guard()->login($user);

                    if ($response = $this->registered($request, $user)) {
                        return $response;
                    }

                    return $request->wantsJson() ? new JsonResponse([], 201) : redirect($this->redirectPath());
                }
            }
        }
    }
}

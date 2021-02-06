<?php

namespace App\Http\Controllers;

use App\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Employee;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposals = Proposal::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.kartu_pegawai.pengajuan_kartu_pegawai.pengajuan-kartu-pegawai', compact('proposals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kartu_pegawai.pengajuan_kartu_pegawai.tambah-pengajuan-kartu-pegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNew(Request $request)
    {
        $userId = Auth::user()->id;
        $userNIP = Auth::user()->employee->nip;

        // $attr = $request->validate([
        //     'sk_cpns' => 'required|file|mimes:pdf|max:3000',
        //     'sk_pns' => 'required|file|mimes:pdf|max:3000',
        //     'sttpl' => 'required|file|mimes:pdf|max:3000',
        //     'photo' => 'required|image|mimes:png,jpg,jpeg|max:1000',
        // ]);

        $validator = Validator::make($request->all(), [
            'sk_cpns' => 'required|file|mimes:pdf|max:3000',
            'sk_pns' => 'required|file|mimes:pdf|max:3000',
            'sttpl' => 'required|file|mimes:pdf|max:3000',
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);

        if ($validator->fails()) {
            Alert::error('Pengajuan gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return redirect(route('home'))
                ->withErrors($validator)
                ->withInput();
        }

        $skCpnsFileName = $userNIP . '_sk_cpns_' . time() . '.' . $request->file('sk_cpns')->getClientOriginalExtension();
        $skCpnsUrl = $request->file('sk_cpns')->storeAs("document/sk_cpns", "{$skCpnsFileName}");

        $skPnsFileName = $userNIP . '_sk_pns_' . time() . '.' . $request->file('sk_pns')->getClientOriginalExtension();
        $skPnsUrl = $request->file('sk_pns')->storeAs("document/sk_pns", "{$skPnsFileName}");

        $sttplFileName = $userNIP . '_sttpl_' . time() . '.' . $request->file('sttpl')->getClientOriginalExtension();
        $sttplUrl = $request->file('sttpl')->storeAs("document/sttpl", "{$sttplFileName}");

        $photoFileName = $userNIP . '_photo_' . time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $photoUrl = $request->file('photo')->storeAs("images/photo", "{$photoFileName}");

        $attr['user_id'] = $userId;
        $attr['sk_cpns'] = $skCpnsUrl;
        $attr['sk_pns'] = $skPnsUrl;
        $attr['sttpl'] = $sttplUrl;
        $attr['photo'] = $photoUrl;

        Proposal::create($attr);

        Alert::success('Berhasil', 'Pengajuan pembuatan kartu pegawai baru berhasil');
        return redirect()->route('home');
    }

    public function storeChange(Request $request)
    {
        $userId = Auth::user()->id;
        $userNIP = Auth::user()->employee->nip;

        $validator = Validator::make($request->all(), [
            'sk_cpns' => 'required|file|mimes:pdf|max:3000',
            'sk_pns' => 'required|file|mimes:pdf|max:3000',
            'sttpl' => 'required|file|mimes:pdf|max:3000',
            'sk_hilang' => 'required|file|mimes:pdf|max:3000',
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);

        if ($validator->fails()) {
            Alert::error('Pengajuan gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return redirect(route('home'))
                ->withErrors($validator)
                ->withInput();
        }

        $skCpnsFileName = $userNIP . '_sk_cpns_' . time() . '.' . $request->file('sk_cpns')->getClientOriginalExtension();
        $skCpnsUrl = $request->file('sk_cpns')->storeAs("document/sk_cpns", "{$skCpnsFileName}");

        $skPnsFileName = $userNIP . '_sk_pns_' . time() . '.' . $request->file('sk_pns')->getClientOriginalExtension();
        $skPnsUrl = $request->file('sk_pns')->storeAs("document/sk_pns", "{$skPnsFileName}");

        $sttplFileName = $userNIP . '_sttpl_' . time() . '.' . $request->file('sttpl')->getClientOriginalExtension();
        $sttplUrl = $request->file('sttpl')->storeAs("document/sttpl", "{$sttplFileName}");

        $skHilangFileName = $userNIP . '_sk_hilang_' . time() . '.' . $request->file('sk_hilang')->getClientOriginalExtension();
        $skHilangUrl = $request->file('sk_hilang')->storeAs("document/sk_hilang", "{$skHilangFileName}");

        $photoFileName = $userNIP . '_photo_' . time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $photoUrl = $request->file('photo')->storeAs("images/photo", "{$photoFileName}");

        $attr['user_id'] = $userId;
        $attr['sk_cpns'] = $skCpnsUrl;
        $attr['sk_pns'] = $skPnsUrl;
        $attr['sttpl'] = $sttplUrl;
        $attr['sk_hilang'] = $skHilangUrl;
        $attr['photo'] = $photoUrl;

        Proposal::create($attr);

        Alert::success('Berhasil', 'Pengajuan penggantian kartu pegawai berhasil');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $proposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposal $proposal)
    {
        $employee = Employee::where('id', $proposal->user->employee_id)->first();
        // dd($employee->nama);
        return view('dashboard.kartu_pegawai.pengajuan_kartu_pegawai.edit-pengajuan-kartu-pegawai', compact('proposal', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposal $proposal)
    {
        // dd($request);
        $attr = $request->validate([
            'sk_cpns_acc' => 'boolean',
            'sk_pns_acc' => 'boolean',
            'sttpl_acc' => 'boolean',
            'sk_hilang_acc' => 'nullable|boolean',
            'photo_acc' => 'boolean',
        ]);

        if (!$request->sk_hilang_acc) {
            $attr['sk_hilang_acc'] = null;
        }

        $proposal->update($attr);

        Alert::success('Berhasil', 'Pembuatan kartu pegawai berhasil diperbarui');
        return redirect()->route('kartu-pegawai.pengajuan-kartu-pegawai');
    }

    public function revise(Request $request, Proposal $proposal)
    {
        $userId = Auth::user()->id;
        $userNIP = Auth::user()->employee->nip;

        $validator = Validator::make($request->all(), [
            'sk_cpns' => 'file|mimes:pdf|max:3000',
            'sk_pns' => 'file|mimes:pdf|max:3000',
            'sttpl' => 'file|mimes:pdf|max:3000',
            'sk_hilang' => 'file|mimes:pdf|max:3000',
            'photo' => 'image|mimes:png,jpg,jpeg|max:1000',
        ]);

        // dd($proposal->sk_cpns_acc);

        if ($validator->fails()) {
            Alert::error('update data gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return redirect(route('notification'))
                ->withErrors($validator)
                ->withInput();
        } else {
            $attr = null;
            if ($request->file('sk_cpns')) {
                // hapus sk cpns lama
                \Storage::delete($proposal->sk_cpns);
                $skCpnsFileName = $userNIP . '_sk_cpns_' . time() . '.' . $request->file('sk_cpns')->getClientOriginalExtension();
                $skCpnsUrl = $request->file('sk_cpns')->storeAs("document/sk_cpns", "{$skCpnsFileName}");
                $attr['sk_cpns'] = $skCpnsUrl;
            }

            if ($request->file('sk_pns')) {
                // hapus sk pns lama
                \Storage::delete($proposal->sk_pns);
                $skPnsFileName = $userNIP . '_sk_pns_' . time() . '.' . $request->file('sk_pns')->getClientOriginalExtension();
                $skPnsUrl = $request->file('sk_pns')->storeAs("document/sk_pns", "{$skPnsFileName}");
                $attr['sk_pns'] = $skPnsUrl;
            }

            if ($request->file('sttpl')) {
                // hapus sttpl lama
                \Storage::delete($proposal->sttpl);
                $sttplFileName = $userNIP . '_sttpl_' . time() . '.' . $request->file('sttpl')->getClientOriginalExtension();
                $sttplUrl = $request->file('sttpl')->storeAs("document/sttpl", "{$sttplFileName}");
                $attr['sttpl'] = $sttplUrl;
            }

            if ($request->file('sk_hilang')) {
                // hapus sk hilang lama
                \Storage::delete($proposal->sk_hilang);
                $skHilangFileName = $userNIP . '_sk_hilang_' . time() . '.' . $request->file('sk_hilang')->getClientOriginalExtension();
                $skHilangUrl = $request->file('sk_hilang')->storeAs("document/sk_hilang", "{$skHilangFileName}");
                $attr['sk_hilang'] = $skHilangUrl;
            }

            if ($request->file('photo')) {
                // hapus foto lama
                \Storage::delete($proposal->photo);
                $photoFileName = $userNIP . '_photo_' . time() . '.' . $request->file('photo')->getClientOriginalExtension();
                $photoUrl = $request->file('photo')->storeAs("images/photo", "{$photoFileName}");
                $attr['photo'] = $photoUrl;
            }

            if ($attr) {
                $attr['user_id'] = $userId;
                $proposal->update($attr);
                Alert::success(' Berhasil ', ' Data revisi berhasil Dikirim');
            } else {
                Alert::error(' Gagal ', 'Anda belum memilih file untuk dikirim');
            }

            return redirect()->route('notification');
        }

        // return redirect()->route('notification');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposal $proposal)
    {
        //
    }

    public function downloadSkCpns(Proposal $proposal)
    {
        return Storage::download($proposal->sk_cpns);
    }

    public function downloadSkPns(Proposal $proposal)
    {
        return Storage::download($proposal->sk_pns);
    }

    public function downloadSttpl(Proposal $proposal)
    {
        return Storage::download($proposal->sttpl);
    }

    public function downloadSkHilang(Proposal $proposal)
    {
        return Storage::download($proposal->sk_hilang);
    }

    public function downloadPhoto(Proposal $proposal)
    {
        return Storage::download($proposal->photo);
    }
}

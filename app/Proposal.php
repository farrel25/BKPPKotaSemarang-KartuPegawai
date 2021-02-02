<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'user_id',
        'sk_cpns',
        'sk_cpns_acc',
        'sk_pns',
        'sk_pns_acc',
        'sttpl',
        'sttpl_acc',
        'sk_hilang',
        'sk_hilang_acc',
        'photo',
        'photo_acc',
        'is_dicetak',
        'is_diambil'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}

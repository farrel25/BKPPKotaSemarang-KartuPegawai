<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['proposal_id', 'tanggal_laporan', 'nomor_laporan'];

    public function Proposal()
    {
        return $this->hasOne(Proposal::class);
    }
}

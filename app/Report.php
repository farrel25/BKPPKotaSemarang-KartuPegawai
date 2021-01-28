<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function Proposal()
    {
        return $this->hasOne(Proposal::class);
    }
}

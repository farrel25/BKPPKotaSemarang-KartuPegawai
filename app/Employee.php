<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function Proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}

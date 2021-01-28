<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function Employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function Report()
    {
        return $this->belongsTo(Report::class);
    }
}

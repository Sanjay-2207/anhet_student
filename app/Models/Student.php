<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class Student extends Model
{
    protected $report='users';
    protected $add='students';

    public function storeStu($ab)
    {
        $id=DB::table($this->add)->insertGetId($ab);

        return $id;
    }
}

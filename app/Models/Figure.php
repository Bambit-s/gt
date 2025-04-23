<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Figure extends Model
{
    public static function create($id)
    {
        $d = DB::table('figures')->find($id);
        return $d;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class chat_db extends Model
{
    public function getDate() {
        $data = DB::table('chat_db')->get();
        return $data;
    }

    public function insertData() {
        echo 'model';
    }
}

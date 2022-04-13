<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Database extends Model
{
    use HasFactory;

    public function delete_table($table_name,$db_name)
    {
         DB::select('DROP TABLE ' .$db_name. "." . $table_name);

    }


}

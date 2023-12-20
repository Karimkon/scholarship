<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class UniversityModel extends Model
{
    use HasFactory;
    protected $table = 'university';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getRecord()
    {
        $return = self::select('university.*');
      
        $return = $return->where('university.is_delete', '=', 0)
        ->orderBy('university.id', 'desc')
        ->paginate(20);
        return $return; 
    }
}

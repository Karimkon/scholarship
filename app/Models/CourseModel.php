<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class CourseModel extends Model
{
    use HasFactory;
    protected $table = 'courses';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getRecord()
    {
        $return = self::select('courses.*', 'users.name as created_by_name')
        ->join('users', 'users.id', 'courses.created_by');
        if(!empty(Request::get('name')))
        {
            $return = $return->where('courses.name', 'like', '%'.Request::get('name').'%');
        }
       
        $return = $return->where('courses.is_delete', '=', 0)
        ->orderBy('courses.id', 'desc')
        ->paginate(20);
        return $return; 
    }

    public function getCoursePhoto()
    {
        if(!empty($this->course_photo) && file_exists('upload/course/'.$this->course_photo))
        {
            return url('upload/course/'.$this->course_photo);
        }
        else
        {
            return '';
        }
    }

    static public function getTotalCourse()
    {
        $return = ClassModel::select('courses.id')
                        ->join('users', 'users.id', 'courses.created_by')
                        ->where('courses.is_delete', '=', 0)
                        ->count();
        return $return; 

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\CourseModel;
use Str;

class CourseController extends Controller
{
    public function list()
    {
        $data['getRecord'] = CourseModel::getRecord();
        $data['header_title'] = "Course List";
        return view('admin.course.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add New Class";
        return view('admin.course.add', $data);
    }
    public function insert(Request $request)
    {
        $course = new CourseModel;
        $course->name = $request->name;
        $course->course_code = $request->course_code;
        $course->amount = $request->amount;
        $course->duration = $request->duration;
        $course->course_details = $request->course_details;

        if(!empty($request->file('course_photo')))
        {
            if(!empty($course->getCoursePhoto()))
            {
                unlink('upload/course/'.$course->course_photo);
            }
            $ext = $request->file('course_photo')->getClientOriginalExtension();
            $file = $request->file('course_photo');
            $randomStr = date('Ymdhis').Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/profile/', $filename);

            $course->course_photo = $filename;
            
        }
        $course->created_by = Auth::user()->id;
        $course->save();
        return redirect('admin/course/list')->with('success', "course Succesfully created.");
}


    public function edit($id)
    {
        $data['getRecord'] = CourseModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Class";
            return view('admin.course.edit', $data);
        }
        else
        {
            abort(404);
        }
        
    } 
    public function update($id, Request $request)
    {
       
        $course = CourseModel::getSingle($id);
        $course->name = $request->name;
        $course->course_code = $request->course_code;
        $course->amount = $request->amount;
        $course->duration = $request->duration;
        $course->course_details = $request->course_details;

        if(!empty($request->file('course_photo')))
        {
            if(!empty($course->getCoursePhoto()))
            {
                unlink('upload/course/'.$course->course_photo);
            }
            $ext = $request->file('course_photo')->getClientOriginalExtension();
            $file = $request->file('course_photo');
            $randomStr = date('Ymdhis').Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/course/', $filename);

            $course->course_photo = $filename;
            
        }
        $course->created_by = Auth::user()->id;
        $course->save();

        return redirect('admin/course/list')->with('success', "Course Succesfully updated.");
    } 

    public function delete($id)
    {
        $user = ClassModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();

        return redirect()->back()->with('success', "course Succesfully deleted.");
    } 
}

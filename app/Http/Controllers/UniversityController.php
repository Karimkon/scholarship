<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UniversityModel;

class UniversityController extends Controller
{
    public function list()
    {
        $data['getRecord'] = UniversityModel::getRecord();
        $data['header_title'] = "University List";
        return view('admin.university.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add New University";
        return view('admin.university.add', $data);
    }
    public function insert(Request $request)
    {
        $university = new UniversityModel;
        $university->name = $request->name;
        $university->details = $request->details;
        $university->head = $request->head;

        $university->save();
        return redirect('admin/university/list')->with('success', "university Succesfully created.");
}


    public function edit($id)
    {
        $data['getRecord'] = UniversityModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Class";
            return view('admin.university.edit', $data);
        }
        else
        {
            abort(404);
        }
        
    } 
    public function update($id, Request $request)
    {
       
        $university = UniversityModel::getSingle($id);
        $university->name = $request->name;
        $university->details = $request->details;
        $university->head = $request->head;

        $university->save();

        return redirect('admin/course/list')->with('success', "university Succesfully updated.");
    } 

    public function delete($id)
    {
        $user = UniversityModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();

        return redirect()->back()->with('success', "university Succesfully deleted.");
    } 
}

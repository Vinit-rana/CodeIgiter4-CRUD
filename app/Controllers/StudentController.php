<?php

namespace App\Controllers;
use App\Models\Student;

class StudentController extends BaseController
{
    public function index()
    {
        $student = new Student();
        $data['students'] = $student->findall();
        return view('students/index',$data);
    }
    public function create()
    {
        return view('students/create');
    }
    public function store()
    {
        $student = new Student();
        $data = [
            'name' => $this->request->getpost('name'),
            'email' => $this->request->getpost('email'),
            'phone' => $this->request->getpost('phone')
        ];
        $student->save($data);
        return redirect('students')->with('status','Student Inserted SuccessFullY :)');
    }

    public function edit($id)
    {
       $student = new Student();
       $data['student'] = $student->find($id);
       return view('students/edit',$data);
       
    }

    public function update($id)
    {
        $student = new Student();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
        ];
        $student->update($id,$data);
        return redirect()->to(base_url('students'))->with('status','Student Updated SuccessFully. :)');

    }
    public function delete($id)
    {
        $student = new Student();
        $student->delete($id);
        return redirect()->back()->with('status','Student Deleted successFully. :)');
    }
    public function confirm_delete($id)
    {
        $student = new Student();
        $student->delete($id);
        return ;
    }
}
?>
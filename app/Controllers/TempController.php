<?php

namespace App\Controllers;

class TempController extends BaseController
{
    public function index()
    {
        // return 'Hello World!';
        return view('temp');
    }
    public function find($temp_name)
    {
        // return 'Name : '.$temp_name ;
        // $data['name'] = $temp_name;
        
        // $data['list'] = ;

        $data = [
            'name' => $temp_name,
            'list' => ['laravel','codeIgniter','ajax'],

        ];
        
        
        return view('temp',$data);
    }
}
<?php

namespace App\Controllers;

class SecurityController extends BaseController
{
    public function index()
    {
        return view('security_form');
    }

    public function submit()
    {

        $name = $this->request->getPost('name');

        return view('security_result', [
            'name' => $name
        ]);
    }
}
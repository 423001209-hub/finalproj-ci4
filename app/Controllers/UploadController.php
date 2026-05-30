<?php

namespace App\Controllers;

class UploadController extends BaseController
{
    public function index()
    {
        return view('upload_form');
    }

    public function upload()
    {
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[userfile]',
                    'is_image[userfile]',
                    'mime_in[userfile,image/jpg,image/jpeg,image/png]',
                    'max_size[userfile,2048]',
                ],
            ],
        ];

        if (! $this->validate($validationRule)) {
            return view('upload_form', [
                'errors' => $this->validator->getErrors(),
            ]);
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'uploads', $newName);

            return view('upload_success', [
                'filename' => $newName,
            ]);
        }
    }
}
<?php

namespace App\Controllers;

use App\Models\YourModel;

class Form extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }

    public function index()
    {
        $data['pageTitle'] = 'Form Index';
        return view('form-folder/form-index', $data);
    }

    public function create()
    {
        // load validation
        $validation = \Config\Services::validation();

        // load model
        $model = new YourModel();

        $data['pageTitle'] = 'Create';

        if ($validation->run($_POST, 'new') == false) {
            echo '<div>' . $validation->listErrors() . '</div>';
            echo view('form-folder/form-index', $data, $_POST);
        } else {
            $model->createNew();
            return $this->response->redirect(site_url('home'));
        }
    }

    public function edit($id)
    {
        //load model
        $model = new YourModel();

        $data['forEdit'] = $model->getForEdit($id);

        $data['pageTitle'] = 'Edit Page';

        // load view
        return view('form-folder/form-edit', $data);
    }

    public function update()
    {
        $model = new YourModel();

        $model->updateData();

        return $this->response->redirect(site_url('home'));
    }

    public function delete($id)
    {
        $model = new YourModel();

        $model->delete($id);
        return $this->response->redirect(site_url('home'));
    }
}

<?php

namespace App\Controllers;
use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guest extends BaseController{
    
    public function index() {
        $model = model(GuestModel::class);
        $data = [
            'guest' => $model -> getGuests(),
            'title' => 'Guestbook',
        ];
        return view('templates/header',$data)
            . view('guest/index')
            . view('templates/footer');
    }
    public function create() {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a guest account'])
                . view('guest/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'email', 'website', 'comment', 'gender']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'name'  => 'required|alpha_numeric_space|min_length[3]',
            'email'  => 'required|valid_email',
            'website'  => 'valid_url',
            'comment'  => 'required|max_length[5000]|min_length[10]',
            'gender'  => 'required',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create a guest account'])
                . view('guest/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'name'  => $post['name'],
            'email'  => $post['email'],
            'website'  => $post['website'],
            'comment'  => $post['comment'],
            'gender'  => $post['gender']
        ]);

        return view('templates/header', ['title' => 'Create a guest account'])
            . view('guest/success')
            . view('templates/footer');
    }
}

?>
<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    // Display all users
    public function index()
    {
        $model = new UserModel();

        $data['users'] = $model->findAll();

        return view('users', $data);
    }

    // Add new user
    public function addUser()
    {
        $model = new UserModel();

        if ($this->request->is('post')) {

            $rules = [
                'name' => 'required|min_length[3]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'phone' => 'required|numeric|exact_length[11]'
            ];

            if (!$this->validate($rules)) {
                return view('addUser', [
                    'validation' => $this->validator
                ]);
            }

            $model->save([
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone')
            ]);

            return redirect()->to('/users');
        }

        return view('addUser');
    }

    // Edit existing user
    public function editUser($id)
    {
        $model = new UserModel();

        $user = $model->find($id);

        if (!$user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if ($this->request->is('post')) {

            $rules = [
                'name' => 'required|min_length[3]',
                'email' => "required|valid_email|is_unique[users.email,id,{$id}]",
                'phone' => 'required|numeric|exact_length[11]'
            ];

            if (!$this->validate($rules)) {
                return view('editUser', [
                    'user' => $user,
                    'validation' => $this->validator
                ]);
            }

            $model->update($id, [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone')
            ]);

            return redirect()->to('/users');
        }

        return view('editUser', [
            'user' => $user
        ]);
    }

    // Delete user
    public function deleteUser($id)
    {
        $model = new UserModel();

        $model->delete($id);

        return redirect()->to('/users');
    }
}
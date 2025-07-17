<?php

namespace App\Controllers;
use App\Models\ProyekModel;

class Proyek extends BaseController
{
    public function index()
    {
        $model = new ProyekModel();
        $data['proyek'] = $model->findAll();
        return view('proyek/index', $data);
    }

    public function create()
    {
        return view('proyek/create');
    }

    public function store()
    {
        $model = new ProyekModel();
        $model->save([
            'judul' => $this->request->getPost('judul'),
            'pembimbing' => $this->request->getPost('pembimbing'),
            'deadline' => $this->request->getPost('deadline'),
            'progress' => $this->request->getPost('progress'),
            'catatan' => $this->request->getPost('catatan'),
        ]);
        return redirect()->to('/proyek');
    }

    public function edit($id)
    {
        $model = new ProyekModel();
        $data['proyek'] = $model->find($id);
        return view('proyek/edit', $data);
    }

    public function update($id)
    {
        $model = new ProyekModel();
        $model->update($id, [
            'judul' => $this->request->getPost('judul'),
            'pembimbing' => $this->request->getPost('pembimbing'),
            'deadline' => $this->request->getPost('deadline'),
            'progress' => $this->request->getPost('progress'),
            'catatan' => $this->request->getPost('catatan'),
        ]);
        return redirect()->to('/proyek');
    }

    public function delete($id)
    {
        $model = new ProyekModel();
        $model->delete($id);
        return redirect()->to('/proyek');
    }
}

<?php

namespace App\Controllers;

use App\Core\Controller;

class Perusahaan extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Perusahaan();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('Perusahaan/index', $data);
     }

     public function input()
     {
          $this->dashboard('Perusahaan/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/Perusahaan');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('Perusahaan/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/Perusahaan');
     }

     public function delete($id)
     {
          $this->model->delete($id);
          header('location:' . URL . '/Perusahaan');
     }
}
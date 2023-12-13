<?php

namespace App\Controllers;

use App\Core\Controller;

class Pesanan extends Controller
{
	public object $model;

	public function __construct()
	{

		parent ::cekLogin();
		$this->model = new \App\Models\Pesanan();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('pesanan/index', $data);
	}

	public function input()
	{
		$this->dashboard('pesanan/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/pesanan');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('pesanan/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/pesanan');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/pesanan');
	}
}

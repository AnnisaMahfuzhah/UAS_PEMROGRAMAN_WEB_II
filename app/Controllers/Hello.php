<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{

	Public function index()
	{
		echo "Hello Perkenalkan kami mahasiswi Teknologi Informasi angkatan 2020";
	}

	Public function hello_C030320122()
	{
		$this->load->model('Hello_model');
		$data = $this->Hello_model->hello_nim();
		echo $data;
	}

	Public function hello_view()
	{
		$this->load->view('hello_view');
	}

	Public function hello_mvc()
	{
		$this->load->model('Hello_model');
		$data['mvc'] = $this->Hello_model->hello_mvc();
		$this->load->view('hello_view', $data);
	}
}	
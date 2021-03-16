<?php

namespace App\Controllers;

class NosotrosController extends BaseController
{
	public function inicio()
	{
		echo view('Layout/header');
		echo view('Nosotros/inicio');
		echo view('Layout/footer');
	}
}

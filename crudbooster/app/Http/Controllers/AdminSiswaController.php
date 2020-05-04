<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminSiswaController extends CBController {


    public function cbInit()
    {
        $this->setTable("siswa");
        $this->setPermalink("siswa");
        $this->setPageTitle("Siswa");

        $this->addText("No Induk","no_induk")->strLimit(150)->maxLength(255);
		$this->addText("Nama Siswa","nama_siswa")->strLimit(150)->maxLength(255);
		

    }
}

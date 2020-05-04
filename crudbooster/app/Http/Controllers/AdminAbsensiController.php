<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminAbsensiController extends CBController {


    public function cbInit()
    {
        $this->setTable("absensi");
        $this->setPermalink("absensi");
        $this->setPageTitle("Absensi");

        $this->addSelectTable("Siswa","siswa_id",["table"=>"siswa","value_option"=>"id","display_option"=>"nama_siswa","sql_condition"=>""])->filterable(true);
		$this->addText("Tanggal","tanggal")->strLimit(150)->maxLength(255);
		$this->addText("Keterangan","keterangan")->filterable(true)->strLimit(150)->maxLength(255);
		

    }
}

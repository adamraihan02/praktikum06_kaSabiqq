<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model', 'matkul1');
        $this->matkul1->id = 1;
        $this->matkul1->nama = 'Bahasa Inggris 1';
        $this->matkul1->sks = '2';
        $this->matkul1->kode = '2ti09';

        $this->load->model('matakuliah_model', 'matkul2');
        $this->matkul2->id = 2;
        $this->matkul2->nama = 'PPKN';
        $this->matkul2->sks = '2';
        $this->matkul2->kode = '2ti09';

        $this->load->model('matakuliah_model', 'matkul3');
        $this->matkul3->id = 3;
        $this->matkul3->nama = 'Komunikasi Efektif';
        $this->matkul3->sks = '2';
        $this->matkul3->kode = '2ti09';

        $this->load->model('matakuliah_model', 'matkul4');
        $this->matkul4->id = 4;
        $this->matkul4->nama = 'Basis Data';
        $this->matkul4->sks = '4';
        $this->matkul4->kode = '2ti09';

        $this->load->model('matakuliah_model', 'matkul5');
        $this->matkul5->id = 5;
        $this->matkul5->nama = 'UI & UX';
        $this->matkul5->sks = '3';
        $this->matkul5->kode = '2ti09';

        $this->load->model('matakuliah_model', 'matkul6');
        $this->matkul6->id = 6;
        $this->matkul6->nama = 'Statistika Probalitas';
        $this->matkul6->sks = '2';
        $this->matkul6->kode = '2ti09';
        
        $this->load->model('matakuliah_model', 'matkul7');
        $this->matkul7->id = 7;
        $this->matkul7->nama = 'Jaringan Komputer';
        $this->matkul7->sks = '3';
        $this->matkul7->kode = '2ti09';

        $this->load->model('matakuliah_model', 'matkul8');
        $this->matkul8->id = 8;
        $this->matkul8->nama = 'Pemrograman Web2';
        $this->matkul8->sks = '3';
        $this->matkul8->kode = '2ti09';

        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5, $this->matkul6, $this->matkul7, $this->matkul8];
        $data['list_matkul'] = $list_matkul;
        $this->load->view('matakuliah/index', $data);
    }
}

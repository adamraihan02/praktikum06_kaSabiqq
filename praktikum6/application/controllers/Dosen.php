<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nama = 'Chintia Handayani, S.S., M.Sas.';
        $this->dsn1->nidn = '011022';
        $this->dsn1->gender = 'P';
        $this->dsn1->pendidikan = 'Bahasa Inggris 1';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nama = 'Drs Rusmanto, M.M';
        $this->dsn2->nidn = '011022';
        $this->dsn2->gender = 'L';
        $this->dsn2->pendidikan = 'PPKN';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nama = 'Fathan Mubina, S.IP';
        $this->dsn3->nidn = '011022';
        $this->dsn3->gender = 'L';
        $this->dsn3->pendidikan = 'Komunikasi Efektif';
       
        $this->load->model('dosen_model', 'dsn4');
        $this->dsn4->id = 4;
        $this->dsn4->nama = 'Edo Riyansyah, S.Kom';
        $this->dsn4->nidn = '011022';
        $this->dsn4->gender = 'L';
        $this->dsn4->pendidikan = 'Basis Data';

        $this->load->model('dosen_model', 'dsn5');
        $this->dsn5->id = 5;
        $this->dsn5->nama = 'Tifani Nabarian, S.Kom., M.T.I';
        $this->dsn5->nidn = '011022';
        $this->dsn5->gender = 'P';
        $this->dsn5->pendidikan = 'UI & UX';

        $this->load->model('dosen_model', 'dsn6');
        $this->dsn6->id = 6;
        $this->dsn6->nama = 'Ahmad Rio Adriansyah, S.Si, M.Si';
        $this->dsn6->nidn = '011022';
        $this->dsn6->gender = 'L';
        $this->dsn6->pendidikan = 'Statistika Probalitas';

        $this->load->model('dosen_model', 'dsn7');
        $this->dsn7->id = 7;
        $this->dsn7->nama = 'Dr. Lukman Rosyidi, M.T, M.M';
        $this->dsn7->nidn = '011022';
        $this->dsn7->gender = 'L';
        $this->dsn7->pendidikan = 'Jaringan Komputer';

        $this->load->model('dosen_model', 'dsn8');
        $this->dsn8->id = 8;
        $this->dsn8->nama = 'Sirojul Munir, S.Si, M.Kom';
        $this->dsn8->nidn = '011022';
        $this->dsn8->gender = 'L';
        $this->dsn8->pendidikan = 'PPKN';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4, $this->dsn5, $this->dsn6, $this->dsn7, $this->dsn8];
        $data['list_dsn'] = $list_dsn;
        $this->load->view('dosen/index', $data);
    }
}

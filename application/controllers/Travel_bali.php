<?php

use chriskacerguis\RestServer\RestController;

defined('BASEPATH') or exit('No direct script access allowed');


class Travel_bali extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TravelBali_model');
    }

    public function index_get()
    {
        $nama = $this->get('nama');

        if ($nama === null) {
            $nama = $this->TravelBali_model->getTravelBali();
        } else {
            $nama = $this->TravelBali_model->getTravelBali($nama);
        }

        if ($nama) {
            $this->response([
                'status' => true,
                'message' => $nama
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => $nama . ' tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $nama = $this->delete('nama');

        if ($nama === null) {
            $this->response([
                'status' => false,
                'message' => 'permintaan ini membutuhkan nama'
            ], RestController::HTTP_BAD_REQUEST);
        } else {
            if ($this->TravelBali_model->deleteTravelBali($nama) > 0) {
                $this->response([
                    'status' => true,
                    'nama' => $nama,
                    'message' => 'berhasil dihapus'
                ], RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'nama tidak ada yang cocok'
                ], RestController::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'nama' => $this->post('nama'),
            'alamat' => $this->post('alamat'),
            'gambar' => $this->post('gambar'),
        ];

        if ($this->TravelBali_model->createTravelBali($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'berhasil menambahkan data'
            ], RestController::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'gagal menambahkan data'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $nama = $this->put('nama');
        $data = [
            'nama' => $this->put('nama'),
            'alamat' => $this->put('alamat'),
            'gambar' => $this->put('gambar'),
        ];

        if ($this->TravelBali_model->updateTravelBali($data, $nama) > 0) {
            $this->response([
                'status' => true,
                'message' => 'data berhasil diubah'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data gagal diubah'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }
}

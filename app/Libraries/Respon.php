<?php 

namespace App\Libraries;

class Respon
{
    public function success_input($data)
    {
        return [
            'code'    => 201,
            'data'    => $data,
            'message' => lang('lang.201'),
            'status'  => lang('lang.berhasil'),
            'success' => true,
        ];
    }

    public function error_input()
    {
        return [
            'code'    => 400,
            'data'    => [],
            'message' => lang('lang.400'),
            'status'  => lang('lang.gagal'),
            'success' => false,
        ];
    }
    
    public function success_request($data)
    {
        return [
            'code'    => 200,
            'data'    => $data,
            'message' => lang('lang.200'),
            'status'  => lang('lang.berhasil'),
            'success' => true,
        ];
    }
}
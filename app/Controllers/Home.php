<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $datas = [];

    public function index()
    {
        return view('home/index');
    }
    public function video()
    {
        $link = $this->request->getPost('link');

        $client = \Config\Services::curlrequest();

        $response = $client->request('GET', 'https://api.ibeng.tech/api/downloader/tiktok?url=' . $link . '&apikey=4Ykrb9N6at');
        if ($response->getStatusCode() == 200) {
            $json = $response->getBody();
            $datas = json_decode($json);
            $videoHd = $datas->data->hdplay;
            $music =  $datas->data->music;

            $data =  [
                'video' => base64_encode($videoHd),
                'music' => base64_encode($music)
            ];
            return view('home/result', $data);
        } else {
            return redirect()->to('/')->with('error', 'Link Tidak Sesuai');
        }
    }
}

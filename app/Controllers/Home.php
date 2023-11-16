<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Tiktok Downloader'

        ];
        return view('home/index', $data);
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

    public function chat()
    {
        $data = [
            'title' => 'Chatbot GPT-3'

        ];
        return view('home/chat', $data);
    }

    public function tanya()
    {
        $link = $this->request->getPost('link');
        // ubah spasi mendai jadi %20
        $link = str_replace(' ', '%20', $link);
        $client = \Config\Services::curlrequest();
        // https://api.ibeng.tech/api/others/chatgpt?q=apa%20itu%20ai&apikey=4Ykrb9N6at

        $response = $client->request('GET', 'https://api.ibeng.tech/api/others/chatgpt?q=' . $link . '&apikey=4Ykrb9N6at');
        if ($response->getStatusCode() == 200) {
            $json = $response->getBody();
            $datas = json_decode($json);
            $data = [
                'title' => 'Chatbot GPT-3',
                'jawaban' => $datas->data,
            ];

            // $data =  [
            //     'video' => base64_encode($videoHd),
            //     'music' => base64_encode($music)
            // ];
            return view('home/chat', $data);
        } else {
            return redirect()->to('/')->with('error', 'Link Tidak Sesuai');
        }
    }
}

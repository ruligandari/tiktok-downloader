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

        try {
            $response = $client->request('GET', 'https://api.ibeng.tech/api/downloader/tiktok?url=' . $link . '&apikey=4Ykrb9N6at');
            if ($response->getStatusCode() == 200) {
                $json = $response->getBody();
                $datas = json_decode($json);
                $videoHd = $datas->data->hdplay;
                $videoOri = $datas->data->play;
                $music =  $datas->data->music;

                $data =  [
                    'title' => 'Tiktok Downloader',
                    'video' => base64_encode($videoHd),
                    'videoOri' => base64_encode($videoOri),
                    'music' => base64_encode($music)
                ];
                return view('home/result', $data);
            } else {
                return redirect()->to('/')->with('error', 'Link Tidak Sesuai');
            }
        } catch (\Throwable $th) {
            echo $th;
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

    public function image()
    {
        // membasa file dummy.json yang disimpan di folder public
        $json = file_get_contents('./dummy.json');
        // mengubah json menjadi array
        $datas = json_decode($json);
        // mengambil data gambar secara acak

        $data = [
            'title' => 'DALL-e GPT-3',
            'dummy' => $datas->name,

        ];
        return view('home/image', $data);
    }

    public function cari()
    {
        $link = $this->request->getPost('link');
        // ubah spasi mendai jadi %20
        $link = str_replace(' ', '%20', $link);
        $client = \Config\Services::curlrequest();
        // https://api.ibeng.tech/api/others/chatgpt?q=apa%20itu%20ai&apikey=4Ykrb9N6at
        // https://api.ibeng.tech/api/ai/stablediffusion?q=

        $response = $client->request('GET', 'https://api.ibeng.tech/api/ai/stablediffusion?q=' . $link . '&apikey=4Ykrb9N6at');
        if ($response->getStatusCode() == 200) {
            $json = $response->getBody();

            $data = [
                'title' => 'DALL-e GPT-3',
                'jawaban' => base64_encode($json),
            ];

            // $data =  [
            //     'video' => base64_encode($videoHd),
            //     'music' => base64_encode($music)
            // ];
            return view('home/image', $data);
        } else {
            return redirect()->to('/')->with('error', 'Link Tidak Sesuai');
        }
    }

    public function youtube()
    {
        $data = [
            'title' => 'Youtube Downloader'

        ];
        return view('home/youtube', $data);
    }

    public function dlYoutube()
    {
        $link = $this->request->getPost('link');

        $client = \Config\Services::curlrequest();

        try {
            $response = $client->request('GET', 'https://api.ibeng.tech/api/downloader/youtube-video?url=' . $link . '&apikey=4Ykrb9N6at');
            if ($response->getStatusCode() == 200) {
                $json = $response->getBody();
                $datas = json_decode($json);
                $videoHd = $datas->data->url;

                $data =  [
                    'title' => 'Youtube Downloader',
                    'video' => base64_encode($videoHd),
                ];
                return view('home/result_yt', $data);
            } else {
                return redirect()->to('/')->with('error', 'Link Tidak Sesuai');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'server kami sedang sibuk, tunggu beberapa saat');
        }
    }
}

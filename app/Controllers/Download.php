<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Download extends BaseController
{
    public function video($link)
    {
        $videoUrl = base64_decode($link);
        // Tentukan nama file lokal untuk disimpan dengan nama random
        $localFilename = 'video-' . date('YmdHis') . '.mp4';

        // Tentukan header untuk mengindikasikan tipe konten file
        header('Content-Type: video/mp4');
        header('Content-Disposition: attachment; filename="' . $localFilename . '"');

        // Lakukan unduhan dari server
        readfile($videoUrl);
    }

    public function music($link)
    {
        $musicUrl = base64_decode($link);
        $localFilename = 'music-' . date('YmdHis') . '.mp3';

        // Tentukan header untuk mengindikasikan tipe konten file
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $localFilename . '"');

        // Lakukan unduhan dari server
        readfile($musicUrl);
    }
}

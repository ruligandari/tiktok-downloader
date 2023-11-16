<?= $this->extend('layouts/layouts'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <h5>Download Video</h5>
                    <div class="form-group mt-2">
                        <a class="btn btn-primary" href="<?= base_url('download/video/' . $video) ?>"> Download Video</a>
                        <a class="btn btn-primary" href="<?= base_url('download/music/' . $music) ?>"> Download Music</a>
                        <a class="btn btn-dark" href="<?= base_url('/') ?>"> Download Lainya</a>
                    </div>
                    <div class="card-footer bg-whitesmoke rounded">
                        <video width="320" height="240" controls>
                            <source src="<?= base64_decode($video) ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
    </section>
</div>

<script>
    // Dapatkan tautan dan tambahkan event listener untuk Download Video
    var downloadVideoLink = document.getElementById('downloadVideo');
    downloadVideoLink.addEventListener('click', function() {
        downloadFile('<?= $video ?>', 'video.mp4');
    });

    // Dapatkan tautan dan tambahkan event listener untuk Download Music
    var downloadMusicLink = document.getElementById('downloadMusic');
    downloadMusicLink.addEventListener('click', function() {
        downloadFile('<?= $music ?>', 'music.mp3');
    });

    // Fungsi untuk mengunduh file
    function downloadFile(fileUrl, fileName) {
        var anchor = document.createElement('a');
        anchor.href = fileUrl;
        anchor.target = '_blank'; // Buka tautan di tab/window baru
        anchor.download = fileName; // Nama file yang akan diunduh

        // Simulasikan klik pada elemen <a>
        document.body.appendChild(anchor);
        anchor.click();

        // Hapus elemen <a> dari DOM
        document.body.removeChild(anchor);
    }
</script>

<?= $this->endSection(); ?>
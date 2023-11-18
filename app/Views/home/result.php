<?= $this->extend('layouts/layouts'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <h5>Download Video</h5>
                    <div class="form-group mt-2">
                        <a class="btn btn-primary" id="downloadButton" href="<?= base_url('download/video/' . $video) ?>"> Download Video</a>
                        <a class="btn btn-primary" href="<?= base_url('download/music/' . $music) ?>"> Download Music</a>
                        <a class="btn btn-dark" href="<?= base_url('/') ?>"> Download Lainya</a>
                    </div>
                    <div class="card-footer bg-whitesmoke rounded">
                        <div class="row">

                            <div id="srcVideo" class="col-6">
                                <video width="320" height="240" id="videoPlayer" controls>
                                    <source src="<?= base64_decode($video) ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-6">
                                <video width="320" height="240" controls>
                                    <source src="<?= base64_decode($videoOri) ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

<script>
    const videoPlayer = document.getElementById('videoPlayer');
    var downloadButton = document.getElementById('downloadButton');

    // Event listener to check when the metadata is loaded
    videoPlayer.addEventListener('loadedmetadata', () => {
        // Display video information
        if (videoPlayer.videoWidth === 0 || !videoPlayer.currentSrc) {
            var linkVideo = videoPlayer.currentSrc;
            var encodebase64 = btoa(linkVideo);

            // Hide the div with id "srcVideo"
            document.getElementById("srcVideo").style.display = "none";
            downloadButton.href = '<?= base_url('download/video/' . $videoOri) ?>';
        }
    });
</script>

<?= $this->endSection(); ?>
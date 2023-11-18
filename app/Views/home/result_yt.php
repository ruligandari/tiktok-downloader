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
                        <a class="btn btn-primary" id="downloadButton" href="<?= base_url('download/music/' . $video) ?>"> Download Audio</a>
                        <a class="btn btn-dark" href="<?= base_url('/youtube') ?>"> Download Lainya</a>
                    </div>
                    <div class="card-footer bg-whitesmoke rounded">
                        <div class="row">

                            <div id="srcVideo" class="col-lg-12 ">
                                <video width="320" height="240" id="videoPlayer" controls>
                                    <source src="<?= base64_decode($video) ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

<?= $this->endSection(); ?>
<?= $this->extend('layouts/layouts'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <h5>Masukan Gambar Yang diinginkan</h5>
                    <div class="form-group">
                        <form action="<?= base_url('image') ?>" method="post">

                            <div class="input-group mb-3">
                                <input type="text" name="link" class="form-control" placeholder="" aria-label="" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Tanya</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-whitesmoke">
                        <img src="data:image/png;base64,<?= $jawaban ?? '' ?>" class="img-fluid">
                    </div>
                </div>
            </div>
    </section>
</div>

<?= $this->endSection(); ?>
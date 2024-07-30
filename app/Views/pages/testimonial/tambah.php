<?= $this->extend('adminLayout/template') ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambahkan Testimonial</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <form action="<?= base_url('/testimonial/proses_tambah') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Rating</label>
                                <input type="text" class="form-control" id="rating" name="rating" value="<?= old('rating') ?>">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= old('name') ?>">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Description (ID)</label>
                                <textarea class="form-control" id="description_id" name="description_id"><?= old('description_id') ?></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Description (EN)</label>
                                <textarea class="form-control" id="description_en" name="description_en"><?= old('description_en') ?></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Alt Image</label>
                                <input type="text" class="form-control" id="alt_image" name="alt_image" value="<?= old('alt_image') ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--//app-card-->
        </div><!--//row-->

        <hr class="my-4">
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content'); ?>

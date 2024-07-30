<?= $this->extend('adminLayout/template') ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambahkan Unique Selling Point</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <form action="<?= base_url('/usp/proses_tambah') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Title (ID)</label>
                                    <input type="text" class="form-control" id="title_id" name="title_id" value="<?= old('title_id') ?>">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Title (EN)</label>
                                    <input type="text" class="form-control" id="title_en" name="title_en" value="<?= old('title_en') ?>">
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
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="<?= old('slug') ?>">
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

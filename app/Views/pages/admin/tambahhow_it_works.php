<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambahkan how_it_works</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4>Error</h4>
                            <p><?php echo session()->getFlashdata('error'); ?></p>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('/proses_tambah_how_it_works') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                            <div class="mb-3">
                                    <label class="form-label">Title id<br><span class="custom-color custom-label"></span></label>
                                    <input type="text" class="form-control" id="title_id" name="title_id" value="<?= old('title_id') ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title En <br><span class="custom-color custom-label">nama perihal hanya boleh mengandung huruf dan angka</span></label>
                                    <input type="text" class="form-control" id="title_en" name="title_en" value="<?= old('title_en') ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">descriptioni d <br><span class="custom-color custom-label">nama perihal hanya boleh mengandung huruf dan angka</span></label>
                                    <input type="text" class="form-control" id="description_id" name="description_id" value="<?= old('description_id') ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pdescription En <br><span class="custom-color custom-label">nama perihal hanya boleh mengandung huruf dan angka</span></label>
                                    <input type="text" class="form-control" id="description_en" name="description_en" value="<?= old('description_en') ?>">
                                </div>
                                <div class="mb-3" >
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control " id="slug" name="slug" value="<?= old('slug') ?>" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alt Image</label>
                                    <input type="text" class="form-control " id="alt_image" name="alt_image" value="<?= old('alt_image') ?>" />
                                </div> 
                                                         
                                <div class="mb-3">
                                    <label class="form-label">Gambar</label>
                                    <input class="form-control <?= ($validation->hasError('image')) ? 'is-invalid' : '' ?>" type="file" id="image" name="image">
                                    <?= $validation->getError('image') ?>
                                </div>
                                <p>*File maksimal berukuran 2 Mb</p>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            <div class="col">
                                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo session()->getFlashdata('success') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--//app-card-->
        </div><!--//row-->
 <?= $this->endSection() ?>
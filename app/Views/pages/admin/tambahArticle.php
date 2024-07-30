<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambahkan Article</h1>
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

                    <form action="<?= base_url('/proses_tambah_Article') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                            <div class="mb-3">
                                    <label class="form-label">seo_tag_title_id<br><span class="custom-color custom-label"></span></label>
                                    <textarea class="form-control tiny" id="seo_tag_title_id" name="seo_tag_title_id" value="<?= old('') ?>"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">seo_tag_title_en<br><span class="custom-color custom-label"></span></label>
                                   
                                    <textarea class="form-control tiny" id="seo_tag_title_en" name="seo_tag_title_en"value="<?= old('') ?>"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">seo_description_id <br><span class="custom-color custom-label"></span></label>
                                    <textarea class="form-control tiny" id="seo_description_id" name="seo_description_id" value="<?= old('') ?>"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">seo_description_en <br><span class="custom-color custom-label"></span></label>
                                    
                                    <textarea class="form-control tiny" id="seo_description_en" name="seo_description_en" value="<?= old('') ?>"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">alt_image<br><span class="custom-color custom-label"></span></label>
                                    <textarea class="form-control tiny" id="alt_image" name="alt_image" value="<?= old('') ?>"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Title id<br><span class="custom-color custom-label"></span></label>
                                    <textarea class="form-control tiny" id="title_id" name="title_id"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title En <br><span class="custom-color custom-label"></span></label>
                                   
                                    <textarea class="form-control tiny" id="title_en" name="title_en"value="<?= old('') ?>"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Descriptio Id <br><span class="custom-color custom-label"></span></label>
                                   
                                    <textarea class="form-control tiny" id="description_id" name="description_id" value="<?= old('') ?>"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description En <br><span class="custom-color custom-label"></span></label>
                                    
                                    <textarea class="form-control tiny" id="description_en" name="description_en" value="<?= old('') ?>"></textarea>
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">slug<br><span class="custom-color custom-label"></span></label>
                                   
                                    <textarea class="form-control tiny" id="slug" name="slug" value="<?= old('') ?>"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">date <br><span class="custom-color custom-label"></span></label>
                                    <input type="date" class="form-control " id="date" name="date" value="<?= old('') ?>"> 
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">writer <br><span class="custom-color custom-label"></span></label>
                                    
                                    <textarea class="form-control tiny" id="writer" name="writer"  value="<?= old('') ?>"></textarea>
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
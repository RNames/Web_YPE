<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Article</h1>
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

                    <form action="<?= base_url('proses_edit_Article/' . $all_data_Article['id']) ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">seo_tag_title_id<br><span class="custom-color custom-label"></span></label>
                                    <textarea class="form-control" id="seo_tag_title_id" name="seo_tag_title_id"><?= $all_data_Article['seo_tag_title_id']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">seo_tag_title_en<br><span class="custom-color custom-label"></span></label>

                                    <textarea class="form-control" id="seo_tag_title_en" name="seo_tag_title_en"><?= $all_data_Article['seo_tag_title_en']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">seo_description_id <br><span class="custom-color custom-label"></span></label>
                                    <textarea class="form-control" id="seo_description_id" name="seo_description_id"><?= $all_data_Article['seo_description_id']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">seo_description_en <br><span class="custom-color custom-label"></span></label>

                                    <textarea class="form-control" id="seo_description_en" name="seo_description_en"><?= $all_data_Article['seo_description_en']; ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Title id<br><span class="custom-color custom-label"></span></label>
                                    <textarea class="form-control" id="title_id" name="title_id"><?= $all_data_Article['title_id']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title En <br><span class="custom-color custom-label"></span></label>

                                    <textarea class="form-control" id="title_en" name="title_en"><?= $all_data_Article['title_en']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description Id <br><span class="custom-color custom-label"></span></label>

                                    <textarea class="form-control tiny" id="description_id" name="description_id"><?= $all_data_Article['description_id']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description En <br><span class="custom-color custom-label"></span></label>

                                    <textarea class="form-control tiny" id="description_en" name="description_en"><?= $all_data_Article['description_en']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Snippet Id <br><span class="custom-color custom-label"></span></label>

                                    <textarea class="form-control tiny" id="snippet_id" name="snippet_id"><?= $all_data_Article['snippet_id']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Snippet En <br><span class="custom-color custom-label"></span></label>

                                    <textarea class="form-control tiny" id="snippet_en" name="snippet_en"><?= $all_data_Article['snippet_en']; ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">slug Id<br><span class="custom-color custom-label"></span></label>

                                <textarea class="form-control" id="slug" name="slug"><?= $all_data_Article['slug']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">slug En<br><span class="custom-color custom-label"></span></label>

                                <textarea class="form-control" id="slug_en" name="slug_en"><?= $all_data_Article['slug_en']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">date <br><span class="custom-color custom-label"></span></label>
                                <input type="date" class="form-control " id="date" name="date" value="<?= $all_data_Article['date']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">writer <br><span class="custom-color custom-label"></span></label>

                                <textarea class="form-control" id="writer" name="writer"><?= $all_data_Article['writer']; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <br>
                                <img width="150px" class="img-thumbnail" src="<?= base_url() . "assets/images/blogs/" . $all_data_Article['cover_image']; ?>">
                                <input class="form-control <?= ($validation->hasError('cover_image')) ? 'is-invalid' : '' ?>" type="file" id="cover_image" name="cover_image">
                                <?= $validation->getError('cover_image') ?>

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
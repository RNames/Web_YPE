<?= $this->extend('adminLayout/template') ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambahkan Faq</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="<?= base_url('/faq/proses_tambah') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">SEO Tag Title (ID)</label>
                                <input type="text" class="form-control" id="seo_tag_title_id" name="seo_tag_title_id" value="<?= old('seo_tag_title_id') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SEO Tag Title (EN)</label>
                                <input type="text" class="form-control" id="seo_tag_title_en" name="seo_tag_title_en" value="<?= old('seo_tag_title_en') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SEO Description (ID)</label>
                                <input type="text" class="form-control" id="seo_description_id" name="seo_description_id" value="<?= old('seo_description_id') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SEO Description (EN)</label>
                                <input type="text" class="form-control" id="seo_description_en" name="seo_description_en" value="<?= old('seo_description_en') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">FAQ Section (ID)</label>
                                <input type="text" class="form-control" id="faq_section_id" name="faq_section_id" value="<?= old('faq_section_id') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">FAQ Section (EN)</label>
                                <input type="text" class="form-control" id="faq_section_en" name="faq_section_en" value="<?= old('faq_section_en') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">FAQ Title (ID)</label>
                                <input type="text" class="form-control" id="faq_title_id" name="faq_title_id" value="<?= old('faq_title_id') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">FAQ Title (EN)</label>
                                <input type="text" class="form-control" id="faq_title_en" name="faq_title_en" value="<?= old('faq_title_en') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">FAQ Category</label>
                                <select class="form-select" id="id_faq_category" name="id_faq_category">
                                    <option value="" hidden></option>
                                    <?php foreach ($faq_category as $key => $faqc) :?>
                                        <option value="<?= $faqc['id_faq_category']?>"><?= $faqc['name_id']?> / <?= $faqc['name_en']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Title (ID)</label>
                                <input type="text" class="form-control" id="title_id" name="title_id" value="<?= old('title_id') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Title (EN)</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="<?= old('title_en') ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description (ID)</label>
                                <textarea class="form-control" id="description_id" name="description_id"><?= old('description_id') ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description (EN)</label>
                                <textarea class="form-control" id="description_en" name="description_en"><?= old('description_en') ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <div class="col">
                                    <!-- Jika ada yang ingin ditambahkan di sini -->
                                </div>
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

<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Contact Edit</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <form action="/admin/contact-us/update/<?= $contactUs['id'] ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label class="form-label">SEO Title (ID):</label>
                            <input type="text" class="form-control" name="seo_tag_title_id" value="<?= old('seo_tag_title_id', $contactUs['seo_tag_title_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Title (EN):</label>
                            <input type="text" class="form-control" name="seo_tag_title_en" value="<?= old('seo_tag_title_en', $contactUs['seo_tag_title_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Description (ID):</label>
                            <input type="text" class="form-control" name="seo_description_id" value="<?= old('seo_description_id', $contactUs['seo_description_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Description (EN):</label>
                            <input type="text" class="form-control" name="seo_description_en" value="<?= old('seo_description_en', $contactUs['seo_description_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Heading (ID):</label>
                            <input type="text" class="form-control" name="heading_id" value="<?= old('heading_id', $contactUs['heading_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Heading (EN):</label>
                            <input type="text" class="form-control" name="heading_en" value="<?= old('heading_en', $contactUs['heading_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Section (ID):</label>
                            <input type="text" class="form-control" name="section_id" value="<?= old('section_id', $contactUs['section_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Section (EN):</label>
                            <input type="text" class="form-control" name="section_en" value="<?= old('section_en', $contactUs['section_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title (ID):</label>
                            <input type="text" class="form-control" name="title_id" value="<?= old('title_id', $contactUs['title_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title (EN):</label>
                            <input type="text" class="form-control" name="title_en" value="<?= old('title_en', $contactUs['title_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number (EU):</label>
                            <input type="text" class="form-control" name="phone_number_eu" value="<?= old('phone_number_eu', $contactUs['phone_number_eu']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number (ID):</label>
                            <input type="text" class="form-control" name="phone_number_id" value="<?= old('phone_number_id', $contactUs['phone_number_id']) ?>" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
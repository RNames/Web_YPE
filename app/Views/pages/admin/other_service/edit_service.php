<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Service</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="/admin/other-servicess/edit/<?= $other['id'] ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">SEO Title (ID):</label>
                                    <input type="text" class="form-control" name="seo_tag_title_id" value="<?= old('seo_tag_title_id', $other['seo_tag_title_id']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">SEO Title (EN):</label>
                                    <input type="text" class="form-control" name="seo_tag_title_en" value="<?= old('seo_tag_title_en', $other['seo_tag_title_en']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description (ID):</label>
                                    <textarea class="form-control tiny" name="seo_description_id" required><?= old('seo_description_id', $other['seo_description_id']) ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description (EN):</label>
                                    <textarea class="form-control tiny" name="seo_description_en" required><?= old('seo_description_en', $other['seo_description_en']) ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Section Title (ID):</label>
                                    <input type="text" class="form-control" name="section_title_id" value="<?= old('section_title_id', $other['section_title_id']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Section Title (EN):</label>
                                    <input type="text" class="form-control" name="section_title_en" value="<?= old('section_title_en', $other['section_title_en']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update Service</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Service</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="/admin/destination-update-service/edit/<?= $destination_service['id'] ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">SEO Title (ID):</label>
                                    <input type="text" class="form-control" name="seo_tag_title_id" value="<?= old('seo_tag_title_id', $destination_service['seo_tag_title_id']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">SEO Title (EN):</label>
                                    <input type="text" class="form-control" name="seo_tag_title_en" value="<?= old('seo_tag_title_en', $destination_service['seo_tag_title_en']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title (ID):</label>
                                    <input type="text" class="form-control" name="title_id" value="<?= old('title_id', $destination_service['title_id']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title (EN):</label>
                                    <input type="text" class="form-control" name="title_en" value="<?= old('title_en', $destination_service['title_en']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description (ID):</label>
                                    <textarea class="form-control tiny" name="desc_id" required><?= old('desc_id', $destination_service['desc_id']) ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description (EN):</label>
                                    <textarea class="form-control tiny" name="desc_en" required><?= old('desc_en', $destination_service['desc_en']) ?></textarea>
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

<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<h1>Edit Private Tour</h1>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Private Tour</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="/admin/private-tour/update/<?= $privateTour['id'] ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="row">
                            <div class="col">
                                <!-- SEO Title (ID) -->
                                <div class="mb-3">
                                    <label class="form-label">SEO Title (ID)</label>
                                    <input type="text" class="form-control" name="seo_tag_title_id" value="<?= old('seo_tag_title_id', $privateTour['seo_tag_title_id']) ?>" required>
                                </div>

                                <!-- SEO Title (EN) -->
                                <div class="mb-3">
                                    <label class="form-label">SEO Title (EN)</label>
                                    <input type="text" class="form-control" name="seo_tag_title_en" value="<?= old('seo_tag_title_en', $privateTour['seo_tag_title_en']) ?>" required>
                                </div>

                                <!-- Title (ID) -->
                                <div class="mb-3">
                                    <label class="form-label">Title (ID)</label>
                                    <input type="text" class="form-control" name="title_id" value="<?= old('title_id', $privateTour['title_id']) ?>" required>
                                </div>

                                <!-- Title (EN) -->
                                <div class="mb-3">
                                    <label class="form-label">Title (EN)</label>
                                    <input type="text" class="form-control" name="title_en" value="<?= old('title_en', $privateTour['title_en']) ?>" required>
                                </div>

                                <!-- Description (ID) -->
                                <div class="mb-3">
                                    <label class="form-label">Description (ID)</label>
                                    <textarea class="form-control tiny" name="desc_id" required><?= old('desc_id', $privateTour['desc_id']) ?></textarea>
                                </div>

                                <!-- Description (EN) -->
                                <div class="mb-3">
                                    <label class="form-label">Description (EN)</label>
                                    <textarea class="form-control tiny" name="desc_en" required><?= old('desc_en', $privateTour['desc_en']) ?></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update Private Tour</button>
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

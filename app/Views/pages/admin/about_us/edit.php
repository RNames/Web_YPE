<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit About Us</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="/admin/about-us/update/<?= $aboutUs['id'] ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label class="form-label">SEO Title (ID):</label>
                            <input type="text" class="form-control" name="seo_tag_title_id" value="<?= old('seo_tag_title_id', $aboutUs['seo_tag_title_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Title (EN):</label>
                            <input type="text" class="form-control" name="seo_tag_title_en" value="<?= old('seo_tag_title_en', $aboutUs['seo_tag_title_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Description (ID):</label>
                            <textarea class="form-control" name="seo_description_id" required><?= old('seo_description_id', $aboutUs['seo_description_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Description (EN)</label>
                            <textarea class="form-control" name="seo_description_en" required><?= old('seo_description_en', $aboutUs['seo_description_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title (ID)</label>
                            <input type="text" class="form-control" name="title_id" value="<?= old('title_id', $aboutUs['title_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title (EN)</label>
                            <input type="text" class="form-control" name="title_en" value="<?= old('title_en', $aboutUs['title_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description (ID)</label>
                            <textarea class="form-control tiny" name="description_id" required><?= old('description_id', $aboutUs['description_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description (EN)</label>
                            <textarea class="form-control tiny" name="description_en" required><?= old('description_en', $aboutUs['description_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Heading (ID)</label>
                            <input type="text" class="form-control" name="heading_id" value="<?= old('heading_id', $aboutUs['heading_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Heading (EN)</label>
                            <input type="text" class="form-control" name="heading_en" value="<?= old('heading_en', $aboutUs['heading_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tahun Berdiri</label>
                            <input type="text" class="form-control" name="year" value="<?= old('year', $aboutUs['year']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Destinasi Yang Telah Dilayani</label>
                            <input type="text" class="form-control" name="destination_number" value="<?= old('destination_number', $aboutUs['destination_number']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Rating Kepuasan Tamu</label>
                            <input type="text" class="form-control" name="rating" value="<?= old('rating', $aboutUs['rating']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title Message (ID)</label>
                            <input type="text" class="form-control" name="title_message_id" value="<?= old('title_message_id', $aboutUs['title_message_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title Message (EN)</label>
                            <input type="text" class="form-control" name="title_message_en" value="<?= old('title_message_en', $aboutUs['title_message_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message (ID)</label>
                            <textarea class="form-control tiny" name="message_id" required><?= old('message_id', $aboutUs['message_id']) ?></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Message (EN)</label>
                            <textarea class="form-control tiny" name="message_en" required><?= old('message_en', $aboutUs['message_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Current Image:</label>
                            <?php if (!empty($aboutUs['image_founder'])): ?>
                                <img src="/assets/images/founder/<?= $aboutUs['image_founder'] ?>" alt="Founder Image" class="img-thumbnail" style="max-width: 200px;">
                            <?php else: ?>
                                <p>No image available.</p>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Update Image:</label>
                            <input type="file" class="form-control" name="image_founder">
                            <small class="text-muted">Leave empty if you don't want to update the image.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Name:</label>
                            <input type="text" class="form-control" name="name" value="<?= old('name', $aboutUs['name']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Founder:</label>
                            <input type="text" class="form-control" name="founder" value="<?= old('founder', $aboutUs['founder']) ?>" required>
                        </div>

                        <!-- Add the remaining fields dynamically based on the AboutUsModel -->

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
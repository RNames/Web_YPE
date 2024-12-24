<?= $this->extend('adminLayout/template') ?>
<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Homepage</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <form action="/admin/homepage/update/<?= $homepage['id'] ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label class="form-label">SEO Title (ID):</label>
                            <input type="text" class="form-control" name="seo_tag_title_id" value="<?= $homepage['seo_tag_title_id'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Title (EN):</label>
                            <input type="text" class="form-control" name="seo_tag_title_en" value="<?= $homepage['seo_tag_title_en'] ?>" required>
                        </div>

                        <!-- Add other fields already listed earlier -->

                        <div class="mb-3">
                            <label class="form-label">Destination Section (ID):</label>
                            <textarea class="form-control" name="trending_destination_section_id" required><?= $homepage['trending_destination_section_id'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Destination Section (EN):</label>
                            <textarea class="form-control" name="trending_destination_section_en" required><?= $homepage['trending_destination_section_en'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Destination Title (ID):</label>
                            <input type="text" class="form-control" name="trending_destination_title_id" value="<?= $homepage['trending_destination_title_id'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Destination Title (EN):</label>
                            <input type="text" class="form-control" name="trending_destination_title_en" value="<?= $homepage['trending_destination_title_en'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event Section (ID):</label>
                            <textarea class="form-control" name="upcoming_events_section_id" required><?= $homepage['upcoming_events_section_id'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event Section (EN):</label>
                            <textarea class="form-control" name="upcoming_events_section_en" required><?= $homepage['upcoming_events_section_en'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event Title (ID):</label>
                            <input type="text" class="form-control" name="upcoming_events_title_id" value="<?= $homepage['upcoming_events_title_id'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event Title (EN):</label>
                            <input type="text" class="form-control" name="upcoming_events_title_en" value="<?= $homepage['upcoming_events_title_en'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">How It Work Section (ID):</label>
                            <textarea class="form-control" name="how_it_works_section_id" required><?= $homepage['how_it_works_section_id'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">How It Work Section (EN):</label>
                            <textarea class="form-control" name="how_it_works_section_en" required><?= $homepage['how_it_works_section_en'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">How It Work Title (ID):</label>
                            <input type="text" class="form-control" name="how_it_works_title_id" value="<?= $homepage['how_it_works_title_id'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">How It Work Title (EN):</label>
                            <input type="text" class="form-control" name="how_it_works_title_en" value="<?= $homepage['how_it_works_title_en'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">FAQ Section (ID):</label>
                            <textarea class="form-control" name="faq_section_id" required><?= $homepage['faq_section_id'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">FAQ Section (EN):</label>
                            <textarea class="form-control" name="faq_section_en" required><?= $homepage['faq_section_en'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">FAQ Title (ID):</label>
                            <input type="text" class="form-control" name="faq_title_id" value="<?= $homepage['faq_title_id'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">FAQ Title (EN):</label>
                            <input type="text" class="form-control" name="faq_title_en" value="<?= $homepage['faq_title_en'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
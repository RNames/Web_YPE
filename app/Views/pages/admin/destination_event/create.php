<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Create Destination Event</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="/admin/destination-event/store" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col">
                                <?php if (session()->has('errors')) : ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php foreach (session('errors') as $error) : ?>
                                                <li><?= $error ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>


                                <div class="mb-3">
                                    <label class="form-label">Title (ID):</label>
                                    <input type="text" class="form-control" name="title_id" value="<?= old('title_id') ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Title (EN):</label>
                                    <input type="text" class="form-control" name="title_en" value="<?= old('title_en') ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description (ID):</label>
                                    <textarea class="form-control tiny" name="desc_id"><?= old('desc_id') ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description (EN):</label>
                                    <textarea class="form-control tiny" name="desc_en"><?= old('desc_en') ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Image:</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
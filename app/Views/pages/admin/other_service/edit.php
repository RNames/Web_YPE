<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Other Services</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <form action="/admin/other-service/update/<?= $other['id'] ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Title (ID):</label>
                                    <input type="text" class="form-control" name="title_id" value="<?= old('title_id', $other['title_id']) ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Title (EN):</label>
                                    <input type="text" class="form-control" name="title_en" value="<?= old('title_en', $other['title_en']) ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description (ID):</label>
                                    <textarea class="form-control tiny" name="description_id" required><?= old('description_id', $other['description_id']) ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description (EN):</label>
                                    <textarea class="form-control tiny" name="description_en" required><?= old('description_en', $other['description_en']) ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Image:</label>
                                    <input type="file" class="form-control" name="image">
                                    <div class="mt-2">
                                        <img src="<?= base_url('assets/images/other_services/' . $other['image']) ?>" class="img-thumbnail" width="200" alt="Current Image">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
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

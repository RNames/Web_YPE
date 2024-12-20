<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<h1>Edit </h1>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit VIP Dropdown</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <form action="/admin/vip/update/<?= $vip['id'] ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Title (ID)<br><span class="custom-color custom-label"></span></label>
                                    <textarea class="form-control" id="title_id" name="title_id" required><?= $vip['title_id']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title (EN):</label>
                                    <input type="text" class="form-control" name="title_en" value="<?= $vip['title_en'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description (ID):</label>
                                    <textarea class="form-control tiny" name="description_id" required><?= $vip['description_id'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description (EN):</label>
                                    <textarea class="form-control tiny" name="description_en" required><?= $vip['description_en'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                    </form>

                    <?= $this->endSection() ?>
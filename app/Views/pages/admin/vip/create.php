<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Create VIP</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="/admin/vip/create" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label class="form-label">Title (ID)<br></label>
                            <input type="text" class="form-control" name="title_id" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title (EN):</label>
                            <input type="text" class="form-control" name="title_en" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description (ID):</label>
                            <textarea class="form-control tiny" name="description_id" ></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description (EN):</label>
                            <textarea class="form-control tiny" name="description_en" ></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
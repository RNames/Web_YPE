<?= $this->extend('adminLayout/template') ?>
<?= $this->Section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambahkan Faq Category</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="<?= base_url('/faqC/proses_tambah') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                        <div class="mb-3">
                        <label class="form-label">Name (ID)</label>
                        <input type="text" class="form-control" id="name_id" name="name_id" value="<?= old('name_id') ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name (EN)</label>
                        <input type="text" class="form-control" id="name_en" name="name_en" value="<?= old('name_en') ?>">
                    </div>
                    
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--//app-card-->
        </div><!--//row-->

        <hr class="my-4">
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content'); ?>
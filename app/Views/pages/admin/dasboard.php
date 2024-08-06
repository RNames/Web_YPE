<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Dashboard</h1>
        <div class="row g-4 mb-4">
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">commitment</h4>
                        <div class="stats-figure"></div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="<?= base_url('/admin/slider/index') ?>"></a>
                </div><!--//app-card-->
            </div><!--//col-->

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">how its work</h4>
                        <div class="stats-figure">
                            <div class="stats-figure"></div>
                        </div>
                        <div class="stats-meta text-success">
                        </div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="<?= base_url('/admin/produk/index') ?>"></a>
                </div><!--//app-card-->
            </div><!--//col-->

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Jumlah User</h4>
                        <div class="stats-figure"></div>
                        <div class="stats-meta text-success">
                        </div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="<?= base_url('/admin/user/index') ?>"></a>
                </div><!--//app-card-->
            </div><!--//col-->
        </div><!--//row-->

    </div><!--//container-fluid-->
</div><!--//app-content-->
<?= $this->endSection() ?>

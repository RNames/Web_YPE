<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Dashboard</h1>
        <div class="row g-4 mb-4">
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Commitment</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/slider/index') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">How it Works</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/produk/index') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Jumlah User</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/user/index') ?>"></a>
                </div>
            </div>
        </div>

        <a href="<?= base_url('admin/logout') ?>">Logout</a> <!-- Add this line -->
    </div>
</div>

<?= $this->endSection() ?>

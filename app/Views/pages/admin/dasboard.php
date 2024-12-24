<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Dashboard</h1>
        <div class="row g-4 mb-4">

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Homepage</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/homepage') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Commitment</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/commitment') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">How it Works</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/how_it_works') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">FAQ Category</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/faqC/index') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">FAQ</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/faq/index') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Testimonial</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/testimonial/index') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">USP</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/usp/index') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Contact</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/contact-us') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">About Us</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/about-us') ?>"></a>
                </div>
            </div>

        </div>
        <h1 class="app-page-title">Layanan</h1>
        <div class="row g-4 mb-4">

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">VIP Services</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/vip') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Private Tours</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/private-tour') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Destination Event</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/destination-event') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Other Service</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/other-service') ?>"></a>
                </div>
            </div>

        </div>
        <h1 class="app-page-title">Informasi</h1>
        <div class="row g-4 mb-4">

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Tour Agent</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/tour-agent') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Blogs</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/article') ?>"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Destination</h4>
                        <div class="stats-figure"></div>
                    </div>
                    <a class="app-card-link-mask" href="<?= base_url('/admin/destination') ?>"></a>
                </div>
            </div>

        </div>
        <h1 class="app-page-title">Log Out</h1>
        <div class="row g-4 mb-4">

        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100" style="background: red;">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Log Out</h4>
                    <div class="stats-figure"></div>
                </div>
                <a class="app-card-link-mask" href="<?= base_url('logout') ?>"></a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- <div class="inner-banner-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10 col-sm-12">
                <div class="breadcrumb-area">
                    <span>
                        <h2>Error</h2>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="error-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 col-sm-12 text-center">
                <div class="error-wrapper">
                    <div class="error-image">
                        <img src="<?= base_url('assets/images/404-image.png') ?>" alt="error-image">
                    </div>
                    <div class="error-text">
                        <p class="para">It looks like you've reached a URL that doesn’t exist. Please use the navigation above or search below to find your way back to our amazing website.</p>
                        <a href="<?= base_url('/') ?>" class="eg-btn btn--outline sibling3 btn--lg capsule btn--primary"><i class="bi bi-house-door"></i> Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
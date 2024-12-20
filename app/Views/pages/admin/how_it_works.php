
<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">How It Works</h1>
            </div>
            </br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?php echo base_url() . "/tambahhow_it_works" ?>" class="btn btn-primary me-md-2"> + Tambah  </a>
            </div> 
        </div>

        <div class="tab-content" id="orders-table-tab-content">
            <?php if (session()->has('success')) : ?>
                <div class="alert alert-success">
                    <?= session('success') ?>
                </div>
            <?php endif; ?>
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">

                    <div class="app-card-body">
                        <div class="table-responsive">
                            <!-- <a href="/member/create">Add Member</a> -->
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                       <th class="text-center" valign="middle">Title id</th>
                                        <th class="text-center" valign="middle">Title En</th>
                                        <th class="text-center" valign="middle">Description_id</th>
                                        <th class="text-center" valign="middle">Description_en</th>
                                        <th class="text-center" valign="middle">slug</th>
                                        <th class="text-center" valign="middle">image</th>
                                        <th class="text-center" valign="middle">ALt image</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($all_data_how_it_works as $tampilAktivitas) : ?>
                                        <tr>
                                           <td style="text-align: center;"><?= $tampilAktivitas['title_id'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['title_en'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['description_id'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['description_en'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['slug'] ?></td>
                                            <td class="center-text" style="text-align: center;">
                                            <img src="<?= base_url('assets/images/how_it_works/') . $tampilAktivitas['image'] ?>" class="img-fluid" style="max-width: 100px; max-height: 100px; display: inline-block;" alt="image">
                                            </td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['alt_image'] ?></td>
                                            <td valign="middle">
                                                <div class="d-grid gap-2">
                                                    <a href="<?= base_url('/delete_how_it_works') . '/' . $tampilAktivitas['id'] ?>" class="btn btn-danger">Hapus</a>
                                                    <a href="<?= base_url('/edithow_it_works') . '/' . $tampilAktivitas['id'] ?>" class="btn btn-primary">Ubah</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div><!--//table-responsive-->

                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div><!--//tab-pane-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->

</div><!--//app-wrapper-->

<!-- Modal Konfirmasi Hapus -->

<?= $this->endSection() ?>
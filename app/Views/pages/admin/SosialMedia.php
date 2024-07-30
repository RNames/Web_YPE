<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Sosial Media</h1>
            </div>
            </br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?php echo base_url() . "/tambahSosialMedia" ?>" class="btn btn-primary me-md-2"> + Tambah  </a>
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
                                        <th class="text-center" valign="middle">Title</th>
                                        <th class="text-center" valign="middle">Link</th>
                                        <th class="text-center" valign="middle">image</th>
                                        <th class="text-center" valign="middle">aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($all_data_SosialMedia as $tampilAktivitas) : ?>
                                        <tr>
                                            <td style="text-align: center;"><?= $tampilAktivitas['title'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['link'] ?></td>
                                            <td class="center-text" style="text-align: center;">
                                            <img src="<?= base_url('assets/images/social_media/') . $tampilAktivitas['image'] ?>" class="img-fluid" style="max-width: 100px; max-height: 100px; display: inline-block;" alt="image">
                                            </td>
                                            <td valign="middle">
                                                <div class="d-grid gap-2">
                                                    <a href="<?= base_url('/delete_SosialMedia') . '/' . $tampilAktivitas['id'] ?>" class="btn btn-danger">Hapus</a>
                                                    <a href="<?= base_url('/editSosialMedia') . '/' . $tampilAktivitas['id'] ?>" class="btn btn-primary">Ubah</a>
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
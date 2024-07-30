
<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Article</h1>
            </div>
            </br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?php echo base_url() . "/tambahArticle" ?>" class="btn btn-primary me-md-2"> + Tambah  </a>
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
                                        <th class="text-center" valign="middle">seo_tag_title_id</th>
                                        <th class="text-center" valign="middle">seo_tag_title_en</th>
                                        <th class="text-center" valign="middle">seo_description_id</th>
                                        <th class="text-center" valign="middle">seo_description_en</th>
                                        <th class="text-center" valign="middle">alt_image</th>
                                        <th class="text-center" valign="middle">destination_id</th>   
                                        <th class="text-center" valign="middle">Title id</th>
                                        <th class="text-center" valign="middle">Title En</th>
                                        <th class="text-center" valign="middle">Description_id</th>
                                        <th class="text-center" valign="middle">Description_en</th>
                                        <th class="text-center" valign="middle">slug</th>
                                        <th class="text-center" valign="middle">date</th>
                                        <th class="text-center" valign="middle">writer</th>                                   
                                        <th class="text-center" valign="middle">cover image</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($all_data_Article as $tampilAktivitas) : ?>
                                        <tr>
                                            <td style="text-align: center;"><?= $tampilAktivitas['seo_tag_title_id'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['seo_tag_title_en'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['seo_description_id'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['seo_description_en'] ?></td> 
                                            <td style="text-align: center;"><?= $tampilAktivitas['alt_image'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['destination_id'] ?></td>
                                           <td style="text-align: center;"><?= $tampilAktivitas['title_id'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['title_en'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['description_id'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['description_en'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['slug'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['date'] ?></td>
                                            <td style="text-align: center;"><?= $tampilAktivitas['writer'] ?></td>

                                            <td class="center-text" style="text-align: center;">
                                            <img src="<?= base_url('assets/images/articles/') . $tampilAktivitas['cover_image'] ?>" class="img-fluid" style="max-width: 100px; max-height: 100px; display: inline-block;" alt="image">
                                            </td>
                                            <td valign="middle">
                                                <div class="d-grid gap-2">
                                                    <a href="<?= base_url('/delete_Article') . '/' . $tampilAktivitas['id'] ?>" class="btn btn-danger">Hapus</a>
                                                    <a href="<?= base_url('/editArticle') . '/' . $tampilAktivitas['id'] ?>" class="btn btn-primary">Ubah</a>
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
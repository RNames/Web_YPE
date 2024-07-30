<?= $this->extend('adminLayout/template') ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Daftar Testimonial</h1>
            </div>
            </br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= base_url() . "/testimonial/tambah" ?>" class="btn btn-primary me-md-2"> + Tambah Testimonial </a>
            </div>
        </div><!--//row-->

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
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="text-center" valign="middle">Rating</th>
                                        <th class="text-center" valign="middle">Name</th>
                                        <th class="text-center" valign="middle">Description (ID)</th>
                                        <th class="text-center" valign="middle">Description (EN)</th>
                                        <th class="text-center" valign="middle">Image</th>
                                        <th class="text-center" valign="middle">Alt Image</th>
                                        <th class="text-center" valign="middle">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($all_data_test as $test) : ?>
                                <tr>
                                    <td><?= $test['rating'] ?></td>
                                    <td><?= $test['name'] ?></td>
                                    <td><?= $test['description_id'] ?></td>
                                    <td><?= $test['description_en'] ?></td>
                                    <td><img src="<?= base_url() . 'assets/images/testimonials/' . $test['image'] ?>" class="img-fluid" alt="Foto Testimonial"></td>
                                    <td><?= $test['alt_image'] ?></td>
                                    <td>
                                        <!-- Adjust the edit and delete links accordingly -->
                                        <a href="<?= base_url('/testimonial/edit') . '/' . $test['id'] ?>" class="btn btn-primary">Edit</a>
                                        <a href="<?= base_url('/testimonial/delete') . '/' . $test['id'] ?>" class="btn btn-danger">Delete</a>
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
<?php foreach ($all_data_test as $test) : ?>
  <div class="modal fade" id="deleteModal<?= $test['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus data ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <a href="<?= base_url('admin/testimonial/delete') . '/' . $test['id'] ?>" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?= $this->endSection('content') ?>

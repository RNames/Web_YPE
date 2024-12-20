<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="tab-content" id="orders-table-tab-content">
    <?php if (session()->has('success')) : ?>
        <div class="alert alert-success">
            <?= session('success') ?>
        </div>
    <?php endif; ?>

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Destination Event</h1>
                </div>
            </div>

            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">

                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="text-center" valign="middle">SEO Title (ID)</th>
                                        <th class="text-center" valign="middle">SEO Title (EN)</th>
                                        <th class="text-center" valign="middle">Title (ID)</th>
                                        <th class="text-center" valign="middle">Title (EN)</th>
                                        <th class="text-center" valign="middle">Description (ID)</th>
                                        <th class="text-center" valign="middle">Description (EN)</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $destination_service['seo_tag_title_id'] ?></td>
                                        <td><?= $destination_service['seo_tag_title_en'] ?></td>
                                        <td><?= $destination_service['title_id'] ?></td>
                                        <td><?= $destination_service['title_en'] ?></td>
                                        <td><?= $destination_service['desc_id'] ?></td>
                                        <td><?= $destination_service['desc_en'] ?></td>
                                        <td>
                                            <a href="/admin/destination-service/edit/<?= $destination_service['id'] ?>" class="btn btn-primary btn-sm"> Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//tab-pane-->

            </div><!--//container-fluid-->
        </div><!--//app-content-->

    </div>

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Destination Events List</h1>
                    </div>
                    </br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?php echo base_url() . "/admin/destination-event/create" ?>" class="btn btn-primary me-md-2"> + Tambah </a>
                    </div>
                </div>

                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">

                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="text-center" valign="middle">ID</th>
                                            <th class="text-center" valign="middle">Title (ID)</th>
                                            <th class="text-center" valign="middle">Title (EN)</th>
                                            <th class="text-center" valign="middle">Desc (ID)</th>
                                            <th class="text-center" valign="middle">Desc (EN)</th>
                                            <th class="text-center" valign="middle">Image</th>
                                            <th class="text-center" valign="middle">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($destinationEvents as $event): ?>
                                            <tr>
                                                <td><?= $event['id'] ?></td>
                                                <td><?= $event['title_id'] ?></td>
                                                <td><?= $event['title_en'] ?></td>
                                                <td><?= $event['desc_id'] ?></td>
                                                <td><?= $event['desc_en'] ?></td>
                                                <td><img src="<?= base_url('assets/images/destination_event/' . $event['image']) ?>" width="100" alt="Current Image"></td>
                                                <td>
                                                    <a href="/admin/destination-event/edit/<?= $event['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/admin/destination-event/delete/<?= $event['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//tab-pane-->

                </div><!--//container-fluid-->
            </div><!--//app-content-->

        </div>
    </div>

    <?= $this->endSection() ?>
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
                    <h1 class="app-page-title mb-0">Contact</h1>
                </div>
            </div>

            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">

                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th>SEO Title (ID)</th>
                                        <th>SEO Title (EN)</th>
                                        <th>SEO Desc (ID)</th>
                                        <th>SEO Desc (EN)</th>
                                        <th>Heading (ID)</th>
                                        <th>Heading (EN)</th>
                                        <th>Section (ID)</th>
                                        <th>Section (EN)</th>
                                        <th>Title (ID)</th>
                                        <th>Title (EN)</th>
                                        <th>Phone (EU)</th>
                                        <th>Phone (ID)</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($contactUs as $item): ?>
                                        <tr>
                                            <td><?= $item['seo_tag_title_id'] ?></td>
                                            <td><?= $item['seo_tag_title_en'] ?></td>
                                            <td><?= $item['seo_description_id'] ?></td>
                                            <td><?= $item['seo_description_en'] ?></td>
                                            <td><?= $item['heading_id'] ?></td>
                                            <td><?= $item['heading_en'] ?></td>
                                            <td><?= $item['section_id'] ?></td>
                                            <td><?= $item['section_en'] ?></td>
                                            <td><?= $item['title_id'] ?></td>
                                            <td><?= $item['title_en'] ?></td>
                                            <td><?= $item['phone_number_eu'] ?></td>
                                            <td><?= $item['phone_number_id'] ?></td>
                                            <td>
                                                <a href="/admin/contact-us/edit/<?= $item['id'] ?>" class="btn btn-warning btn-m">Edit</a>
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
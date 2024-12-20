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
                    <h1 class="app-page-title mb-0">Private Tours</h1>
                </div>
                </br>
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
                                        <th class="text-center" valign="middle">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($privateTours as $tour): ?>
                                        <tr>
                                            <td><?= $tour['seo_tag_title_id'] ?></td>
                                            <td><?= $tour['seo_tag_title_en'] ?></td>
                                            <td><?= $tour['title_id'] ?></td>
                                            <td><?= $tour['title_en'] ?></td>
                                            <td><?= $tour['desc_id'] ?></td>
                                            <td><?= $tour['desc_en'] ?></td>
                                            <td>
                                                <a href="/admin/private-tour/edit/<?= $tour['id'] ?>" class="btn btn-primary" >Edit</a>
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
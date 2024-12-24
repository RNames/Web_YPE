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
                    <h1 class="app-page-title mb-0">Homepage</h1>
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
                                        <th>Our Service Section (ID)</th>
                                        <th>Our Service Section (EN)</th>
                                        <th>Our Service Title (ID)</th>
                                        <th>Our Service Title (ID)</th>
                                        <th>USP Section (ID)</th>
                                        <th>USP Section (EN)</th>
                                        <th>USP Title (ID)</th>
                                        <th>USP Title (EN)</th>
                                        <th>Testimoni Section (ID)</th>
                                        <th>Testimoni Section (EN)</th>
                                        <th>Testimoni Title (ID)</th>
                                        <th>Testimoni Title (EN)</th>
                                        <th>Commitment Section (ID)</th>
                                        <th>Commitment Section (EN)</th>
                                        <th>Commitment Title (ID)</th>
                                        <th>Commitment Title (EN)</th>
                                        <th>Destination Section (ID)</th>
                                        <th>Destination Section (EN)</th>
                                        <th>Destination Title (ID)</th>
                                        <th>Destination</th>
                                        <th>Event Section (ID)</th>
                                        <th>Event Section (EN)</th>
                                        <th>Event Title (ID)</th>
                                        <th>Event Title (EN)</th>
                                        <th>How It Work Section (ID)</th>
                                        <th>How It Work Section (EN)</th>
                                        <th>How It Work Title (ID)</th>
                                        <th>How It Work Title (EN)</th>
                                        <th>FAQ Section (ID)</th>
                                        <th>FAQ Section (EN)</th>
                                        <th>FAQ Title (ID)</th>
                                        <th>FAQ Title (EN)</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($homepages as $homepage) : ?>
                                        <tr>
                                            <td><?= $homepage['seo_tag_title_id'] ?></td>
                                            <td><?= $homepage['seo_tag_title_en'] ?></td>
                                            <td><?= $homepage['seo_description_id'] ?></td>
                                            <td><?= $homepage['seo_description_en'] ?></td>
                                            <td><?= $homepage['our_services_section_id'] ?></td>
                                            <td><?= $homepage['our_services_section_en'] ?></td>
                                            <td><?= $homepage['our_services_title_id'] ?></td>
                                            <td><?= $homepage['our_services_title_en'] ?></td>
                                            <td><?= $homepage['usp_section_id'] ?></td>
                                            <td><?= $homepage['usp_section_en'] ?></td>
                                            <td><?= $homepage['usp_title_id'] ?></td>
                                            <td><?= $homepage['usp_title_en'] ?></td>
                                            <td><?= $homepage['testimonial_section_id'] ?></td>
                                            <td><?= $homepage['testimonial_section_en'] ?></td>
                                            <td><?= $homepage['testimonial_title_id'] ?></td>
                                            <td><?= $homepage['testimonial_title_en'] ?></td>
                                            <td><?= $homepage['commitment_section_id'] ?></td>
                                            <td><?= $homepage['commitment_section_en'] ?></td>
                                            <td><?= $homepage['commitment_title_id'] ?></td>
                                            <td><?= $homepage['commitment_title_en'] ?></td>
                                            <td><?= $homepage['trending_destination_section_id'] ?></td>
                                            <td><?= $homepage['trending_destination_section_en'] ?></td>
                                            <td><?= $homepage['trending_destination_title_id'] ?></td>
                                            <td><?= $homepage['trending_destination_title_en'] ?></td>
                                            <td><?= $homepage['upcoming_events_section_id'] ?></td>
                                            <td><?= $homepage['upcoming_events_section_en'] ?></td>
                                            <td><?= $homepage['upcoming_events_title_id'] ?></td>
                                            <td><?= $homepage['upcoming_events_title_en'] ?></td>
                                            <td><?= $homepage['how_it_works_section_id'] ?></td>
                                            <td><?= $homepage['how_it_works_section_en'] ?></td>
                                            <td><?= $homepage['how_it_works_title_id'] ?></td>
                                            <td><?= $homepage['how_it_works_title_en'] ?></td>
                                            <td><?= $homepage['faq_section_id'] ?></td>
                                            <td><?= $homepage['faq_section_en'] ?></td>
                                            <td><?= $homepage['faq_title_id'] ?></td>
                                            <td><?= $homepage['faq_title_en'] ?></td>
                                            <td>
                                                <a href="/admin/homepage/edit/<?= $homepage['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/admin/homepage/delete/<?= $homepage['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
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
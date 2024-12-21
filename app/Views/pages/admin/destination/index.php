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
                    <h1 class="app-page-title mb-0">Destinasi</h1>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?php echo base_url() . "/admin/destination/create" ?>" class="btn btn-primary me-md-2"> + Tambah </a>
                </div>
            </div>

            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">

                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>SEO Title (ID)</th>
                                        <th>SEO Title (EN)</th>
                                        <th>SEO Description (ID)</th>
                                        <th>SEO Description (EN)</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Sub Title</th>
                                        <th>Type of Tour (ID)</th>
                                        <th>Type of Tour (EN)</th>
                                        <th>Price (ID)</th>
                                        <th>Price (EN)</th>
                                        <th>Duration (ID)</th>
                                        <th>Duration (EN)</th>
                                        <th>Location (ID)</th>
                                        <th>Location (EN)</th>
                                        <th>Includes (ID)</th>
                                        <th>Includes (EN)</th>
                                        <th>Description (ID)</th>
                                        <th>Description (EN)</th>
                                        <th>Route (ID)</th>
                                        <th>Route (EN)</th>
                                        <th>Accommodation (ID)</th>
                                        <th>Accommodation (EN)</th>
                                        <th>Itinerary Notes (ID)</th>
                                        <th>Itinerary Notes (EN)</th>
                                        <th>Hotel Flights (ID)</th>
                                        <th>Hotel Flights (EN)</th>
                                        <th>Tour Period (ID)</th>
                                        <th>Tour Period (EN)</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($destinations as $destination): ?>
                                        <tr>
                                            <td><?= $destination['id'] ?></td>
                                            <td><?= $destination['seo_tag_title_id'] ?></td>
                                            <td><?= $destination['seo_tag_title_en'] ?></td>
                                            <td><?= $destination['seo_description_id'] ?></td>
                                            <td><?= $destination['seo_description_en'] ?></td>
                                            <td><?= $destination['title'] ?></td>
                                            <td><?= $destination['slug'] ?></td>
                                            <td><?= $destination['sub_title'] ?></td>
                                            <td><?= $destination['type_of_tour_id'] ?></td>
                                            <td><?= $destination['type_of_tour_en'] ?></td>
                                            <td><?= $destination['price_id'] ?></td>
                                            <td><?= $destination['price_en'] ?></td>
                                            <td><?= $destination['duration_id'] ?></td>
                                            <td><?= $destination['duration_en'] ?></td>
                                            <td><?= $destination['location_id'] ?></td>
                                            <td><?= $destination['location_en'] ?></td>
                                            <td><?= $destination['includes_id'] ?></td>
                                            <td><?= $destination['includes_en'] ?></td>
                                            <td><?= substr($destination['description_id'], 0, 300) . '...' ?></td>
                                            <td><?= substr($destination['description_en'], 0, 300) . '...' ?></td>
                                            <td><?= $destination['route_id'] ?></td>
                                            <td><?= $destination['route_en'] ?></td>
                                            <td><?= $destination['accomodation_id'] ?></td>
                                            <td><?= $destination['accomodation_en'] ?></td>
                                            <td><?= substr($destination['itinerary_notes_id'], 0, 200) . '...' ?></td>
                                            <td><?= substr($destination['itinerary_notes_en'], 0, 200) . '...' ?></td>
                                            <td><?= substr($destination['hotel_flights_en'], 0, 200) . '...' ?></td>
                                            <td><?= substr($destination['hotel_flights_id'], 0, 200) . '...' ?></td>
                                            <td><?= substr($destination['tour_period_id'], 0, 200) . '...' ?></td>
                                            <td><?= substr($destination['tour_period_en'], 0, 200) . '...' ?></td>
                                            <td>
                                                <img src="/assets/images/destinations/<?= $destination['image'] ?>" alt="Image Destinasi" class="img-thumbnail" style="max-width: 75px;">
                                            </td>
                                            <td><?= $destination['created_at'] ?></td>
                                            <td><?= $destination['updated_at'] ?></td>
                                            <td>
                                                <a href="/admin/destination/edit/<?= $destination['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/admin/destination/delete/<?= $destination['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
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
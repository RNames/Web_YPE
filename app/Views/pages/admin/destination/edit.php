<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Destinasi</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="/admin/destination/update/<?= $destination['id'] ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <?php if (session()->has('errors')) : ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php foreach (session('errors') as $error) : ?>
                                        <li><?= $error ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>


                        <div class="mb-3">
                            <label class="form-label">SEO Title (ID)</label>
                            <input type="text" class="form-control" name="seo_tag_title_id" value="<?= old('seo_tag_title_id', $destination['seo_tag_title_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Title (EN)</label>
                            <input type="text" class="form-control" name="seo_tag_title_en" value="<?= old('seo_tag_title_en', $destination['seo_tag_title_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Description (ID)</label>
                            <textarea class="form-control" name="seo_description_id" required><?= old('seo_description_id', $destination['seo_description_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Description (EN)</label>
                            <textarea class="form-control" name="seo_description_en" required><?= old('seo_description_en', $destination['seo_description_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="<?= old('title', $destination['title']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" value="<?= old('slug', $destination['slug']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title" value="<?= old('sub_title', $destination['sub_title']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type of Tour (ID)</label>
                            <input type="text" class="form-control" name="type_of_tour_id" value="<?= old('type_of_tour_id', $destination['type_of_tour_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type of Tour (EN)</label>
                            <input type="text" class="form-control" name="type_of_tour_en" value="<?= old('type_of_tour_en', $destination['type_of_tour_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price (ID)</label>
                            <input type="text" class="form-control" name="price_id" value="<?= old('price_id', $destination['price_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price (EN)</label>
                            <input type="text" class="form-control" name="price_en" value="<?= old('price_en', $destination['price_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Duration (ID)</label>
                            <input type="text" class="form-control" name="duration_id" value="<?= old('duration_id', $destination['duration_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Duration (EN)</label>
                            <input type="text" class="form-control" name="duration_en" value="<?= old('duration_en', $destination['duration_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Location (ID)</label>
                            <input type="text" class="form-control" name="location_id" value="<?= old('location_id', $destination['location_id']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Location (EN)</label>
                            <input type="text" class="form-control" name="location_en" value="<?= old('location_en', $destination['location_en']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Includes (ID)</label>
                            <textarea class="form-control tiny" name="includes_id" required><?= old('includes_id', $destination['includes_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Includes (EN)</label>
                            <textarea class="form-control tiny" name="includes_en" required><?= old('includes_en', $destination['includes_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description (ID)</label>
                            <textarea class="form-control tiny" name="description_id" required><?= old('description_id', $destination['description_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description (EN)</label>
                            <textarea class="form-control tiny" name="description_en" required><?= old('description_en', $destination['description_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Route (ID)</label>
                            <textarea class="form-control" name="route_id" required><?= old('route_id', $destination['route_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Route (EN)</label>
                            <textarea class="form-control" name="route_en" required><?= old('route_en', $destination['route_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Accommodation (ID)</label>
                            <textarea class="form-control" name="accomodation_id" required><?= old('accomodation_id', $destination['accomodation_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Accommodation (EN)</label>
                            <textarea class="form-control" name="accomodation_en" required><?= old('accomodation_en', $destination['accomodation_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Itinerary Notes (ID)</label>
                            <textarea class="form-control tiny" name="itinerary_notes_id" required><?= old('itinerary_notes_id', $destination['itinerary_notes_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Itinerary Notes (EN)</label>
                            <textarea class="form-control tiny" name="itinerary_notes_en" required><?= old('itinerary_notes_en', $destination['itinerary_notes_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hotel Flights (ID)</label>
                            <textarea class="form-control tiny" name="hotel_flights_id" required><?= old('hotel_flights_id', $destination['hotel_flights_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hotel Flights (EN)</label>
                            <textarea class="form-control tiny" name="hotel_flights_en" required><?= old('hotel_flights_en', $destination['hotel_flights_en']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tour Period (ID)</label>
                            <textarea class="form-control tiny" name="tour_period_id" required><?= old('tour_period_id', $destination['tour_period_id']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tour Period (EN)</label>
                            <textarea class="form-control tiny" name="tour_period_en" required><?= old('tour_period_en', $destination['tour_period_en']) ?></textarea>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Upload New Image</label>
                            <input type="file" class="form-control" name="image">
                            <small class="form-text text-muted">Leave this empty if you do not want to update the image.</small>
                            <div class="mt-2">
                                <img src="<?= base_url('assets/images/destinations/' . $destination['image']) ?>" class="img-thumbnail" width="200" alt="Current Image">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Updated At</label>
                            <input type="datetime-local" class="form-control" name="updated_at"
                                value="<?= old('updated_at', date('Y-m-d\TH:i', strtotime($destination['updated_at'] ?? 'now'))) ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
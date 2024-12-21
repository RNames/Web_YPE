<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Create Destination</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">
                    <form action="/admin/destination/store" method="post" enctype="multipart/form-data">
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
                            <label class="form-label">SEO Title (ID):</label>
                            <input type="text" class="form-control" name="seo_tag_title_id" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Title (EN):</label>
                            <input type="text" class="form-control" name="seo_tag_title_en" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Description (ID):</label>
                            <textarea class="form-control" name="seo_description_id" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SEO Description (EN):</label>
                            <textarea class="form-control" name="seo_description_en" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title:</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Slug:</label>
                            <input type="text" class="form-control" name="slug" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Title:</label>
                            <input type="text" class="form-control" name="sub_title" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type of Tour (ID):</label>
                            <input type="text" class="form-control" name="type_of_tour_id" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type of Tour (EN):</label>
                            <input type="text" class="form-control" name="type_of_tour_en" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price (ID):</label>
                            <input type="text" class="form-control" name="price_id" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price (EN):</label>
                            <input type="text" class="form-control" name="price_en" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Duration (ID):</label>
                            <input type="text" class="form-control" name="duration_id" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Duration (EN):</label>
                            <input type="text" class="form-control" name="duration_en" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Location (ID):</label>
                            <input type="text" class="form-control" name="location_id" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Location (EN):</label>
                            <input type="text" class="form-control" name="location_en" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Includes (ID):</label>
                            <textarea class="form-control" name="includes_id" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Includes (EN):</label>
                            <textarea class="form-control" name="includes_en" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description (ID):</label>
                            <textarea class="form-control tiny" name="description_id" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description (EN):</label>
                            <textarea class="form-control tiny" name="description_en" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Route (ID):</label>
                            <textarea class="form-control" name="route_id" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Route (EN):</label>
                            <textarea class="form-control" name="route_en" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Accommodation (ID):</label>
                            <textarea class="form-control" name="accomodation_id" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Accommodation (EN):</label>
                            <textarea class="form-control" name="accomodation_en" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Itinerary Notes (ID):</label>
                            <textarea class="form-control tiny" name="itinerary_notes_id" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Itinerary Notes (EN):</label>
                            <textarea class="form-control tiny" name="itinerary_notes_en" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hotel Flights (ID):</label>
                            <textarea class="form-control tiny" name="hotel_flights_id" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hotel Flights (EN):</label>
                            <textarea class="form-control tiny" name="hotel_flights_en" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tour Period (ID):</label>
                            <textarea class="form-control" name="tour_period_id" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tour Period (EN):</label>
                            <textarea class="form-control" name="tour_period_en" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Image:</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Created At</label>
                            <input type="datetime-local" class="form-control" name="created_at"
                                value="<?= old('created_at', date('Y-m-d\TH:i', strtotime($destination['created_at'] ?? 'now'))) ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
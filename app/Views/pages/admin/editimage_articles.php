<?= $this->extend('adminLayout/template') ?>

<?= $this->section('content') ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit FounderSosmed</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4>Error</h4>
                            <p><?php echo session()->getFlashdata('error'); ?></p>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('proses_edit_image_articles/' . $image_article['id']) ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                <label for="article_id">Article ID:</label>
                                <select name="article_id" id="article_id" class="form-control">
                                    <?php foreach ($articles as $article): ?>
                                        <option value="<?= $article['id'] ?>" <?php if ($article['id'] == $image_article['article_id']) echo 'selected' ?>>
                                            <?= $article['id'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                               
                                <div class="mb-3" >
                                <label for="slug">Slug:</label>
                                    <input type="text" name="slug" class="form-control" id="slug" value="<?= $image_article['slug'] ?>">
                                </div>

                                <div class="mb-3" >
                                <label for="slug">url:</label>
                                    <input type="text" name="url" class="form-control" id="url" value="<?= $image_article['url'] ?>">
                                </div>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            <div class="col">
                                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo session()->getFlashdata('success') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--//app-card-->
        </div><!--//row-->
 <?= $this->endSection() ?>
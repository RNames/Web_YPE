<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="sitemap-container" style="margin: 100px auto; padding: 20px; max-width: 800px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
    <!-- Bahasa Indonesia -->
    <div class="sitemap-section">
        <ul style="padding-left: 10;">
            <?php foreach ($data as $key => $page): ?>
                <li style="margin-bottom: 10px;">
                    <a href="<?= $page['url'] ?>" style=" color: #007;"><?= $page['name'] ?></a>
                    <?php if (isset($page['subpages']) && !empty($page['subpages'])): ?>
                        <ul style="list-style-type: disc; margin-left: 20px;">
                            <?php foreach ($page['subpages'] as $subpage): ?>
                                <li style="margin-bottom: 5px;"><a href="<?= $subpage['url'] ?>" style="text-decoration: none; color: #6c757d;"><?= $subpage['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?= $this->endSection() ?>


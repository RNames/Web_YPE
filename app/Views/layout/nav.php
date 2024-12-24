<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-dark py-2 py-lg-0 px-lg-5">
        <!-- Logo on the left -->
        <a href="/" class="navbar-brand">
            <img src="<?= base_url('assets/images/logoHeader.png') ?>" alt="Beautyofindonesia logo" style="height: 60px;" class="d-inline-block align-middle">
        </a>

        <!-- Toggler for Sidebar -->
        <button type="button" class="navbar-toggler" onclick="toggleSidebar()" aria-label="Toggle sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <!-- Navbar links and search form aligned to the right (for larger screens) -->
            <ul class="navbar-nav ml-auto py-0 d-none d-lg-flex">
                <?php
                // Ambil bahasa yang disimpan di session
                $lang = session()->get('lang') ?? 'id'; // Default ke 'id' jika tidak ada di session

                $current_url = uri_string();

                // Simpan segmen bahasa saat ini
                $segments = explode('/', trim($current_url, '/'));
                $lang_segment = $segments[0] . '/'; // Menyimpan 'id/' atau 'en/'


                // Definisikan tautan untuk setiap halaman berdasarkan bahasa
                $destinationsLink = ($lang_segment === 'en/') ? 'destinations' : 'wisata';
                $souvenirsLink = ($lang_segment === 'en/') ? 'souvenirs' : 'oleh-oleh';
                $articleLink = ($lang_segment === 'en/') ? 'article' : 'artikel';
                $aboutLink = ($lang_segment === 'en/') ? 'about' : 'tentang';
                $languageLink = ($lang_segment === 'en/') ? 'language' : 'bahasa';

                // Buat array untuk menggantikan segmen berdasarkan bahasa
                $replace_map = [
                    'wisata' => 'destinations',
                    'kategori-wisata' => 'destinations-category',
                    'oleh-oleh' => 'souvenirs',
                    'artikel' => 'article',
                    'tentang' => 'about',
                ];

                // Ambil bagian dari URL tanpa segmen bahasa
                $url_without_lang = substr($current_url, strlen($lang_segment));

                // Pecah URL menjadi segmen-segmen
                $url_segments = explode('/', $url_without_lang);

                // Tentukan bahasa yang ingin digunakan
                $new_lang_segment = ($lang_segment === 'en/') ? 'id/' : 'en/';

                // Gantikan hanya segmen kedua dalam URL berdasarkan bahasa yang aktif
                if (isset($url_segments[0])) {
                    foreach ($replace_map as $indonesian_segment => $english_segment) {
                        if ($lang_segment === 'en/') {
                            // Jika bahasa yang dipilih adalah 'en', maka ganti segmen ID ke EN
                            if ($url_segments[0] === $english_segment) {
                                $url_segments[0] = $indonesian_segment;
                            }
                        } else {
                            // Jika bahasa yang dipilih adalah 'id', maka ganti segmen EN ke ID
                            if ($url_segments[0] === $indonesian_segment) {
                                $url_segments[0] = $english_segment;
                            }
                        }
                    }
                }

                // Gabungkan kembali URL
                $url_without_lang = implode('/', $url_segments);

                // Tautan dengan bahasa yang baru
                $clean_url = $new_lang_segment . ltrim($url_without_lang, '/');

                // Cek apakah $clean_url sudah memiliki segmen bahasa yang tepat
                if (!preg_match('/^(en|id)\//', $clean_url)) {
                    // Jika tidak, tambahkan segmen bahasa yang sesuai di depan
                    $clean_url = $new_lang_segment . ltrim($clean_url, '/');
                }

                // Tautan Bahasa Inggris
                if (strpos($url_without_lang, 'en/') === false) {
                    // Jika tidak ada segmen bahasa Inggris, tambahkan
                    $english_url = base_url('en/' . ltrim($url_without_lang, '/'));
                } else {
                    // Jika sudah ada segmen bahasa Inggris, gunakan yang ada
                    $english_url = base_url($url_without_lang);
                }

                // Tautan Bahasa Indonesia
                if (strpos($url_without_lang, 'id/') === false) {
                    // Jika tidak ada segmen bahasa Indonesia, tambahkan
                    $indonesia_url = base_url('id/' . ltrim($url_without_lang, '/'));
                } else {
                    // Jika sudah ada segmen bahasa Indonesia, gunakan yang ada
                    $indonesia_url = base_url($url_without_lang);
                }

                $is_indonesian = ($lang === 'id');
                $is_english = ($lang === 'en');

                ?>

                <?php helper('url'); ?>
                <li class="nav-item">
                    <a href="<?= base_url($lang . '/') ?>" class="nav-link <?= current_url() === base_url('/') ? 'active' : '' ?>"><?php echo lang('Blog.headerHome'); ?></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="kategoriWisataDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= lang('Blog.headerTour'); ?>
                    </a>
                    <div class="dropdown-menu">
                        <!-- Option for All Destinations -->
                        <a class="dropdown-item" href="<?= base_url($lang === 'en' ? $lang . '/destinations' : $lang . '/wisata') ?>">
                            <?php if (session()->get('lang') === 'en'): ?>
                                All Destinations
                            <?php else: ?>
                                Semua Wisata
                            <?php endif; ?>
                        </a>

                        <!-- Loop through categories -->
                        <?php if (!empty($kategoriwisata)): ?>
                            <?php foreach ($kategoriwisata as $row) : ?>
                                <a class="dropdown-item"
                                    href="<?= base_url($lang === 'en' ? $lang . '/destinations/destinations-category/' . $row->slug_kategori_wisata_en : $lang . '/wisata/kategori-wisata/' . $row->slug_kategori_wisata) ?>">
                                    <?php if ($lang === 'en'): ?>
                                        <?= esc($row->nama_kategori_wisata_en) ?> <!-- Assuming you have English names -->
                                    <?php else: ?>
                                        <?= esc($row->nama_kategori_wisata) ?>
                                    <?php endif; ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="kategoriDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo lang('Blog.headerSouvenir'); ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url($lang === 'en' ? $lang . '/souvenirs' : $lang . '/oleh-oleh') ?>">
                            <?php if (session()->get('lang') === 'en'): ?>
                                All Souvenirs
                            <?php else: ?>
                                Semua Oleh-Oleh
                            <?php endif; ?>
                        </a>

                        <?php if (!empty($kategoriOlehOleh)): ?>
                            <?php foreach ($kategoriOlehOleh as $row) : ?>
                                <a class="dropdown-item" href="<?= base_url($lang === 'en' ? $lang . '/souvenirs/souvenirs-category/' . $row->slug_kategori_oleholeh_en : $lang . '/oleh-oleh/kategori-oleh-oleh/' . $row->slug_kategori_oleholeh) ?>">
                                    <?php if (session()->get('lang') === 'en'): ?>
                                        <?= esc($row->nama_kategori_oleholeh_en) ?>
                                    <?php else: ?>
                                        <?= esc($row->nama_kategori_oleholeh) ?>
                                    <?php endif; ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= strpos(current_url(), base_url($lang . '/' . $articleLink)) === 0 || strpos(current_url(), base_url($lang . '/kategori/')) === 0 ? 'active' : '' ?>"
                        href="#" id="kategoriDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo lang('Blog.headerArticel'); ?> <!-- Language key for 'Articles' -->
                    </a>

                    <div class="dropdown-menu">
                        <!-- Add "All Articles" option with language support -->
                        <a class="dropdown-item <?= current_url() === base_url($lang === 'en' ? 'en/categories/all-article' : 'id/kategori/semua-artikel') ? 'active' : '' ?>"
                            href="<?= base_url($lang === 'en' ? 'en/categories/all-article' : 'id/kategori/semua-artikel') ?>">
                            <?php if (session()->get('lang') === 'en'): ?>
                                All Articles
                            <?php else: ?>
                                Semua Artikel
                            <?php endif; ?>
                        </a>

                        <?php if (!empty($kategori)): ?>
                            <?php foreach ($kategori as $row) : ?>
                                <a class="dropdown-item <?= current_url() === base_url($lang . '/kategori/' . $row['slug_kategori']) ? 'active' : '' ?>"
                                    href="<?= base_url($lang === 'en' ? 'en/categories/' . $row['slug_kategori_en'] : 'id/kategori/' . $row['slug_kategori']) ?>">
                                    <?php if (session()->get('lang') === 'en'): ?>
                                        <?= esc($row['nama_kategori_en']) ?> <!-- English category name -->
                                    <?php else: ?>
                                        <?= esc($row['nama_kategori']) ?> <!-- Default category name -->
                                    <?php endif; ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </li>


                <li class="nav-item">
                    <a href="<?= base_url($lang . '/' . $aboutLink) ?>" class="nav-link <?= current_url() === base_url($lang . '/' . $aboutLink) ? 'active' : '' ?>"><?php echo lang('Blog.headerAbout'); ?></a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo lang('Blog.headerLanguage'); ?></a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= $is_indonesian ? '#' : $indonesia_url ?>" class="dropdown-item <?= $is_indonesian ? 'disabled' : '' ?>" <?= $is_indonesian ? 'onclick="return false;"' : '' ?>>
                            <img src="<?= base_url('assets-baru/img/in.png') ?>" alt="Indonesia" style="width: 20px; height: 20px; <?= $is_indonesian ? 'filter: grayscale(100%);' : '' ?>" class="mr-2"> Indonesia
                        </a>
                        <a href="<?= $is_english ? '#' : $english_url ?>" class="dropdown-item <?= $is_english ? 'disabled' : '' ?>" <?= $is_english ? 'onclick="return false;"' : '' ?>>
                            <img src="<?= base_url('assets-baru/img/en.png') ?>" alt="English" style="width: 20px; height: 20px; <?= $is_english ? 'filter: grayscale(100%);' : '' ?>" class="mr-2"> English
                        </a>
                    </div>
                </li>
            </ul>



        </div>
    </nav>
</div>




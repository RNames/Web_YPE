<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- ========== header end============= -->
<div class="inner-banner-section" style="background-image: url(<?= base_url('assets/images/destination-event.jpg') ?>);">
    <img src="<?= base_url('assets/images/contact_us.jpg') ?>" alt="A view of a city with a bridge" style="display: none;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10 col-sm-12">
                <div class="breadcrumb-area">
                    <h2>
                        <?= $language == 'id' ? $service['head_title'] : $service['head_title'] ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-wrapper sec-mar">
    <article aria-label="article" id="post-28" class="post-28 page type-page status-publish hentry">
        <div class="inner-post">
            <div data-elementor-type="wp-page" data-elementor-id="28" class="elementor elementor-28">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-aa8649e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="aa8649e" data-element_type="section" style="margin-top: 60px !important;">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c7b2d8" data-id="7c7b2d8" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-ef6b795 elementor-widget elementor-widget-astrip_heading" data-id="ef6b795" data-element_type="widget" data-widget_type="astrip_heading.default">
                                    <div class="elementor-widget-container">


                                        <div class=" justify-content-center">
                                            <div class="section-title1">
                                                <p style="color:black !important;margin-top: 20px !important;font-family: 'Open Sans' !important; font-weight: 700; font-size: 30px; line-height: 1.4;">
                                                    <?= $language == 'id' ? $service['title_id'] : $service['title_en'] ?>
                                                </p>
                                                <div class="heading-ribbon flex justify-center">
                                                    <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#086B7D"></path>
                                                        <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#086B7D"></path>
                                                        <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#086B7D"></path>
                                                        <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#086B7D"></path>
                                                        <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#086B7D"></path>
                                                        <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#086B7D"></path>
                                                        <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                                        <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                                        <defs>
                                                            <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#086B7D"></stop>
                                                                <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                            </linearGradient>
                                                            <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="white"></stop>
                                                                <stop offset="1" stop-color="#086B7D"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <p style="margin-top: 20px;text-align:center;font-family:'Open Sans';font-size: 18px; line-height: 24px;font-weight: 500;text-transform:none">
                                                    <?= $language == 'id' ? $service['desc_id'] : $service['desc_en'] ?>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                

                <!-- Mice Start -->
                <div class="container1 reverse">
                    <div class="text-section">
                        <h2 style="color: #333; font-family: Open Sans, Arial, sans-serif; line-height: 1.7em; font-weight: 700; font-size: 24px;">Incentives Tour</h2>
                        <p>
                            <?= $language == 'en' ? 'Planning a <strong>conference or meeting in Europe?</strong> At Your Private Europe (YPE), we are experts in providing <strong>tailored MICE solutions</strong> designed to meet your corporate needs, whether it’s for a small meeting or a large-scale event.' : 'Sedang merencanakan <strong>Incentives Group Tour ke Eropa?</strong> Di Your Private Europe (YPE), kami ahli dalam menyusun solusi <strong>private dan group tour</strong> yang disesuaikan dengan kebutuhan Anda, baik itu untuk travel agents maupun perusahaan besar yang ingin memotivasi <strong>top performer.</strong>'; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'We will collaborate with you to create a program that fits your goals and budget. The aim? To deliver a seamless and impactful event that aligns with your brand’s values. From <strong>agenda planning and venue selection to transportation, accommodation, and audiovisual systems,</strong> we manage all aspects of your event.' : 'Kami akan bekerja sama dengan Anda untuk membuat program perjalanan yang sesuai dengan anggaran dan keinginan. Tujuannya? Memberikan pengalaman yang memotivasi dan menginspirasi tim atau klien Anda. Mulai dari <strong>itinerary dan tiket pesawat, hingga pengaturan akomodasi, venue, dan logistik lainnya,</strong> kami siap menangani semua aspek perjalanan.'; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'Our team will ensure every detail, such as <strong>refreshments and staffing</strong>, is perfectly organized, ensuring a smooth and successful event. Everything is crafted to provide a <strong>stress-free experience</strong> that leaves a lasting impression on your attendees.' : 'Tim kami juga akan memastikan setiap detail, seperti <strong>F&B dan staffing</strong>, diatur dengan sempurna agar perjalanan Anda berjalan lancar tanpa hambatan. Semua dibuat untuk memberikan pengalaman yang <strong>memotivasi dan meninggalkan kesan positif pada peserta.</strong>'; ?>
                        </p>

                    </div>
                    <div class="image-section">
                        <img src="<?= base_url('assets/images/mice/mice1.jpg') ?>" alt="Event Management">
                    </div>
                </div>

                <div class="container1">
                    <div class="text-section" style="margin-left: 20px;">
                        <h2 style="color: #333; font-family: Open Sans, Arial, sans-serif; line-height: 1.7em; font-weight: 700; font-size: 24px;">
                        <?= $language == 'en' ? 'Exhibitions & Trade Shows' : 'Event Management & Logistics'; ?>
                        </h2>
                        <p>
                            <?= $language == 'en' ? 'Planning an <strong>event in Europe</strong>? Let YPE handle the details. Whether it’s a <strong>gala dinner, product launch, or company party</strong>, we manage every step from planning to execution. We specialize in delivering <strong>end-to-end solutions</strong>, ensuring that every element of your event is handled with precision.' : 'Merencanakan event di Eropa? Nggak usah pusing. Di Your Private Europe (YPE), kami siap bantu Anda mulai dari perencanaan hingga eksekusi. Kami paham setiap detail penting, apapun jenis acaranya entah itu <strong>Gala Dinner, Brand/Product Launching, atau Company Party</strong> kami urus semuanya dari awal sampai akhir.'; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'From selecting the ideal <strong>venue</strong> to arranging <strong>accommodations, transportation, and logistics,</strong> our experienced event staff ensures everything runs smoothly. Need themed <strong>F&B options</strong> or personalized <strong>gifts for guests?</strong> We’ve got you covered.' : 'Kami percaya pada cara kerja<strong> end-to-end,</strong> di mana setiap aspek event Anda kami lihat secara menyeluruh. Mulai dari venue, akomodasi, hingga pengaturan transportasi dan logistik, semua dikelola secara <strong>detail</strong> dan <strong>profesional</strong>. Kami juga menyediakan event staffing yang berpengalaman, siap mengelola acara Anda dengan mulus.'; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'With YPE, your <strong>event will be seamless, memorable, and stress-free</strong>, leaving a lasting impression on all attendees.' : 'Butuh F&B yang sesuai dengan tema acara? Kami siap. Mau ide gifts & teasers untuk para tamu? Kami juga punya banyak opsi. Dengan pengalaman kami, acara Anda akan terasa <strong>seamless</strong> dan <strong>bebas dari kendala.</strong>'; ?>
                        </p>

                    </div>
                    <div class="image-section">
                        <img src="<?= base_url('assets/images/mice/mice2.jpg') ?>" alt="Event Management">
                    </div>
                </div>

                <div class="container1 reverse">
                    <div class="text-section">
                        <h2 style="color: #333; font-family: Open Sans, Arial, sans-serif; line-height: 1.7em; font-weight: 700; font-size: 24px;">Fair, Expo & Exhibition</h2>
                        <p>
                            <?= $language == 'en' ? 'Planning to host an <strong>exhibition in Europe</strong> or participate in a major trade fair? Your Private Europe (YPE) has the expertise to ensure your success. From <strong>venue selection and accommodation</strong> to designing standout exhibition booths, we take care of it all.' : 'Apakah organisasi Anda ingin mengadakan <strong>pameran di Eropa?</strong> Atau berencana berpartisipasi di <strong>Expo</strong> atau <strong>International Trade Fair?</strong> Dengan pengalaman dan keahlian yang kami miliki, Your Private Europe (YPE) siap membantu Anda mewujudkannya.'; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'Our services include comprehensive <strong>branding solutions</strong>, <strong>signage</strong>, and advanced <strong>lighting installations</strong> to make your booth stand out. We also manage technical requirements like <strong>internet</strong> and <strong>electrical setup</strong>, so you can focus on delivering your presentation and engaging with attendees.' : 'Kami siap membantu dari awal hingga akhir. Mulai dari <strong>venue, akomodasi, hingga pembangunan exhibition stand,</strong> semua ditangani dengan teliti. Selain itu, kami juga menawarkan solusi lengkap untuk <strong>branding, signage, serta instalasi lighting dan efek khusus lainnya</strong> yang akan membuat stand Anda menonjol.'; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'With YPE, your <strong>exhibition will be executed flawlessly</strong>, ensuring you make a lasting impression at every event.' : 'Tak perlu khawatir soal kebutuhan teknis seperti internet dan jaringan listrik, karena semua logistik <strong>kami tangani secara menyeluruh.</strong> Anda hanya perlu fokus pada presentasi dan konten, sementara kami urus sisanya.'; ?>
                        </p>

                    </div>
                    <div class="image-section">
                        <img src="<?= base_url('assets/images/mice/mice3.jpg') ?>" alt="Event Management">
                    </div>
                </div>

                <div class="container1">
                    <div class="text-section">
                        <h2 style="color: #333; font-family: Open Sans, Arial, sans-serif; line-height: 1.7em; font-weight: 700; font-size: 24px;">Corporate Group Tour</h2>
                        <p>
                            <?= $language == 'en' ? 'Organizing a <strong>private group tour</strong> for your company? Don’t settle for ordinary. YPE offers <strong>tailor-made corporate tours</strong> that combine business and leisure, ensuring a productive yet enjoyable experience.' : 'Sedang merencanakan <strong>group tour private ke luar negeri</strong> bersama orang-orang kantor? Jangan terburu-buru pesan tiket! Kami bisa menjadikan <strong>pengalaman group tour Anda lebih baik</strong> dengan memberikan rekomendasi hotel terbaik, mengatur rute perjalanan tercepat, dan mengorganisir destinasi wisata terbaik di sela-sela agenda bisnis.'; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'From recommending the best <strong>hotels</strong> and optimizing <strong>travel routes</strong> to organizing <strong>sightseeing excursions</strong>, our team ensures every detail is perfect. Whether it’s <strong>team-building activities</strong> or <strong>benchmarking visits,</strong> our services cater to a wide range of corporate needs.' : 'Mulai dari kegiatan <strong>team building hingga studi banding</strong>, kami memiliki pengalaman dalam melayani berbagai jenis perusahaan, mulai dari perusahaan swasta hingga organisasi pemerintah. Dengan layanan <strong>Incentive Group Tour</strong> kami, Anda dapat memastikan bahwa setiap aspek perjalanan Anda akan dirancang dengan teliti untuk memenuhi kebutuhan dan tujuan Anda. '; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'Start your journey with us today for an <strong>unforgettable group tour experience</strong> that balances work and relaxation seamlessly.' : 'Hubungi kami sekarang untuk memulai perjalanan menuju <strong>pengalaman wisata yang tak terlupakan!</strong>'; ?>
                        </p>
                    </div>
                    <div class="image-section">
                        <img src="<?= base_url('assets/images/mice/mice4.jpg') ?>" alt="Event Management">
                    </div>
                </div>

                <div class="container1 reverse">
                    <div class="text-section">
                        <h2 style="color: #333; font-family: Open Sans, Arial, sans-serif; line-height: 1.7em; font-weight: 700; font-size: 24px;">Site Visit & Team Building</h2>
                        <p>
                            <?= $language == 'en' ? 'Looking to organize a <strong>site visit, off-site training, or team-building event in Europe?</strong> Trust Your Private Europe (YPE) to bring your vision to life. With our creativity and expertise, we design <strong>activities that inspire, motivate, and rejuvenate</strong> your team.' : 'Ingin mengadakan <strong>Site Visit, Off-Site Training, atau Team Building</strong> di Eropa bersama karyawan Anda? Percayakan acara tersebut kepada <strong>Your Private Europe (YPE).</strong> Dengan pengalaman dan kreativitas kami yang luas, kami siap membantu menyusun dan mengorganisir aktivitas yang tepat untuk memotivasi dan menyegarkan tim Anda.'; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'From selecting <strong>unique venues</strong> to arranging <strong>stimulating activities</strong>, we tailor the experience to your company’s goals and budget. Let us handle the logistics—transportation, accommodation, and event coordination are all managed professionally, allowing you to focus on achieving your objectives.' : 'Kami memahami pentingnya memberikan <strong>pengalaman yang berkesan bagi karyawan,</strong> dan kami akan bekerja sama dengan Anda untuk memastikan acara Anda sesuai dengan budget dan tujuan perusahaan. Mulai dari pemilihan venue yang unik hingga aktivitas yang memacu semangat, kami siap mewujudkannya.'; ?>
                        </p>

                        <p>
                            <?= $language == 'en' ? 'Let us transform your event into an <strong>inspiring and memorable experience</strong> that will leave a lasting impact on your team.' : 'Tidak perlu khawatir soal detail teknis—kami handle semuanya. Mulai dari pengaturan <strong>transportasi, logistik, hingga pemilihan pembicara, semua diatur dengan profesional</strong>. Jadi, Anda bisa fokus pada hasil yang ingin dicapai, sementara kami urus sisanya.'; ?>
                        </p>

                    </div>
                    <div class="image-section">
                        <img src="<?= base_url('assets/images/mice/mice5.jpg') ?>" alt="Event Management">
                    </div>
                </div>


                <style>
                    .container1 {
                        display: flex;
                        flex-direction: row;
                        max-width: 1200px;
                        margin: 50px auto;
                        box-shadow: 0px 2px 18px 0px rgba(0, 0, 0, 0.3);
                        border-radius: 10px;
                        overflow: hidden;
                    }

                    .container1.reverse {
                        flex-direction: row-reverse;
                    }

                    .container1.reverse .text-section {
                        flex-direction: row-reverse;
                        flex: 1;
                        background-color: #fff;
                        padding: 30px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        padding-left: 50px;
                        text-align: justify;
                    }

                    .container1.reverse .text-section h2 {
                        font-size: 24px;
                        margin-bottom: 20px;
                        font-weight: 600;
                        color: #333;
                        font-family: 'Open Sans', Arial, sans-serif;
                        line-height: 1.7em;
                    }

                    .container1.reverse .text-section p {
                        font-size: 16px;
                        margin-bottom: 15px;
                        line-height: 1.6;
                        font-family: 'Open Sans', Arial, sans-serif;
                        color: #333;
                    }

                    .container1 .text-section ul {
                        list-style-type: disc;
                        padding-left: 20px;
                    }

                    .container1.reverse .text-section ul li {
                        margin-bottom: 10px;
                        font-weight: 500;
                        font-family: 'Open Sans', Arial, sans-serif;
                    }



                    .text-section {
                        flex: 1;
                        background-color: #fff;
                        margin-right: 0;
                        padding: 30px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        text-align: justify;
                        padding-right: 50px;
                        font-weight: 500;
                    }

                    .text-section h2 {
                        font-size: 24px;
                        margin-bottom: 20px;
                        font-weight: 600;
                        color: #333;
                        font-family: 'Open Sans', Arial, sans-serif;
                        line-height: 1.7em;
                    }

                    .text-section p {
                        font-size: 16px;
                        margin-bottom: 15px;
                        line-height: 1.6;
                        font-family: 'Open Sans', Arial, sans-serif;
                        color: #333;
                    }

                    .text-section ul {
                        list-style-type: disc;
                        padding-left: 20px;
                    }

                    .text-section ul li {
                        margin-bottom: 10px;
                    }

                    .image-section {
                        flex: 1;
                        padding: 20px;
                        box-sizing: border-box;
                        display: flex;
                        align-items: center;
                        /* Center vertically */
                        justify-content: center;
                        /* Center horizontally (optional if needed) */
                    }

                    .image-section img {
                        width: 100%;
                        height: auto;
                        object-fit: cover;
                        border-radius: 8px;
                    }




                    /* Mobile Styles */
                    @media (max-width: 768px) {

                        .container1,
                        .container1.reverse {
                            flex-direction: column;
                        }

                        .container1.reverse .text-section,
                        .container1 .text-section {
                            order: 2;
                            /* Place text below the image */
                            padding: 20px;
                        }

                        .container1.reverse .image-section,
                        .container1 .image-section {
                            order: 1;
                            /* Place image above the text */
                        }

                        .image-section img {
                            width: 60%;
                            height: auto;
                            display: block;
                            /* Ensure the image is treated as a block-level element */
                            margin: 0 auto;
                        }
                    }
                </style>




                <section class="elementor-section elementor-top-section elementor-element elementor-element-866159c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="866159c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8a3e527" data-id="8a3e527" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-8df599d elementor-widget elementor-widget-egens_instagram_feed" data-id="8df599d" data-element_type="widget" data-widget_type="egens_instagram_feed.default">
                                    <div class="elementor-widget-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </article>
</div>

<?= $this->endSection() ?>
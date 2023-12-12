@extends('layouts.main')
@section('content')


<div id="heading"  style="background: lightgray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content">
                    <h2>News</h2>
                    <span>Event / <a href="/berita">Berita</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row g-4">
        <div class="col-lg-7 col-xl-8 mt-0">
            <div class="position-relative overflow-hidden rounded">
                <img src="img/Padar Island, Indonesia.jpg" class="img-fluid rounded img-zoomin w-100"  alt="">
                <div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">
                    <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute read</a>
                    <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                    <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                    <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                </div>
            </div>
            <div class="border-bottom py-3">
                <a href="https://www.detik.com/bali/nusra/d-6388841/lewati-817-anak-tangga-nikmati-keindahan-pulau-padar#:~:text=Melewati%20817%20Anak%20Tangga&text=Ada%20sebanyak%20817%20anak%20tangga,yang%20berkunjung%20ke%20Pulau%20Padar." class="display-4 text-dark mb-0 link-hover">Lewati 817 Anak Tangga Nikmati Keindahan Pulau Padar</a>
            </div>
            <p class="mt-3 mb-4">Pulau Padar menawarkan panorama alam dengan gugusan bukit yang artistik mengelilingi Pulau Padar, hamparan pasir putih dan birunya laut.Untuk sampai ke puncak,
                wisatawan harus trekking melalui jalur setapak yang sudah dibangun oleh Balai Taman Nasional Komodo.<br/>
                <br>
                Trekking sebaiknya dilakukan pada jam 07.00-09.00 pagi, karena jalur trekking yang panjang sekaligus menantang.
                Untuk mencapai puncak, wisatawan harus trekking selama kurang lebih 45 menit. Bisa jadi membutuhkan waktu yang lebih jika kondisi di Pulau Padar cukup panas.
            </p>
            <div class="bg-light p-4 rounded">
                <div class="news-2">
                    <h3 class="mb-4">Top Story</h3>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="rounded overflow-hidden">
                            <img src="img/Nasi goreng.jpg" class="img-fluid rounded img-zoomin w-100" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <a href="https://www.liputan6.com/regional/read/5104563/nasi-goreng-kuliner-nusantara-yang-mendunia-ternyata-tidak-berasal-dari-indonesia?page=2" class="h3">Nasi Goreng, Kuliner Nusantara yang Mendunia Ternyata Tidak Berasal dari Indonesia</a>
                            <p class="mb-0 fs-5"><i class="fa fa-clock"> 20 minute read</i> </p>
                            <p class="mb-0 fs-5"><i class="fa fa-eye"> 3.5k Views</i></p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="rounded overflow-hidden">
                            <img src="images/Sambal terasi.jpg" class="img-fluid rounded img-zoomin w-100" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <a href="https://www.suara.com/lifestyle/2023/07/07/201000/perbedaan-terasi-indonesia-dengan-terasi-malaysia-punya-siapa-yang-aromanya-lebih-menyengat" class="h3">Perbedaan Terasi Indonesia dengan Terasi Malaysia, Punya Siapa yang Aromanya Lebih Menyengat?</a>
                            <p class="mb-0 fs-5"><i class="fa fa-clock"> 06 minute read</i> </p>
                            <p class="mb-0 fs-5"><i class="fa fa-eye"> 3.5k Views</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xl-4">
           <div class="bg-light rounded p-4 pt-0">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="rounded overflow-hidden">
                            <img src="images/Bukit asah.jpg" class="img-fluid rounded img-zoomin w-100" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <a href="https://travel.detik.com/domestic-destination/d-7078867/nikmati-keindahan-laut-dari-ketinggian-di-bukit-asah-cantik-tak-ada-duanya" class="h6">Nikmati Keindahan Laut dari Ketinggian di Bukit Asah</a>
                            <p class="fs-5 mb-0"><i class="fa fa-clock"> 16 minute read</i> </p>
                            <p class="fs-5 mb-0"><i class="fa fa-eye"> 3.5k Views</i></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-4 align-items-center">
                            <div class="col-5">
                                <div class="overflow-hidden rounded">
                                    <img src="images/Bunaken.jpg" width="150" height="100" class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="features-content d-flex flex-column">
                                    <a href="#" class="h6">Bunaken Masih Jadi Primadona Wisata Manado</a>
                                    <small><i class="fa fa-clock"> 25 minute read</i> </small>
                                    <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-4 align-items-center">
                            <div class="col-5">
                                <div class="overflow-hidden rounded">
                                    <img src="images/Nusa Penida.jpg" width="150" height="100" class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="features-content d-flex flex-column">
                                    <a href="https://www.liputan6.com/hot/read/5306961/18-wisata-alam-indonesia-terpopuler-yang-mendunia-wajib-dikunjungi?page=4" class="h6">18 Wisata Alam Indonesia Terpopuler yang Mendunia, Wajib Dikunjungi</a>
                                    <small><i class="fa fa-clock"> 10 minute read</i> </small>
                                    <small><i class="fa fa-eye"> 4.4k Views</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-4 align-items-center">
                            <div class="col-5">
                                <div class="overflow-hidden rounded">
                                    <img src="images/lumba.jpg" width="150" height="100" class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="features-content d-flex flex-column">
                                    <a href="https://www.liputan6.com/regional/read/5254422/6-destinasi-wisata-melihat-lumba-lumba-di-indonesia" class="h6">6 Destinasi Wisata Melihat Lumba-Lumba di Indonesia</a>
                                    <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                    <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-4 align-items-center">
                            <div class="col-5">
                                <div class="overflow-hidden rounded">
                                    <img src="images/Museum Angkut.jpg" width="150" height="100" class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="features-content d-flex flex-column">
                                    <a href="https://www.detik.com/jatim/wisata/d-7080033/museum-angkut-daya-tarik-fasilitas-dan-harga-tiket-masuk" class="h6">Museum Angkut: Daya Tarik, Fasilitas, dan Harga Tiket Masuk</a>
                                    <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                    <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-4 align-items-center">
                            <div class="col-5">
                                <div class="overflow-hidden rounded">
                                    <img src="img/NasiCampur.jpg" width="150" height="100" class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="features-content d-flex flex-column">
                                    <a href="https://www.liputan6.com/lifestyle/read/5414870/4-tempat-makan-nasi-campur-terkenal-di-bali-enaknya-dijamin-nagih" class="h6">4 Tempat Makan Nasi Campur Terkenal di Bali, Enaknya Dijamin Nagih</a>
                                    <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                    <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-4 align-items-center">
                            <div class="col-5">
                                <div class="overflow-hidden rounded">
                                    <img src="images/Gado.jpg" width="150" height="100" class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="features-content d-flex flex-column">
                                    <a href="https://www.liputan6.com/regional/read/5328006/asal-usul-gado-gado-kuliner-indonesia-nan-mengguggah-selera" class="h6">Asal Usul Gado-Gado, Kuliner Indonesia nan Mengguggah Selera</a>
                                    <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                    <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>


    <div id="latest-blog">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content">
                    <h2>Event in Bali</h2><br>
                    <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="blog-post">
                    <div class="blog-thumb">
                        <img src="img/Ogoh.jpg" height="232" alt="" >
                    </div>
                    <div class="blog-content">
                        <div class="content-show">
                            <h4><a href="single-post.html">Pawai Ogoh-Ogoh, Kota Denpasar</a></h4>
                            <span>21, Maret 2023</span>
                        </div>
                        <div class="content-hide">
                            <p>Merupakan iringan boneka raksasa yang diarak keliling desa atau wilayah tertentu menjelang malam sebelum Hari Raya Nyepi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="blog-post">
                    <div class="blog-thumb">
                        <img src="img/BaliSpirit.jpg" height="232" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-show">
                            <h4><a href="single-post.html">Bali Spirit Festival, Kabupaten Gianyar</a></h4>
                            <span>4-7 Mei 2023</span>
                        </div>
                        <div class="content-hide">
                            <p>Merupakan festival tahunan internasional yoga, musik, dan tari. Festival ini mewujudkan mantra inti Hinduisme Bali, Tri Hita Karana, untuk hidup selaras dengan lingkungan spiritual, sosial, dan alam, melalui yoga, tari, musik dunia, dan penyembuhan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="blog-post">
                    <div class="blog-thumb">
                        <img src="img/ubud food.jpg" height="232" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-show">
                            <h4><a href="single-post.html">Ubud Food Festival, Kabupaten Gianyar</a></h4>
                            <span>2-4 Juni 2023</span>
                        </div>
                        <div class="content-hide">
                            <p>Merupakan perayaan keragaman lanskap kuliner Indonesia, serta membawa sejarah kuliner, ide-ide segar dan inovatif, perubahan serta dinamis industri kuliner, dan juga kisah di balik piring-piring makanan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="blog-post">
                    <div class="blog-thumb">
                        <img src="img/Penglipuran village, Bangli, Bali.jpg" height="232" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-show">
                            <h4><a href="single-post.html">Bali Beyond & Travel Fair, Kabupaten Badung</a></h4>
                            <span>14-17 Juni 2023</span>
                        </div>
                        <div class="content-hide">
                            <p>Merupakan pameran perjalanan internasional terkemuka di Indonesia. Acara ini bertujuan memperkenalkan produk pariwisata Indonesia secara global dengan mengundang operator tur ke seluruh dunia sebagai pembeli dan menghubungkan mereka dengan pemasok pariwisata sebagai penjual.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="blog-post">
                    <div class="blog-thumb">
                        <img src="img/Luxury Hotels & Resorts _ The Ritz-Carlton.jpg" height="232" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-show">
                            <h4><a href="single-post.html">Gianyar Layang-Layang Festival, Kabupaten Gianyar</a></h4>
                            <span>22-23 Juli 2023</span>
                        </div>
                        <div class="content-hide">
                            <p>Merupakan event lomba layang layang tradisional Bali yang diselenggarakan oleh Belega Layang Layang Club (BALAC).</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="blog-post" width="80">
                    <div class="blog-thumb">
                        <img src="img/Ubud Village Festival 2022 Dibuka Menparekraf, Hadirkan Deretan Musisi Jazz Tanah Air.jpg" height="232" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-show">
                            <h4><a href="single-post.html">Ubud Village Jazz Festival, Kabupaten Gianyar</a></h4>
                            <span>28-29 Juli 2023</span>
                        </div>
                        <div class="content-hide">
                            <p>Merupakan festival musik yang lahir dari idealisme komunitas Jazz di Bali. Selain menjadi festival musik, acara ini juga hadir sebagai upaya mewujudkan daya tarik wisata baru di Bali.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 my-5" style="background: linear-gradient(rgba(202, 203, 185, 1), rgba(202, 203, 185, 1));">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h1 class="mb-4 text-primary">Newsers</h1>
                <a href="https://kumparan.com/iqbalpras1211/menikmati-suasana-dataran-tinggi-wonosobo-21IrcRFIwnJ/full" class="h1 mb-4">Menikmati Suasana Dataran Tinggi Wonosobo</a>
                <br>
                <br/>
                <p class="text-dark mb-4 pb-2">Kebun teh Panama merupakan salah satu kebun teh yang terletak di Wonosobo dan dekat dengan telaga Menjer. Keindahan alam dengan suasana pemandangan kebun teh yang hijau membuat mata tertuju takjub melihat cantiknya alam wonosobo.
                    <br>
                    <br/>
                    Dengan membayar tiket masuk seharga sepuluh ribu rupiah, pengunjung dapat menikmati indah dan luasnya kebun teh Panama. Agar dapat menikmati view yang cerah dan sangat indah, para wisatawan sebaiknya datang sekitar jam 7 hingga 8 pagi. Para pengunjung juga dapat melihat gagahnya gunung Sumbing dari Panama ini.
                    <br/>
                    <br>
                    Kebun teh Panama juga sudah disediakan jalur dan spot untuk berfoto, jalur kayu yang berbentuk jembatan memanjang sepanjang kebun teh untuk memudahkan pengunjung menikmati indahnya suasana kebun teh ini.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="rounded">
                    <img src="images/Kebun Teh.jpg" class="img-fluid rounded w-100 rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>


@endsection

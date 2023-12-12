@extends('layouts.main')
@section('content')


<div class="banner">
    <video autoplay muted loop>
        <source src="images/Cinematic Travel Video.mp4" style="width: 100%; position:relative" type="video/mp4">
    </video>
</div>
<div class="container mb-5">
    <div id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h2>Tour Guide</h2>
                        <br>
                        <h5>Pemandu wisata kami akan menuntun dan memberikan informasi mengenai suatu tempat yang akan anda kunjungi selama perjalanan wisata.</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/orang4-removebg-preview.png" class="img-zoomin" width="220" height="220" style="border-radius: 50%" alt="" >
                        </div>
                        <h3>Enzo Declan</h3>
                        <p>Tour Guide</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/orang1-removebg-preview.png" class="img-zoomin" width="220" height="220" style="border-radius: 50%" alt="" >
                        </div>
                        <h3>Aurora Emersyn</h3>
                        <p>Tour Guide</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/orang2.jpg" class="img-zoomin" width="220" height="220" style="border-radius: 50%" alt="" >
                        </div>
                        <h3>Maxson Emerey Daire</h3>
                        <p>Tour Guide</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/orang5.jpg" class="img-zoomin" width="220" height="220" style="border-radius: 50%" alt="" >
                        </div>
                        <h3>Freya Adalynn</h3>
                        <p>Tour Guide</p>
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
                <h1 class="mb-4 text-primary">Broken Beach</h1>
                <br>
                <p class="text-dark mb-4 pb-2">Wisata Nusa Penida Broken Beach berada di Banjar Sumpang, Bunga Mekar, Nusa Penida, Bali. Anda harus menyebrangi lautan terlebih dahulu untuk sampai di pantai ini. Rutenya dimulai dari pantai Sanur dan berlabuh di pelabuhan Nusa Penida.
                    <br>
                    <br>
                    Meski dinamai dengan pantai, lokasi ini tidak memiliki pasir putih yang kamu gunakan untuk bermain atau berlari-lari. Di sini membentang tebing terjal yang sangat menantang untuk dijelajahi.
                    <br>
                    <br>
                    Kawasan perbukitan di kawasan ini sebagian besar berumput dan bersemak hijau tebal. Kamu bisa menjelajahi kawasan ini sesudah puasa berfoto-foto dengan latar belakang tebing berlubang.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="rounded">
                    <img src="images/Bali.jpg" class="img-fluid rounded img-zoomin w-100 rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="heading-section">
        <h2>Destination Populer</h2>
        <br>
        <h5>Pemandu wisata kami akan menuntun dan memberikan informasi mengenai suaty tempat yang akan anda kunjungi selama perjalanan wisata.</h5>
    </div>

    <div class="hero">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="img/Bromo.jpg" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Gunung Bromo</b></h5>
                  <p class="card-text">Gunung Bromo merupakan salah satu gunung dari lima gunung yang terdapat di komplek
                    Pegunungan Tengger di laut pasir. Daya tarik gunung ini adalah merupakan gunung yang masih aktif dan
                    dapat dengan mudah didaki/dikunjungi.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/G.merapi.jpg" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Gunung Merapi</b></h5>
                  <p class="card-text">Gunung Merapi merupakan gunungapi yang dapat dimasukkan dalam tipe vulkanian lemah
                    dengan ciri khas adanya peranan kubah lava dalam tiap-tiap erupsinya. Magma yang sudah sampai di permukaan
                    dapat mengalir turun ke lereng atau langsung membeku di puncak.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/Kelingking.jpg" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Pantai Kelingking</b></h5>
                  <p class="card-text">Pantai Kelingking terletak di Desa Bunga Mekar, Kecamatan Nusa Penida. Pantai Kelingking
                    berada pada posisi di ujung selatan Nusa Penida. Suguhan pemandangan tebing yang menjorok ke laut dengan
                    pantai pasir putihnya, sangat mempesona dan menjadi daya tarik untuk dikunjungi.</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card h-100">
                  <img src="img/kawah_ijen.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><b>Kawah Ijen</b></h5>
                    <p class="card-text">Gunung Ijen adalah sebuah gunung berapi yang terletak di perbatasan Kabupaten Banyuwangi
                        dan Kabupaten Bondowoso, Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.386 mdpl.
                        Gunung Ijen terakhir meletus pada tahun 1999. Salah satu fenomena alam yang paling terkenal dari
                        Gunung Ijen adalah blue fire (api biru) di dalam kawah yang terletak di puncak gunung tersebut.</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                  <img src="img/Komodo National Park.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><b>Komodo National Park</b></h5>
                    <p class="card-text">Pada tahun 1980, taman nasional ini didirikan untuk melindungi komodo dan habitatnya.
                        Di taman nasional ini terdapat 277 spesies hewan yang merupakan perpaduan hewan yang berasal dari Asia
                        dan Australia, yang terdiri dari 32 spesies mamalia, 128 spesies burung, dan 37 spesies reptilia bersama
                        dengan komodo</p>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                  <img src="img/background.jpg" height="240" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><b>Raja Ampat</b></h5>
                    <p class="card-text">Kepulauan Raja Ampat berada di bagian paling barat Papua dan membentang di area seluas
                        kurang lebih 4,6 juta hektar. Kabupaten Raja Ampat terdiri dari 4 pulau besar yaitu Pulau Waigeo,
                        Batanta, Salawati dan Misool, dan 1.847 pulau-pulau kecil lainnya.Wilayah perairan Raja Ampat adalah
                        salah satu destinasi diving terbaik di dunia. </p>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonails">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>New Destination</h2>
                    <br>
                    <p> Destinasi wisata terbaru dari AnyTrip siap untuk Menemani Liburan Anda di Akhir Tahun</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="testimonails-slider">
                  <ul class="slides">
                    <li>
                        <div class="testimonails-content">
                            <table>
                                <tr>
                                    <td>
                                        <img src="images/toba.jpg" class="img-zoomin" width="270" height="250" alt="" >
                                        <br>
                                        <h6>Danau Toba</h6>
                                    </td>
                                    <td>
                                        <img src="images/sarangan.jpg" class="img-zoomin" width="270" height="250" style="margin-left: 50px" alt="" >
                                        <br>
                                        <h6>Telaga Sarangan</h6>
                                    </td>
                                    <td>
                                        <img src="images/telaga warna.jpg" class="img-zoomin" width="270" height="250" style="margin-left: 50px" alt="" >
                                        <br>
                                        <h6>Telaga Warna</h6>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <h6>AnyTrip<a href="#">Destination</a></h6>
                        </div>
                    </li>
                    <li>
                        <div class="testimonails-content">
                            <table>
                                <tr>
                                    <td>
                                        <img src="images/papuma beach.jpg" class="img-zoomin" width="270" height="250" alt="" >
                                        <br>
                                        <h6>Pantai Papuma</h6>
                                    </td>
                                    <td>
                                        <img src="images/Pantai ujung genteng.jpg" class="img-zoomin" width="270" height="250" style="margin-left: 50px" alt="" >
                                        <br>
                                        <h6>Pantai Ujung Genteng</h6>
                                    </td>
                                    <td>
                                        <img src="images/Menganti beach Kebumen, Central Java.jpg" class="img-zoomin" width="270" height="250" style="margin-left: 50px" alt="" >
                                        <br>
                                        <h6>Pantai Menganti</h6>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <h6>AnyTrip<a href="#">Destination</a></h6>
                        </div>
                    </li>
                    <li>
                        <div class="testimonails-content">
                            <table>
                                <tr>
                                    <td>
                                        <img src="images/kebun apel.jpg" class="img-zoomin" width="270" height="250" alt="" >
                                        <br>
                                        <h6>Kebun Apel Malang</h6>
                                    </td>
                                    <td>
                                        <img src="images/pinus.jpg" class="img-zoomin" width="270" height="250" style="margin-left: 50px" alt="" >
                                        <br>
                                        <h6>Hutan Pinus Pengger</h6>
                                    </td>
                                    <td>
                                        <img src="images/Bunaken.jpg" class="img-zoomin" width="270" height="250" style="margin-left: 50px" alt="" >
                                        <br>
                                        <h6>Bunaken Island</h6>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <h6>AnyTrip<a href="#">Destination</a></h6>
                        </div>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

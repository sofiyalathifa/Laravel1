@extends('layouts.main')
@section('content')

<div id="heading"  style="background: lightgray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content">
                    <h2>Wisata</h2>
                    <span>Destinasi <a href="/destination">Wisata</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="heading-content">
                <h2>Destination</h2><br>
                <p>Selamat datang di halaman Destination wisata dari AnyTrip. Di sini, Anda akan menemukan informasi terbaru dan terlengkap tentang tempat-tempat wisata menakjubkan di Indonesia. Kami menawarkan panduan lengkap tentang cara menuju ke destinasi wisata populer serta tempat-tempat tersembunyi yang belum banyak diketahui orang. Jadi, jika Anda sedang merencanakan liburan, jangan ragu untuk mengunjungi halaman travel blog Indonesia AnyTrip.com. Selamat menikmati petualangan wisata yang tak terlupakan!</p>
                <br>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($data as $item)

        <div class="col">
          <div class="card h-100">
            <img src="{{ asset('/storage/posts/'.$item->image) }}" class="rounded" style="width:364px" height="200px">
            <div class="card-body">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
                <a href ="{{ route('posts.show',$item->id) }}" class="btn btn-sm btn-dark">Lihat destinasi</a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col">
            <div class="card h-100">
              <img src="img/Wae Rebo.jpg" class="rounded" style="width:364px" height="200px">
              <div class="card-body">
                <h5 class="card-title">Wae Rebo</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">
                  <a href ="#" class="btn btn-sm btn-dark">Lihat destinasi</a>
              </div>
            </div>
        </div>
    </div>



    <div id="timeline-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h2> Our Popular Destination</h2>
                        <br>
                        <p>Liburan bersama keluarga, solo traveling, atau bertualang bersama teman, berikut adalah beberapa destinasi yang bisa kamu kunjungi :</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <div class="timeline-thumb">
                        <div class="thumb">
                            <img src="images/Pantai Pangasan Pacitan, Ketenangan Alam Yang Dihiasi Batuan Karang - NativeIndonesia_com.jpg" width="150" height="120" alt="">
                        </div>
                        <div class="overlay">
                            <div class="timeline-caption">
                                <a href="#"><h4>Pantai Pangasan</h4></a>
                                <p>Pacitan</p>
                             </div>
                         </div>
                     </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="timeline-thumb">
                        <div class="thumb">
                            <img src="images/papuma beach.jpg" width="150" height="120" alt="">
                        </div>
                        <div class="overlay">
                            <div class="timeline-caption">
                                <a href="#"><h4>Pantai Papuma</h4></a>
                                <p>Jember</p>
                             </div>
                         </div>
                     </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="timeline-thumb">
                        <div class="thumb">
                            <img src="images/Menganti beach Kebumen, Central Java.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="timeline-caption">
                                <a href="#"><h4>Pantai Menganti</h4></a>
                                <p>Kebumen</p>
                             </div>
                         </div>
                     </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="timeline-thumb">
                        <div class="thumb">
                            <img src="images/🔥 Tumpak Sewu means _a thousand waterfall_ in Javanese and it's the name of a 120 meter high waterfall, located in Sidomulyo Village, East Java, Indonesia.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="timeline-caption">
                                <a href="#"><h4>Tumpak Sewu</h4></a>
                                <p>Lumajang</p>
                             </div>
                         </div>
                     </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="timeline-thumb">
                        <div class="thumb">
                            <img src="images/Kawah Rengganis Ciwidey.jpg" width="150" height="120" alt="">
                        </div>
                        <div class="overlay">
                            <div class="timeline-caption">
                                <a href="#"><h4>Kawah Rengganis</h4></a>
                                <p>Bandung</p>
                             </div>
                         </div>
                     </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="timeline-thumb">
                        <div class="thumb">
                            <img src="images/23 Hidden beaches in Jogja (Gunung Kidul) with pristine shores, secret waterfalls, magical flower fields and rugged landscapes!.jpg" width="150" height="120" alt="">
                        </div>
                        <div class="overlay">
                            <div class="timeline-caption">
                                <a href="#"><h4>pantai Jogan</h4></a>
                                <p>Yogyakarta</p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <br>
        <center><h4>AnyTrip<a href="#">Destination</a></h4></center>
    </div>
</div>




  @endsection

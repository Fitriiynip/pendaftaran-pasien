@extends('layouts.app')

@section('content')
    <div class="container">
        <main>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner.jpg" width="100%" height="100%"></img>
                    </div>
                </div>
            </div>

            <!-- Wrap the rest of the page in another container to center all the content. -->


            <div class="px-4 py-5 my-5 text-center">
                <img src="img/logocare.png" alt="" width="250" height="250">
                <h1 class="display-4">Selamat Datang di RS. Immanuel Bandung</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Sebagai salah satu Rumah Sakit Terbaik, Terbesar dan Tertua di kota Bandung
                        yang berdiri Sejak tahun 1910 kami selalu berupaya memberikan pelayanan kesehatan terbaik untuk
                        warga bandung dan sekitarnya, dengan motto "Anda tetap sehat adalah dambaan kami" merupakan tujuan
                        kami agar anda selalu berada dalam kondisi terbaik</p>
                </div>
            </div>
            <!-- Marketing messaging and featurettes
  ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                    <center>
                    <div class="col-lg-4">
                        <img src="img/reg.png" width="140" height="140"></img>

                        <h2>Registrasi Online</h2>
                        <p>Gunakan fitur ini untuk memudahkan registrasi rawat jalan</p>
                        <p><a class="btn btn-primary" href="{{ route('register') }}">Daftar</a></p>
                    </div><!-- /.col-lg-4 -->
                    </center>
                </div><!-- /.row -->



            </div><!-- /.container -->
        </main>

    </div>
@endsection
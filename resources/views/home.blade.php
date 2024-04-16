@extends('nav')
@section('content')
<style>
    body {
        background-color: #F8F6E3;
    }
    .main-title{
        font-weight: bolder;
        text-align: center;
        font-size: 50px;
    }
    .desc-maintitle{
        text-align: center;
        font-family: serif;

    }
    .foto-toko {
        max-width: 100%;
        object-fit: cover;
    }

    .title {
        font-weight: bolder;
        text-align: center;
        margin-top: 100px;
    }

    .desc {
        margin-top: 50px;
        text-align: center;
    }

    .title2 {
        font-weight: bolder;
        text-align: center;
    }

    .content2 {
        margin-top: 100px;
    }

    .barcode {
        display: block;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 100px;
    }
</style>

<!-- Main Content Home -->
<div class="main-container">
    <h1 class="main-title">Welcome to Atma Kitchen</h1>
    <h2 class="desc-maintitle">"We Deserve best cake for you"</h2>
    <img src="img/store.png" class="img-fluid foto-toko" alt="">
    <div class="content">
        <h1 class="title">
            Apa itu Atma Kitchen ?
        </h1>
        <h5 class="desc">
            Atma Kitchen adalah sebuah toko kue yang memukau dengan kelezatan dan keunikan kreasinya. Terletak di pusat kota yang ramai, toko ini menjadi destinasi favorit bagi pecinta kue yang mencari pengalaman gastronomi yang tak terlupakan. Dengan desain interior yang modern namun hangat, Atmosphere Kitchen mengundang para pengunjung untuk merasakan suasana yang menyenangkan saat memilih kue kesukaan mereka.

            Di dalam toko, Anda akan disambut dengan aroma manis yang menggoda dari berbagai macam kue segar yang tersusun rapi di rak. Mulai dari kue tradisional hingga kue modern dengan sentuhan kreatif, setiap produk Atma Kitchen dikerjakan dengan teliti oleh para ahli pastry yang berbakat. Setiap gigitan dari kue-kue mereka adalah pengalaman yang memanjakan lidah, dengan rasa yang kaya dan tekstur yang sempurna.
        </h5>

    </div>
    <div class="content2">
        <h1 class="title2">
            Lokasi Offline Store
        </h1>
        <h1 class="title2">
            Atma Kitchen
        </h1>
        <h5 class="desc">
            Jl. Babarsari No.43, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
        </h5>
        <div>
            <img src="img/barcode.png" class="barcode">
        </div>
    </div>
</div>



@endsection
@extends('guest.app')
@section('title','About')
@section('content')
	<div class="jumbotron jumbotron-fluid bg-info text-white">
  		<div class="container text-center">
    		<h5 class="text-warning">Our Story</h5>
    		<h3 class="text-white">ABOUT SHOPFUN</h3><br>
    		<i class="fa fa-store"></i>
    		<i class="fa fa-store"></i>
    		<i class="fa fa-store"></i>
    		<i class="fa fa-store"></i>
    		<i class="fa fa-store"></i>
  		</div>
	</div>
	<div class="container-fluid">
		<div class="row mt-5">
			<div class="col-md-6 text-center">
				<h6 class="text-warning">Cerita Kami</h6>
				<h4>Sejak 2016</h4>
				<p class="ml-5 mr-5"><i>Menjadi bagian dari industri outfit di Jawa Barat sejak tahun 2016 di lokasi strategis Jl. Cakungsari / Purwadadi 17 Ciamis Jawa Barat, Shopfun menawarkan beragam pilihan pakaian maupun perlengkapan OOTD lainnya secara lengkap dengan harga terjangkau menjadikan Shopfun sebagai salah satu toko populer di jaman millenial ini.</i></p>
			</div>
			<div class="col">
				<img src="{{url('images/murah.png')}}" class="d-block w-80 img-fluid">
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-4">
				<img src="{{url('images/sosial.png')}}" class="d-block w-80 img-fluid">
			</div>
			<div class="col-md-4 text-center">
				<h6 class="text-warning mt-3">Online</h6>
				<h4>Cepat dan Mudah</h4>
				<p><i>Kami membangun web aplikasi ini untuk memudahkan para pecinta shopfun di berbagai provinsi untuk membeli produk  dengan cara yang mudah yaitu online, pesan dari rumah, langsung antar.</i></p>
			</div>
			<div class="col-md-4 text-center">
				<h6 class="text-warning mt-3">Offline</h6>
				<h4>Terlihat dan Menarik</h4>
				<p><i>Shopfun juga menyediakan tempat untuk pecinta Shopfun yang ingin datang langsung ke toko kami, menawarkan pemandangan outfit cantik didalamnya, membuat hati menjadi ingin membelinya.</i></p>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col ml-10">
				<img src="{{url('images/antar.png')}}" class="d-block w-100 img-fluid">
			</div>
			<div class="col-md-6 text-center">
				<h6 class="text-warning mt-3">Order Max</h6>
				<h4>Kapasitas Order</h4>
				<p class="ml-5 mr-5"><i>Dalam shopfun ini tidak dibatasi pembeliannya, kami akan melayani berapapun barang yang dipesan dan akan langsung memprosesnya dengan sigap, jika tidak ada barang yang diinginkan maka kami akan memproduksinya lagi, dan untuk produksi kami akan memproduksi secara besar-besaran.</i></p>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-8 text-center mb-3">
				<h6 class="text-warning mt-3">Gathering</h6>
				<h4>Beri Hadiah Istimewa Yuk</h4>
				<p class="ml-5 mr-5"><i>Shopfun menyediakan beberapa kategori produk yang cocok untuk hadiah ulangtahun, sangat cocok digunakan untuk membuat kado untuk orang tersayang, dengan beberapa produk yang didalamnya terdapat potongan harga yang menarik.</i></p>
			</div>
			<div class="col ml-10 mb-3">
				<img src="{{url('images/cocok.png')}}" class="d-block w-100 img-fluid">
			</div>
		</div>
	</div>
	

@endsection
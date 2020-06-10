@extends('guest.app')
@section('title','Notif')
@section('content')
<div class="container mt-3">
		<div class="jumbotron">
			<h1 class="display-4">Thanks For Order!</h1>
			<p class="lead">Kami Akan Segera Menghubungi Anda Kembali, Untuk Memproses Pemesanan</p><br><br>
			<a class="btn btn-outline-primary" href="{{ route('home') }}">Kembali Ke Halaman Utama</a>
		</div>
</div>
@endsection
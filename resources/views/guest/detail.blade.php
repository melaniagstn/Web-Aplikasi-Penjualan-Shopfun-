@extends('guest.app')
@section('title','Detail')
@section('content')

<div class="container-fluid">
	<div class="row mt-3">
		<!--gambar produk-->
		<div class="col-sm-4">
			<img src="{{url('images/'.$row->file_gambar_produk)}}" class="d-block w-100 img-fluid">
		</div>

		<!--keterangan produk-->
		<div class="col-sm-8 mb-5">
			<h1>{{$row->nama_produk}}</h1>
			<h2 class="text-danger my-3"><small>Rp</small>
				{{ number_format($row->harga_produk,0,',','.')}}
			</h2>
			<p> Kategori : <a href="{{route('kategori',['kategori'=>$row->id_kategori])}}">
				{{$row->kategori->nama_kategori}}
			</a></p>
		<a href="{{route('pesan',['produk'=>$row->id])}}" class="btn btn-warning">Beli Sekarang</a>
		<h4 class="border-bottom pt-3 pb-3">Deskripsi</h4>
		<?= nl2br($row->deskripsi_produk) ?>
		</div>
	</div>
</div>
@endsection

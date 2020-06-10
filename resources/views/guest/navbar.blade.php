<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
	<a href="{{ route('home') }}" class="navbar-brand">
		<img src="{{ url('images/logo-48-putih.png') }}" width="30" height="30"
		class="d-inline-block align-top" alt="Shopfun Logo">
		Shopfun
	</a>

	<button class="navbar-toggler" type="button"
	data-toggle="collapse" data-target="#navbarContent">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarContent">
		<!-- Form Pencarian -->
		<form class="my-2 my-lg-0 mr-auto" action="{{route('search')}}">
			<div class="input-group">
				<input name="keyword" type="text"
				value="{{request()->keyword}}"
				class="form-control" placeholder="Cari...">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary text-success" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>
		<!-- Navigasi Navbar -->
		<ul class="navbar-nav">
			<li class="nav-item {{ request()->is('about*') ? 'active':''}}">
				<a href="{{route('about')}}" class="nav-link">
					<i class="fas fa-user"></i> About</a>
			</li>
			<li class="nav-item dropdown {{ request()->is('kategori*') ? 'active':''}}">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
					<i class="fas fa-list"></i> Kategori
				</a>
				<div class="dropdown-menu dropdown-menu-right">
				@foreach(App\Kategori::orderBy('nama_kategori','asc')->get() as $kat)
					<a class="dropdown-item" href="{{ route('kategori',['kategori'=>$kat->id]) }}">
						<i class="fas fa-user"></i> {{ $kat->nama_kategori }}
					</a>
					@endforeach
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
					<i class="fas fa-address-book"></i> Sosial
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="tel-+62 851 5632 9439">
						<i class="fas fa-phone-alt"></i> Telepon
					</a>
					<a class="dropdown-item" href="https://www.instagram.com/melaniagstn__/">
						<i class="fab fa-instagram"></i> Instagram
					</a>
					<a class="dropdown-item" href="https://wa.me/6282129437192">
						<i class="fab fa-whatsapp"></i> WhatsApp
					</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
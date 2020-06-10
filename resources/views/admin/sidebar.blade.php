<nav class="col-md-2 d-none d-md-block bg-dark sidebar">
	<div class="sidebar-sticky">

		<p style="color: white; text-align: center;"><i class="fas fa-user" style="font-size: 40px; margin: 15px"></i> <br>{{ Auth::user()->name }}</p><hr>
		<ul class="navbar-nav flex-column">
			
			<li class="nav-item">
				<a class="nav-link {{ request()->is ('admin') ? 'active':''}}"
					href="{{route('dashboard')}}">
					<i class="fas fa-home"></i> Dashboard
				</a>
			</li> <!--/dashboard-->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/pesanan*') ? 'active':''}}" href="{{route('pesanan.index')}}">
					<i class="fas fa-shopping-basket"></i> Pesanan
				</a>
			</li> <!--/pesanan-->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/produk*') ? 'active':''}}" href="{{route('produk.index')}}">
					<i class="fas fa-cubes"></i> Produk
				</a>
			</li> <!--Produk-->

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/kategori*') ? 'active':''}}" href="{{ route('kategori.index') }}">
					<i class="fas fa-list"></i> Kategori
				</a>  
			</li><!-- /Kategori --> 

			<li class="nav-item">
				<a class="nav-link {{ request()->is('admin/user*') ? 'active':''}}" href="{{ route('user.index') }}">
					<i class="fas fa-users"></i> Pengguna
				</a>
			</li> <!--/pengguna-->

		</ul>
	</div>
</nav>
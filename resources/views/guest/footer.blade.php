<!-- Footer -->
<footer class="page-footer font-small unique-color-dark" style="background-color: #2F4F4F; color: #fff;">

  <div style="background-color: #F8F8FF; color: #000;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Shopfun Store</h6>
        <hr class="deep-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Adalah sebuah perusahaan yang menjual produk-produk unggul, yang diproduksi mengiringi perkembangan jaman. Dengan memberikan harga yang terjangkau.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        @foreach(App\Kategori::orderBy('nama_kategori','asc')->get() as $kat)
          <p>
            <a href="{{ route('kategori',['kategori'=>$kat->id]) }}">
            {{ $kat->nama_kategori }}</a>
          </p>
          @endforeach
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Features</h6>
        <hr class="deep-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          Fast Respon
        </p>
        <p>
          High Quality
        </p>
        <p>
          Economies
        </p>
        <p>
          Quickly & Safety
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Ciamis, Jawa Barat</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> shopfun@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +62 851 5632 9439</p>
        <p>
          <i class="fab fa-whatsapp mr-3"></i> +62 851 5632 1111</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-1 bg-dark"><small>
		<a href="{{ route('home') }}">Home</a> | <a href="{{ route('about') }}">About</a> <br>
		
		Copyright &copy; Shopfun 2020
	</small>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

 
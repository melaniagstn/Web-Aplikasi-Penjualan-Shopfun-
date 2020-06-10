@extends('admin.layout')
@section('title','Dashboard')
@section('content')
<div class="row mt-5 mb-3">
	
	<div class="col-xl-3 col-md-6">
		<div class="card bg-danger text-white mb-4">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-cubes mr-2"></i> 
				</div>
				<h5 class="font-weight-normal">
					Produk
					<div class="display-4">
						<?php
							echo App\Produk::count();
						?></div>
				</h5>
			</div>
			<div class="card-footer d-flex align-items-center justify-content-between">
				<a class="small text-white stretched-link" 
				href="{{route('produk.index')}}">
				View Details</a>
				<div class="small text-white"><i class="fas fa-angle-double-right"></i></div>
			</div>
		</div>
	</div><!-- /col -->

	<div class="col-xl-3 col-md-6">
		<div class="card bg-warning text-white mb-4">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-shopping-basket mr-2"></i>  
				</div>
				<h5 class="font-weight-normal">
					New Order
				<div class="display-4">
					<?php
						echo App\Pesanan::where('status_pesanan','belum_bayar')->count();
					?>
				</div>
				</h5>
			</div>
			<div class="card-footer d-flex align-items-center justify-content-between">
				<a class="small text-white stretched-link" 
				href="{{route('pesanan.index')}}?status=belum_bayar">
				View Details</a>
				<div class="small text-white"><i class="fas fa-angle-double-right"></i></div>
			</div>
		</div>
	</div><!-- /col -->

	<div class="col-xl-3 col-md-6">
	<div class="card bg-primary text-white mb-4">
		<div class="card-body">
			<div class="card-body-icon">
					<i class="fas fa-gift mr-2"></i>  
				</div>
			<h5 class="font-weight-normal">
					Perlu Dikirim
				<div class="display-4">
					<?php 
					echo App\Pesanan::where('status_pesanan','lunas')->count();
					 ?>
				</div>
			</h5>
		</div>
		<div class="card-footer d-flex align-items-center justify-content-between">
			<a class="small text-white stretched-link"
			href="{{route('pesanan.index')}}?status=lunas">
				View Details </a>
				<div class="small text-white"> <i class="fas fa-angle-double-right"></i></div>
		</div>
	</div>
</div><!--/col-->

<div class="col-xl-3 col-md-6">
	<div class="card bg-success text-white mb-4">
		<div class="card-body">
			<div class="card-body-icon">
					<i class="fas fa-shipping-fast mr-2"></i>  
				</div>
			<h5 class="font-weight-normal">
					Dikirim
				<div class="display-4">
					<?php 
					echo App\Pesanan::where('status_pesanan','dikirim')->count();
					 ?>
				</div>
			</h5>
		</div>
		<div class="card-footer d-flex align-items-center justify-content-between">
			<a class="small text-white stretched-link"
			href="{{route('pesanan.index')}}?status=dikirim">
				View Details
			</a>
			<div class="small text-white"><i class="fas fa-angle-double-right"></i></div>
		</div>
	</div>
</div><!--/col-->
</div> <!--/row-->

<div class="clearfix"></div>
<canvas id="myChart" class="mb-5"></canvas>
@endsection

@push('js')
<script src="{{url('js/chart.js')}}"></script>
<script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: @json(array_reverse($laba_kotor['bulan'])),
			datasets: [{
				label: 'Gross Profit',
				backgroundColor: 'rgb(220, 220, 220)',
				borderColor: 'rgb(220, 220, 220)',
				data: @json(array_reverse($laba_kotor['total'])),
				fill: false,
			}]
		},

		options: {
			tooltips: {
				mode: 'index',
				label: 'myLabel',
				callbacks: {
					label: function(tooltipItem, data) {
						return data.datasets[tooltipItem.datasetIndex].label
							+ ': '
							+tooltipItem.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
					}
				}
			},
			scales: {
			xAxes: [{
				ticks: {}
			}],
				yAxes: [{
					ticks: {
						userCallback: function(value, index, values) {
							value = value.toString();
							value = value.split(/(?=(?:...)*$)/);

							value = value.join('.');
							return value;
						}
					}
				}]
			},
		}
	});
</script>
@endpush
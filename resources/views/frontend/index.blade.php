@include('frontend.header')
@yield('css')
<body class="animsition">
	
	<!-- Header -->
	@include('frontend.main')

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">
				<div class="item-slick1 bg-overlay1" style="background-image: url({{ asset('assets/images/jer.jpg')}});" data-thumb="images/thumb-01.jpg')}}" data-caption="Women’s Wear">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Lihat Jersey Yuk
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									Lihat Selengkapnya
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Klik Disini
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url({{asset('assets/images/jerbg.jpg')}});" data-thumb="images/thumb-02.jpg')}}" data-caption="Men’s Wear">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-true" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Menjual Berbagai Macam Jersey
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									Lihat Selengkapnya
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Klik Disini
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</section>

<!-- Banner -->
	<div class="sec-banner bg0">
		<div class="flex-w flex-c-m">
			<div class="size-202 m-lr-auto respon4">
				<div class="block1 wrap-pic-w">
					<img src="{{asset('assets/images/bundes.jpg')}}" alt="IMG-BANNER" style="width: 500; height: 500px;">

					<a href="product" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
						<div class="block1-txt-child1 flex-col-l">
							<span class="block1-name ltext-102 trans-04 p-b-8">
								<font color="black"><u>Bundes Liga</u></font>
							</span>
						</div>

						<div class="block1-txt-child2 p-b-4 trans-05">
							<div class="block1-link stext-101 cl0 trans-09">
								Beli Sekarang
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="size-202 m-lr-auto respon4">
				<div class="block1 wrap-pic-w">
					<img src="{{asset('assets/images/realmd.png')}}" alt="IMG-BANNER" style="width: 500; height: 500px;">

					<a href="product" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
						<div class="block1-txt-child1 flex-col-l">
							<span class="block1-name ltext-102 trans-04 p-b-8">
								<font color="black"><u>Laliga</u></font>
							</span>

							<span class="block1-info stext-102 trans-04">
								
							</span>
						</div>

						<div class="block1-txt-child2 p-b-4 trans-05">
							<div class="block1-link stext-101 cl0 trans-09">
								Beli Sekarang
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="size-202 m-lr-auto respon4">
				<div class="block1 wrap-pic-w">
					<img src="{{asset('assets/images/mu1.png')}}" alt="IMG-BANNER" style="width: 500; height: 500px;">

					<a href="product" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
						<div class="block1-txt-child1 flex-col-l">
							<span class="block1-name ltext-102 trans-04 p-b-8">
								<font color="black"><u>Primiere League</u></font>
							</span>

							<span class="block1-info stext-102 trans-04">
								
							</span>
						</div>

						<div class="block1-txt-child2 p-b-4 trans-05">
							<div class="block1-link stext-101 cl0 trans-09">
								Beli Sekarang
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

@php
$product = App\Product::orderby('created_at','DESC')->paginate(4);
@endphp

	<div class="bg3 m-t-23 p-b-140">
		<div class="container" >
			<div class="flex-w flex-sb-m p-b-52">
				<h5 class="ltext-105 cl5 txt-center respon1">
					<font color="white"><u><i><mark>Jersey Terbaru</mark></i></u></font>
				</h5>
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				</div>
			</div>
<!-- CSS styles for standard search box -->
<style type="text/css">
	#tfheader{
		background-color:#c3dfef;
	}
	#tfnewsearch{
		float:right;
		padding:20px;
	}
	.tftextinput{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton {
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
</style>
<body>
	<!-- HTML for SEARCH BAR -->
	<br>

			<div class="row isotope-grid">
				@foreach ($product as $data)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">

					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset('assets/images/avatar/'.$data->gambar.'') }}" style="width: 290px; height: 400px;">

							<a href="/produk/{{$data->slug}}" data-toggle="modal" data-target="#products{{$data->id}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
									Lihat Jersey
							</a>

						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/produk/{{$data->slug}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" data-toggle="modal" data-target="#products{{$data->id}}">

									<font color="white"><h4>{{  $data->nama  }}</h4>
									<p>Rp. {{ number_format($data->harga,2,',','.')}}</p></font>
								</a
								>
								<span class="stext-105 cl3">
									
								</span>
							</div>
						</div>
					</div>
				</div>
				@endforeach 
			</div>

			<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	@foreach ($product as $data)
	<div class="modal fade p-t-60 p-b-20" id="products{{$data->id}}" tabindex="-1" role="dialog" >
	<div class="modal-dialog">

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
									<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
										<div class="wrap-pic-w pos-relative">
											<img src="{{ asset('assets/images/avatar/'.$data->gambar.'') }}" width="300" height="300">
										</div>
									</div>
								</div>
							</div>
					
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-50000 cl2 js-name-detail p-b-14">
								{{$data->nama}}
							</h4>

							<span class="mtext-106 cl2">
								Deskripsi:
							</span>

								{!! str_limit($data->deskripsi,150) !!}
							<!--  --><br>
							<span class="mtext-106 cl2">
                                <a href="{{ route('productdetail',$data->id) }}">Baca Selengkapnya</a>
                            </span>
							<br>
							<br>

			
											<a href="{{url('add-cart',$data->id)}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
											<i class="zmdi zmdi-shopping-cart"></i>
											</a>
										
									</div>
								</div>	
							</div>
		</div>	
	</div>	
</div>
						</div>
					</div>@endforeach

@php
$pro = App\Product::orderByRaw("RAND()")->paginate(4);
@endphp

	<div class="bg1 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<h5 class="ltext-105 cl5 txt-center respon1">
					<font color="white"><u><i><mark>Jersey Lainnya</mark></i></u></font>
				</h5>
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				</div>
			</div>
<!-- CSS styles for standard search box -->
<style type="text/css">
	#tfheader{
		background-color:#c3dfef;
	}
	#tfnewsearch{
		float:right;
		padding:20px;
	}
	.tftextinput{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton {
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
</style>
<body>
	<!-- HTML for SEARCH BAR -->
	<br>

			<div class="row isotope-grid">
				@foreach ($pro as $p)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">

					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset('assets/images/avatar/'.$p->gambar.'') }}" style="width: 290px; height: 400px;">

							<a href="/produk/{{$p->slug}}" data-toggle="modal" data-target="#pro{{$p->id}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
									Lihat Jersey
							</a>

						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/produk/{{$p->slug}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" data-toggle="modal" data-target="#pro{{$p->id}}">

									<font color="white"><h4>{{  $p->nama  }}</h4>
									<p>Rp. {{ number_format($p->harga,2,',','.')}}</p></font>
								</a
								>
								<span class="stext-105 cl3">
									
								</span>
							</div>
						</div>
					</div>
				</div>
				@endforeach 
			</div>

			<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	@foreach ($pro as $p)
	<div class="modal fade p-t-60 p-b-20" id="pro{{$p->id}}" tabindex="-1" role="dialog" >
	<div class="modal-dialog">

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
									<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
										<div class="wrap-pic-w pos-relative">
											<img src="{{ asset('assets/images/avatar/'.$p->gambar.'') }}" width="300" height="300">
										</div>
									</div>
								</div>
							</div>
					
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-50000 cl2 js-name-detail p-b-14">
								{{$p->nama}}
							</h4>

							<span class="mtext-106 cl2">
								Deskripsi:
							</span>

								{!! str_limit($p->deskripsi,150) !!}
								
							<!--  --><br>
							<a href="{{ route('productdetail',$p->id) }}">Baca Selengkapnya</a>

							<br>
							<br>

			
											<a href="{{url('add-cart',$p->id)}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
											<i class="zmdi zmdi-shopping-cart"></i>
											</a>
										
									</div>
								</div>	
							</div>
		</div>	
	</div>	
</div>
						</div>
					</div>@endforeach
</div>
</div></div>
</div>

</body>
	
	@include('frontend.contact')	

@yield('content')
@include('frontend.footer')
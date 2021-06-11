<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
				
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="" class="logo">
						<img src="{{asset('/assets/images/logojersey.png')}}" alt="IMG-LOGO"><i><font color="Black">&nbsp Jersey Bola</font></i></img>
					</a>

					<!-- Menu desktop -->
					@include('frontend.menu')	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						

						@php
							if(\Auth::check()){
								$cart = \App\Cart::where('user_id', \Auth::user()->id);
							}
						@endphp
						@if(Auth::check() && $cart->count() > 0)
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{$cart->count()}}">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
						@endif 
					</div>
				</nav>
			</div>	
		</div>

		<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			@if(Auth::check())
			@php
			$total_all = 0;
			@endphp
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					@foreach(\App\cart::with('Product')->get() as $data)
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{asset('assets/images/avatar/'.$data->product->gambar)}}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{$data->product->nama}}
							</a>

							<span class="header-cart-item-info">
								{{$data->jumlah_brg}} x Rp. {{ number_format($data->product->harga,2,',','.')}}
								@php 
									$t_s = $data->jumlah_brg * $data->product->harga;
									$total_all = $total_all + $t_s;
								@endphp
							</span>
						</div>
					</li>
					@endforeach
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: Rp. {{number_format($total_all,2,',','.')}}
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{url('cart', Auth::user()->id)}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="{{url('cart', Auth::user()->id)}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
</header>
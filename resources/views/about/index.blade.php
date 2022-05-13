@extends('layouts.main')

@section('content')

<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
				<li class="breadcrumb-item"><a href="">О нас</a></li>
			</ol>
		</nav>
	</div>
	<section id="sec-11">
		<div class="container">
			<h1 class="inner">{{$abouts[0]->title}}</h1>
			<div class="text">
				<p>{{$abouts[0]->desc}}</p>
			</div>
			<div class="f_12 fw_6 text-center my-5">Галерея</div>
			<div class="position-relative">
				<div class="swiper-5">
					<div class="swiper-wrapper">
						@foreach ($abouts[0]->getMultipleImages($abouts[0]->images) as $image)
							<div class="swiper-slide">
								<img src="{{Storage::url($image)}}" alt="" class="img-example">
							</div>
						@endforeach
					</div>
					<div class="swiper-button-prev">
						<svg viewBox="0 0 24 62" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.1192 58.3865L2 30.6932L21.1192 3" />
						</svg>
					</div>
					<div class="swiper-button-next">
						<svg viewBox="0 0 25 62" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.23486 58.3865L22.354 30.6932L3.23486 3" />
						</svg>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection

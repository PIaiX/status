@extends('layouts.main')

@section('content')
<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
				<li class="breadcrumb-item"><a href="">Акции</a></li>
			</ol>
		</nav>
	</div>
	<section id="sec-4">
		<div class="container">
			<h1 class="inner">Акции</h1>
			<div class="row row-cols-2 row-cols-lg-3 g-2 g-sm-4">
				@foreach ($offers as $offer)
					<div>
						<a href="offer-page.html" class="offer {{$offer->circle}}">
							<img src="{{Storage::url($offer->img)}}" alt="{{$offer->title . $offer->subtitle}}">
							<div class="text">
								<div class="title mb-2">
									<span class="f_12">{{$offer->title}}</span>
								</div>
								<div class="desc">{{$offer->subtitle}}</div>
							</div>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</section>
</main>

@endsection

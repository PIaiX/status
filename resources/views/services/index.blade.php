@extends('layouts.main')

@section('content')

<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
				<li class="breadcrumb-item"><a href="">Услуги</a></li>
			</ol>
		</nav>
	</div>
	<section id="sec-2">
		<div class="container">
			<h1 class="inner">Услуги</h1>
			<div
				class="row row-cols-2 row-cols-md-3 row-cols-lg-4 justify-content-center justify-content-md-start g-0 mb-4">
				@foreach ($services as $service)
					<div>
						<a href="{{route('service-page', $service->alias)}}" class="serv">
							<img src="{{Storage::url($service->img)}}" alt="">
							<div>{{$service->title}}</div>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</section>
</main>

@endsection

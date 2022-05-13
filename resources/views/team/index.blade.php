@extends('layouts.main')

@section('content')

<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
				<li class="breadcrumb-item"><a href="">Команда</a></li>
			</ol>
		</nav>
	</div>
	<section>
		<div class="container">
			<h1 class="inner">Команда</h1>
			<div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 gx-0 gy-4">
				@foreach ($team as $person)
				<div>
					<div class="master">
						<img src="{{Storage::url($person->img)}}" alt="{{$person->name}}">
						<div class="p-2 p-md-4">
							<div class="font-2 f_12 fw_6 mb-md-2"><a href="master-3.html">{{$person->name}}</a></div>
							<div class="font-2 f_09 mb-2 mb-md-3">{{$person->profession}}</div>
							<div class="rating justify-content-center mb-2 mb-md-3">
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
							</div>
							<a href="{{route('team-show', $person)}}" class="btn_main btn_sm btn_2 mx-auto mb-2 mb-md-3">
								<span class="f_08 light-gray">о мастере</span>
							</a>
							<button type="button" data-bs-toggle="modal" data-bs-target="#callback"
								class="btn_main btn_sm btn_1 mx-auto">
								<span class="f_08">Записаться</span>
							</button>
						</div>
					</div>
				</div>
				@endforeach
				
				{{-- <div>
					<div class="master">
						<img src="img/team/alsu.jpg">
						<div class="p-2 p-md-4">
							<div class="font-2 f_12 fw_6 mb-md-2"><a href="master-4.html">Алсу
									Залялутдинова</a></div>
							<div class="font-2 f_09 mb-2 mb-md-3">Стилист, коллорист, мастер униварсал по
								женским и мужским стрижкам</div>
							<div class="rating justify-content-center mb-2 mb-md-3">
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
							</div>
							<a href="master-4.html" class="btn_main btn_sm btn_2 mx-auto mb-2 mb-md-3">
								<span class="f_08 light-gray">о мастере</span>
							</a>
							<button type="button" data-bs-toggle="modal" data-bs-target="#callback"
								class="btn_main btn_sm btn_1 mx-auto">
								<span class="f_08">Записаться</span>
							</button>
						</div>
					</div>
				</div>
				<div>
					<div class="master">
						<img src="img/team/elfia.jpg">
						<div class="p-2 p-md-4">
							<div class="font-2 f_12 fw_6 mb-md-2"><a href="master-5.html">Эльсия</a></div>
							<div class="font-2 f_09 mb-2 mb-md-3">Стилист, коллорист, женский мастер</div>
							<div class="rating justify-content-center mb-2 mb-md-3">
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
							</div>
							<a href="master-5.html" class="btn_main btn_sm btn_2 mx-auto mb-2 mb-md-3">
								<span class="f_08 light-gray">о мастере</span>
							</a>
							<button type="button" data-bs-toggle="modal" data-bs-target="#callback"
								class="btn_main btn_sm btn_1 mx-auto">
								<span class="f_08">Записаться</span>
							</button>
						</div>
					</div>
				</div>
				<div>
					<div class="master">
						<img src="img/team/ekaterina.jpg">
						<div class="p-2 p-md-4">
							<div class="font-2 f_12 fw_6 mb-md-2"><a href="master-6.html">Екатерина
									Рыбак</a></div>
							<div class="font-2 f_09 mb-2 mb-md-3">Мастер ногтевого сервиса</div>
							<div class="rating justify-content-center mb-2 mb-md-3">
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
								<svg class="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
								</svg>
							</div>
							<a href="master-6.html" class="btn_main btn_sm btn_2 mx-auto mb-2 mb-md-3">
								<span class="f_08 light-gray">о мастере</span>
							</a>
							<button type="button" data-bs-toggle="modal" data-bs-target="#callback"
								class="btn_main btn_sm btn_1 mx-auto">
								<span class="f_08">Записаться</span>
							</button>
						</div>
					</div>
				</div> --}}
			</div>
			<button type="button" class="lightest-gray f_09 fw_5 bb_1 mx-auto mt-5">Показать еще</button>
			<div class="row justify-content-end mt-4">
				<div class="col-md-6">
					<nav aria-label="Page navigation">
						{{ $team->links('vendor.pagination.custom') }}
					</nav>
				</div>
				<div class="col-md-6 col-xxl-3 mt-3 mt-md-0">
					<div class="d-flex align-items-center justify-content-center justify-content-md-end">
						<div class="f_08 font-2 me-3">Перейти на страницу</div>
						<input type="number" class="mini f_08 me-3">
						<button type="button" class="f_08 btn_3 btn_main btn_xs">Перейти</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection

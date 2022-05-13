@extends('layouts.main')

@section('content')

<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
				<li class="breadcrumb-item"><a href="">Каталог</a></li>
			</ol>
		</nav>
	</div>
	<section id="sec-13">
		<div class="container">
			<h1 class="inner">Каталог товаров</h1>
		</div>
		<!-- mobile -->
		<div class="catalog-menu mb-4">
			<div class="container">
				<input type="search" name="search" placeholder="Поиск..." class="font-2 f_14 w-100">
			</div>
			<div class="catalog-submenu">
				<div class="container">
					<button type="button" class="d-flex align-items-center" data-bs-toggle="offcanvas"
						data-bs-target="#mobile-categories">
						<img src="img/icons/burger-2.svg" alt="">
						<span class="light-gray ms-3">Категории</span>
					</button>
				</div>
			</div>

			<!-- внутри подкатегорий: -->
			<div class="catalog-submenu">
				<div class="container d-flex justify-content-between align-items-center">
					<button type="button" class="d-flex align-items-center">
						<img src="img/icons/arrow-left.svg" alt="">
						<span class="light-gray ms-3">Шампуни и кондиционеры</span>
					</button>
					<button type="button" class="d-flex align-items-center" data-bs-toggle="offcanvas"
						data-bs-target="#mobile-categories">
						<img src="img/icons/burger-2.svg" alt="">
					</button>
				</div>
			</div>
			<div class="container d-flex justify-content-between align-items-center">
				<select class="font-2" name="sorted_filter">
					<option value="Популярное">Популярное</option>
					<option value="По возрастанию цены">По возрастанию цены</option>
					<option value="По убыванию цены">По убыванию цены</option>
				</select>
				<button type="button" class="btn-filter active d-flex align-items-center"
					data-bs-toggle="offcanvas" data-bs-target="#mobile-filters">
					<span class="light-gray f_11">Фильтры</span>
					<svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M7.29692 6.25008H17.7136L12.4948 12.8126L7.29692 6.25008ZM4.43233 5.84383C6.5365 8.54175 10.4219 13.5417 10.4219 13.5417V19.7917C10.4219 20.3647 10.8907 20.8334 11.4636 20.8334H13.5469C14.1198 20.8334 14.5886 20.3647 14.5886 19.7917V13.5417C14.5886 13.5417 18.4636 8.54175 20.5677 5.84383C21.099 5.15633 20.6094 4.16675 19.7448 4.16675H5.25525C4.39067 4.16675 3.90108 5.15633 4.43233 5.84383Z" />
					</svg>
				</button>
				<input type="submit" style="display:none;">
			</div>
		</div>

		<div class="container">
			<div class="row gx-xxl-5">
				<div class="d-none d-md-block col-md-8 col-lg-9 offset-md-4 offset-lg-3 mb-5">
					<div class="d-flex justify-content-between align-items-center">
						<select class="f_09 font-2">
							<option value="Популярное">Популярное</option>
							<option value="По возрастанию цены">По возрастанию цены</option>
							<option value="По убыванию цены">По убыванию цены</option>
						</select>
						<form action="{{route('search')}}">
							<input name="search" type="search" placeholder="Поиск..." class="font-2 f_09">
						</form>
					</div>
				</div>
				<div class="d-none d-md-block col-md-4 col-lg-3">
					<nav class="left-menu">
						<div class="font-2 fw_6 f_09 mb-3">Категория:</div>
						<ul>
							@foreach ($categories as $category)
								@if($category->parent_id == 0)
								<li>
									<button data-state="off" onclick="toggle(this)">
										<a href="{{route('catalog-show', $category->alias)}}">{{$category->title}}</a>
									</button>
									@isset($category->children)
									<ul>
										@foreach ($category->children as $child)
										<li>
											<a href="{{route('catalog-show', $child->alias)}}">{{$child->title}}</a>
										</li>
										@endforeach
									</ul>
									@endisset
								</li>
									
								@endif
							@endforeach
							{{-- <li>
								<button type="button" data-state="off" onclick="toggle(this)">Уход за
									волосами</button>
								<ul class="d-none">
									<li>
										<button type="button" data-state="off"
											onclick="toggle(this)">Шампуни и кондиционеры</button>
										<ul class="d-none">
											<li>
												<a href="#" class="active">Шампуни</a>
											</li>
											<li>
												<a href="#">Кондиционеры</a>
											</li>
											<li>
												<a href="#">Бальзамы</a>
											</li>
										</ul>
									</li>
									<li>
										<button type="button">Маски и сыворотки</button>
									</li>
									<li>
										<button type="button">Краска для волос</button>
									</li>
									<li>
										<button type="button">Стайлинг</button>
									</li>
								</ul>
							</li> --}}
							{{-- <li>
								<button type="button">Уход за лицом</button>
							</li>
							<li>
								<button type="button">Уход за телом</button>
							</li> --}}
						</ul>
					</nav>
					<div class="d-flex justify-content-between mt-5 mb-3">
						<div class="font-2 fw_6 f_09">Тип волос:</div>
						<button type="button" class="font-2 f_09 accent">Все</button>
					</div>
					<div class="expandable-list">
						@foreach ($hairTypes as $type)
							<div class="d-flex justify-content-between mb-2">
								<label for="hair-type-1" class="me-2">{{$type->title}}</label>
								<input type="checkbox" name="hair-type" id="hair-type-1" value="{{$type->title}}">
							</div>
						@endforeach
					</div>
					<button type="button" data-state="off" class="see-all accent f_09 mt-2"
						onclick="toggleList(this)"></button>
					<div class="d-flex justify-content-between mt-5 mb-3">
						<div class="font-2 fw_6 f_09">Бренд:</div>
						<button type="button" class="font-2 f_09 accent">Все</button>
					</div>
					<div class="expandable-list">
						@foreach ($brands as $brand)
							<div class="d-flex justify-content-between mb-2">
								<label for="brand-1" class="me-2">{{$brand->title}}</label>
								<input type="checkbox" name="brand" id="brand-1" value="{{$brand->title}}">
							</div>
						@endforeach
					</div>
					<button type="button" data-state="off" class="see-all accent f_09 mt-2"
						onclick="toggleList(this)"></button>
				</div>
				<div class="col-md-8 col-lg-9">
					<div class="row g-3 g-sm-4 g-xxl-5 row-cols-2 row-cols-lg-3 row-cols-xxl-4">
						@foreach ($products as $product)
                            <div>
                                @include('includes.product', $product)
                            </div>
                        @endforeach

					</div>
					<button type="button" class="accent f_09 fw_5 bb_1 mx-auto mt-5">Показать еще</button>

					<div class="row row-cols-lg-2 mt-4">
						<div>
							<nav aria-label="Page navigation" class="mx-auto ms-lg-0">
								{{ $products->links('vendor.pagination.custom') }}
							</nav>
						</div>
						<div class="mt-3 mt-lg-0">
							<form class="d-flex align-items-center justify-content-center justify-content-lg-end" action="{{route('catalog')}}">
								<div class="f_08 font-2 me-3">Перейти на страницу</div>
								<input type="number" class="mini f_08 me-3">
								<button type="button"
									class="f_08 btn_3 btn_main btn_xs">Перейти</button>
							</form>
						</div>
					</div>
					<!-- если фильтр или поиск не нашел результат -->
					<div
						class="d-flex flex-column justify-content-center align-items-center text-center py-5">
						{{-- <div class="light-gray mb-2 mb-md-4">По Вашуму запросу ничего не найдено.</div> --}}
						<a href="{{route('catalog')}}" type="button" class="accent">Сбросить фильтры</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\HairType;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private $paginate = 8;

    /**
     * @param $category
     * @return void
     */
    public function index(Request $request, $category = null)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $hairTypes = HairType::all();
        $products = Product::paginate(8);

        if (isset($request->page)) {
            $products = Product::offset($request->page)->paginate(8);
        }

        if (isset($request->orderBy)) {
            if ($request->orderBy == "default") {
                $products = Product::paginate($this->paginate);
            }
            if ($request->orderBy == "price-asc") {
                $products = Product::orderBy('price')->paginate($this->paginate);
            }
            if ($request->orderBy == "price-desc") {
                $products = Product::orderBy('price', 'desc')->paginate($this->paginate);
            }
        }

        if ($request->ajax()) {
            return view('ajax.products', compact('products'))->render();
        }

        return view('catalog.index', compact('categories', 'hairTypes', 'brands', 'products'));
    }

    /**
     * Переход на страницу отдельного товара
     *
     * @param $category
     * @param $product
     * @return void
     */
    public function show($category = null, $product = null)
    {
        $product = Product::where('alias', $product)->first();
        return view('catalog.show', compact('product'));
    }

    /**
     * Вывод товаров по категории
     * @param $categoryAlias
     * @return void
     */
    public function productByCatalog($categoryAlias = null)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $hairTypes = HairType::all();
        $cat = Category::where('alias', $categoryAlias)->first();
        $products = Product::where('category_id', $cat->id)->paginate(8);
        return view('catalog.index', compact('categories', 'hairTypes', 'brands', 'products'));
    }

    /**
     * Поиск товаров
     * @param Request $request
     * @return mixed
     */
    public function search(Request $request)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $hairTypes = HairType::all();

        $search = $request->input('search');
        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('full_desc', 'LIKE', "%{$search}%")
            ->paginate(8);

        // Return the search view with the resluts compacted
        return view('catalog.index', compact('categories', 'hairTypes', 'brands', 'products'));
    }

    public function sort(Request $request)
    {
        $value = $request->sorted_filter;
        dd($value);
    }
}

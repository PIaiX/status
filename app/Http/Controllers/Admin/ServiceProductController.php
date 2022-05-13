<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceProducts = ServiceProduct::paginate(10);
        return view('auth.service-products.index', compact('serviceProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('auth.service-products.form', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();

        // unset($params['images']);

        if ($request->has('images')) {
            $str = '';
            foreach($request->file('images') as $img) {
                $str .= $img->store('service-products', 'public') . '|';
            }
            $params['images'] = $str;
        }

        ServiceProduct::create($params);
        
        return redirect()->route('service-products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProduct  $serviceProduct
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceProduct $serviceProduct)
    {
        return view('auth.service-products.show', compact('serviceProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProduct  $serviceProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProduct $serviceProduct)
    {
        $services = Service::all();
        return view('auth.service-products.form', compact('services', 'serviceProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProduct  $serviceProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceProduct $serviceProduct)
    {
        $params = $request->all();
        unset($params['images']);

        if ($request->has('images')) {
            foreach($serviceProduct->getMultipleImages($serviceProduct->images) as $image) {
                Storage::delete('public/'.$image);
            }

            $str = '';
            foreach($request->file('images') as $img) {
                $str .= $img->store('service-products', 'public') . '|';
            }
            $params['images'] = $str;
        }

        $serviceProduct->update($params);
        return redirect()->route('service-products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProduct  $serviceProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProduct $serviceProduct)
    {
        $serviceProduct->delete();
        return redirect()->route('service-products.index');
    }
}

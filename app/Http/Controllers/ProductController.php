<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class ProductController extends Controller
{
    public function index()
    {
        $service = Service::get();
        return view('product')->with('service', $service);
    }
    public function store(Request $request)
    {
        // SELECT `id`, `created_at`, `updated_at`, `service`, `service_price`, `service_desc`, `service_pix` FROM `services` WHERE 1
        $service = new Service;
        $service->service = $request->input('service');
        $service->service_price = $request->input('service_price');
        $service->service_desc = $request->input('service_desc');
        $service->service_pix = 'noimage.jpg';
        $service->save();
        return redirect('/product')->with('success', 'Food Details Saved');
    }
}

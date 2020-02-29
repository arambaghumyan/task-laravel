<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products   = Product::with('user', 'category')->get();
        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product              = new Product;
        $product->user_id     = Auth()->user()->id;
        $product->category_id = $request->category_id;
        $product->title       = $request->title;
        $product->amount      = $request->amount;
        $product->title       = $request->title;
        $product->description = $request->description;
        if ($request->has('image')) {
            $image          = date('d-m-Y-H-i').$request->image->getClientOriginalName();
            $product->image = $image;
            \Image::make($request->image->getRealPath())->save('images/'.$image, 90);
        }
        if ($product->save()) {
            return redirect()->route('products.index');
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product    = Product::find($id);
        $categories = Category::all();
        return view('pages.product.edit', compact('categories', 'product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $data = request()->except(['_token', '_method']);
        if ($request->has('image')) {
            $image          = date('d-m-Y-H-i').$request->image->getClientOriginalName();
            $data['image'] = $image;
            \Image::make($request->image->getRealPath())->save('images/'.$image, 90);
        }
        Product::where('id', $id)->update($data);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index');
    }
}

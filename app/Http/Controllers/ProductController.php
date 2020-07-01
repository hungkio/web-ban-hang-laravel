<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function edit($id)
    {


        $products = $this->productReporsitory->find($id);

        return view('product.edit', compact('products'));
    }
    public function store(ProductRequest $request)
    {
        // if ($request->image) {
        //     $request->image->storeAs('public/images', 'avatar' . $id . '.png');
        //     $request['avatar_url'] = ('images/avatar' . $id . '.png');
        // } else {
        //     if ($request->image_default) {
        //         $request['avatar_url'] = null;
        //     }
        // }
        try {

            $data = array_merge(['' => '1'], $request->all());
            $this->productRepository->create($data);

            $data = $request->all();
            $this->productReporsitory->create($data);

            return redirect()->route('product.index')
            ->with('success', 'Created Success!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    

        $products = $this->productReporsitory->getAll();

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        if ($request->image_file) {
            $request->image_file->storeAs('public/images', 'product' . $id . '.png');
            $request['image'] = ('storage/images/product' . $id . '.png');
        } else {
            $request['image'] = null;
        }
        try {

            $this->productReporsitory->update($id, $request->only('product_name', 'product_counts',
                                                                  'products_type','product_in_prices','product_out_prices', 'image'));

            return redirect()->route('product.index')
            ->with('success', 'Updated Success!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->productRepository->delete($id);
            return redirect()->route('product.index')
            ->with('success', 'Deleted Success!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}


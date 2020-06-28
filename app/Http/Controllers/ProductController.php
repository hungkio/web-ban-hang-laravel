<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;

class GuestController extends Controller
{
    protected $productReporsitory;
    public function __construct(ProductRepository $productReporsitory)
    {
        $this->productReporsitory = $productReporsitory;
    }
    public function edit($id)
    {
        $rank = $this->productReporsitory->find($id);
        return view('rank.edit', compact('rank'));
    }
    public function store(ProductRequest $request)
    {
        try {
            $data = array_merge(['' => '1'], $request->all());
            $this->productReporsitory->create($data);
            return redirect()->route('rank.index')
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
        $rank = $this->productReporsitory->getAll();
        return view('rank.index', compact('ranks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rank.create');
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
        try {
            $this->productReporsitory->update($id, $request->only('rank_name', 'bill_count', 'total_bills'));
            return redirect()->route('rank.index')
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
            $this->productReporsitory->delete($id);
            return redirect()->route('rank.index')
            ->with('success', 'Deleted Success!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}

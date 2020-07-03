<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaleRequest;
use App\Repositories\SaleRepository;
class SaleController extends Controller
{
   protected $saleRepository;
    public function __construct(SaleRepository $saleRepository)
    {
        $this->saleRepository = $saleRepository;
    }
    public function edit($id)
    {
        $sale = $this->saleRepository->find($id);
        return view('sale.edit', compact('sale'));
    }
    public function store(SaleRequest $request)
    {
        try {

            $this->saleRepository->create($request->all());
            return redirect()->route('sale.index')
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
        $sales = $this->saleRepository->getAll();
        return view('sale.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sale.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaleRequest $request, $id)
    {
        try {
            $this->saleRepository->update($id, $request->only('sale_product_type','sale_percent', 'sale_begin', 'sale_end'));
            return redirect()->route('sale.index')
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
            $this->saleRepository->delete($id);
            return redirect()->route('sale.index')
            ->with('success', 'Deleted Success!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }}

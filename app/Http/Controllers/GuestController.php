<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GuestRequest;
use App\Repositories\GuestRepository;

class GuestController extends Controller
{
    protected $guestRepository;
    public function __construct(GuestRepository $guestRepository)
    {
        $this->guestRepository = $guestRepository;
    }
    public function edit($id)
    {
        $guest = $this->guestRepository->find($id);
        return view('guest.edit', compact('guest'));
    }
    public function store(GuestRequest $request)
    {
        try {
            $data = array_merge(['sale_rank' => '1'], $request->all());
            $this->guestRepository->create($data);
            return redirect()->route('guest.index')
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
        $guests = $this->guestRepository->getAll();
        return view('guest.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guest.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GuestRequest $request, $id)
    {
        try {
            $this->guestRepository->update($id, $request->only('name', 'sex', 'age', 'phonenumber', 'address', 'sale_rank'));
            return redirect()->route('guest.index')
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
            $this->guestRepository->delete($id);
            return redirect()->route('guest.index')
            ->with('success', 'Deleted Success!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}

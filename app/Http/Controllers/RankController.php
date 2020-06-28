<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RankRequest;
use App\Repositories\RankRepository;

class GuestController extends Controller
{
    protected $rankReporsitory;
    public function __construct(RankRepository $rankReporsitory)
    {
        $this->rankReporsitory = $rankReporsitory;
    }
    public function edit($id)
    {
        $rank = $this->rankReporsitory->find($id);
        return view('rank.edit', compact('rank'));
    }
    public function store(RankRequest $request)
    {
        try {
            $data = array_merge(['rank_name' => '1'], $request->all());
            $this->rankReporsitory->create($data);
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
        $rank = $this->rankReporsitory->getAll();
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
    public function update(RankRequest $request, $id)
    {
        try {
            $this->rankReporsitory->update($id, $request->only('rank_name', 'bill_count', 'total_bills'));
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
            $this->rankReporsitory->delete($id);
            return redirect()->route('rank.index')
            ->with('success', 'Deleted Success!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}

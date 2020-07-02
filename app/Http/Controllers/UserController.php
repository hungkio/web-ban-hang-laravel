<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
class UserController extends Controller
{
   protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        return view('user.edit', compact('user'));
    }
    public function store(UserRequest $request)
    {
        try {
            
            $this->userRepository->create($request->all());
            return redirect()->route('user.index')
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
        $users = $this->userRepository->getAll();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        try {
            $this->userRepository->update($id, $request->only('username', 'password', 'name', 'sex', 'age', 'phonenumber', 'address'));
            return redirect()->route('user.index')
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
            $this->userRepository->delete($id);
            return redirect()->route('user.index')
            ->with('success', 'Deleted Success!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }}

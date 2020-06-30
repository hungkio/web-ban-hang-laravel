<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Repositories\GuestRepository;

class ReportController extends Controller
{
    protected $guestRepository;
    public function __construct(GuestRepository $guestRepository)
    {
        $this->guestRepository = $guestRepository;
    }
    public function index()
    {
        return view('admin.bao-cao');
    }
    public function getData(Request $request)
    {
        $guests = $this->guestRepository->getGuestConditon($request->only('start_date', 'end_date'));
        dd($guests);
        return response()->json([
            'guests' => $guests,
        ]);
    }
}

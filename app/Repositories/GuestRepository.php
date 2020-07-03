<?php

namespace App\Repositories;

use App\Guest;
use App\User;
use Carbon\Carbon;

class GuestRepository
{
    public function find($id)
    {
        return Guest::findOrFail($id);
    }
    public function getAll()
    {
        return Guest::all();
    }
    public function create($data)
    {
        return Guest::create($data);
    }
    public function update($id, $data)
    {
        return Guest::whereId($id)->update($data);
    }
    public function delete($id)
    {
        return Guest::findOrFail($id)->delete();
    }
    public function getGuestConditon($request)
    {
        return Guest::where('created_at', '>=', Carbon::parse($request['start_date']))
        ->where('created_at', '<=', Carbon::parse($request['end_date']))
        ->get();
    }
    public function rankGuest($rank)
    {
        return Guest::where('sale_rank', $rank)->get();
    }
}


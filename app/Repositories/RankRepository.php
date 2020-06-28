<?php

namespace App\Repositories;

use App\Rank;

class RankRepository
{
    public function find($id)
    {
        return Rank::findOrFail($id);
    }
    public function getAll()
    {
        return Rank::all();
    }
    public function create($data)
    {
        return Rank::create($data);
    }
    public function update($id, $data)
    {
        return Rank::whereId($id)->update($data);
    }
    public function delete($id)
    {
        return Rank::findOrFail($id)->delete();
    }
}


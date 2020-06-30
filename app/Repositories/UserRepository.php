<?php

namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class UserRepository
{
	// public function find($id)
	// {
	// 	return User::findOrFail($id);
	// }
	// public function getAll()
	// {
	// 	return User::get();
	// }
	// public function store($data)
	// {
	// 	return User::create($data);
	// }
	// public function updateById($id, $data)
	// {
	// 	return User::findOrFail($id)->update($data);
	// }
	// public function changePassword($new_password)
	// {
	// 	$user = User::findOrFail(Auth::User()->id);
	// 	$user->password = $new_password;
 //        return $user->save();
 //    }
 //    public function changePasswordUser($new_password, $id)
 //    {
 //        $user = User::findOrFail($id);
 //        $user->password = $new_password;
 //        return $user->save();
 //    }
 //    public function changeRole($new_role, $id)
 //    {
 //        $user = User::findOrFail($id);
 //        $user->role = $new_role;
 //        return $user->save();
 //    }
 //    public function delete($id)
 //    {
 //        $user = User::findOrFail($id);
 //        return $user->delete();
 //    }
 //    public function search($key)
 //    {
 //        return User::where('first_name', 'like', '%'.$key.'%')
 //        ->orWhere('last_name', 'like', '%'.$key.'%')
 //        ->orWhere('email', 'like', '%'.$key.'%')
 //        ->orWhere('address', 'like', '%'.$key.'%')
 //        ->orderBy('last_name', 'asc')
 //        ->paginate(User::PAGINATE);
 //    }
 //    public function active($email)
 //    {
 //        return User::where('email', $email)
 //        ->update(['email_verified_at' => Carbon::now()]);
 //    }
}


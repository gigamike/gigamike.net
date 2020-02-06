<?php

namespace App\Repositories;

use App\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
      return User::all();
    }

  	public function paginate($page, $filter = array())
  	{
      $email = isset($filter['email']) ? $filter['email'] : '';
      $nameKeyword = isset($filter['name_keyword']) ? $filter['name_keyword'] : '';

      return User::when(!empty($email), function($query) use($email){
        return User::where('email', $email);
      })->when(!empty($nameKeyword), function($query) use($nameKeyword){
        return User::where('name', 'like', '%' . $nameKeyword . '%');
      })->paginate(10);
  	}

    public function create($data)
  	{
  		return User::create($data);
  	}

    public function save()
  	{
  		return User::save();
  	}

    public function update($data)
  	{
  		return User::update($data);
  	}

    public function delete($id)
  	{
  		return User::delete($id);
  	}

    public function findOrFail($id)
  	{
  		return User::findOrFail($id);
  	}

    public function whereIn($columnName, $values)
  	{
  		return User::whereIn($columnName, $values);
  	}

    public function orderBy($field, $order)
  	{
  		return User::orderBy($field, $order);
  	}
}

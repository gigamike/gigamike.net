<?php

namespace App\Repositories;

use App\Role;
use App\Repositories\Interfaces\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{
    public function all()
    {
      return Role::all();
    }

  	public function paginate($page, $filter = array())
  	{
      $name = isset($filter['name']) ? $filter['name'] : '';
      $nameKeyword = isset($filter['name_keyword']) ? $filter['name_keyword'] : '';

      return Role::when(!empty($name), function($query) use($name){
        return Role::where('name', $name);
      })->when(!empty($nameKeyword), function($query) use($nameKeyword){
        return Role::where('name', 'like', '%' . $nameKeyword . '%');
      })->paginate(10);
  	}

    public function create($data)
  	{
  		return Role::create($data);
  	}

    public function save()
  	{
  		return Role::save();
  	}

    public function update($data)
  	{
  		return Role::update($data);
  	}

    public function delete($id)
  	{
  		return Role::delete($id);
  	}

    public function findOrFail($id)
  	{
  		return User::findOrFail($id);
  	}

    public function whereIn($columnName, $values)
  	{
  		return Role::whereIn($columnName, $values);
  	}
}

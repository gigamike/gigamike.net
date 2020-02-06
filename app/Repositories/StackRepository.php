<?php

namespace App\Repositories;

use App\Stack;
use App\Repositories\Interfaces\StackRepositoryInterface;

class StackRepository implements StackRepositoryInterface
{
    public function all()
    {
      return Stack::all();
    }

  	public function paginate($page, $filter = array())
  	{
      $name = isset($filter['name']) ? $filter['name'] : '';
      $nameKeyword = isset($filter['name_keyword']) ? $filter['name_keyword'] : '';

      return Stack::when(!empty($name), function($query) use($name){
        return Stack::where('name', $name);
      })->when(!empty($nameKeyword), function($query) use($nameKeyword){
        return Stack::where('name', 'like', '%' . $nameKeyword . '%');
      })->paginate(10);
  	}

    public function create($data)
  	{
  		return Stack::create($data);
  	}

    public function save()
  	{
  		return Stack::save();
  	}

    public function update($data)
  	{
  		return Stack::update($data);
  	}

    public function delete($id)
  	{
  		return Stack::delete($id);
  	}

    public function findOrFail($id)
  	{
  		return Stack::findOrFail($id);
  	}

    public function whereIn($columnName, $values)
  	{
  		return Stack::whereIn($columnName, $values);
  	}

    public function orderBy($field, $order)
  	{
  		return Stack::orderBy($field, $order);
  	}
}

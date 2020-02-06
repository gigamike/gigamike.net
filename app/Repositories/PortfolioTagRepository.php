<?php

namespace App\Repositories;

use App\PortfolioTag;
use App\Repositories\Interfaces\PortfolioTagRepositoryInterface;

class PortfolioTagRepository implements PortfolioTagRepositoryInterface
{
    public function all()
    {
      return PortfolioTag::all();
    }

  	public function paginate($page, $filter = array())
  	{
      $name = isset($filter['name']) ? $filter['name'] : '';
      $nameKeyword = isset($filter['name_keyword']) ? $filter['name_keyword'] : '';

      return PortfolioTag::when(!empty($name), function($query) use($name){
        return PortfolioTag::where('name', $name);
      })->when(!empty($nameKeyword), function($query) use($nameKeyword){
        return PortfolioTag::where('name', 'like', '%' . $nameKeyword . '%');
      })->paginate(10);
  	}

    public function create($data)
  	{
  		return PortfolioTag::create($data);
  	}

    public function save()
  	{
  		return PortfolioTag::save();
  	}

    public function update($data)
  	{
  		return PortfolioTag::update($data);
  	}

    public function delete($id)
  	{
  		return PortfolioTag::delete($id);
  	}

    public function findOrFail($id)
  	{
  		return PortfolioTag::findOrFail($id);
  	}

    public function whereIn($columnName, $values)
  	{
  		return PortfolioTag::whereIn($columnName, $values);
  	}

    public function orderBy($field, $order)
  	{
  		return PortfolioTag::orderBy($field, $order);
  	}
}

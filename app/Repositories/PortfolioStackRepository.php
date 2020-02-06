<?php

namespace App\Repositories;

use App\PortfolioStack;
use App\Repositories\Interfaces\PortfolioStackRepositoryInterface;

class PortfolioStackRepository implements PortfolioStackRepositoryInterface
{
    public function all()
    {
      return PortfolioStack::all();
    }

  	public function paginate($page, $filter = array())
  	{
      $name = isset($filter['name']) ? $filter['name'] : '';
      $nameKeyword = isset($filter['name_keyword']) ? $filter['name_keyword'] : '';

      return PortfolioStack::when(!empty($name), function($query) use($name){
        return PortfolioStack::where('name', $name);
      })->when(!empty($nameKeyword), function($query) use($nameKeyword){
        return PortfolioStack::where('name', 'like', '%' . $nameKeyword . '%');
      })->paginate(10);
  	}

    public function create($data)
  	{
  		return PortfolioStack::create($data);
  	}

    public function save()
  	{
  		return PortfolioStack::save();
  	}

    public function update($data)
  	{
  		return PortfolioStack::update($data);
  	}

    public function delete($id)
  	{
  		return PortfolioStack::delete($id);
  	}

    public function findOrFail($id)
  	{
  		return PortfolioStack::findOrFail($id);
  	}

    public function whereIn($columnName, $values)
  	{
  		return PortfolioStack::whereIn($columnName, $values);
  	}

    public function orderBy($field, $order)
  	{
  		return PortfolioStack::orderBy($field, $order);
  	}
}

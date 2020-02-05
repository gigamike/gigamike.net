<?php

namespace App\Repositories;

use App\Portfolio;
use App\Repositories\Interfaces\PortfolioRepositoryInterface;

class PortfolioRepository implements PortfolioRepositoryInterface
{
    public function all()
    {
      return Portfolio::all();
    }

  	public function paginate($page, $filter = array())
  	{
      $email = isset($filter['email']) ? $filter['email'] : '';
      $nameKeyword = isset($filter['name_keyword']) ? $filter['name_keyword'] : '';

      return Portfolio::when(!empty($email), function($query) use($email){
        return Portfolio::where('email', $email);
      })->when(!empty($nameKeyword), function($query) use($nameKeyword){
        return Portfolio::where('name', 'like', '%' . $nameKeyword . '%');
      })->paginate(10);
  	}

    public function create($data)
  	{
  		return Portfolio::create($data);
  	}

    public function save()
  	{
  		return Portfolio::save();
  	}

    public function update($data)
  	{
  		return Portfolio::update($data);
  	}

    public function delete($id)
  	{
  		return Portfolio::delete($id);
  	}

    public function findOrFail($id)
  	{
  		return Portfolio::findOrFail($id);
  	}

    public function whereIn($columnName, $values)
  	{
  		return Portfolio::whereIn($columnName, $values);
  	}
}

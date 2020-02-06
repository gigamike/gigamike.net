<?php

namespace App\Repositories;

use App\Certification;
use App\Repositories\Interfaces\CertificationRepositoryInterface;

class CertificationRepository implements CertificationRepositoryInterface
{
    public function all()
    {
      return Certification::all();
    }

  	public function paginate($page, $filter = array())
  	{
      $name = isset($filter['name']) ? $filter['name'] : '';
      $nameKeyword = isset($filter['name_keyword']) ? $filter['name_keyword'] : '';

      return Certification::when(!empty($name), function($query) use($name){
        return Certification::where('name', $name);
      })->when(!empty($nameKeyword), function($query) use($nameKeyword){
        return Certification::where('name', 'like', '%' . $nameKeyword . '%');
      })->paginate(10);
  	}

    public function create($data)
  	{
  		return Certification::create($data);
  	}

    public function save()
  	{
  		return Certification::save();
  	}

    public function update($data)
  	{
  		return Certification::update($data);
  	}

    public function delete($id)
  	{
  		return Certification::delete($id);
  	}

    public function findOrFail($id)
  	{
  		return Certification::findOrFail($id);
  	}

    public function whereIn($columnName, $values)
  	{
  		return Certification::whereIn($columnName, $values);
  	}

    public function orderBy($field, $order)
  	{
  		return Certification::orderBy($field, $order);
  	}
}

<?php

namespace App\Repositories;

use App\CertificationTag;
use App\Repositories\Interfaces\CertificationTagRepositoryInterface;

class CertificationTagRepository implements CertificationTagRepositoryInterface
{
    public function all()
    {
      return CertificationTag::all();
    }

  	public function paginate($page, $filter = array())
  	{
      $name = isset($filter['name']) ? $filter['name'] : '';
      $nameKeyword = isset($filter['name_keyword']) ? $filter['name_keyword'] : '';

      return CertificationTag::when(!empty($name), function($query) use($name){
        return CertificationTag::where('name', $name);
      })->when(!empty($nameKeyword), function($query) use($nameKeyword){
        return CertificationTag::where('name', 'like', '%' . $nameKeyword . '%');
      })->paginate(10);
  	}

    public function create($data)
  	{
  		return CertificationTag::create($data);
  	}

    public function save()
  	{
  		return CertificationTag::save();
  	}

    public function update($data)
  	{
  		return CertificationTag::update($data);
  	}

    public function delete($id)
  	{
  		return CertificationTag::delete($id);
  	}

    public function findOrFail($id)
  	{
  		return CertificationTag::findOrFail($id);
  	}

    public function whereIn($columnName, $values)
  	{
  		return CertificationTag::whereIn($columnName, $values);
  	}

    public function orderBy($field, $order)
  	{
  		return CertificationTag::orderBy($field, $order);
  	}
}

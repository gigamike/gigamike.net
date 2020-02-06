<?php

namespace App\Repositories\Interfaces;

interface CertificationRepositoryInterface
{
    public function all();

    public function paginate($page, $filter);

    public function create($data);

    public function save();

    public function update($id);

    public function delete($id);

    public function findOrFail($id);

    public function whereIn($columnName, $values);

    public function orderBy($field, $order);
}

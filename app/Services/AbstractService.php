<?php

namespace App\Services;

use App\Exceptions\NotFoundException;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractService
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * AbstractService constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param $id
     * @return mixed
     * @throws NotFoundException
     */
    public function find ($id)
    {
        $record = $this->model->find($id);
        if (!$record) {
            throw new NotFoundException(basename($this->model));
        }
        return $record;
    }

    /**
     * @param array $record
     * @return mixed
     */
    public function add(array $record)
    {
        return $this->model->create($record);
    }
}
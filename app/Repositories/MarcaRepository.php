<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
class MarcaRepository extends AbstractRepository {
    public function __construct($model) {
        $this->model = $model;
    }
}

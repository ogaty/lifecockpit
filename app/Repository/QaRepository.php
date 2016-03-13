<?php
namespace App\Repository;

use App\Eloquent\Qa;

class QaRepository {
    protected $model;
    public function __construct(Qa $qa)
    {
        $this->qa = $qa;
    }

    public function getAll() {
        return $this->qa->all();
    }

    public function getById($id) {
        return $this->qa->findOrFail($id);
    }
}

<?php
namespace App\Repositories;

use App\Models\Cheat;

class CheatRepository extends BaseRepository {

    protected $model;

    public function __construct(Cheat $cheat) {
        $this->model = $cheat;
    }

    public function all() {
        return $this->model->all();
    }

}

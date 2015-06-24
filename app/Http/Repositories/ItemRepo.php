<?php
/**
 * Created by PhpStorm.
 * User: apotente
 * Date: 24/06/15
 * Time: 12:45
 */

namespace App\Http\Repositories;

use App\Entities\Item;

class ItemRepo extends BaseRepo {

    public function getModel()
    {
        return new Item;
    }

    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->orderBy('id', 'desc')
            ->paginate($paginate);

        return $qry;
    }

    public function Listing()
    {
        $qry = $this->model->orderBy('id')
            ->lists('id', 'descripcion');

        return $qry;
    }
} 
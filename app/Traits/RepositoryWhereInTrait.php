<?php

namespace App\Traits;

trait RepositoryWhereInTrait {

    /**
     * @param $key
     * @param $ids
     * @return array
     */
    public function whereIn($key, $ids)
    {
        if (!is_array($ids))
            return [];

        return app($this->model())::whereIn($key, $ids);
    }

}

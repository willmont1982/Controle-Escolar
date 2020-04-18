<?php

namespace Student\Classroom\Http;

use Domain\Http\Controllers\AbstractController;
use Student\Classroom\ClassroomRepository as Repository;

/**
 * It's don't work, because Requests and Repository don't exists.
 */
class ClassroomController extends AbstractController
{
    protected $with = ['teacher', 'schedule', 'matters'];

    public function repo()
    {
        return Repository::class;
    }

    /**
     * Get all :item.
     *
     * @return  \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->repo->all($this->columns, $this->with, $this->load);
    }
}

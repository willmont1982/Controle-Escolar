<?php


namespace Student\Teacher\Http;

use Domain\Http\Controllers\AbstractController;
use Student\Teacher\TeacherRepository as Repository;

/**
 * It's don't work, because Requests and Repository don't exists.
 */
class TeacherController extends AbstractController
{
    protected $with = ['user'];

    public function repo()
    {
        return Repository::class;
    }

    /**
     * Get all teachers.
     *
     * @return  \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->repo->all($this->columns, $this->with);
    }
}

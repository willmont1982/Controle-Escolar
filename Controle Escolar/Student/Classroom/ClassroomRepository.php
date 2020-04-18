<?php

namespace Student\Classroom;

use App\Exceptions\RepositoryException;
use Auth;
use Illuminate\Database\Eloquent\Model;

class ClassroomRepository extends \Domain\Classroom\ClassroomRepository
{
    public function model()
    {
        return Classroom::class;
    }

    /**
     * makeModel.
     *
     * @return Illuminate\Database\Eloquent\Model
     * @throws RepositoryException
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        $model = $model->whereHas('students', function ($q) {
            $q->where('student_id', Auth::user()->owner_id);
        });

        return $this->model = $model;
    }
}

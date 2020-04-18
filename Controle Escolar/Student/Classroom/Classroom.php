<?php


namespace Student\Classroom;

use Student\Matter\Matter;
use Student\Schedule\Schedule;

class Classroom extends \Domain\Classroom\Classroom
{
    protected $hidden = [
        'deleted_at', 'created_at', 'updated_at',
        'id', 'schedule_id', 'teacher_id',
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function matters()
    {
        return $this->belongsToMany(Matter::class);
    }
}

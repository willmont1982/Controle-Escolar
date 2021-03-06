<?php


namespace Domain\Schedule;

use Carbon\Carbon;
use Domain\Classroom\Classroom;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ScheduleTest extends \TestCase
{
    use DatabaseTransactions;

    public function test_create_schedule()
    {
        $schedule = factory(Schedule::class)->create();

        $this->assertInstanceOf(Carbon::class, $schedule->created_at);
        $this->assertInstanceOf(Carbon::class, $schedule->updated_at);

        $this->assertInstanceOf(Schedule::class, $schedule);
        $this->seeInDatabase('schedules', [
            'name' => $schedule->name,
        ]);
    }

    public function test_create_schedule_with_value()
    {
        $schedule = factory(Schedule::class)->create([
            'name' => 'Horário x',
        ]);

        $this->assertInstanceOf(Schedule::class, $schedule);
        $this->seeInDatabase('schedules', [
            'name' => 'Horário x',
        ]);
    }

    public function test_create_schedule_with_classroom()
    {
        $schedule = factory(Schedule::class)->create();
        $classroom = factory(Classroom::class)->create([
            'schedule_id' => $schedule->id,
        ]);

        $this->assertInstanceOf(Schedule::class, $schedule);
        $this->assertInstanceOf(Classroom::class, $schedule->classrooms->first());
    }
}

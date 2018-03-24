<?php

namespace Tests\Unit\Models;

use App\Employee;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase as TestCase;

class EmployeeTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_employee_has_belongs_to_creator_relation()
    {
        $employee = factory(Employee::class)->make();

        $this->assertInstanceOf(User::class, $employee->creator);
        $this->assertEquals($employee->creator_id, $employee->creator->id);
    }
}

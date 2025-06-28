<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployerTest extends TestCase
{
    use RefreshDatabase;

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_has_many_jobs(): void
    {
        // 1. Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->for($employer)->create();

        // 2. Act & Assert
        $this->assertTrue($employer->jobs->contains($job));
    }
}

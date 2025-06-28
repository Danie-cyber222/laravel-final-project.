<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TagTest extends TestCase
{
    use RefreshDatabase;

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_can_have_tags(){
        $job = Job::factory()->create();
        $job->tag('finished');

        $this->assertTrue($job->tag->contains($job));
    }
}








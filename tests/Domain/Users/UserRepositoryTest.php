<?php

namespace Tests\Domain\Users;

use App\Domain\User\Models\User;
use App\Restify\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\Fluent\AssertableJson;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_list_users(): void
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $this->getJson(UserRepository::route())
            ->assertJson(fn(AssertableJson $json) => $json
                ->has('meta')
                ->has('links')
                ->has('data')
                ->etc()
            )
            ->assertOk();
    }
}

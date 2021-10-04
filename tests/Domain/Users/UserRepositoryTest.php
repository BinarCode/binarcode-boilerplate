<?php

use App\Domains\Users\Models\User;
use App\Restify\Users\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use function Pest\Laravel\getJson;

uses(RefreshDatabase::class);

test('can list users', function () {
    User::factory()->create();

    getJson(UserRepository::to())->assertJson(function (AssertableJson $json) {
        $json
            ->has('data.0.attributes.email')
            ->etc();
    })->assertOk();
});

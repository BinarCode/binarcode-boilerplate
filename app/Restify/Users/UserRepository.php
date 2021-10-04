<?php

namespace App\Restify\Users;

use App\Domains\Users\Models\User;
use App\Restify\Repository;
use Binaryk\LaravelRestify\Fields\Field;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class UserRepository extends Repository
{
    public static string $model = User::class;

    public function fields(RestifyRequest $request): array
    {
        return [
            Field::make('first_name')->rules('required'),

            Field::make('last_name')->rules('required'),

            Field::make('email')->storingRules('required', 'unique:users')->messages([
                'required' => 'This field is required.',
            ]),
        ];
    }
}

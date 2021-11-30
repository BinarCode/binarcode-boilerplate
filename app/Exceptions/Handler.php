<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    public function getDontFlash(): array
    {
        return [
            'password',
            'password_confirmation',
        ];
    }

    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}

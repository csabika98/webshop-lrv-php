<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AdminMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    # GLOBAL MIDDLEWARE!!!
    ->withMiddleware(function (Middleware $middleware) {
        //
        #$middleware->add('admin', AdminMiddleware::class);
        #$middleware->append(AdminMiddleware::class);
        #$middleware->appendToGroup('admin', [
        #    AdminMiddleware::class
        #]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

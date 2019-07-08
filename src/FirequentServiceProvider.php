<?php

namespace Firevel\Firequent;

use Firevel\Firequent\Firestore\ConnectionResolver;
use Firevel\Firequent\Model;
use Illuminate\Support\ServiceProvider;

class FirequentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Model::setConnectionResolver(new ConnectionResolver);
    }
}

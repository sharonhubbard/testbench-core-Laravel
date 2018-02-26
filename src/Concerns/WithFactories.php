<?php

namespace Orchestra\Testbench\Concerns;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Factory as ModelFactory;

trait WithFactories
{
    /**
     * Load model factories from path.
     *
     * @param  string  $path
     *
     * @return $this
     */
    protected function withFactories(string $path): self
    {
        $this->loadFactoriesUsing($this->app, $path);

        return $this;
    }

    /**
     * Load model factories from path using Application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @param  string  $path
     *
     * @return $this
     */
    protected function loadFactoriesUsing($app, string $path): self
    {
        $app->make(ModelFactory::class)->load($path);

        return $this;
    }
}

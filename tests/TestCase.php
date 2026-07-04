<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $compiled = sys_get_temp_dir() . '/laravel_views';

        if (! file_exists($compiled)) {
            mkdir($compiled, 0777, true);
        }

        $this->app['config']->set('view.compiled', $compiled);
    }
}

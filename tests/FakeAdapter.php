<?php

namespace MarvinRabe\LaravelSettings\Tests;

use MarvinRabe\LaravelSettings\StorageAdapter;

class FakeAdapter implements StorageAdapter
{

    protected $settings;

    public function all()
    {
        return collect($this->settings);
    }

}

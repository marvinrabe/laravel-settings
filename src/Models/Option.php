<?php

namespace MarvinRabe\LaravelSettings\Models;

use Illuminate\Database\Eloquent\Model;
use MarvinRabe\LaravelSettings\StorageAdapter;

class Option extends Model implements StorageAdapter
{

    public $timestamps = false;

    protected $fillable = ['key', 'value'];

    /**
     * @return mixed
     */
    public function getTable()
    {
        return config('settings.table', 'settings');
    }

    /**
     * @return \Illuminate\Database\Connection
     */
    public function getConnection()
    {
        return static::resolveConnection(config('settings.connection'));
    }
}

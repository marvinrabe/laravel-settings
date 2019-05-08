<?php

namespace MarvinRabe\LaravelSettings\Tests;

use MarvinRabe\LaravelSettings\Setting;

class SettingTest extends TestCase
{

    /** @test */
    public function it_stores_data()
    {
        $setting = new Setting(new FakeAdapter());

        $setting->set('foo', 'bar');

        $this->assertEquals('bar', $setting->get('foo'));
    }

    /** @test */
    public function it_returns_default_values_if_setting_is_null()
    {
        $setting = new Setting(new FakeAdapter());

        $setting->set('foo', null);

        $this->assertEquals('bar', $setting->get('foo', 'bar'));
    }

}

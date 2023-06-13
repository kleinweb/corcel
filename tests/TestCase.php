<?php

namespace Corcel\Tests;

use Corcel\Laravel\CorcelServiceProvider;
use Corcel\Model\User;
use Corcel\Tests\Unit\Model\FakePage;
use Corcel\Tests\Unit\Model\FakePost;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Class TestCase
 *
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom([
            '--database' => 'foo',
            '--realpath' => true,
            '--path' => __DIR__ . '/database/migrations',
        ]);

        $this->loadMigrationsFrom([
            '--database' => 'wp',
            '--realpath' => true,
            '--path' => __DIR__ . '/database/migrations',
        ]);

        $this->withFactories(__DIR__ . '/database/factories');
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        // $this->configureDatabaseConfig($app);
        // $this->configureAuthProvider($app);
        // $this->configureCustomPostTypes($app);
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    private function configureDatabaseConfig($app)
    {
        // TODO: nope
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    private function configureAuthProvider($app)
    {
        // TODO: nope
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    private function configureCustomPostTypes($app)
    {
        // TODO: nope
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            CorcelServiceProvider::class,
        ];
    }

    /**
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  string $driver
     * @return void
     */
    public function be(Authenticatable $user, $driver = null)
    {
        // TODO: Implement be() method.
    }
}

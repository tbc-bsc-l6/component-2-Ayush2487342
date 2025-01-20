<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | Sets the default cache store. If no store is specified during cache operations,
    | this default store will be used.
    |
    */

    'default' => env('CACHE_STORE', 'database'), // Default cache store set via environment variable

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Configuration of various cache stores with different drivers. Each store is
    | set up with specific configurations depending on the cache method used.
    |
    */

    'stores' => [

        'array' => [
            'driver' => 'array',
            'serialize' => false, // Does not serialize data, suitable for non-persistent caches
        ],

        'database' => [
            'driver' => 'database', // Uses database for cache storage
            'connection' => env('DB_CACHE_CONNECTION'), // Database connection to use
            'table' => env('DB_CACHE_TABLE', 'cache'), // Table to store cache data
            'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'), // Optional separate connection for cache locks
            'lock_table' => env('DB_CACHE_LOCK_TABLE'), // Table for cache locks
        ],

        'file' => [
            'driver' => 'file', // Uses file system for cache storage
            'path' => storage_path('framework/cache/data'), // Path where cache files are stored
            'lock_path' => storage_path('framework/cache/data'), // Path where cache lock files are stored
        ],

        'memcached' => [
            'driver' => 'memcached', // Uses Memcached for cache
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'), // Optional persistent ID for long-lived connections
            'sasl' => [
                env('MEMCACHED_USERNAME'), // Username for SASL authentication
                env('MEMCACHED_PASSWORD'), // Password for SASL authentication
            ],
            'options' => [
                // Additional options can be set here for Memcached
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'), // Server host
                    'port' => env('MEMCACHED_PORT', 11211), // Server port
                    'weight' => 100, // Weight for server distribution
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis', // Uses Redis for cache
            'connection' => env('REDIS_CACHE_CONNECTION', 'cache'), // Redis connection to use
            'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'), // Connection for cache locks
        ],

        'dynamodb' => [
            'driver' => 'dynamodb', // Uses DynamoDB for cache
            'key' => env('AWS_ACCESS_KEY_ID'), // AWS access key
            'secret' => env('AWS_SECRET_ACCESS_KEY'), // AWS secret key
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'), // AWS region
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'), // DynamoDB table for cache
            'endpoint' => env('DYNAMODB_ENDPOINT'), // Optional custom endpoint for local testing
        ],

        'octane' => [
            'driver' => 'octane', // Uses Laravel Octane's in-memory cache
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | Prefix for cache keys to prevent collisions with other applications using the same cache storage.
    |
    */

    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache_'), // Prefix for cache keys

];

<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This setting defines the default log channel used to write log messages.
    | The channel must be defined within the 'channels' configuration below.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'), // Default logging channel

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | Configures the logging channel for deprecation warnings from PHP and libraries,
    | helping you prepare for future upgrades by logging deprecations separately.
    |
    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'), // Channel for deprecations
        'trace' => env('LOG_DEPRECATIONS_TRACE', false), // Whether to include stack trace
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you can configure different channels for logging. Laravel uses Monolog,
    | which supports various log handlers and formatters. Customize as needed.
    |
    */

    'channels' => [

        'stack' => [
            'driver' => 'stack',
            'channels' => explode(',', env('LOG_STACK', 'single')), // Stack of channels
            'ignore_exceptions' => false, // Whether to ignore exceptions
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'), // Path for log files
            'level' => env('LOG_LEVEL', 'debug'), // Log level
            'replace_placeholders' => true, // Replace placeholders in messages
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'), // Path for daily log files
            'level' => env('LOG_LEVEL', 'debug'), // Log level
            'days' => env('LOG_DAILY_DAYS', 14), // Number of days to retain logs
            'replace_placeholders' => true, // Replace placeholders in messages
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'), // Webhook URL for Slack logging
            'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'), // Username for Slack messages
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'), // Emoji for Slack messages
            'level' => env('LOG_LEVEL', 'critical'), // Log level for Slack
            'replace_placeholders' => true, // Replace placeholders in messages
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'), // Log level for Papertrail
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class), // Handler class
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'), // Papertrail host
                'port' => env('PAPERTRAIL_PORT'), // Papertrail port
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class], // Log message processors
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'), // Log level for stderr
            'handler' => StreamHandler::class, // Stream handler class
            'formatter' => env('LOG_STDERR_FORMATTER'), // Formatter for stderr logs
            'with' => [
                'stream' => 'php://stderr', // Stream for stderr logging
            ],
            'processors' => [PsrLogMessageProcessor::class], // Log message processors
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'), // Log level for syslog
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER), // Syslog facility
            'replace_placeholders' => true, // Replace placeholders in messages
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'), // Log level for error log
            'replace_placeholders' => true, // Replace placeholders in messages
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class, // Null handler to discard logs
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'), // Path for emergency logs
        ],

    ],

];

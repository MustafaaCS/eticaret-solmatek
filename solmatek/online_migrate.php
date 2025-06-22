<?php
// Simple online migration script.
// Delete or protect this file after running for security.

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$status = $kernel->call('migrate', ['--force' => true]);

echo "<pre>Migration output:\n" . $kernel->output() . "</pre>";

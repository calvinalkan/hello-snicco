<?php

/*
 * Plugin Name:       Hello Snicco PHP
 * Plugin URI:        https://github.com/snicco
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Snicco
 * Author URI:        https://github.com/snicco
 * Text Domain:       hello-snicco
 */
declare(strict_types=1);

use HelloSnicco\Controller\SearchController;
use Snicco\Bridge\Pimple\PimpleContainerAdapter;
use Snicco\Bundle\HttpRouting\HttpKernelRunner;
use Snicco\Component\Kernel\Kernel;
use Snicco\Component\Kernel\ValueObject\Directories;
use Snicco\Component\Kernel\ValueObject\Environment;

require_once __DIR__.'/vendor/autoload.php';

$ioc_container = new PimpleContainerAdapter();

$ioc_container->instance(SearchController::class, new SearchController());

// Enable route/config caching in production.
//$env = Environment::dev();
$env = Environment::prod();

$kernel = new Kernel(
    $ioc_container,
    $env,
    Directories::fromDefaults(__DIR__)
);

$kernel->boot();

$is_wp_admin_area = is_admin();

// Can add more conditions here as needed.
if($is_wp_admin_area || wp_doing_cron() || wp_doing_ajax()){
    return;
}

// Plugin is being activated. We can't run routing.
if (defined('WP_SANDBOX_SCRAPING')){
    return;
}

$runner = $kernel->container()->make(HttpKernelRunner::class);

/*
 * If you want to you really, really fast and run the plugin right now if a route matches.
 */
$run_right_now = false;

if ($run_right_now){
    $runner->run();
}else {
    
    $when_should_normal_routes_run = 'wp_loaded';
    $when_should_early_routes_run = 'plugins_loaded';
    
    $runner->listen($is_wp_admin_area, $when_should_normal_routes_run, $when_should_early_routes_run);
    
}

// Now go visit:
//https://domain.com/hello-snicco/search/AC%20DC


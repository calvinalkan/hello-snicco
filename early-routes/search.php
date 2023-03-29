<?php

declare(strict_types=1);

use HelloSnicco\Controller\SearchController;
use Snicco\Component\HttpRouting\Routing\RoutingConfigurator\WebRoutingConfigurator;

return static function(WebRoutingConfigurator  $router) {
  
   $router->get('search.query', '/{search_query}', [SearchController::class, 'searchQuery']);
    
};
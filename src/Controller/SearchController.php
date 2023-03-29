<?php

declare(strict_types=1);

namespace HelloSnicco\Controller;

use Snicco\Component\HttpRouting\Controller\Controller;
use Snicco\Component\HttpRouting\Http\Psr7\Request;

final class SearchController extends Controller
{
    
    public function searchQuery(Request $request, string $search_string) :string
    {
        return "You searched for $search_string";
    }
}
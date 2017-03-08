<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('v_card_homepage', new Route('/', array(
    '_controller' => 'VCardBundle:Default:index',
)));

return $collection;

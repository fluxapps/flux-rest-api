<?php

namespace FluxRestApi\Service\Server\Route;

use FluxRestApi\Adapter\Route\Route;

class MatchedRouteDto
{

    public readonly array $params;
    public readonly Route $route;


    /**
     * @param string[] $params
     */
    private function __construct(
        /*public readonly*/ Route $route,
        /*public readonly*/ array $params
    ) {
        $this->route = $route;
        $this->params = $params;
    }


    /**
     * @param string[]|null $params
     */
    public static function new(
        Route $route,
        ?array $params
    ) : static {
        return new static(
            $route,
            $params ?? []
        );
    }
}

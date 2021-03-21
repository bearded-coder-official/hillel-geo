<?php

namespace Hillel\Geo;

interface GeoServiceInterface
{
    public function continentCode();
    public function countryCode();

    public function parse($ip);
}

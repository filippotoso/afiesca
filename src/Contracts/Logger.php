<?php

namespace FilippoToso\AfiEsca\Contracts;

interface Logger
{
    public function log($type, $service, $request, $content);
}

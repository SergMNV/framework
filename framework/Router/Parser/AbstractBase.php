<?php

namespace Framework\Router\Parser;

abstract class AbstractBase implements ParserInterface
{
    public function parse(): mixed
    {
        return 'parse';
    }
}

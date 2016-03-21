<?php

use Illuminate\Support\Str;

class IlluminateSupportTest extends CaseTestCase
{
    public function snakeCase($word)
    {
        return Str::snake($word);
    }

    public function kebabCase($word)
    {
        return Str::snake($word, '-');
    }

    public function pascalCase($word)
    {
        return Str::studly($word);
    }

    public function camelCase($word)
    {
        return Str::camel($word);
    }
}

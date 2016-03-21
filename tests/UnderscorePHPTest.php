<?php

use Underscore\Types\Strings as String;

class UnderscorePHPTest extends CaseTestCase
{
    public function snakeCase($word)
    {
        return String::toSnakeCase($word);
    }

    public function kebabCase($word)
    {
        $this->markTestSkipped();
    }

    public function pascalCase($word)
    {
        return String::toPascalCase($word);
    }

    public function camelCase($word)
    {
        return String::toCamelCase($word);
    }
}

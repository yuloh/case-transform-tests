<?php

use function Stringy\create as s;

class StringyTest extends CaseTestCase
{
    public function snakeCase($word)
    {
        return (string) s($word)->underscored();
    }

    public function kebabCase($word)
    {
       return (string) s($word)->dasherize();
    }

    public function pascalCase($word)
    {
        return (string) s($word)->upperCamelize();
    }

    public function camelCase($word)
    {
        return (string) s($word)->camelize();
    }
}

<?php

use function Yuloh\Neko\snake_case;
use function Yuloh\Neko\kebab_case;
use function Yuloh\Neko\pascal_case;
use function Yuloh\Neko\camel_case;

class NekoTest extends CaseTestCase
{
    public function snakeCase($word)
    {
        return snake_case($word);
    }

    public function kebabCase($word)
    {
       return kebab_case($word);
    }

    public function pascalCase($word)
    {
        return pascal_case($word);
    }

    public function camelCase($word)
    {
        return camel_case($word);
    }
}

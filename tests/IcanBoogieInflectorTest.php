<?php

use ICanBoogie\Inflector;

class IcanBoogieInflectorTest extends CaseTestCase
{
    public function snakeCase($word)
    {
        return Inflector::get()->underscore($word);
    }

    public function kebabCase($word)
    {
       return Inflector::get()->hyphenate($word);
    }

    public function pascalCase($word)
    {
        return Inflector::get()->camelize($word, Inflector::UPCASE_FIRST_LETTER);
    }

    public function camelCase($word)
    {
        return Inflector::get()->camelize($word, Inflector::DOWNCASE_FIRST_LETTER);
    }
}

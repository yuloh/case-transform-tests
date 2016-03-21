<?php

use Doctrine\Common\Inflector\Inflector;

class DoctrineInflectorTest extends CaseTestCase
{
    public function snakeCase($word)
    {
        return Inflector::tableize($word);
    }

    public function kebabCase($word)
    {
        $this->markTestSkipped();
    }

    public function pascalCase($word)
    {
        return Inflector::classify($word);
    }

    public function camelCase($word)
    {
        return Inflector::camelize($word);
    }
}

<?php

abstract class CaseTestCase extends \PHPUnit_Framework_TestCase
{
    private $title = 'The Thing';
    private $lower = 'the thing';
    private $pascal = 'TheThing';
    private $camel = 'theThing';
    private $kebab = 'the-thing';
    private $snake = 'the_thing';
    private $screamingSnake = 'THE_THING';

    abstract public function snakeCase($word);

    abstract public function kebabCase($word);

    abstract public function pascalCase($word);

    abstract public function camelCase($word);

    //------------------- snake ------------------------//

    public function testSnakeCaseFromTitleCase()
    {
        $this->assertSame($this->snake, $this->snakeCase($this->title));
    }

    public function testSnakeCaseFromLowerCase()
    {
        $this->assertSame($this->snake, $this->snakeCase($this->lower));
    }

    public function testSnakeCaseFromPascalCase()
    {
        $this->assertSame($this->snake, $this->snakeCase($this->pascal));
    }

    public function testSnakeCaseFromCamelCase()
    {
        $this->assertSame($this->snake, $this->snakeCase($this->camel));
    }

    public function testSnakeCaseFromKebabCase()
    {
        $this->assertSame($this->snake, $this->snakeCase($this->kebab));
    }

    public function testSnakeCaseFromSnakeCase()
    {
        $this->assertSame($this->snake, $this->snakeCase($this->snake));
    }

    public function testSnakeCaseFromScreamingSnakeCase()
    {
        $this->assertSame($this->snake, $this->snakeCase($this->screamingSnake));
    }

    //------------------- kebab ------------------------//

    public function testKebabCaseFromTitleCase()
    {
        $this->assertSame($this->kebab, $this->kebabCase($this->title));
    }

    public function testKebabCaseFromLowerCase()
    {
        $this->assertSame($this->kebab, $this->kebabCase($this->lower));
    }

    public function testKebabCaseFromPascalCase()
    {
        $this->assertSame($this->kebab, $this->kebabCase($this->pascal));
    }

    public function testKebabCaseFromCamelCase()
    {
        $this->assertSame($this->kebab, $this->kebabCase($this->camel));
    }

    public function testKebabCaseFromKebabCase()
    {
        $this->assertSame($this->kebab, $this->kebabCase($this->kebab));
    }

    public function testKebabCaseFromSnakeCase()
    {
        $this->assertSame($this->kebab, $this->kebabCase($this->snake));
    }

    public function testKebabCaseFromScreamingSnakeCase()
    {
        $this->assertSame($this->kebab, $this->kebabCase($this->screamingSnake));
    }

    //------------------- pascal ------------------------//

    public function testPascalCaseFromTitleCase()
    {
        $this->assertSame($this->pascal, $this->pascalCase($this->title));
    }

    public function testPascalCaseFromLowerCase()
    {
        $this->assertSame($this->pascal, $this->pascalCase($this->lower));
    }

    public function testPascalCaseFromPascalCase()
    {
        $this->assertSame($this->pascal, $this->pascalCase($this->pascal));
    }

    public function testPascalCaseFromCamelCase()
    {
        $this->assertSame($this->pascal, $this->pascalCase($this->camel));
    }

    public function testPascalCaseFromKebabCase()
    {
        $this->assertSame($this->pascal, $this->pascalCase($this->kebab));
    }

    public function testPascalCaseFromSnakeCase()
    {
        $this->assertSame($this->pascal, $this->pascalCase($this->snake));
    }

    public function testPascalCaseFromScreamingSnakeCase()
    {
        $this->assertSame($this->pascal, $this->pascalCase($this->screamingSnake));
    }

    //------------------- camel ------------------------//

    public function testCamelCaseFromTitleCase()
    {
        $this->assertSame($this->camel, $this->camelCase($this->title));
    }

    public function testCamelCaseFromLowerCase()
    {
        $this->assertSame($this->camel, $this->camelCase($this->lower));
    }

    public function testCamelCaseFromPascalCase()
    {
        $this->assertSame($this->camel, $this->camelCase($this->pascal));
    }

    public function testCamelCaseFromCamelCase()
    {
        $this->assertSame($this->camel, $this->camelCase($this->camel));
    }

    public function testCamelCaseFromKebabCase()
    {
        $this->assertSame($this->camel, $this->camelCase($this->kebab));
    }

    public function testCamelCaseFromSnakeCase()
    {
        $this->assertSame($this->camel, $this->camelCase($this->snake));
    }

    public function testCamelCaseFromScreamingSnakeCase()
    {
        $this->assertSame($this->camel, $this->camelCase($this->screamingSnake));
    }
}

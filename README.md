# Case Tranform Tests

This repo is a test suite to compare different case transformation libraries for PHP.  I wrote this because none of the case transform functions I used ever worked like I expected.

Each library is tested on it's ability to transform one format to another.  Only libraries that can transform without knowing the input format are tested.  Feel free to open a pull request or issue to add additional libraries.

You can view the basic test [here](tests/CaseTestCase.php).

## The Libraries

- [doctrine/inflector](https://github.com/doctrine/inflector)
- [illuminate/support](https://github.com/illuminate/support)
- [danielstjules/Stringy](https://github.com/danielstjules/Stringy)
- [anahkiasen/underscore-php](https://github.com/Anahkiasen/underscore-php)
- [yuloh/neko](https://github.com/yuloh/neko)

## The Input Formats

- Title Case
- lower case
- PascalCase (aka upper camel case, or studly case in the Laravel framework)
- camelCase (aka lower camel case)
- kebab-case (aka dasherized)
- snake_case
- SCREAMING_SNAKE_CASE (aka constant case)

## The Output Formats

- PascalCase
- camelCase
- kebab-case
- snake_case

## Results

These are the results as output by phpunit in testdox format.  You can run them yourself by executing `phpunit --testdox`.  `[x]` means the test passed. `[ ]` means the test failed or it was skipped because it isn't supported.

**note:** doctrine/inflector and anahkiasen/underscore-php don't support kebab-case, so those tests are skipped.

**disclaimer:** I wrote neko.

## [doctrine/inflector](https://github.com/doctrine/inflector)
```
 [ ] Snake case from title case
 [ ] Snake case from lower case
 [x] Snake case from pascal case
 [x] Snake case from camel case
 [ ] Snake case from kebab case
 [x] Snake case from snake case
 [ ] Snake case from screaming snake case
 [ ] Kebab case from title case
 [ ] Kebab case from lower case
 [ ] Kebab case from pascal case
 [ ] Kebab case from camel case
 [ ] Kebab case from kebab case
 [ ] Kebab case from snake case
 [ ] Kebab case from screaming snake case
 [x] Pascal case from title case
 [x] Pascal case from lower case
 [x] Pascal case from pascal case
 [x] Pascal case from camel case
 [x] Pascal case from kebab case
 [x] Pascal case from snake case
 [ ] Pascal case from screaming snake case
 [x] Camel case from title case
 [x] Camel case from lower case
 [x] Camel case from pascal case
 [x] Camel case from camel case
 [x] Camel case from kebab case
 [x] Camel case from snake case
 [ ] Camel case from screaming snake case
```

## [illuminate/support](https://github.com/illuminate/support)
```
 [x] Snake case from title case
 [ ] Snake case from lower case
 [x] Snake case from pascal case
 [x] Snake case from camel case
 [ ] Snake case from kebab case
 [x] Snake case from snake case
 [ ] Snake case from screaming snake case
 [x] Kebab case from title case
 [ ] Kebab case from lower case
 [x] Kebab case from pascal case
 [x] Kebab case from camel case
 [x] Kebab case from kebab case
 [ ] Kebab case from snake case
 [ ] Kebab case from screaming snake case
 [x] Pascal case from title case
 [x] Pascal case from lower case
 [x] Pascal case from pascal case
 [x] Pascal case from camel case
 [x] Pascal case from kebab case
 [x] Pascal case from snake case
 [ ] Pascal case from screaming snake case
 [x] Camel case from title case
 [x] Camel case from lower case
 [x] Camel case from pascal case
 [x] Camel case from camel case
 [x] Camel case from kebab case
 [x] Camel case from snake case
 [ ] Camel case from screaming snake case
```

## [yuloh/neko](https://github.com/yuloh/neko)
```
 [x] Snake case from title case
 [x] Snake case from lower case
 [x] Snake case from pascal case
 [x] Snake case from camel case
 [x] Snake case from kebab case
 [x] Snake case from snake case
 [x] Snake case from screaming snake case
 [x] Kebab case from title case
 [x] Kebab case from lower case
 [x] Kebab case from pascal case
 [x] Kebab case from camel case
 [x] Kebab case from kebab case
 [x] Kebab case from snake case
 [x] Kebab case from screaming snake case
 [x] Pascal case from title case
 [x] Pascal case from lower case
 [x] Pascal case from pascal case
 [x] Pascal case from camel case
 [x] Pascal case from kebab case
 [x] Pascal case from snake case
 [x] Pascal case from screaming snake case
 [x] Camel case from title case
 [x] Camel case from lower case
 [x] Camel case from pascal case
 [x] Camel case from camel case
 [x] Camel case from kebab case
 [x] Camel case from snake case
 [x] Camel case from screaming snake case
```

## [danielstjules/Stringy](https://github.com/danielstjules/Stringy)
```
 [x] Snake case from title case
 [x] Snake case from lower case
 [x] Snake case from pascal case
 [x] Snake case from camel case
 [x] Snake case from kebab case
 [x] Snake case from snake case
 [ ] Snake case from screaming snake case
 [x] Kebab case from title case
 [x] Kebab case from lower case
 [x] Kebab case from pascal case
 [x] Kebab case from camel case
 [x] Kebab case from kebab case
 [x] Kebab case from snake case
 [ ] Kebab case from screaming snake case
 [x] Pascal case from title case
 [x] Pascal case from lower case
 [x] Pascal case from pascal case
 [x] Pascal case from camel case
 [x] Pascal case from kebab case
 [x] Pascal case from snake case
 [ ] Pascal case from screaming snake case
 [x] Camel case from title case
 [x] Camel case from lower case
 [x] Camel case from pascal case
 [x] Camel case from camel case
 [x] Camel case from kebab case
 [x] Camel case from snake case
 [ ] Camel case from screaming snake case
```

## [anahkiasen/underscore-php](https://github.com/Anahkiasen/underscore-php)
```
 [ ] Snake case from title case
 [ ] Snake case from lower case
 [ ] Snake case from pascal case
 [x] Snake case from camel case
 [ ] Snake case from kebab case
 [x] Snake case from snake case
 [ ] Snake case from screaming snake case
 [ ] Kebab case from title case
 [ ] Kebab case from lower case
 [ ] Kebab case from pascal case
 [ ] Kebab case from camel case
 [ ] Kebab case from kebab case
 [ ] Kebab case from snake case
 [ ] Kebab case from screaming snake case
 [x] Pascal case from title case
 [x] Pascal case from lower case
 [x] Pascal case from pascal case
 [x] Pascal case from camel case
 [x] Pascal case from kebab case
 [x] Pascal case from snake case
 [ ] Pascal case from screaming snake case
 [x] Camel case from title case
 [x] Camel case from lower case
 [x] Camel case from pascal case
 [x] Camel case from camel case
 [x] Camel case from kebab case
 [x] Camel case from snake case
 [ ] Camel case from screaming snake case
 ```

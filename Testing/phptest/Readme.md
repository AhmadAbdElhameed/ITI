# PHP-Unit-Testing Lab
Simple Calculator ,User and Factorial to use for unit testing

### setup environment :

1 - open xampp/htdocs directory

2- excute `composer require phpunit/phpunit ^9`

3- you can check version of php unit by excuting `./vendor/bin/phpunit --version`

4- Set root for Application, open composer.json and type :     
`"autoload": {
        "psr-4": {
            "App\\":"app"
        }
    }` and then excute `composer update`

5- create tests folder in your directory and create your tests files there

6- to test functions excute `./vendor/bin/phpunit --testdox`
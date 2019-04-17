SOURCE: https://thecodingmachine.io/building-a-single-page-application-with-symfony-4-and-vuejs



Access php-apapche shell
docker-compose exec app bash

$ composer create-project symfony/website-skeleton .
$ composer require symfony/apache-pack

**PHP analysis tools**
composer cscheck and composer csfix

$ composer require --dev phpstan/phpstan
$ composer require --dev thecodingmachine/phpstan-strict-rules
$ composer require thecodingmachine/safe
$ composer require --dev thecodingmachine/phpstan-safe-rule

Every time you push your modifications to your repository, don't forget to run 
composer csfix && composer cscheck && composer phpstan

# solid_php

Como inciar um projeto PHP:

php ..\composer.phar init
php ..\composer.phar install

Subir o servidor:

php -S localhost:8000

Instalar PHPUNIT para testes unitários:

Baixar phpunit

php ..\composer.phar require --dev --prefer-dist phpunit/phpunit ^10

--prefer-dist baixa as dependencias do phpunit

exemplo de execução dos testes unitários:

vendor\bin\phpunit.bat test\ItemTest.php

Treinando os principios SOLID em PHP

SOLID

Single responsability principle
Open/Close principle
Liskov substitution principle

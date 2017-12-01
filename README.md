# php-library
Biblioteca de classes Standard em PHP

## Configuração
Incluir no `composer.json`:

```
"autoload": {
        "psr-<VERSION>": {
            "Loopimoveis\\": "<YOUR_DIRECTORY>/src"
        }
}
"autoload-dev": {
        "psr-<VERSION>": {
            "Loopimoveis\\": "<YOUR_DIRECTORY>/src"
        }
}
```

Para o autoload utilizar os namespaces, rode o comando:
```
    composer install
```

## Exemplos

Exemplo de classe com namespace:

```php
<?php
    
namespace Loopimoveis\Classes;
        
class Example
{
    public function __construct()
    {
        echo "I'm loading this class inside the project, horrrray!";
    }
}
```

Utilização:

```php
<?php

use Loopimoveis\Classes\Example;

```
```php
<?php

$example = new Example(); /* output: 'I'm loading this class inside the project, horrrray!' */

```
Para incluir como sub-módulo no projeto
```
git submodule add https://github.com/loopimoveis/php-library.git loopimoveis
```
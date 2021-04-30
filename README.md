UseCase
=======

UseCase est une bibliothèque qui fournit des fonctionnalités pour gérer le code technique sur un cas d'utilisation dans une Clean / Hexagonale / Use Case Architecture.

More details on :
- [Clean Architecture](http://blog.8thlight.com/uncle-bob/2012/08/13/the-clean-architecture.html).


## Installation
```composer require abbeal/use-case``` ou en ajoutant directement le package au fichier composer.json.

```json
{
    "require": {
        "abbeal/use-case": "*"
    }
}
```

## Usage
Avec un cas d'utilisation classique en Clean / Hexagonal / Use Case Architecture ressemble à ceci:

```php

use Abbeal\Bundle\UseCaseBundle\UseCase\Domain\UseCase;
use Abbeal\Bundle\UseCaseBundle\UseCase\Domain\Requestors\Request;
use Abbeal\Bundle\UseCaseBundle\UseCase\Domain\Responders\Response;

class AUseCase implements UseCase
{
    /**
     * @return Response
     */
    public function execute(ARequest $request, APresenterInterface $presenter): void
    {
        $response = new AResponse();
        
        $presenter->present($response);
    }
}
```
### Utils
La librarie mets à disposition une réponse générique pour la pagination d'une collection.

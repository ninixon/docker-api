# MayMeow Cloud Docker Api

TODO

## Example

```php
use MayMeow\Docker\Client\DockerClient;
use MayMeow\Docker\Docker;

// Initialize docker API with standard socket client
$docker = new Docker(new DockerClient());

// Initialize socket 
$docker->getClient()
    ->setSocket();

// List all containers running on docker server
$containers = $docker->getContainerManager()->findAll();
```
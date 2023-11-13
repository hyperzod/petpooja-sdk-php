<?php

namespace Hyperzod\PetpoojaSdkPhp\Client;

use Hyperzod\PetpoojaSdkPhp\Service\CoreServiceFactory;

class PetpoojaClient extends BasePetpoojaClient
{
    /**
     * @var CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->__get($name);
    }
}

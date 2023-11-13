<?php

namespace Hyperzod\PetpoojaSdkPhp\Client;

/**
 * Interface for a Petpooja client.
 */
interface PetpoojaClientInterface extends BasePetpoojaClientInterface
{
   /**
    * Sends a request to Petpooja's API.
    *
    * @param string $method the HTTP method
    * @param string $path the path of the request
    * @param array $params the parameters of the request
    */
   public function request($method, $path, $params);
}

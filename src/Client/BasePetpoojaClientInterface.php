<?php

namespace Hyperzod\PetpoojaSdkPhp\Client;

/**
 * Interface for a Petpooja client.
 */
interface BasePetpoojaClientInterface
{
   /**
    * Gets the API key used by the client to send requests.
    *
    * @return null|string the API key used by the client to send requests
    */
   public function getApiKey();

   /**
    * Gets the base URL for Petpooja's API.
    *
    * @return string the base URL for Petpooja's API
    */
   public function getApiBase();
}

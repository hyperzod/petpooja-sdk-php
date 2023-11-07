<?php

namespace Hyperzod\PetpoojaSdkPhp\Service;

use Hyperzod\PetpoojaSdkPhp\Enums\HttpMethodEnum;

class JobService extends AbstractService
{
   /**
    * Create a job on gophr
    *
    * @param array $params
    *
    * @throws \Hyperzod\PetpoojaSdkPhp\Exception\ApiErrorException if the request fails
    *
    */
   public function create(array $params)
   {
      return $this->request(HttpMethodEnum::POST, '/jobs', $params);
   }
}

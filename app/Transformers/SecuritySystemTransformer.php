<?php

namespace App\Transformers;

use App\Entities\SecuritySystem;

class SecuritySystemTransformer
{

   public function transform(SecuritySystem $security_system)
   {
       return [
            'id' => $security_system->getId(),
            'description' => $security_system->getDescription(),
            'acronyms' => $security_system->getAcronyms(),
            'email' => $security_system->getEmail(),
            'url' => $security_system->getUrl(),
            'status' => $security_system->getStatus(),
            'updated_at' => $security_system->getUpdatedAt(),
            'responsible_user' => $security_system->getResponsibleUser(),
            'new_justificative' => $security_system->getNewJustificative(),
            'last_justificative' => $security_system->getLastJustificative()
       ];
   }

   public function transformAll(array $security_systems) {
      return array_map(
         function ($security_system) {
           return $this->transform($security_system);
         }, $security_systems
      );
   }

}

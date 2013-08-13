<?php

namespace fkooman\janus\validate\validators;

use fkooman\janus\validate\Validate;
use fkooman\janus\validate\ValidateInterface;

class SurfCheckArp extends Validate implements ValidateInterface
{

    public function sp($entityData, $metadata, $allowedEntities, $blockedEntities, $arp)
    {
        if (false === $arp) {
            $this->logWarn("sp must have arp");
        }
    }

    public function idp($entityData, $metadata, $allowedEntities, $blockedEntities, $disableConsent)
    {
    }
}

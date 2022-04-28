<?php 

namespace WSC\TagManagerSW6\Subscriber;

use Shopware\Core\System\SystemConfig\SystemConfigService;

class WSCStorefrontRenderSubscriber implements EventSubscriberInterface
{
    private SystemConfigService $systemConfigService;

    public function __construct(SystemConfigService $systemConfigService)
    {
        $this->systemConfigService = $systemConfigService;
    }

}
<?php

namespace VendorName\Skeleton\Handlers;

use craft\services\Config;
use craft\services\Elements;
use VendorName\Skeleton\SkeletonPlugin;
use VendorName\Skeleton\SkeletonSettings;
use yii\base\Application;

/**
 * What the fuck is a service?
 * Why should we inject dependencies?
 * How to test this?
 */
class SkeletonService
{

    protected Config $craftConfig;

    protected SkeletonSettings $settings;

    public function __construct(Config $craftConfig, SkeletonSettings $settings)
    {
        $this->craftConfig = $craftConfig;
        $this->settings = $settings;
    }

    public function doSomeThing(): bool
    {
        if ($this->craftConfig->general->devMode === true) {
           // Craft devMode only
        }

        if ($this->settings->bar === 'someValue') {
            // SkeletonPlugin setting bar is someValue
        }

        return false;
    }
}

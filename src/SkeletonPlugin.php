<?php

namespace VendorName\Skeleton;

use VendorName\Skeleton\SkeletonSettings;

/**
 *
 * @method SkeletonSettings getSettings()
 */
class SkeletonPlugin extends Plugin
{

    /**
     * Initialize Plugin
     */
    public function init(): void
    {
        parent::init();

        $this->registerServices();
        $this->registerEventHandler();
    }

    private function registerEventHandlers(): void
    {
        Event::on(
            SomeCoreClass::class,
            SomeCoreClass::EVENT_NAME,
            new SomeHandler($this->getSettings())
        );
    }

    protected function createSettingsModel(): SkeletonSettings
    {
        return new \VendorName\Skeleton\SkeletonSettings();
    }
}

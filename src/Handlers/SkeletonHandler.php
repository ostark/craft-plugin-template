<?php

namespace VendorName\Skeleton\Handlers;

use VendorName\Skeleton\SkeletonSettings;

/**
 * What the fuck is a handler?
 *
 */
class SkeletonHandler
{
    protected SkeletonSettings $settings;

    public function __construct(SkeletonSettings $settings)
    {
        $this->settings = $settings;
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }
}

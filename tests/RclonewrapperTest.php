<?php

/*
 * Copyright (c) Philip Skuza <philip.skuza@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rclonewrapper\tests;

use Rclonewrapper\Rclonewrapper;

/**
 * Rclonewrappertests.
 *
 * Tests all functionality in the Rclonewrapper package.
 */
class RclonewrapperTests extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests if the version function works
     */
    public function testVersion()
    {
        $rclone = new Rclonewrapper('./rclone');
		
        $this->assertContains('rclone', $rclone->version());
    }
}

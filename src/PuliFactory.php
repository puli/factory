<?php

/*
 * This file is part of the puli/factory package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Puli\Factory;

use Puli\Discovery\Api\ResourceDiscovery;
use Puli\Repository\Api\ResourceRepository;

/**
 * A factory for Puli's core services.
 *
 * @since  1.0
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface PuliFactory
{
    /**
     * Creates the resource repository.
     *
     * @return ResourceRepository The created resource repository.
     */
    public function createRepository();

    /**
     * Creates the resource discovery.
     *
     * @param ResourceRepository $repo The resource repository to read from.
     *
     * @return ResourceDiscovery The created resource discovery.
     */
    public function createDiscovery(ResourceRepository $repo);
}

<?php
/*
 * This file is part of prooph/proophessor.
 * (c) 2014-2015 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Date: 5/4/15 - 5:45 PM
 */
namespace Prooph\Proophessor\Container\Projection\Todo;

use Interop\Container\ContainerInterface;
use Prooph\Proophessor\Projection\Todo\TodoProjector;

/**
 * Class TodoProjectorFactory
 *
 * @package Prooph\Proophessor\Projection\Todo
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
final class TodoProjectorFactory
{
    /**
     * @param ContainerInterface $container
     * @return TodoProjector
     */
    public function __invoke(ContainerInterface $container)
    {
        return new TodoProjector($container->get('doctrine.connection.default'));
    }
}

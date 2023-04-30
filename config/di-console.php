<?php

declare(strict_types=1);

/*
 * This file is part of the Schranz Search package.
 *
 * (c) Alexander Schranz <alexander@sulu.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Psr\Container\ContainerInterface;
use Schranz\Search\Integration\Yii\Command\IndexCreateCommand;
use Schranz\Search\Integration\Yii\Command\IndexDropCommand;
use Schranz\Search\SEAL\EngineRegistry;

$diConfig[IndexCreateCommand::class] = static function (ContainerInterface $container) {
    /** @var EngineRegistry $engineRegistry */
    $engineRegistry = $container->get(EngineRegistry::class);

    return new IndexCreateCommand($engineRegistry);
};

$diConfig[IndexDropCommand::class] = static function (ContainerInterface $container) {
    /** @var EngineRegistry $engineRegistry */
    $engineRegistry = $container->get(EngineRegistry::class);

    return new IndexDropCommand($engineRegistry);
};

return $diConfig;

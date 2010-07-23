<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\DoctrineMongoDBBundle\Tests\DependencyInjection;

use Symfony\Components\DependencyInjection\ContainerBuilder;
use Symfony\Components\DependencyInjection\Loader\YamlFileLoader;

class YamlMongoDBExtensionTest extends AbstractMongoDBExtensionTest
{
    protected function loadFromFile(ContainerBuilder $container, $file)
    {
        $loadYaml = new YamlFileLoader($container, __DIR__.'/Fixtures/yml');
        $loadYaml->load($file.'.yml');
    }
}
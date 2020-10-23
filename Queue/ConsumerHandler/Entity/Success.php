<?php

declare(strict_types=1);

/**
 * File: Success.php
 *
 * @author Bartosz Kubicki bartosz.kubicki@lizardmedia.pl>
 * @copyright Copyright (C) 2020 Lizard Media (http://lizardmedia.pl)
 */

namespace LizardMedia\RabbitMqPlayground\Queue\ConsumerHandler\Entity;

use LizardMedia\RabbitMqPlayground\Model\Data\Entity;
use RuntimeException;

/**
 * Class Success
 * @package LizardMedia\RabbitMqPlayground\Queue\ConsumerHandler\Entity
 * @codeCoverageIgnore
 */
class Success
{
    /**
     * @param Entity $entity
     * @return void
     */
    public function execute(Entity $entity): void
    {
        sleep(10);
        echo $entity->getId(), "\n";
    }
}

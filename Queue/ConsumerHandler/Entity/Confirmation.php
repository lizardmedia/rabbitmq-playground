<?php

declare(strict_types=1);

/**
 * File: Creation.php
 *
 * @author Bartosz Kubicki bartosz.kubicki@lizardmedia.pl>
 * @copyright Copyright (C) 2020 Lizard Media (http://lizardmedia.pl)
 */

namespace LizardMedia\RabbitMqPlayground\Queue\ConsumerHandler\Entity;

use LizardMedia\RabbitMqPlayground\Model\Data\Entity;
use RuntimeException;

/**
 * Class Creation
 * @package LizardMedia\RabbitMqPlayground\Queue\ConsumerHandler\Entity
 * @codeCoverageIgnore
 */
class Confirmation
{
    /**
     * @param Entity $entity
     * @return void
     */
    public function execute(Entity $entity): void
    {
        $id = $entity->getId();
        sleep(10);
        if ($id < 5000) {
            echo $entity->getId(), "\n";
        } else {
            echo $entity->getId(), "\n", 'Error confirmation...', "\n";
            throw new RuntimeException();
        }
    }
}

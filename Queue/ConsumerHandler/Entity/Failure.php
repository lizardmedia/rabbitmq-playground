<?php

declare(strict_types=1);

/**
 * File: Failure.php
 *
 * @author Bartosz Kubicki bartosz.kubicki@lizardmedia.pl>
 * @copyright Copyright (C) 2020 Lizard Media (http://lizardmedia.pl)
 */

namespace LizardMedia\RabbitMqPlayground\Queue\ConsumerHandler\Entity;

use LizardMedia\RabbitMqPlayground\Model\Data\Entity;
use Psr\Log\LoggerInterface;
use RuntimeException;

/**
 * Class Failure
 * @package LizardMedia\RabbitMqPlayground\Queue\ConsumerHandler\Entity
 * @codeCoverageIgnore
 */
class Failure
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * Failure constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param Entity $entity
     * @return void
     */
    public function execute(Entity $entity): void
    {
        sleep(10);
        echo $entity->getId(), "\n", 'Error...', "\n";
        $this->logger->critical('iteration', [$entity->getId()]);
        throw new RuntimeException();
    }
}

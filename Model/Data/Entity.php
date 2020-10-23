<?php

declare(strict_types=1);

/**
 * File: CommissionInterface.php
 *
 * @author Bartosz Kubicki bartosz.kubicki@lizardmedia.pl>
 * @copyright Copyright (C) 2020 Lizard Media (http://lizardmedia.pl)
 */

namespace LizardMedia\RabbitMqPlayground\Model\Data;

/**
 * Class Entity
 * @package LizardMedia\Model\Data\RabbitMqPlayground
 * @codeCoverageIgnore
 */
class Entity
{
    /**
     * @var int
     */
    private int $id;

    /**
     * Entity constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return void
     * @SuppressWarnings(PHPMD.ShortVariable)
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}

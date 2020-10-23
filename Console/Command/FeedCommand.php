<?php

declare(strict_types=1);

/**
 * File: MigrationCommand.php
 *
 * @author Bartosz Kubicki bartosz.kubicki@lizardmedia.pl>
 * @copyright Copyright (C) 2020 Lizard Media (http://lizardmedia.pl)
 */

namespace LizardMedia\RabbitMqPlayground\Console\Command;

use LizardMedia\RabbitMqPlayground\Model\Data\Entity;
use Magento\Framework\Console\Cli;
use Magento\Framework\MessageQueue\PublisherInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class MigrationCommand
 * @package LizardMedia\ReviewsDataMigration\Console\Command
 * @codeCoverageIgnore
 */
class FeedCommand extends Command
{
    /**
     * @var string
     */
    private const TOPIC = 'entity.create';

    /**
     * @var string
     */
    private const COMMAND_NAME = 'feed';

    /**
     * @var string
     */
    private const COMMAND_DESC = 'Feed';

    /**
     * @var PublisherInterface
     */
    private PublisherInterface $publisher;

    /**
     * FeedBufferCommand constructor.
     * @param PublisherInterface $publisher
     * @param string|null $name
     */
    public function __construct(PublisherInterface $publisher, string $name = null)
    {
        parent::__construct($name);
        $this->publisher = $publisher;
    }

    /**
     * @return void
     */
    protected function configure(): void
    {
        parent::configure();
        $this->setName(self::COMMAND_NAME)
            ->setDescription(self::COMMAND_DESC);
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $entity = new Entity(rand(1, 100));
        $this->publisher->publish(self::TOPIC, $entity);
        return Cli::RETURN_SUCCESS;
    }
}

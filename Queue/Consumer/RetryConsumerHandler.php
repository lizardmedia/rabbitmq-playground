<?php

declare(strict_types=1);

/**
 * File: RetryConsumerHandler.php
 *
 * @author Bartosz Kubicki bartosz.kubicki@lizardmedia.pl>
 * @copyright Copyright (C) 2020 Lizard Media (http://lizardmedia.pl)
 */

namespace LizardMedia\RabbitMqPlayground\Queue\Consumer;

use LizardMedia\MessageQueue\Api\Queue\Consumer\EnvelopeCallbackFactoryInterface;
use LizardMedia\MessageQueue\Queue\Consumer\ConsumerWithInjectableEnvelopeCallback;
use Magento\Framework\MessageQueue\CallbackInvokerInterface;
use Magento\Framework\MessageQueue\ConsumerConfigurationInterface as UsedConsumerConfig;

/**
 * Class RetryConsumerHandler
 * @package LizardMedia\RabbitMqPlayground\Queue\Consumer
 * @codeCoverageIgnore
 */
class RetryConsumerHandler extends ConsumerWithInjectableEnvelopeCallback
{
    /**
     * RetryConsumerHandler constructor.
     * @param EnvelopeCallbackFactoryInterface $envelopeCallbackFactory
     * @param CallbackInvokerInterface $invoker
     * @param UsedConsumerConfig $configuration
     * @param string $envelopeCallbackType
     */
    public function __construct(
        EnvelopeCallbackFactoryInterface $envelopeCallbackFactory,
        CallbackInvokerInterface $invoker,
        UsedConsumerConfig $configuration,
        string $envelopeCallbackType
    ) {
        parent::__construct($envelopeCallbackFactory, $invoker, $configuration, $envelopeCallbackType);
    }
}

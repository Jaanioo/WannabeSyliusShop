<?php

namespace App\Context;

use Sylius\Component\Channel\Context\ChannelContextInterface;
use Sylius\Component\Channel\Model\ChannelInterface;
use Sylius\Component\Channel\Repository\ChannelRepositoryInterface;

final class TimeBasedChannelContext implements ChannelContextInterface
{
    public function __construct(private ChannelRepositoryInterface $channelRepository,) { }


    public function getChannel(): ChannelInterface
    {
        if ( $this->isNight()) {
            return $this->channelRepository->findOneByCode('NIGHT');
        }

        return $this->channelRepository->findOneBy([]);
    }

    private function isNight(): bool
    {
        $currentHour = (int) (new \DateTime())->format('H');

        return $currentHour > 19 || $currentHour < 6;
    }
}

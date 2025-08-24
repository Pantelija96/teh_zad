<?php

namespace App\Enums;

enum SubscriberState: string
{
    case INSTALLED = 'INSTALLED';
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case EXPIRED = 'EXPIRED';
    case DELETED = 'DELETED';
    case BLOCKED = 'BLOCKED';

    public function description(): string
    {
        return match($this) {
            self::INSTALLED => 'Initial state when provisioned',
            self::ACTIVE    => 'Profile is active',
            self::INACTIVE  => 'Profile expired but before mercy period',
            self::EXPIRED   => 'Profile expired after mercy period',
            self::DELETED   => 'Subscriber deleted',
            self::BLOCKED   => 'Subscriber blocked due to restrictions',
        };
    }
}

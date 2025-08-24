<?php

namespace App\Enums;

enum CRCETrafficType: string
{
    case ORIGINATING = 'Originating';
    case FORWARDING = 'Forwarding';
    case TERMINATING = 'Terminating';
    case SHORT_MESSAGE = 'ShortMessage';
    case DATA = 'Data';
    case USSD = 'USSD';
    case MMS_MO = 'MMS_MO';

    public function description(): string
    {
        return match($this) {
            self::ORIGINATING => 'Mobile originated traffic',
            self::FORWARDING    => 'Mobile forwarded traffic',
            self::TERMINATING  => 'Mobile terminated traffic',
            self::SHORT_MESSAGE   => 'Mobile originated short message',
            self::DATA   => 'Data traffic',
            self::USSD   => 'USSD traffic',
            self::MMS_MO   => 'MMS_MO traffic'
        };
    }
}

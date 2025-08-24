<?php

namespace App\Enums;

enum TicketTypeId: int
{
    case CRCE_CDR_CALL_COMMIT = 100;
    case CRCE_CDR_REGULAR_FALLBACK = 101;
    case CRCE_CDR_LOST_REVENUE = 102;
    case CRCE_RECHARGE = 110;
    case CRCE_MONEYTX = 120;
    case CRCE_CONF = 130;
    case CRCE_CUSTOMER_CONF = 131;
    case CRCE_ACCOUNT_CHANGE = 140;
    case CRCE_SIMSWAP = 160;
    case XAPP_SDR = 216;
    case PROV_SDR = 321;
    case IN_SDR_CALL_START = 420;
    case IN_SDR_CALL_END = 421;
    case IN_SDR_CALL_START_FALLBACK = 423;
    case IN_SDR_CALL_END_FALLBACK = 424;
    case IN_SMS = 425;
    case IN_SMS_FALLBACK = 426;
    case IN_EDR_EVENTS = 430;
    case IN_EDR_SESSION_REJECT = 431;
    case IN_USSD = 440;
    case SMSC_EDR_MO = 450;
    case SMSC_EDR_AO = 451;
    case SMSC_EDR_DELIVERY = 452;
    case SMSC_EDR_EOL = 453;
    case VOMS_SDR = 500;
    case PORTAL_SDR = 550;
    case IVR_SDR = 601;
    case INOTIF_REQUEST = 701;
    case INOTIF_SENDING = 702;
    case INOTIF_FINISHED = 703;
    case IPAY_CONF = 810;
    case IPAY_CUSTOMER_CONF = 811;
    case IPAY_MTDR = 820;
    case IPAY_CUSTOMER_MTDR = 822;
    case VOUCHER_REF_ASSIGN = 900;
    case VOUCHER_REF_USE = 901;
    case CUSTOMER_EDR = 910;

    public function desciption(): string
    {
        return match ($this) {
            self::CRCE_CDR_CALL_COMMIT => 'CRCE CDR Call (Commit)',
            self::CRCE_CDR_REGULAR_FALLBACK => 'CRCE CDR (call/sms/data - regular, fallback)',
            self::CRCE_CDR_LOST_REVENUE => 'CRCE CDR (call/sms/data – lost revenue)',
            self::CRCE_RECHARGE => 'CRCE Recharge',
            self::CRCE_MONEYTX => 'CRCE MoneyTx',
            self::CRCE_CONF => 'CRCE CONF',
            self::CRCE_CUSTOMER_CONF => 'CRCE Customer CONF',
            self::CRCE_ACCOUNT_CHANGE => 'CRCE Account Change',
            self::CRCE_SIMSWAP => 'CRCE SIMSWAP',
            self::XAPP_SDR => 'XAPP SDR (not using header)',
            self::PROV_SDR => 'PROV SDR (not using header)',
            self::IN_SDR_CALL_START => 'IN SDR Call Start',
            self::IN_SDR_CALL_END => 'IN SDR Call End',
            self::IN_SDR_CALL_START_FALLBACK => 'IN SDR Call Start Fallback',
            self::IN_SDR_CALL_END_FALLBACK => 'IN SDR Call End Fallback',
            self::IN_SMS => 'IN SMS',
            self::IN_SMS_FALLBACK => 'IN SMS Fallback',
            self::IN_EDR_EVENTS => 'IN EDR Events',
            self::IN_EDR_SESSION_REJECT => 'IN EDR Session Reject',
            self::IN_USSD => 'IN USSD',
            self::SMSC_EDR_MO => 'SMSC EDR MO',
            self::SMSC_EDR_AO => 'SMSC EDR AO',
            self::SMSC_EDR_DELIVERY => 'SMSC EDR Delivery',
            self::SMSC_EDR_EOL => 'SMSC EDR EOL',
            self::VOMS_SDR => 'VOMS SDR',
            self::PORTAL_SDR => 'PORTAL SDR',
            self::IVR_SDR => 'IVR SDR',
            self::INOTIF_REQUEST => 'INOTIF Request',
            self::INOTIF_SENDING => 'INOTIF Sending',
            self::INOTIF_FINISHED => 'INOTIF Finished',
            self::IPAY_CONF => 'iPay CONF',
            self::IPAY_CUSTOMER_CONF => 'iPay Customer CONF',
            self::IPAY_MTDR => 'iPay MTDR',
            self::IPAY_CUSTOMER_MTDR => 'iPay Customer MTDR',
            self::VOUCHER_REF_ASSIGN => 'Voucher REF Assign voucher Code',
            self::VOUCHER_REF_USE => 'Voucher REF Use Voucher Code',
            self::CUSTOMER_EDR => 'Customer EDR (not using XDR header)',
        };
    }
}

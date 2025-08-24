<?php

namespace App\Services;

use App\Models\CrceCdr;
use App\Models\CrceConf;
use Carbon\Carbon;

class CsvRowMapper
{
    public function map(array $row): array
    {
        $ticketHeader = [
            'version' => $row[0] ?? null,
            'ticketTypeId' => isset($row[1]) ? (int)$row[1] : null,
            'success' => isset($row[2]) ? $row[2] === 't' : false,
            'providerId' => isset($row[3]) ? (int)$row[3] : null,
            'application' => $row[4] ?? null,
            'ticketType' => $row[5] ?? null,
            'node' => $row[6] ?? null,
            'ticketCreationTimestamp' => isset($row[7]) ? Carbon::parse($row[7])->format('Y-m-d H:i:s') : null,
            'sessionCreationTimestamp' => isset($row[8]) ? Carbon::parse($row[8])->format('Y-m-d H:i:s') : null,
            'sessionId' => $row[9] ?? null,
            'transactionId' => $row[10] ?? null,
            'sequenceId' => isset($row[11]) ? (int)$row[11] : null,
            'subscriberId' => isset($row[12]) ? (int)$row[12] : null,
            'subscriberAddress' => $row[13] ?? null,
            'subscriberType' => $row[14] ?? null,
            'subscriberState' => $row[15] ?? null,
            'additionalStateInformation' => $row[16] ?? null,
            'subscriberLanguage' => isset($row[17]) ? (int)$row[17] : null,
            'notificationChannel' => $row[18] ?? null,
            'errorCode' => $row[19] ?? null,
            'groupId' => isset($row[20]) ? (int)$row[20] : null,
            'billingAccountId' => isset($row[21]) ? (int)$row[21] : null,
            'customerId' => isset($row[22]) ? (int)$row[22] : null
        ];

        $related = null;
        if (($row[5] ?? '') === 'CDR') {
            $related = [
                'model' => CrceCdr::class,
                'data' => [
                    'recordVersion' => $row[23] ?? null,
                    'operation' => $row[24] ?? null,
                    'feature' => $row[25] ?? null,
                    'sequenceTotal' => isset($row[26]) ? (int)$row[26] : null,
                    'subscriberImsi' => $row[27] ?? null,
                    'callingPartyAddress' => $row[28] ?? null,
                    'isCallerIdSuppressed' => isset($row[29]) && $row[29] === 't',
                    'calledPartyAddress' => $row[30] ?? null,
                    'destinationNetwork' => $row[31] ?? null,
                    'destinationZone' => $row[32] ?? null,
                    'trafficType' => $row[33] ?? null,
                    'apn' => $row[34] ?? null,
                    'ratingGroupId' => isset($row[35]) ? (int)$row[35] : null,
                    'messageType' => $row[36] ?? null,
                    'bearerType' => $row[37] ?? null,
                    'isRoaming' => isset($row[38]) ? $row[38] === 't' : null,
                    'subscriberLocation' => $row[39] ?? null,
                    'locationNetwork' => $row[40] ?? null,
                    'locationZone' => $row[41] ?? null,
                    'answerTimestamp' => isset($row[42]) ? Carbon::parse($row[42])->format('Y-m-d H:i:s') : null,
                    'maximumCallCost' => isset($row[43]) ? (int)$row[43] : null,
                    'callDuration' => isset($row[44]) ? (int)$row[44] : null,
                    'ticketCallDuration' => isset($row[45]) ? (int)$row[45] : null,
                    'chargedDuration' => isset($row[46]) ? (int)$row[46] : null,
                    'ticketChargedDuration' => isset($row[47]) ? (int)$row[47] : null,
                    'numberOfSegments' => isset($row[48]) ? (int)$row[48] : null,
                    'transferredUnits' => isset($row[49]) ? (int)$row[49] : null,
                    'transferredBytes' => isset($row[50]) ? (int)$row[50] : null,
                    'ticketTransferredBytes' => isset($row[51]) ? (int)$row[51] : null,
                    'chargedBytes' => isset($row[52]) ? (int)$row[52] : null,
                    'ticketChargedBytes' => isset($row[53]) ? (int)$row[53] : null,
                    'numberOfSms' => isset($row[54]) ? (int)$row[54] : null,
                    'ticketNumberOfSms' => isset($row[55]) ? (int)$row[55] : null,
                    'referenceNumber' => $row[56] ?? null,
                    'isChargeFreeAction' => isset($row[57]) && $row[57] === 't',
                    'tariffId' => isset($row[58]) ? (int)$row[58] : null,
                    'poolId' => isset($row[59]) ? (int)$row[59] : null,
                    'accountDescriptorId' => isset($row[60]) ? (int)$row[60] : null,
                    'accountReferenceId' => $row[61] ?? null,
                    'accountDifference' => isset($row[62]) ? (int)$row[62] : null,
                    'chargeAmount' => isset($row[63]) ? (int)$row[63] : null,
                    'accountId' => isset($row[64]) ? (int)$row[64] : null,
                    'accountCurrency' => $row[65] ?? null,
                    'accountClosingBalance' => isset($row[66]) ? (int)$row[66] : null,
                    'accountType' => $row[67] ?? null,
                    'chargingResult' => $row[68] ?? null,
                    'ratingFilterId' => isset($row[69]) ? (int)$row[69] : null,
                    'revenueCode' => $row[70] ?? null,
                    'transparentData' => $row[71] ?? null,
                    'additionalRatingInformation' => !empty($row[72]) ? $row[72] : null
                ],
            ];
        } elseif (($row[5] ?? '') === 'CONF') {
            $related = [
                'model' => CrceConf::class,
                'data' => [
                    'recordVersion' => $row[23] ?? null,
                    'operation' => $row[24] ?? null,
                    'feature' => $row[25] ?? null,
                    'sequenceTotal' => isset($row[26]) ? (int)$row[26] : null,
                    'bundleCode' => $row[27] ?? null,
                    'oppId' => isset($row[28]) ? (int)$row[28] : null,
                    'serviceType' => $row[29] ?? null,
                    'customerCareUser' => $row[30] ?? null,
                    'subscriberLanguage' => $row[31] ?? null,
                    'subscriberImsi' => $row[32] ?? null,
                    'accountStatus' => $row[33] ?? null,
                    'tariffId' => isset($row[34]) ? (int)$row[34] : null,
                    'nextTariffId' => isset($row[35]) ? (int)$row[35] : null,
                    'poolId' => isset($row[36]) ? (int)$row[36] : null,
                    'transactionFee' => isset($row[37]) ? (int)$row[37] : null,
                    'oldValue' => isset($row[38]) ? (int)$row[38] : null,
                    'newValue' => isset($row[39]) ? (int)$row[39] : null,
                    'accountCurrency' => $row[40] ?? null,
                    'addAmount' => isset($row[41]) ? (int)$row[41] : null,
                    'setBalance' => isset($row[42]) ? (int)$row[42] : null,
                    'accountClosingBalance' => isset($row[43]) ? (int)$row[43] : null,
                    'accountId' => isset($row[44]) ? (int)$row[44] : null,
                    'accountDescriptorId' => isset($row[45]) ? (int)$row[45] : null,
                    'accountReferenceId' => $row[46] ?? null,
                    'accountType' => $row[47] ?? null,
                    'accountLimit' => isset($row[48]) ? (int)$row[48] : null,
                    'fnfAction' => $row[49] ?? null,
                    'fnfNumber' => $row[50] ?? null,
                    'billingPeriodStartDate' => isset($row[51]) ? Carbon::parse($row[51])->format('Y-m-d H:i:s') : null,
                    'billingPeriodEndDate' => isset($row[52]) ? Carbon::parse($row[52])->format('Y-m-d H:i:s') : null,
                    'subscriberActivationDate' => isset($row[53]) ? Carbon::parse($row[53])->format('Y-m-d H:i:s') : null,
                    'subscriberExpiryDate' => isset($row[54]) ? Carbon::parse($row[54])->format('Y-m-d H:i:s') : null,
                    'costControlLimitName' => $row[55] ?? null,
                    'chargingResult' => $row[56] ?? null,
                    'revenueCode' => $row[57] ?? null,
                    'transparentData' => $row[58] ?? null
                ],
            ];
        }

        return [
            'ticketHeader' => $ticketHeader,
            'related' => $related,
        ];
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserDeliveryQualificationListV30Status
{
    public const STATUS_CONFIRM_AdvertiserDeliveryQualificationListV30Status = 'STATUS_CONFIRM';
    public const STATUS_CONFIRM_FAIL_AdvertiserDeliveryQualificationListV30Status = 'STATUS_CONFIRM_FAIL';
    public const STATUS_NOT_SUBMIT_AdvertiserDeliveryQualificationListV30Status = 'STATUS_NOT_SUBMIT';
    public const STATUS_PENDING_CONFIRM_AdvertiserDeliveryQualificationListV30Status = 'STATUS_PENDING_CONFIRM';
    public const STATUS_WAIT_CONFIRM_AdvertiserDeliveryQualificationListV30Status = 'STATUS_WAIT_CONFIRM';

    public const ALLOWED_VALUES = [
        self::STATUS_CONFIRM_AdvertiserDeliveryQualificationListV30Status,
        self::STATUS_CONFIRM_FAIL_AdvertiserDeliveryQualificationListV30Status,
        self::STATUS_NOT_SUBMIT_AdvertiserDeliveryQualificationListV30Status,
        self::STATUS_PENDING_CONFIRM_AdvertiserDeliveryQualificationListV30Status,
        self::STATUS_WAIT_CONFIRM_AdvertiserDeliveryQualificationListV30Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserDeliveryQualificationListV30Status', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus
{
    public const STATUS_CONFIRM_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus = 'STATUS_CONFIRM';
    public const STATUS_CONFIRM_FAIL_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus = 'STATUS_CONFIRM_FAIL';
    public const STATUS_NOT_SUBMIT_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus = 'STATUS_NOT_SUBMIT';
    public const STATUS_PENDING_CONFIRM_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus = 'STATUS_PENDING_CONFIRM';
    public const STATUS_WAIT_CONFIRM_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus = 'STATUS_WAIT_CONFIRM';

    public const ALLOWED_VALUES = [
        self::STATUS_CONFIRM_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus,
        self::STATUS_CONFIRM_FAIL_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus,
        self::STATUS_NOT_SUBMIT_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus,
        self::STATUS_PENDING_CONFIRM_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus,
        self::STATUS_WAIT_CONFIRM_AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserDeliveryPkgGetV30DataDeliveryPkgUnnecessaryCombinesDeliveryRulesDeliveriesStatus', $value));
        }
        return (string) $value;
    }
}

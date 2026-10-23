<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportProjectGetV30FilteringLocalDeliveryScene
{
    public const CLUE_LocalReportProjectGetV30FilteringLocalDeliveryScene = 'CLUE';
    public const CONTENT_HEATING_LocalReportProjectGetV30FilteringLocalDeliveryScene = 'CONTENT_HEATING';
    public const POI_CUSTOMER_LocalReportProjectGetV30FilteringLocalDeliveryScene = 'POI_CUSTOMER';
    public const PURCHASE_LocalReportProjectGetV30FilteringLocalDeliveryScene = 'PURCHASE';

    public const ALLOWED_VALUES = [
        self::CLUE_LocalReportProjectGetV30FilteringLocalDeliveryScene,
        self::CONTENT_HEATING_LocalReportProjectGetV30FilteringLocalDeliveryScene,
        self::POI_CUSTOMER_LocalReportProjectGetV30FilteringLocalDeliveryScene,
        self::PURCHASE_LocalReportProjectGetV30FilteringLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportProjectGetV30FilteringLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}

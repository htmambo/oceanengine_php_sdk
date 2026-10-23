<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAccountGetV30FilteringLocalDeliveryScene
{
    public const CLUE_LocalReportAccountGetV30FilteringLocalDeliveryScene = 'CLUE';
    public const CONTENT_HEATING_LocalReportAccountGetV30FilteringLocalDeliveryScene = 'CONTENT_HEATING';
    public const POI_CUSTOMER_LocalReportAccountGetV30FilteringLocalDeliveryScene = 'POI_CUSTOMER';
    public const PURCHASE_LocalReportAccountGetV30FilteringLocalDeliveryScene = 'PURCHASE';

    public const ALLOWED_VALUES = [
        self::CLUE_LocalReportAccountGetV30FilteringLocalDeliveryScene,
        self::CONTENT_HEATING_LocalReportAccountGetV30FilteringLocalDeliveryScene,
        self::POI_CUSTOMER_LocalReportAccountGetV30FilteringLocalDeliveryScene,
        self::PURCHASE_LocalReportAccountGetV30FilteringLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAccountGetV30FilteringLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}

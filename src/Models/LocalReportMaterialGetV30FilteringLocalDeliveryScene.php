<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportMaterialGetV30FilteringLocalDeliveryScene
{
    public const CLUE_LocalReportMaterialGetV30FilteringLocalDeliveryScene = 'CLUE';
    public const CONTENT_HEATING_LocalReportMaterialGetV30FilteringLocalDeliveryScene = 'CONTENT_HEATING';
    public const POI_CUSTOMER_LocalReportMaterialGetV30FilteringLocalDeliveryScene = 'POI_CUSTOMER';
    public const PURCHASE_LocalReportMaterialGetV30FilteringLocalDeliveryScene = 'PURCHASE';

    public const ALLOWED_VALUES = [
        self::CLUE_LocalReportMaterialGetV30FilteringLocalDeliveryScene,
        self::CONTENT_HEATING_LocalReportMaterialGetV30FilteringLocalDeliveryScene,
        self::POI_CUSTOMER_LocalReportMaterialGetV30FilteringLocalDeliveryScene,
        self::PURCHASE_LocalReportMaterialGetV30FilteringLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportMaterialGetV30FilteringLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}

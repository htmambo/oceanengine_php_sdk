<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportPromotionGetV30FilteringLocalDeliveryScene
{
    public const CLUE_LocalReportPromotionGetV30FilteringLocalDeliveryScene = 'CLUE';
    public const CONTENT_HEATING_LocalReportPromotionGetV30FilteringLocalDeliveryScene = 'CONTENT_HEATING';
    public const POI_CUSTOMER_LocalReportPromotionGetV30FilteringLocalDeliveryScene = 'POI_CUSTOMER';
    public const PURCHASE_LocalReportPromotionGetV30FilteringLocalDeliveryScene = 'PURCHASE';

    public const ALLOWED_VALUES = [
        self::CLUE_LocalReportPromotionGetV30FilteringLocalDeliveryScene,
        self::CONTENT_HEATING_LocalReportPromotionGetV30FilteringLocalDeliveryScene,
        self::POI_CUSTOMER_LocalReportPromotionGetV30FilteringLocalDeliveryScene,
        self::PURCHASE_LocalReportPromotionGetV30FilteringLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportPromotionGetV30FilteringLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}

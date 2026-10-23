<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAudienceGetV30FilteringDeliveryScene
{
    public const CLUE_LocalReportAudienceGetV30FilteringDeliveryScene = 'CLUE';
    public const CONTENT_HEATING_LocalReportAudienceGetV30FilteringDeliveryScene = 'CONTENT_HEATING';
    public const POI_CUSTOMER_LocalReportAudienceGetV30FilteringDeliveryScene = 'POI_CUSTOMER';
    public const PURCHASE_LocalReportAudienceGetV30FilteringDeliveryScene = 'PURCHASE';

    public const ALLOWED_VALUES = [
        self::CLUE_LocalReportAudienceGetV30FilteringDeliveryScene,
        self::CONTENT_HEATING_LocalReportAudienceGetV30FilteringDeliveryScene,
        self::POI_CUSTOMER_LocalReportAudienceGetV30FilteringDeliveryScene,
        self::PURCHASE_LocalReportAudienceGetV30FilteringDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAudienceGetV30FilteringDeliveryScene', $value));
        }
        return (string) $value;
    }
}

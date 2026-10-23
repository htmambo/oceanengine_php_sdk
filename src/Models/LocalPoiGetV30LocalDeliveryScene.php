<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPoiGetV30LocalDeliveryScene
{
    public const CONTENT_HEAT_LocalPoiGetV30LocalDeliveryScene = 'CONTENT_HEAT';
    public const EXTERNAL_LocalPoiGetV30LocalDeliveryScene = 'EXTERNAL';
    public const POI_RECOMMEND_LocalPoiGetV30LocalDeliveryScene = 'POI_RECOMMEND';
    public const PRODUCT_PAY_LocalPoiGetV30LocalDeliveryScene = 'PRODUCT_PAY';

    public const ALLOWED_VALUES = [
        self::CONTENT_HEAT_LocalPoiGetV30LocalDeliveryScene,
        self::EXTERNAL_LocalPoiGetV30LocalDeliveryScene,
        self::POI_RECOMMEND_LocalPoiGetV30LocalDeliveryScene,
        self::PRODUCT_PAY_LocalPoiGetV30LocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPoiGetV30LocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}

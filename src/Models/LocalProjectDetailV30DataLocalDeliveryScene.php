<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataLocalDeliveryScene
{
    public const CONTENT_HEAT_LocalProjectDetailV30DataLocalDeliveryScene = 'CONTENT_HEAT';
    public const EXTERNAL_LocalProjectDetailV30DataLocalDeliveryScene = 'EXTERNAL';
    public const POI_RECOMMEND_LocalProjectDetailV30DataLocalDeliveryScene = 'POI_RECOMMEND';
    public const PRODUCT_PAY_LocalProjectDetailV30DataLocalDeliveryScene = 'PRODUCT_PAY';

    public const ALLOWED_VALUES = [
        self::CONTENT_HEAT_LocalProjectDetailV30DataLocalDeliveryScene,
        self::EXTERNAL_LocalProjectDetailV30DataLocalDeliveryScene,
        self::POI_RECOMMEND_LocalProjectDetailV30DataLocalDeliveryScene,
        self::PRODUCT_PAY_LocalProjectDetailV30DataLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}

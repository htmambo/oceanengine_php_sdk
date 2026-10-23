<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListLocalDeliveryScene
{
    public const CONTENT_HEAT_LocalProjectListV30DataProjectListLocalDeliveryScene = 'CONTENT_HEAT';
    public const EXTERNAL_LocalProjectListV30DataProjectListLocalDeliveryScene = 'EXTERNAL';
    public const POI_RECOMMEND_LocalProjectListV30DataProjectListLocalDeliveryScene = 'POI_RECOMMEND';
    public const PRODUCT_PAY_LocalProjectListV30DataProjectListLocalDeliveryScene = 'PRODUCT_PAY';

    public const ALLOWED_VALUES = [
        self::CONTENT_HEAT_LocalProjectListV30DataProjectListLocalDeliveryScene,
        self::EXTERNAL_LocalProjectListV30DataProjectListLocalDeliveryScene,
        self::POI_RECOMMEND_LocalProjectListV30DataProjectListLocalDeliveryScene,
        self::PRODUCT_PAY_LocalProjectListV30DataProjectListLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}

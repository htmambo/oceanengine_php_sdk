<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30FilteringLocalDeliveryScene
{
    public const ALL_LocalProjectListV30FilteringLocalDeliveryScene = 'ALL';
    public const CONTENT_HEAT_LocalProjectListV30FilteringLocalDeliveryScene = 'CONTENT_HEAT';
    public const EXTERNAL_LocalProjectListV30FilteringLocalDeliveryScene = 'EXTERNAL';
    public const POI_RECOMMEND_LocalProjectListV30FilteringLocalDeliveryScene = 'POI_RECOMMEND';
    public const PRODUCT_PAY_LocalProjectListV30FilteringLocalDeliveryScene = 'PRODUCT_PAY';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectListV30FilteringLocalDeliveryScene,
        self::CONTENT_HEAT_LocalProjectListV30FilteringLocalDeliveryScene,
        self::EXTERNAL_LocalProjectListV30FilteringLocalDeliveryScene,
        self::POI_RECOMMEND_LocalProjectListV30FilteringLocalDeliveryScene,
        self::PRODUCT_PAY_LocalProjectListV30FilteringLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30FilteringLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}

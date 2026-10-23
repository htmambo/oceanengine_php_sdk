<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringStarDeliveryType
{
    public const NOT_STAR_DELIVERY_ProjectListV30FilteringStarDeliveryType = 'NOT_STAR_DELIVERY';
    public const STAR_DELIVERY_ProjectListV30FilteringStarDeliveryType = 'STAR_DELIVERY';

    public const ALLOWED_VALUES = [
        self::NOT_STAR_DELIVERY_ProjectListV30FilteringStarDeliveryType,
        self::STAR_DELIVERY_ProjectListV30FilteringStarDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringStarDeliveryType', $value));
        }
        return (string) $value;
    }
}

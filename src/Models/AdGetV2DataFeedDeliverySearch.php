<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataFeedDeliverySearch
{
    public const DISABLED_AdGetV2DataFeedDeliverySearch = 'DISABLED';
    public const HAS_OPEN_AdGetV2DataFeedDeliverySearch = 'HAS_OPEN';

    public const ALLOWED_VALUES = [
        self::DISABLED_AdGetV2DataFeedDeliverySearch,
        self::HAS_OPEN_AdGetV2DataFeedDeliverySearch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataFeedDeliverySearch', $value));
        }
        return (string) $value;
    }
}

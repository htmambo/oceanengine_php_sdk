<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataDeliveryPoiMode
{
    public const ALL_LocalOcProjectGetV30DataDeliveryPoiMode = 'ALL';
    public const PART_LocalOcProjectGetV30DataDeliveryPoiMode = 'PART';

    public const ALLOWED_VALUES = [
        self::ALL_LocalOcProjectGetV30DataDeliveryPoiMode,
        self::PART_LocalOcProjectGetV30DataDeliveryPoiMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataDeliveryPoiMode', $value));
        }
        return (string) $value;
    }
}

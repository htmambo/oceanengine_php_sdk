<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataDeliveryPoiMode
{
    public const ALL_LocalProjectDetailV30DataDeliveryPoiMode = 'ALL';
    public const PART_LocalProjectDetailV30DataDeliveryPoiMode = 'PART';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectDetailV30DataDeliveryPoiMode,
        self::PART_LocalProjectDetailV30DataDeliveryPoiMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataDeliveryPoiMode', $value));
        }
        return (string) $value;
    }
}

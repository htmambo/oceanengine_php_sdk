<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30DeliveryPoiMode
{
    public const ALL_LocalProjectCreateV30DeliveryPoiMode = 'ALL';
    public const PART_LocalProjectCreateV30DeliveryPoiMode = 'PART';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectCreateV30DeliveryPoiMode,
        self::PART_LocalProjectCreateV30DeliveryPoiMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30DeliveryPoiMode', $value));
        }
        return (string) $value;
    }
}

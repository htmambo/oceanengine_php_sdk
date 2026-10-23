<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataDpaAdtype
{
    public const DPA_APP_AdGetV2DataDpaAdtype = 'DPA_APP';
    public const DPA_LINK_AdGetV2DataDpaAdtype = 'DPA_LINK';

    public const ALLOWED_VALUES = [
        self::DPA_APP_AdGetV2DataDpaAdtype,
        self::DPA_LINK_AdGetV2DataDpaAdtype,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataDpaAdtype', $value));
        }
        return (string) $value;
    }
}

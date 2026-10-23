<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaProductAvailablesV2DataListAccountType
{
    public const AD_DpaProductAvailablesV2DataListAccountType = 'AD';
    public const EBP_DpaProductAvailablesV2DataListAccountType = 'EBP';
    public const STAR_DpaProductAvailablesV2DataListAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_DpaProductAvailablesV2DataListAccountType,
        self::EBP_DpaProductAvailablesV2DataListAccountType,
        self::STAR_DpaProductAvailablesV2DataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaProductAvailablesV2DataListAccountType', $value));
        }
        return (string) $value;
    }
}

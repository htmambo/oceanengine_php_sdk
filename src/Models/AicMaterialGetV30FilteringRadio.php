<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicMaterialGetV30FilteringRadio
{
    public const RATIO_16_9_AicMaterialGetV30FilteringRadio = 'RATIO_16_9';
    public const RATIO_9_16_AicMaterialGetV30FilteringRadio = 'RATIO_9_16';

    public const ALLOWED_VALUES = [
        self::RATIO_16_9_AicMaterialGetV30FilteringRadio,
        self::RATIO_9_16_AicMaterialGetV30FilteringRadio,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicMaterialGetV30FilteringRadio', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormListV2DataListEnableLayer
{
    public const Enum_0_ClueFormListV2DataListEnableLayer = '0';
    public const Enum_1_ClueFormListV2DataListEnableLayer = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueFormListV2DataListEnableLayer,
        self::Enum_1_ClueFormListV2DataListEnableLayer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormListV2DataListEnableLayer', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormDetailV2DataFormEnableLayer
{
    public const Enum_0_ClueFormDetailV2DataFormEnableLayer = '0';
    public const Enum_1_ClueFormDetailV2DataFormEnableLayer = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueFormDetailV2DataFormEnableLayer,
        self::Enum_1_ClueFormDetailV2DataFormEnableLayer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormDetailV2DataFormEnableLayer', $value));
        }
        return (string) $value;
    }
}

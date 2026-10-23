<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueSmartphoneCreateV2CallDisplay
{
    public const Enum_0_ClueSmartphoneCreateV2CallDisplay = 0;
    public const Enum_1_ClueSmartphoneCreateV2CallDisplay = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueSmartphoneCreateV2CallDisplay,
        self::Enum_1_ClueSmartphoneCreateV2CallDisplay,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueSmartphoneCreateV2CallDisplay', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceSearchExtended
{
    public const Enum_1_QianchuanAdDetailGetV10DataAudienceSearchExtended = 1;
    public const Enum_2_QianchuanAdDetailGetV10DataAudienceSearchExtended = 2;

    public const ALLOWED_VALUES = [
        self::Enum_1_QianchuanAdDetailGetV10DataAudienceSearchExtended,
        self::Enum_2_QianchuanAdDetailGetV10DataAudienceSearchExtended,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceSearchExtended', $value));
        }
        return (string) $value;
    }
}

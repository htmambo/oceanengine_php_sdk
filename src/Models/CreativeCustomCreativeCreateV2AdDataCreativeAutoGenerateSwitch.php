<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeCreateV2AdDataCreativeAutoGenerateSwitch
{
    public const Enum_0_CreativeCustomCreativeCreateV2AdDataCreativeAutoGenerateSwitch = 0;
    public const Enum_1_CreativeCustomCreativeCreateV2AdDataCreativeAutoGenerateSwitch = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_CreativeCustomCreativeCreateV2AdDataCreativeAutoGenerateSwitch,
        self::Enum_1_CreativeCustomCreativeCreateV2AdDataCreativeAutoGenerateSwitch,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeCreateV2AdDataCreativeAutoGenerateSwitch', $value));
        }
        return (string) $value;
    }
}

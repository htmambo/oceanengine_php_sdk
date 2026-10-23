<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeUpdateV2AdDataCreativeAutoGenerateSwitch
{
    public const Enum_0_CreativeCustomCreativeUpdateV2AdDataCreativeAutoGenerateSwitch = 0;
    public const Enum_1_CreativeCustomCreativeUpdateV2AdDataCreativeAutoGenerateSwitch = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_CreativeCustomCreativeUpdateV2AdDataCreativeAutoGenerateSwitch,
        self::Enum_1_CreativeCustomCreativeUpdateV2AdDataCreativeAutoGenerateSwitch,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeUpdateV2AdDataCreativeAutoGenerateSwitch', $value));
        }
        return (string) $value;
    }
}

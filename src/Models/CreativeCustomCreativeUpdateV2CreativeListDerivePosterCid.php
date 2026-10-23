<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeUpdateV2CreativeListDerivePosterCid
{
    public const Enum_0_CreativeCustomCreativeUpdateV2CreativeListDerivePosterCid = 0;
    public const Enum_1_CreativeCustomCreativeUpdateV2CreativeListDerivePosterCid = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_CreativeCustomCreativeUpdateV2CreativeListDerivePosterCid,
        self::Enum_1_CreativeCustomCreativeUpdateV2CreativeListDerivePosterCid,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeUpdateV2CreativeListDerivePosterCid', $value));
        }
        return (string) $value;
    }
}

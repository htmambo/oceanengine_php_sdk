<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeUpdateV2AdDataIsCommentDisable
{
    public const Enum_0_CreativeCustomCreativeUpdateV2AdDataIsCommentDisable = 0;
    public const Enum_1_CreativeCustomCreativeUpdateV2AdDataIsCommentDisable = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_CreativeCustomCreativeUpdateV2AdDataIsCommentDisable,
        self::Enum_1_CreativeCustomCreativeUpdateV2AdDataIsCommentDisable,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeUpdateV2AdDataIsCommentDisable', $value));
        }
        return (string) $value;
    }
}

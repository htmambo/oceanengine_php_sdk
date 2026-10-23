<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserSelectV2FilteringCanCopy
{
    public const Enum_0_AgentAdvertiserSelectV2FilteringCanCopy = 0;
    public const Enum_1_AgentAdvertiserSelectV2FilteringCanCopy = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_AgentAdvertiserSelectV2FilteringCanCopy,
        self::Enum_1_AgentAdvertiserSelectV2FilteringCanCopy,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserSelectV2FilteringCanCopy', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserCopyV2DataCopyStatus
{
    public const Enum_1_AgentAdvertiserCopyV2DataCopyStatus = 1;
    public const Enum_2_AgentAdvertiserCopyV2DataCopyStatus = 2;
    public const Enum_3_AgentAdvertiserCopyV2DataCopyStatus = 3;

    public const ALLOWED_VALUES = [
        self::Enum_1_AgentAdvertiserCopyV2DataCopyStatus,
        self::Enum_2_AgentAdvertiserCopyV2DataCopyStatus,
        self::Enum_3_AgentAdvertiserCopyV2DataCopyStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserCopyV2DataCopyStatus', $value));
        }
        return (string) $value;
    }
}

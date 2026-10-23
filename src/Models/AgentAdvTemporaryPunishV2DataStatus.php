<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvTemporaryPunishV2DataStatus
{
    public const SUCCEED_AgentAdvTemporaryPunishV2DataStatus = 'SUCCEED';
    public const PART_SUCCEED_AgentAdvTemporaryPunishV2DataStatus = 'PART_SUCCEED';
    public const FAIELD_AgentAdvTemporaryPunishV2DataStatus = 'FAIELD';

    public const ALLOWED_VALUES = [
        self::SUCCEED_AgentAdvTemporaryPunishV2DataStatus,
        self::PART_SUCCEED_AgentAdvTemporaryPunishV2DataStatus,
        self::FAIELD_AgentAdvTemporaryPunishV2DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvTemporaryPunishV2DataStatus', $value));
        }
        return (string) $value;
    }
}

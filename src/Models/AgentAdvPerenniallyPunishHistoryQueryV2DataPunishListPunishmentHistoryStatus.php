<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvPerenniallyPunishHistoryQueryV2DataPunishListPunishmentHistoryStatus
{
    public const FAILED_AgentAdvPerenniallyPunishHistoryQueryV2DataPunishListPunishmentHistoryStatus = 'FAILED';
    public const SUCCEED_AgentAdvPerenniallyPunishHistoryQueryV2DataPunishListPunishmentHistoryStatus = 'SUCCEED';

    public const ALLOWED_VALUES = [
        self::FAILED_AgentAdvPerenniallyPunishHistoryQueryV2DataPunishListPunishmentHistoryStatus,
        self::SUCCEED_AgentAdvPerenniallyPunishHistoryQueryV2DataPunishListPunishmentHistoryStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvPerenniallyPunishHistoryQueryV2DataPunishListPunishmentHistoryStatus', $value));
        }
        return (string) $value;
    }
}

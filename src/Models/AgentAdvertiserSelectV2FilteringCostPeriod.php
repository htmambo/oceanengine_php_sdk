<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserSelectV2FilteringCostPeriod
{
    public const TODAY_AgentAdvertiserSelectV2FilteringCostPeriod = 'TODAY';
    public const YESTERDAY_AgentAdvertiserSelectV2FilteringCostPeriod = 'YESTERDAY';
    public const LAST_7_DAYS_AgentAdvertiserSelectV2FilteringCostPeriod = 'LAST_7_DAYS';
    public const LAST_30_DAYS_AgentAdvertiserSelectV2FilteringCostPeriod = 'LAST_30_DAYS';
    public const LAST_15_DAYS_AgentAdvertiserSelectV2FilteringCostPeriod = 'LAST_15_DAYS';

    public const ALLOWED_VALUES = [
        self::TODAY_AgentAdvertiserSelectV2FilteringCostPeriod,
        self::YESTERDAY_AgentAdvertiserSelectV2FilteringCostPeriod,
        self::LAST_7_DAYS_AgentAdvertiserSelectV2FilteringCostPeriod,
        self::LAST_30_DAYS_AgentAdvertiserSelectV2FilteringCostPeriod,
        self::LAST_15_DAYS_AgentAdvertiserSelectV2FilteringCostPeriod,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserSelectV2FilteringCostPeriod', $value));
        }
        return (string) $value;
    }
}

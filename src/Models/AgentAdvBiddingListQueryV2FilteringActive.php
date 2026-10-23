<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvBiddingListQueryV2FilteringActive
{
    public const ALL_AgentAdvBiddingListQueryV2FilteringActive = 'ALL';
    public const ACTIVE_AgentAdvBiddingListQueryV2FilteringActive = 'ACTIVE';

    public const ALLOWED_VALUES = [
        self::ALL_AgentAdvBiddingListQueryV2FilteringActive,
        self::ACTIVE_AgentAdvBiddingListQueryV2FilteringActive,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvBiddingListQueryV2FilteringActive', $value));
        }
        return (string) $value;
    }
}

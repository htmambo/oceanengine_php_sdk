<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserUnassignV2Type
{
    public const BIDDING_AgentAdvertiserUnassignV2Type = 'BIDDING';
    public const BRAND_AgentAdvertiserUnassignV2Type = 'BRAND';

    public const ALLOWED_VALUES = [
        self::BIDDING_AgentAdvertiserUnassignV2Type,
        self::BRAND_AgentAdvertiserUnassignV2Type,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserUnassignV2Type', $value));
        }
        return (string) $value;
    }
}

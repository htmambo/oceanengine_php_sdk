<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserAssignV2Type
{
    public const BIDDING_AgentAdvertiserAssignV2Type = 'BIDDING';
    public const BRAND_AgentAdvertiserAssignV2Type = 'BRAND';

    public const ALLOWED_VALUES = [
        self::BIDDING_AgentAdvertiserAssignV2Type,
        self::BRAND_AgentAdvertiserAssignV2Type,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserAssignV2Type', $value));
        }
        return (string) $value;
    }
}

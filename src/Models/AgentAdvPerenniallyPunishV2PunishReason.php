<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvPerenniallyPunishV2PunishReason
{
    public const BUSINESS_OPERATIING_REQUIREMENTS_AgentAdvPerenniallyPunishV2PunishReason = 'BUSINESS_OPERATIING_REQUIREMENTS';
    public const ADVERTISING_RISK_REQUIREMENTS_AgentAdvPerenniallyPunishV2PunishReason = 'ADVERTISING_RISK_REQUIREMENTS';

    public const ALLOWED_VALUES = [
        self::BUSINESS_OPERATIING_REQUIREMENTS_AgentAdvPerenniallyPunishV2PunishReason,
        self::ADVERTISING_RISK_REQUIREMENTS_AgentAdvPerenniallyPunishV2PunishReason,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvPerenniallyPunishV2PunishReason', $value));
        }
        return (string) $value;
    }
}

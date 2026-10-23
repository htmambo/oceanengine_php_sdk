<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentChargeVerifyV2ChargeType
{
    public const CREDIT_AgentChargeVerifyV2ChargeType = 'CREDIT';
    public const PREPAY_AgentChargeVerifyV2ChargeType = 'PREPAY';

    public const ALLOWED_VALUES = [
        self::CREDIT_AgentChargeVerifyV2ChargeType,
        self::PREPAY_AgentChargeVerifyV2ChargeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentChargeVerifyV2ChargeType', $value));
        }
        return (string) $value;
    }
}

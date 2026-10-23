<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ChargeResultV30DataChargeStatus
{
    public const PROCESSING_ChargeResultV30DataChargeStatus = 'PROCESSING';
    public const SUCCESS_ChargeResultV30DataChargeStatus = 'SUCCESS';
    public const FAIL_ChargeResultV30DataChargeStatus = 'FAIL';

    public const ALLOWED_VALUES = [
        self::PROCESSING_ChargeResultV30DataChargeStatus,
        self::SUCCESS_ChargeResultV30DataChargeStatus,
        self::FAIL_ChargeResultV30DataChargeStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ChargeResultV30DataChargeStatus', $value));
        }
        return (string) $value;
    }
}

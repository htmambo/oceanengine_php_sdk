<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalChargeResultV30DataChargeStatus
{
    public const PROCESSING_LocalChargeResultV30DataChargeStatus = 'PROCESSING';
    public const SUCCESS_LocalChargeResultV30DataChargeStatus = 'SUCCESS';
    public const FAILED_LocalChargeResultV30DataChargeStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::PROCESSING_LocalChargeResultV30DataChargeStatus,
        self::SUCCESS_LocalChargeResultV30DataChargeStatus,
        self::FAILED_LocalChargeResultV30DataChargeStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalChargeResultV30DataChargeStatus', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SpiTaskGetV2Status
{
    public const ALL_SpiTaskGetV2Status = 'ALL';
    public const WAITING_SpiTaskGetV2Status = 'WAITING';
    public const FAIL_SpiTaskGetV2Status = 'FAIL';
    public const SUCCESS_SpiTaskGetV2Status = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::ALL_SpiTaskGetV2Status,
        self::WAITING_SpiTaskGetV2Status,
        self::FAIL_SpiTaskGetV2Status,
        self::SUCCESS_SpiTaskGetV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SpiTaskGetV2Status', $value));
        }
        return (string) $value;
    }
}

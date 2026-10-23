<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalChargeSubmitV30PayInfoPaymentChannel
{
    public const H5_LocalChargeSubmitV30PayInfoPaymentChannel = 'H5';

    public const ALLOWED_VALUES = [
        self::H5_LocalChargeSubmitV30PayInfoPaymentChannel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalChargeSubmitV30PayInfoPaymentChannel', $value));
        }
        return (string) $value;
    }
}

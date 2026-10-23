<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferQueryCanTransferBalanceV30TransferDirection
{
    public const TRANSFER_IN_CgTransferQueryCanTransferBalanceV30TransferDirection = 'TRANSFER_IN';
    public const TRANSFER_OUT_CgTransferQueryCanTransferBalanceV30TransferDirection = 'TRANSFER_OUT';

    public const ALLOWED_VALUES = [
        self::TRANSFER_IN_CgTransferQueryCanTransferBalanceV30TransferDirection,
        self::TRANSFER_OUT_CgTransferQueryCanTransferBalanceV30TransferDirection,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferQueryCanTransferBalanceV30TransferDirection', $value));
        }
        return (string) $value;
    }
}

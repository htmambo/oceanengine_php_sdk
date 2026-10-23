<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferDetailV30DataTransferDirection
{
    public const TRANSFER_IN_CgTransferWalletTransferDetailV30DataTransferDirection = 'TRANSFER_IN';
    public const TRANSFER_OUT_CgTransferWalletTransferDetailV30DataTransferDirection = 'TRANSFER_OUT';

    public const ALLOWED_VALUES = [
        self::TRANSFER_IN_CgTransferWalletTransferDetailV30DataTransferDirection,
        self::TRANSFER_OUT_CgTransferWalletTransferDetailV30DataTransferDirection,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferDetailV30DataTransferDirection', $value));
        }
        return (string) $value;
    }
}

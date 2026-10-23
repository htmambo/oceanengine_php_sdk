<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferCreateTransferV30TransferDirection
{
    public const TRANSFER_IN_CgTransferCreateTransferV30TransferDirection = 'TRANSFER_IN';
    public const TRANSFER_OUT_CgTransferCreateTransferV30TransferDirection = 'TRANSFER_OUT';

    public const ALLOWED_VALUES = [
        self::TRANSFER_IN_CgTransferCreateTransferV30TransferDirection,
        self::TRANSFER_OUT_CgTransferCreateTransferV30TransferDirection,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferCreateTransferV30TransferDirection', $value));
        }
        return (string) $value;
    }
}

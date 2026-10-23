<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CustomerCenterAdvertiserTransferableListV2TransferAccountType
{
    public const PAYEE_CustomerCenterAdvertiserTransferableListV2TransferAccountType = 'PAYEE';
    public const REMITTER_CustomerCenterAdvertiserTransferableListV2TransferAccountType = 'REMITTER';

    public const ALLOWED_VALUES = [
        self::PAYEE_CustomerCenterAdvertiserTransferableListV2TransferAccountType,
        self::REMITTER_CustomerCenterAdvertiserTransferableListV2TransferAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CustomerCenterAdvertiserTransferableListV2TransferAccountType', $value));
        }
        return (string) $value;
    }
}

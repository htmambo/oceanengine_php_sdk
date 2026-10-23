<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferCreateV30Origin
{
    public const BP_ACCOUNT_WALLET_MAPI_CgTransferV2BpTransferCreateV30Origin = 'BP_ACCOUNT_WALLET_MAPI';
    public const BP_MAPI_CgTransferV2BpTransferCreateV30Origin = 'BP_MAPI';

    public const ALLOWED_VALUES = [
        self::BP_ACCOUNT_WALLET_MAPI_CgTransferV2BpTransferCreateV30Origin,
        self::BP_MAPI_CgTransferV2BpTransferCreateV30Origin,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferCreateV30Origin', $value));
        }
        return (string) $value;
    }
}

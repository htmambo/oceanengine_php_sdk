<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletTransferDetailGetV30UserType
{
    public const AGENT_CgTransferV3WalletTransferDetailGetV30UserType = 'AGENT';
    public const BP_CgTransferV3WalletTransferDetailGetV30UserType = 'BP';

    public const ALLOWED_VALUES = [
        self::AGENT_CgTransferV3WalletTransferDetailGetV30UserType,
        self::BP_CgTransferV3WalletTransferDetailGetV30UserType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletTransferDetailGetV30UserType', $value));
        }
        return (string) $value;
    }
}

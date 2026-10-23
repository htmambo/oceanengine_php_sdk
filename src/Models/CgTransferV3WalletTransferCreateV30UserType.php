<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletTransferCreateV30UserType
{
    public const AGENT_CgTransferV3WalletTransferCreateV30UserType = 'AGENT';
    public const BP_CgTransferV3WalletTransferCreateV30UserType = 'BP';

    public const ALLOWED_VALUES = [
        self::AGENT_CgTransferV3WalletTransferCreateV30UserType,
        self::BP_CgTransferV3WalletTransferCreateV30UserType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletTransferCreateV30UserType', $value));
        }
        return (string) $value;
    }
}

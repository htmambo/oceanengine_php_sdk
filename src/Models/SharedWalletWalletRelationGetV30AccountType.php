<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletRelationGetV30AccountType
{
    public const AD_SharedWalletWalletRelationGetV30AccountType = 'AD';
    public const AGENT_SharedWalletWalletRelationGetV30AccountType = 'AGENT';
    public const LOCAL_SharedWalletWalletRelationGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletWalletRelationGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletWalletRelationGetV30AccountType,
        self::AGENT_SharedWalletWalletRelationGetV30AccountType,
        self::LOCAL_SharedWalletWalletRelationGetV30AccountType,
        self::QIANCHUAN_SharedWalletWalletRelationGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletRelationGetV30AccountType', $value));
        }
        return (string) $value;
    }
}

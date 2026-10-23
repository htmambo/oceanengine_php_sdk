<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletAccountRelationGetV30AccountType
{
    public const AD_SharedWalletAccountRelationGetV30AccountType = 'AD';
    public const AGENT_SharedWalletAccountRelationGetV30AccountType = 'AGENT';
    public const LOCAL_SharedWalletAccountRelationGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletAccountRelationGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletAccountRelationGetV30AccountType,
        self::AGENT_SharedWalletAccountRelationGetV30AccountType,
        self::LOCAL_SharedWalletAccountRelationGetV30AccountType,
        self::QIANCHUAN_SharedWalletAccountRelationGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletAccountRelationGetV30AccountType', $value));
        }
        return (string) $value;
    }
}

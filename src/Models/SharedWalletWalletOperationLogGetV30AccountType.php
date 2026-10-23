<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletOperationLogGetV30AccountType
{
    public const AD_SharedWalletWalletOperationLogGetV30AccountType = 'AD';
    public const AGENT_SharedWalletWalletOperationLogGetV30AccountType = 'AGENT';
    public const BP_SharedWalletWalletOperationLogGetV30AccountType = 'BP';
    public const LOCAL_SharedWalletWalletOperationLogGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletWalletOperationLogGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletWalletOperationLogGetV30AccountType,
        self::AGENT_SharedWalletWalletOperationLogGetV30AccountType,
        self::BP_SharedWalletWalletOperationLogGetV30AccountType,
        self::LOCAL_SharedWalletWalletOperationLogGetV30AccountType,
        self::QIANCHUAN_SharedWalletWalletOperationLogGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletOperationLogGetV30AccountType', $value));
        }
        return (string) $value;
    }
}

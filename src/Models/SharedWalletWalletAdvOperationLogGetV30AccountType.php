<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletAdvOperationLogGetV30AccountType
{
    public const AD_SharedWalletWalletAdvOperationLogGetV30AccountType = 'AD';
    public const AGENT_SharedWalletWalletAdvOperationLogGetV30AccountType = 'AGENT';
    public const BP_SharedWalletWalletAdvOperationLogGetV30AccountType = 'BP';
    public const LOCAL_SharedWalletWalletAdvOperationLogGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletWalletAdvOperationLogGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletWalletAdvOperationLogGetV30AccountType,
        self::AGENT_SharedWalletWalletAdvOperationLogGetV30AccountType,
        self::BP_SharedWalletWalletAdvOperationLogGetV30AccountType,
        self::LOCAL_SharedWalletWalletAdvOperationLogGetV30AccountType,
        self::QIANCHUAN_SharedWalletWalletAdvOperationLogGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletAdvOperationLogGetV30AccountType', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType
{
    public const AGENT_TO_AGENT_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType = 'AGENT_TO_AGENT';
    public const AGENT_TO_EBP_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType = 'AGENT_TO_EBP';
    public const EBP_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType = 'EBP';

    public const ALLOWED_VALUES = [
        self::AGENT_TO_AGENT_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType,
        self::AGENT_TO_EBP_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType,
        self::EBP_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType', $value));
        }
        return (string) $value;
    }
}

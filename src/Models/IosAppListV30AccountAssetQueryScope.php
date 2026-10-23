<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class IosAppListV30AccountAssetQueryScope
{
    public const ACCOUNT_ONLY_IosAppListV30AccountAssetQueryScope = 'ACCOUNT_ONLY';
    public const ALL_IosAppListV30AccountAssetQueryScope = 'ALL';
    public const DIRECT_EBP_ONLY_IosAppListV30AccountAssetQueryScope = 'DIRECT_EBP_ONLY';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_ONLY_IosAppListV30AccountAssetQueryScope,
        self::ALL_IosAppListV30AccountAssetQueryScope,
        self::DIRECT_EBP_ONLY_IosAppListV30AccountAssetQueryScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum IosAppListV30AccountAssetQueryScope', $value));
        }
        return (string) $value;
    }
}

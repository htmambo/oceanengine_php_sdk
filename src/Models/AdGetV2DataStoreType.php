<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataStoreType
{
    public const STORE_NORMAL_AdGetV2DataStoreType = 'STORE_NORMAL';
    public const STORE_DOUYIN_AdGetV2DataStoreType = 'STORE_DOUYIN';
    public const STORE_THIRT_PARTY_AdGetV2DataStoreType = 'STORE_THIRT_PARTY';
    public const STORE_LANDING_AdGetV2DataStoreType = 'STORE_LANDING';

    public const ALLOWED_VALUES = [
        self::STORE_NORMAL_AdGetV2DataStoreType,
        self::STORE_DOUYIN_AdGetV2DataStoreType,
        self::STORE_THIRT_PARTY_AdGetV2DataStoreType,
        self::STORE_LANDING_AdGetV2DataStoreType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataStoreType', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DmpDataSourceReadV2DataDataListDataSourceType
{
    public const UID_DmpDataSourceReadV2DataDataListDataSourceType = 'UID';
    public const DID_DmpDataSourceReadV2DataDataListDataSourceType = 'DID';

    public const ALLOWED_VALUES = [
        self::UID_DmpDataSourceReadV2DataDataListDataSourceType,
        self::DID_DmpDataSourceReadV2DataDataListDataSourceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DmpDataSourceReadV2DataDataListDataSourceType', $value));
        }
        return (string) $value;
    }
}

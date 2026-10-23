<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DmpDataSourceCreateV2DataSourceType
{
    public const UID_DmpDataSourceCreateV2DataSourceType = 'UID';
    public const DID_DmpDataSourceCreateV2DataSourceType = 'DID';

    public const ALLOWED_VALUES = [
        self::UID_DmpDataSourceCreateV2DataSourceType,
        self::DID_DmpDataSourceCreateV2DataSourceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DmpDataSourceCreateV2DataSourceType', $value));
        }
        return (string) $value;
    }
}

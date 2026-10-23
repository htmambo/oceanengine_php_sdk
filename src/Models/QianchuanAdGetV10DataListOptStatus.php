<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListOptStatus
{
    public const DELETE_QianchuanAdGetV10DataListOptStatus = 'DELETE';
    public const DISABLE_QianchuanAdGetV10DataListOptStatus = 'DISABLE';
    public const ENABLE_QianchuanAdGetV10DataListOptStatus = 'ENABLE';
    public const QUOTA_DISABLE_QianchuanAdGetV10DataListOptStatus = 'QUOTA_DISABLE';
    public const ROI2_DISABLE_QianchuanAdGetV10DataListOptStatus = 'ROI2_DISABLE';
    public const SYSTEM_DISABLE_QianchuanAdGetV10DataListOptStatus = 'SYSTEM_DISABLE';

    public const ALLOWED_VALUES = [
        self::DELETE_QianchuanAdGetV10DataListOptStatus,
        self::DISABLE_QianchuanAdGetV10DataListOptStatus,
        self::ENABLE_QianchuanAdGetV10DataListOptStatus,
        self::QUOTA_DISABLE_QianchuanAdGetV10DataListOptStatus,
        self::ROI2_DISABLE_QianchuanAdGetV10DataListOptStatus,
        self::SYSTEM_DISABLE_QianchuanAdGetV10DataListOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListOptStatus', $value));
        }
        return (string) $value;
    }
}

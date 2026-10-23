<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataOptStatus
{
    public const DELETE_QianchuanAdDetailGetV10DataOptStatus = 'DELETE';
    public const DISABLE_QianchuanAdDetailGetV10DataOptStatus = 'DISABLE';
    public const ENABLE_QianchuanAdDetailGetV10DataOptStatus = 'ENABLE';
    public const QUOTA_DISABLE_QianchuanAdDetailGetV10DataOptStatus = 'QUOTA_DISABLE';
    public const ROI2_DISABLE_QianchuanAdDetailGetV10DataOptStatus = 'ROI2_DISABLE';
    public const SYSTEM_DISABLE_QianchuanAdDetailGetV10DataOptStatus = 'SYSTEM_DISABLE';

    public const ALLOWED_VALUES = [
        self::DELETE_QianchuanAdDetailGetV10DataOptStatus,
        self::DISABLE_QianchuanAdDetailGetV10DataOptStatus,
        self::ENABLE_QianchuanAdDetailGetV10DataOptStatus,
        self::QUOTA_DISABLE_QianchuanAdDetailGetV10DataOptStatus,
        self::ROI2_DISABLE_QianchuanAdDetailGetV10DataOptStatus,
        self::SYSTEM_DISABLE_QianchuanAdDetailGetV10DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataOptStatus', $value));
        }
        return (string) $value;
    }
}

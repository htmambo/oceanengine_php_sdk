<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpClueProductSaveV30ProductStatus
{
    public const STATUS_OFFLINE_DpaEbpClueProductSaveV30ProductStatus = 'STATUS_OFFLINE';
    public const STATUS_ONLINE_DpaEbpClueProductSaveV30ProductStatus = 'STATUS_ONLINE';

    public const ALLOWED_VALUES = [
        self::STATUS_OFFLINE_DpaEbpClueProductSaveV30ProductStatus,
        self::STATUS_ONLINE_DpaEbpClueProductSaveV30ProductStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpClueProductSaveV30ProductStatus', $value));
        }
        return (string) $value;
    }
}

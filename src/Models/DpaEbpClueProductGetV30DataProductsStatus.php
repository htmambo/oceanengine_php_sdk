<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpClueProductGetV30DataProductsStatus
{
    public const STATUS_OFFLINE_DpaEbpClueProductGetV30DataProductsStatus = 'STATUS_OFFLINE';
    public const STATUS_ONLINE_DpaEbpClueProductGetV30DataProductsStatus = 'STATUS_ONLINE';

    public const ALLOWED_VALUES = [
        self::STATUS_OFFLINE_DpaEbpClueProductGetV30DataProductsStatus,
        self::STATUS_ONLINE_DpaEbpClueProductGetV30DataProductsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpClueProductGetV30DataProductsStatus', $value));
        }
        return (string) $value;
    }
}

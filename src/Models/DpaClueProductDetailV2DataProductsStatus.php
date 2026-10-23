<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaClueProductDetailV2DataProductsStatus
{
    public const STATUS_OFFLINE_DpaClueProductDetailV2DataProductsStatus = 'STATUS_OFFLINE';
    public const STATUS_ONLINE_DpaClueProductDetailV2DataProductsStatus = 'STATUS_ONLINE';

    public const ALLOWED_VALUES = [
        self::STATUS_OFFLINE_DpaClueProductDetailV2DataProductsStatus,
        self::STATUS_ONLINE_DpaClueProductDetailV2DataProductsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaClueProductDetailV2DataProductsStatus', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileRebateRebateDownloadCreateTaskV2PricingCategory
{
    public const BRAND_FileRebateRebateDownloadCreateTaskV2PricingCategory = 'BRAND';
    public const BID_FileRebateRebateDownloadCreateTaskV2PricingCategory = 'BID';

    public const ALLOWED_VALUES = [
        self::BRAND_FileRebateRebateDownloadCreateTaskV2PricingCategory,
        self::BID_FileRebateRebateDownloadCreateTaskV2PricingCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileRebateRebateDownloadCreateTaskV2PricingCategory', $value));
        }
        return (string) $value;
    }
}

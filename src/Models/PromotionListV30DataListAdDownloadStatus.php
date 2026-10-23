<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListAdDownloadStatus
{
    public const OFF_PromotionListV30DataListAdDownloadStatus = 'OFF';
    public const ON_PromotionListV30DataListAdDownloadStatus = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionListV30DataListAdDownloadStatus,
        self::ON_PromotionListV30DataListAdDownloadStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListAdDownloadStatus', $value));
        }
        return (string) $value;
    }
}

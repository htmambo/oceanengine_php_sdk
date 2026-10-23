<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30AdDownloadStatus
{
    public const OFF_PromotionCreateV30AdDownloadStatus = 'OFF';
    public const ON_PromotionCreateV30AdDownloadStatus = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionCreateV30AdDownloadStatus,
        self::ON_PromotionCreateV30AdDownloadStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30AdDownloadStatus', $value));
        }
        return (string) $value;
    }
}

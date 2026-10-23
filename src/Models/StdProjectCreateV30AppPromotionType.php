<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AppPromotionType
{
    public const DOWNLOAD_StdProjectCreateV30AppPromotionType = 'DOWNLOAD';
    public const LAUNCH_StdProjectCreateV30AppPromotionType = 'LAUNCH';
    public const RESERVE_StdProjectCreateV30AppPromotionType = 'RESERVE';

    public const ALLOWED_VALUES = [
        self::DOWNLOAD_StdProjectCreateV30AppPromotionType,
        self::LAUNCH_StdProjectCreateV30AppPromotionType,
        self::RESERVE_StdProjectCreateV30AppPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AppPromotionType', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AppPromotionType
{
    public const DOWNLOAD_ProjectCreateV30AppPromotionType = 'DOWNLOAD';
    public const LAUNCH_ProjectCreateV30AppPromotionType = 'LAUNCH';
    public const RESERVE_ProjectCreateV30AppPromotionType = 'RESERVE';

    public const ALLOWED_VALUES = [
        self::DOWNLOAD_ProjectCreateV30AppPromotionType,
        self::LAUNCH_ProjectCreateV30AppPromotionType,
        self::RESERVE_ProjectCreateV30AppPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AppPromotionType', $value));
        }
        return (string) $value;
    }
}

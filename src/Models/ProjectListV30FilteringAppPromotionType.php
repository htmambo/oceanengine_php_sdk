<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringAppPromotionType
{
    public const DOWNLOAD_ProjectListV30FilteringAppPromotionType = 'DOWNLOAD';
    public const LAUNCH_ProjectListV30FilteringAppPromotionType = 'LAUNCH';
    public const RESERVE_ProjectListV30FilteringAppPromotionType = 'RESERVE';

    public const ALLOWED_VALUES = [
        self::DOWNLOAD_ProjectListV30FilteringAppPromotionType,
        self::LAUNCH_ProjectListV30FilteringAppPromotionType,
        self::RESERVE_ProjectListV30FilteringAppPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringAppPromotionType', $value));
        }
        return (string) $value;
    }
}

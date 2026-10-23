<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAppPromotionType
{
    public const DOWNLOAD_ProjectListV30DataListAppPromotionType = 'DOWNLOAD';
    public const LAUNCH_ProjectListV30DataListAppPromotionType = 'LAUNCH';
    public const RESERVE_ProjectListV30DataListAppPromotionType = 'RESERVE';

    public const ALLOWED_VALUES = [
        self::DOWNLOAD_ProjectListV30DataListAppPromotionType,
        self::LAUNCH_ProjectListV30DataListAppPromotionType,
        self::RESERVE_ProjectListV30DataListAppPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAppPromotionType', $value));
        }
        return (string) $value;
    }
}

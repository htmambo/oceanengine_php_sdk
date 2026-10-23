<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAppPromotionType
{
    public const DOWNLOAD_StdProjectListV30DataListAppPromotionType = 'DOWNLOAD';
    public const LAUNCH_StdProjectListV30DataListAppPromotionType = 'LAUNCH';
    public const RESERVE_StdProjectListV30DataListAppPromotionType = 'RESERVE';

    public const ALLOWED_VALUES = [
        self::DOWNLOAD_StdProjectListV30DataListAppPromotionType,
        self::LAUNCH_StdProjectListV30DataListAppPromotionType,
        self::RESERVE_StdProjectListV30DataListAppPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAppPromotionType', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListPromotionType
{
    public const AWEME_HOME_PAGE_ProjectListV30DataListPromotionType = 'AWEME_HOME_PAGE';
    public const LANDING_PAGE_LINK_ProjectListV30DataListPromotionType = 'LANDING_PAGE_LINK';

    public const ALLOWED_VALUES = [
        self::AWEME_HOME_PAGE_ProjectListV30DataListPromotionType,
        self::LANDING_PAGE_LINK_ProjectListV30DataListPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListPromotionType', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30PromotionType
{
    public const AWEME_HOME_PAGE_ProjectCreateV30PromotionType = 'AWEME_HOME_PAGE';
    public const LANDING_PAGE_LINK_ProjectCreateV30PromotionType = 'LANDING_PAGE_LINK';

    public const ALLOWED_VALUES = [
        self::AWEME_HOME_PAGE_ProjectCreateV30PromotionType,
        self::LANDING_PAGE_LINK_ProjectCreateV30PromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30PromotionType', $value));
        }
        return (string) $value;
    }
}

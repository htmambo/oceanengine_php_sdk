<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform
{
    public const JD_ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform = 'JD';
    public const OTHER_ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform = 'OTHER';
    public const PDD_ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform = 'PDD';
    public const TB_ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform = 'TB';

    public const ALLOWED_VALUES = [
        self::JD_ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform,
        self::OTHER_ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform,
        self::PDD_ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform,
        self::TB_ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectRoigoalUpdateV30DataShopMultiRoiGoalsShopPlatform', $value));
        }
        return (string) $value;
    }
}

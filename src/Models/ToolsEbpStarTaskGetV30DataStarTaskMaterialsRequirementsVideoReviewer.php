<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskGetV30DataStarTaskMaterialsRequirementsVideoReviewer
{
    public const CONFIRM_BY_ISV_ONLY_ToolsEbpStarTaskGetV30DataStarTaskMaterialsRequirementsVideoReviewer = 'CONFIRM_BY_ISV_ONLY';
    public const NEED_RE_CONFIRM_ToolsEbpStarTaskGetV30DataStarTaskMaterialsRequirementsVideoReviewer = 'NEED_RE_CONFIRM';

    public const ALLOWED_VALUES = [
        self::CONFIRM_BY_ISV_ONLY_ToolsEbpStarTaskGetV30DataStarTaskMaterialsRequirementsVideoReviewer,
        self::NEED_RE_CONFIRM_ToolsEbpStarTaskGetV30DataStarTaskMaterialsRequirementsVideoReviewer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskGetV30DataStarTaskMaterialsRequirementsVideoReviewer', $value));
        }
        return (string) $value;
    }
}

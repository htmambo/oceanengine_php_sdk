<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction
{
    public const AD_CONVERT_TYPE_ACTIVE_ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';
    public const AD_CONVERT_TYPE_PAY_ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction = 'AD_CONVERT_TYPE_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_ACTIVE_ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction,
        self::AD_CONVERT_TYPE_PAY_ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskDataGetV30DataListStarTaskExternalAction', $value));
        }
        return (string) $value;
    }
}

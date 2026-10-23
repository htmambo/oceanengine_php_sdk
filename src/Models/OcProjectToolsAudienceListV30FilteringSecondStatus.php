<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceListV30FilteringSecondStatus
{
    public const DISABLE_OcProjectToolsAudienceListV30FilteringSecondStatus = 'DISABLE';
    public const PROJECT_AUDIENCE_SETTING_CONFLICT_OcProjectToolsAudienceListV30FilteringSecondStatus = 'PROJECT_AUDIENCE_SETTING_CONFLICT';
    public const TASK_BID_EXCEEDS_PROJECT_BUDGET_OcProjectToolsAudienceListV30FilteringSecondStatus = 'TASK_BID_EXCEEDS_PROJECT_BUDGET';

    public const ALLOWED_VALUES = [
        self::DISABLE_OcProjectToolsAudienceListV30FilteringSecondStatus,
        self::PROJECT_AUDIENCE_SETTING_CONFLICT_OcProjectToolsAudienceListV30FilteringSecondStatus,
        self::TASK_BID_EXCEEDS_PROJECT_BUDGET_OcProjectToolsAudienceListV30FilteringSecondStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceListV30FilteringSecondStatus', $value));
        }
        return (string) $value;
    }
}

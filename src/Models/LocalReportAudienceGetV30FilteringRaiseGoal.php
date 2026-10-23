<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAudienceGetV30FilteringRaiseGoal
{
    public const ADLAB_MODE_DIFF_ONE_LocalReportAudienceGetV30FilteringRaiseGoal = 'ADLAB_MODE_DIFF_ONE';
    public const ADLAB_MODE_EQUAL_ONE_LocalReportAudienceGetV30FilteringRaiseGoal = 'ADLAB_MODE_EQUAL_ONE';

    public const ALLOWED_VALUES = [
        self::ADLAB_MODE_DIFF_ONE_LocalReportAudienceGetV30FilteringRaiseGoal,
        self::ADLAB_MODE_EQUAL_ONE_LocalReportAudienceGetV30FilteringRaiseGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAudienceGetV30FilteringRaiseGoal', $value));
        }
        return (string) $value;
    }
}

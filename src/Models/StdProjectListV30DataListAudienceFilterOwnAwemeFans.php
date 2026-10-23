<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceFilterOwnAwemeFans
{
    public const OFF_StdProjectListV30DataListAudienceFilterOwnAwemeFans = 'OFF';
    public const ON_StdProjectListV30DataListAudienceFilterOwnAwemeFans = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectListV30DataListAudienceFilterOwnAwemeFans,
        self::ON_StdProjectListV30DataListAudienceFilterOwnAwemeFans,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceFilterOwnAwemeFans', $value));
        }
        return (string) $value;
    }
}

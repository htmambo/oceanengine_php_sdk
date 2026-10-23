<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceHideIfExists
{
    public const FILTER_StdProjectListV30DataListAudienceHideIfExists = 'FILTER';
    public const TARGETING_StdProjectListV30DataListAudienceHideIfExists = 'TARGETING';
    public const UNLIMITED_StdProjectListV30DataListAudienceHideIfExists = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FILTER_StdProjectListV30DataListAudienceHideIfExists,
        self::TARGETING_StdProjectListV30DataListAudienceHideIfExists,
        self::UNLIMITED_StdProjectListV30DataListAudienceHideIfExists,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceHideIfExists', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceHideIfExists
{
    public const FILTER_ProjectListV30DataListAudienceHideIfExists = 'FILTER';
    public const TARGETING_ProjectListV30DataListAudienceHideIfExists = 'TARGETING';
    public const UNLIMITED_ProjectListV30DataListAudienceHideIfExists = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FILTER_ProjectListV30DataListAudienceHideIfExists,
        self::TARGETING_ProjectListV30DataListAudienceHideIfExists,
        self::UNLIMITED_ProjectListV30DataListAudienceHideIfExists,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceHideIfExists', $value));
        }
        return (string) $value;
    }
}

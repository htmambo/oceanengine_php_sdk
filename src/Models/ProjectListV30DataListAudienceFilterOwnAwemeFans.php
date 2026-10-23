<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceFilterOwnAwemeFans
{
    public const OFF_ProjectListV30DataListAudienceFilterOwnAwemeFans = 'OFF';
    public const ON_ProjectListV30DataListAudienceFilterOwnAwemeFans = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListAudienceFilterOwnAwemeFans,
        self::ON_ProjectListV30DataListAudienceFilterOwnAwemeFans,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceFilterOwnAwemeFans', $value));
        }
        return (string) $value;
    }
}

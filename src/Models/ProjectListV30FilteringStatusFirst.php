<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringStatusFirst
{
    public const PROJECT_STATUS_DELETE_ProjectListV30FilteringStatusFirst = 'PROJECT_STATUS_DELETE';
    public const PROJECT_STATUS_DISABLE_ProjectListV30FilteringStatusFirst = 'PROJECT_STATUS_DISABLE';
    public const PROJECT_STATUS_DONE_ProjectListV30FilteringStatusFirst = 'PROJECT_STATUS_DONE';
    public const PROJECT_STATUS_ENABLE_ProjectListV30FilteringStatusFirst = 'PROJECT_STATUS_ENABLE';

    public const ALLOWED_VALUES = [
        self::PROJECT_STATUS_DELETE_ProjectListV30FilteringStatusFirst,
        self::PROJECT_STATUS_DISABLE_ProjectListV30FilteringStatusFirst,
        self::PROJECT_STATUS_DONE_ProjectListV30FilteringStatusFirst,
        self::PROJECT_STATUS_ENABLE_ProjectListV30FilteringStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringStatusFirst', $value));
        }
        return (string) $value;
    }
}

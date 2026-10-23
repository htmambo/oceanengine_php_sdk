<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringStatusFirst
{
    public const ALL_StdProjectListV30FilteringStatusFirst = 'ALL';
    public const ALL_EXCEPT_DELETE_StdProjectListV30FilteringStatusFirst = 'ALL_EXCEPT_DELETE';
    public const PROJECT_STATUS_DELETE_StdProjectListV30FilteringStatusFirst = 'PROJECT_STATUS_DELETE';
    public const PROJECT_STATUS_DISABLE_StdProjectListV30FilteringStatusFirst = 'PROJECT_STATUS_DISABLE';
    public const PROJECT_STATUS_DONE_StdProjectListV30FilteringStatusFirst = 'PROJECT_STATUS_DONE';
    public const PROJECT_STATUS_ENABLE_StdProjectListV30FilteringStatusFirst = 'PROJECT_STATUS_ENABLE';
    public const PROJECT_STATUS_FROZEN_StdProjectListV30FilteringStatusFirst = 'PROJECT_STATUS_FROZEN';

    public const ALLOWED_VALUES = [
        self::ALL_StdProjectListV30FilteringStatusFirst,
        self::ALL_EXCEPT_DELETE_StdProjectListV30FilteringStatusFirst,
        self::PROJECT_STATUS_DELETE_StdProjectListV30FilteringStatusFirst,
        self::PROJECT_STATUS_DISABLE_StdProjectListV30FilteringStatusFirst,
        self::PROJECT_STATUS_DONE_StdProjectListV30FilteringStatusFirst,
        self::PROJECT_STATUS_ENABLE_StdProjectListV30FilteringStatusFirst,
        self::PROJECT_STATUS_FROZEN_StdProjectListV30FilteringStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringStatusFirst', $value));
        }
        return (string) $value;
    }
}

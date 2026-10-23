<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30FilteringStatusFirst
{
    public const PROJECT_STATUS_DELETE_UniProjectListGetV30FilteringStatusFirst = 'PROJECT_STATUS_DELETE';
    public const PROJECT_STATUS_DISABLE_UniProjectListGetV30FilteringStatusFirst = 'PROJECT_STATUS_DISABLE';
    public const PROJECT_STATUS_DONE_UniProjectListGetV30FilteringStatusFirst = 'PROJECT_STATUS_DONE';
    public const PROJECT_STATUS_ENABLE_UniProjectListGetV30FilteringStatusFirst = 'PROJECT_STATUS_ENABLE';
    public const PROJECT_STATUS_FROZEN_UniProjectListGetV30FilteringStatusFirst = 'PROJECT_STATUS_FROZEN';

    public const ALLOWED_VALUES = [
        self::PROJECT_STATUS_DELETE_UniProjectListGetV30FilteringStatusFirst,
        self::PROJECT_STATUS_DISABLE_UniProjectListGetV30FilteringStatusFirst,
        self::PROJECT_STATUS_DONE_UniProjectListGetV30FilteringStatusFirst,
        self::PROJECT_STATUS_ENABLE_UniProjectListGetV30FilteringStatusFirst,
        self::PROJECT_STATUS_FROZEN_UniProjectListGetV30FilteringStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30FilteringStatusFirst', $value));
        }
        return (string) $value;
    }
}

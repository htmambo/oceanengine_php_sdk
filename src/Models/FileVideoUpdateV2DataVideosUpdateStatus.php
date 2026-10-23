<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoUpdateV2DataVideosUpdateStatus
{
    public const SUCCESS_FileVideoUpdateV2DataVideosUpdateStatus = 'SUCCESS';
    public const FAILURE_FileVideoUpdateV2DataVideosUpdateStatus = 'FAILURE';

    public const ALLOWED_VALUES = [
        self::SUCCESS_FileVideoUpdateV2DataVideosUpdateStatus,
        self::FAILURE_FileVideoUpdateV2DataVideosUpdateStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoUpdateV2DataVideosUpdateStatus', $value));
        }
        return (string) $value;
    }
}

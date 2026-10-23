<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpTaskInfoGetV30DataTaskStatus
{
    public const DONE_EbpTaskInfoGetV30DataTaskStatus = 'DONE';
    public const EXPIRED_EbpTaskInfoGetV30DataTaskStatus = 'EXPIRED';
    public const FAILED_EbpTaskInfoGetV30DataTaskStatus = 'FAILED';
    public const PARTIAL_SUCCESS_EbpTaskInfoGetV30DataTaskStatus = 'PARTIAL_SUCCESS';
    public const RUNNING_EbpTaskInfoGetV30DataTaskStatus = 'RUNNING';
    public const UNKNOWN_EbpTaskInfoGetV30DataTaskStatus = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::DONE_EbpTaskInfoGetV30DataTaskStatus,
        self::EXPIRED_EbpTaskInfoGetV30DataTaskStatus,
        self::FAILED_EbpTaskInfoGetV30DataTaskStatus,
        self::PARTIAL_SUCCESS_EbpTaskInfoGetV30DataTaskStatus,
        self::RUNNING_EbpTaskInfoGetV30DataTaskStatus,
        self::UNKNOWN_EbpTaskInfoGetV30DataTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpTaskInfoGetV30DataTaskStatus', $value));
        }
        return (string) $value;
    }
}

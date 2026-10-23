<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpTaskInfoGetV30FilterSubTaskStatus
{
    public const SUCCESS_EbpTaskInfoGetV30FilterSubTaskStatus = 'SUCCESS';
    public const FAILED_EbpTaskInfoGetV30FilterSubTaskStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::SUCCESS_EbpTaskInfoGetV30FilterSubTaskStatus,
        self::FAILED_EbpTaskInfoGetV30FilterSubTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpTaskInfoGetV30FilterSubTaskStatus', $value));
        }
        return (string) $value;
    }
}

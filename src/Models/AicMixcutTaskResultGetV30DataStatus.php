<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicMixcutTaskResultGetV30DataStatus
{
    public const FAILED_AicMixcutTaskResultGetV30DataStatus = 'FAILED';
    public const PARTSUCCESS_AicMixcutTaskResultGetV30DataStatus = 'PARTSUCCESS';
    public const PROCESSING_AicMixcutTaskResultGetV30DataStatus = 'PROCESSING';
    public const SUCCESS_AicMixcutTaskResultGetV30DataStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_AicMixcutTaskResultGetV30DataStatus,
        self::PARTSUCCESS_AicMixcutTaskResultGetV30DataStatus,
        self::PROCESSING_AicMixcutTaskResultGetV30DataStatus,
        self::SUCCESS_AicMixcutTaskResultGetV30DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicMixcutTaskResultGetV30DataStatus', $value));
        }
        return (string) $value;
    }
}

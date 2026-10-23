<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AsyncTaskCreateV2TaskType
{
    public const REPORT_AsyncTaskCreateV2TaskType = 'REPORT';
    public const REPORT_DPA_AsyncTaskCreateV2TaskType = 'REPORT_DPA';
    public const REPORT_BIDWORD_AsyncTaskCreateV2TaskType = 'REPORT_BIDWORD';

    public const ALLOWED_VALUES = [
        self::REPORT_AsyncTaskCreateV2TaskType,
        self::REPORT_DPA_AsyncTaskCreateV2TaskType,
        self::REPORT_BIDWORD_AsyncTaskCreateV2TaskType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AsyncTaskCreateV2TaskType', $value));
        }
        return (string) $value;
    }
}

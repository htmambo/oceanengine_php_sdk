<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AsyncTaskCreateV2TaskParamsOrderType
{
    public const ASC_AsyncTaskCreateV2TaskParamsOrderType = 'ASC';
    public const DESC_AsyncTaskCreateV2TaskParamsOrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_AsyncTaskCreateV2TaskParamsOrderType,
        self::DESC_AsyncTaskCreateV2TaskParamsOrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AsyncTaskCreateV2TaskParamsOrderType', $value));
        }
        return (string) $value;
    }
}

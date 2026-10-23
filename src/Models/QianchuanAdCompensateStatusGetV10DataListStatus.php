<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCompensateStatusGetV10DataListStatus
{
    public const SUCCESS_QianchuanAdCompensateStatusGetV10DataListStatus = 'SUCCESS';
    public const FAILED_QianchuanAdCompensateStatusGetV10DataListStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::SUCCESS_QianchuanAdCompensateStatusGetV10DataListStatus,
        self::FAILED_QianchuanAdCompensateStatusGetV10DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCompensateStatusGetV10DataListStatus', $value));
        }
        return (string) $value;
    }
}

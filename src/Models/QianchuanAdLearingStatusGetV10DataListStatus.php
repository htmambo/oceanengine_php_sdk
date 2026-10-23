<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdLearingStatusGetV10DataListStatus
{
    public const LEARNING_QianchuanAdLearingStatusGetV10DataListStatus = 'LEARNING';
    public const LEARNED_QianchuanAdLearingStatusGetV10DataListStatus = 'LEARNED';
    public const LEARN_FAILED_QianchuanAdLearingStatusGetV10DataListStatus = 'LEARN_FAILED';
    public const DEFAULT_QianchuanAdLearingStatusGetV10DataListStatus = 'DEFAULT';

    public const ALLOWED_VALUES = [
        self::LEARNING_QianchuanAdLearingStatusGetV10DataListStatus,
        self::LEARNED_QianchuanAdLearingStatusGetV10DataListStatus,
        self::LEARN_FAILED_QianchuanAdLearingStatusGetV10DataListStatus,
        self::DEFAULT_QianchuanAdLearingStatusGetV10DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdLearingStatusGetV10DataListStatus', $value));
        }
        return (string) $value;
    }
}

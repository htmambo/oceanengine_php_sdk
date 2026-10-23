<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCompensateStatusGetV10DataListCompensateStatus
{
    public const IN_EFFECT_QianchuanAdCompensateStatusGetV10DataListCompensateStatus = 'IN_EFFECT';
    public const INVALID_QianchuanAdCompensateStatusGetV10DataListCompensateStatus = 'INVALID';
    public const CONFIRMING_QianchuanAdCompensateStatusGetV10DataListCompensateStatus = 'CONFIRMING';
    public const PAID_QianchuanAdCompensateStatusGetV10DataListCompensateStatus = 'PAID';
    public const ENDED_QianchuanAdCompensateStatusGetV10DataListCompensateStatus = 'ENDED';
    public const DEFAULT_QianchuanAdCompensateStatusGetV10DataListCompensateStatus = 'DEFAULT';

    public const ALLOWED_VALUES = [
        self::IN_EFFECT_QianchuanAdCompensateStatusGetV10DataListCompensateStatus,
        self::INVALID_QianchuanAdCompensateStatusGetV10DataListCompensateStatus,
        self::CONFIRMING_QianchuanAdCompensateStatusGetV10DataListCompensateStatus,
        self::PAID_QianchuanAdCompensateStatusGetV10DataListCompensateStatus,
        self::ENDED_QianchuanAdCompensateStatusGetV10DataListCompensateStatus,
        self::DEFAULT_QianchuanAdCompensateStatusGetV10DataListCompensateStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCompensateStatusGetV10DataListCompensateStatus', $value));
        }
        return (string) $value;
    }
}

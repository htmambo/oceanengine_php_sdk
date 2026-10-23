<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus
{
    public const CONFIRMING_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus = 'CONFIRMING';
    public const DEFAULT_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus = 'DEFAULT';
    public const ENDED_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus = 'ENDED';
    public const FAILED_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus = 'FAILED';
    public const INVALID_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus = 'INVALID';
    public const IN_EFFECT_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus = 'IN_EFFECT';
    public const PAID_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus = 'PAID';
    public const UNSUPPORTED_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus = 'UNSUPPORTED';

    public const ALLOWED_VALUES = [
        self::CONFIRMING_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus,
        self::DEFAULT_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus,
        self::ENDED_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus,
        self::FAILED_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus,
        self::INVALID_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus,
        self::IN_EFFECT_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus,
        self::PAID_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus,
        self::UNSUPPORTED_OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsCostProtectStatusGetV30DataListCompensateStatus', $value));
        }
        return (string) $value;
    }
}

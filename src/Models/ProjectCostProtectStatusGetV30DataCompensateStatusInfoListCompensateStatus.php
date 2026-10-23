<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus
{
    public const CONFIRMING_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'CONFIRMING';
    public const DEFAULT_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'DEFAULT';
    public const ENDED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'ENDED';
    public const FAILED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'FAILED';
    public const INVALID_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'INVALID';
    public const IN_EFFECT_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'IN_EFFECT';
    public const PAID_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'PAID';
    public const UNSUPPORTED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'UNSUPPORTED';

    public const ALLOWED_VALUES = [
        self::CONFIRMING_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::DEFAULT_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::ENDED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::FAILED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::INVALID_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::IN_EFFECT_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::PAID_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::UNSUPPORTED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus', $value));
        }
        return (string) $value;
    }
}

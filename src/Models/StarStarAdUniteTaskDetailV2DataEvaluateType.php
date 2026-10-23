<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarStarAdUniteTaskDetailV2DataEvaluateType
{
    public const ACTIVE_StarStarAdUniteTaskDetailV2DataEvaluateType = 'ACTIVE';
    public const ACTIVE_PAY_StarStarAdUniteTaskDetailV2DataEvaluateType = 'ACTIVE_PAY';
    public const DEEP_PURCHASE_StarStarAdUniteTaskDetailV2DataEvaluateType = 'DEEP_PURCHASE';
    public const INSTALL_FINISH_StarStarAdUniteTaskDetailV2DataEvaluateType = 'INSTALL_FINISH';
    public const REGISTER_StarStarAdUniteTaskDetailV2DataEvaluateType = 'REGISTER';

    public const ALLOWED_VALUES = [
        self::ACTIVE_StarStarAdUniteTaskDetailV2DataEvaluateType,
        self::ACTIVE_PAY_StarStarAdUniteTaskDetailV2DataEvaluateType,
        self::DEEP_PURCHASE_StarStarAdUniteTaskDetailV2DataEvaluateType,
        self::INSTALL_FINISH_StarStarAdUniteTaskDetailV2DataEvaluateType,
        self::REGISTER_StarStarAdUniteTaskDetailV2DataEvaluateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarStarAdUniteTaskDetailV2DataEvaluateType', $value));
        }
        return (string) $value;
    }
}

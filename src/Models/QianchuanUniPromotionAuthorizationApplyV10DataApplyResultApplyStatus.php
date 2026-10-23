<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAuthorizationApplyV10DataApplyResultApplyStatus
{
    public const SUCCESS_QianchuanUniPromotionAuthorizationApplyV10DataApplyResultApplyStatus = 'SUCCESS';
    public const FAIL_QianchuanUniPromotionAuthorizationApplyV10DataApplyResultApplyStatus = 'FAIL';

    public const ALLOWED_VALUES = [
        self::SUCCESS_QianchuanUniPromotionAuthorizationApplyV10DataApplyResultApplyStatus,
        self::FAIL_QianchuanUniPromotionAuthorizationApplyV10DataApplyResultApplyStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAuthorizationApplyV10DataApplyResultApplyStatus', $value));
        }
        return (string) $value;
    }
}

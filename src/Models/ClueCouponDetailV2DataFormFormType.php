<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataFormFormType
{
    public const NATIVE_FORM_ClueCouponDetailV2DataFormFormType = 'NATIVE_FORM';
    public const ADVANCED_CREATIVE_FORM_ClueCouponDetailV2DataFormFormType = 'ADVANCED_CREATIVE_FORM';
    public const NORMAL_FORM_ClueCouponDetailV2DataFormFormType = 'NORMAL_FORM';

    public const ALLOWED_VALUES = [
        self::NATIVE_FORM_ClueCouponDetailV2DataFormFormType,
        self::ADVANCED_CREATIVE_FORM_ClueCouponDetailV2DataFormFormType,
        self::NORMAL_FORM_ClueCouponDetailV2DataFormFormType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataFormFormType', $value));
        }
        return (string) $value;
    }
}

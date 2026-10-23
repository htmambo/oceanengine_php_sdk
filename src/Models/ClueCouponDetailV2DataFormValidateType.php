<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataFormValidateType
{
    public const AUTO_VERIFICATION_ClueCouponDetailV2DataFormValidateType = 'AUTO_VERIFICATION';
    public const VALIDITY_PRIORITY_ClueCouponDetailV2DataFormValidateType = 'VALIDITY_PRIORITY';
    public const NONE_VERIFICATION_ClueCouponDetailV2DataFormValidateType = 'NONE_VERIFICATION';
    public const ALL_VERIFICATION_ClueCouponDetailV2DataFormValidateType = 'ALL_VERIFICATION';
    public const CLUE_PRIORITY_ClueCouponDetailV2DataFormValidateType = 'CLUE_PRIORITY';

    public const ALLOWED_VALUES = [
        self::AUTO_VERIFICATION_ClueCouponDetailV2DataFormValidateType,
        self::VALIDITY_PRIORITY_ClueCouponDetailV2DataFormValidateType,
        self::NONE_VERIFICATION_ClueCouponDetailV2DataFormValidateType,
        self::ALL_VERIFICATION_ClueCouponDetailV2DataFormValidateType,
        self::CLUE_PRIORITY_ClueCouponDetailV2DataFormValidateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataFormValidateType', $value));
        }
        return (string) $value;
    }
}

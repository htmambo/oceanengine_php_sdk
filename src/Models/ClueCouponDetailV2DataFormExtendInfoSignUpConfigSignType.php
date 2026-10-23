<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataFormExtendInfoSignUpConfigSignType
{
    public const SIGN_TYPE_SCROLL_BAR_ClueCouponDetailV2DataFormExtendInfoSignUpConfigSignType = 'SIGN_TYPE_SCROLL_BAR';
    public const SIGN_TYPE_SCROLL_WALL_ClueCouponDetailV2DataFormExtendInfoSignUpConfigSignType = 'SIGN_TYPE_SCROLL_WALL';

    public const ALLOWED_VALUES = [
        self::SIGN_TYPE_SCROLL_BAR_ClueCouponDetailV2DataFormExtendInfoSignUpConfigSignType,
        self::SIGN_TYPE_SCROLL_WALL_ClueCouponDetailV2DataFormExtendInfoSignUpConfigSignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataFormExtendInfoSignUpConfigSignType', $value));
        }
        return (string) $value;
    }
}

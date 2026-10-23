<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn
{
    public const BUY_NOW_NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn = 'BUY_NOW';
    public const FREE_RECEIVE_NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn = 'FREE_RECEIVE';
    public const IMPROVE_NOW_NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn = 'IMPROVE_NOW';
    public const VIEW_DETIALS_NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn = 'VIEW_DETIALS';

    public const ALLOWED_VALUES = [
        self::BUY_NOW_NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn,
        self::FREE_RECEIVE_NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn,
        self::IMPROVE_NOW_NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn,
        self::VIEW_DETIALS_NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetDetailV30DataListInsuranceEnterpriseAnchorConversionBtn', $value));
        }
        return (string) $value;
    }
}

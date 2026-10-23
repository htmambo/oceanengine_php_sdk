<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListBlueFlowPackageBlueFlowPackageSetting
{
    public const OFF_PromotionListV30DataListBlueFlowPackageBlueFlowPackageSetting = 'OFF';
    public const ON_PromotionListV30DataListBlueFlowPackageBlueFlowPackageSetting = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionListV30DataListBlueFlowPackageBlueFlowPackageSetting,
        self::ON_PromotionListV30DataListBlueFlowPackageBlueFlowPackageSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListBlueFlowPackageBlueFlowPackageSetting', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform
{
    public const JD_ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform = 'JD';
    public const OTHER_ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform = 'OTHER';
    public const PDD_ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform = 'PDD';
    public const TB_ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform = 'TB';

    public const ALLOWED_VALUES = [
        self::JD_ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform,
        self::OTHER_ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform,
        self::PDD_ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform,
        self::TB_ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30DeliverySettingShopMultiRoiGoalsShopPlatform', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform
{
    public const JD_ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform = 'JD';
    public const OTHER_ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform = 'OTHER';
    public const PDD_ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform = 'PDD';
    public const TB_ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform = 'TB';

    public const ALLOWED_VALUES = [
        self::JD_ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform,
        self::OTHER_ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform,
        self::PDD_ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform,
        self::TB_ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliverySettingShopMultiRoiGoalsShopPlatform', $value));
        }
        return (string) $value;
    }
}

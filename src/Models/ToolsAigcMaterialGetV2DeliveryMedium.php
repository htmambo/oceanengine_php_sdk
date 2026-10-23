<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAigcMaterialGetV2DeliveryMedium
{
    public const AWEME_ToolsAigcMaterialGetV2DeliveryMedium = 'AWEME';
    public const BYTE_APP_ToolsAigcMaterialGetV2DeliveryMedium = 'BYTE_APP';
    public const ENTERPRISE_ToolsAigcMaterialGetV2DeliveryMedium = 'ENTERPRISE';
    public const ORANGE_ToolsAigcMaterialGetV2DeliveryMedium = 'ORANGE';
    public const THIRDPARTY_ToolsAigcMaterialGetV2DeliveryMedium = 'THIRDPARTY';
    public const WECHAT_APP_ToolsAigcMaterialGetV2DeliveryMedium = 'WECHAT_APP';

    public const ALLOWED_VALUES = [
        self::AWEME_ToolsAigcMaterialGetV2DeliveryMedium,
        self::BYTE_APP_ToolsAigcMaterialGetV2DeliveryMedium,
        self::ENTERPRISE_ToolsAigcMaterialGetV2DeliveryMedium,
        self::ORANGE_ToolsAigcMaterialGetV2DeliveryMedium,
        self::THIRDPARTY_ToolsAigcMaterialGetV2DeliveryMedium,
        self::WECHAT_APP_ToolsAigcMaterialGetV2DeliveryMedium,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAigcMaterialGetV2DeliveryMedium', $value));
        }
        return (string) $value;
    }
}

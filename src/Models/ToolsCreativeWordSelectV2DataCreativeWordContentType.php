<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCreativeWordSelectV2DataCreativeWordContentType
{
    public const AGE_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'AGE';
    public const CARRIER_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'CARRIER';
    public const DATE_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'DATE';
    public const DEVICE_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'DEVICE';
    public const KEYWORD_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'KEYWORD';
    public const NETWORK_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'NETWORK';
    public const PROVINCE_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'PROVINCE';
    public const REGION_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'REGION';
    public const RICE_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'RICE';
    public const WEEK_ToolsCreativeWordSelectV2DataCreativeWordContentType = 'WEEK';

    public const ALLOWED_VALUES = [
        self::AGE_ToolsCreativeWordSelectV2DataCreativeWordContentType,
        self::CARRIER_ToolsCreativeWordSelectV2DataCreativeWordContentType,
        self::DATE_ToolsCreativeWordSelectV2DataCreativeWordContentType,
        self::DEVICE_ToolsCreativeWordSelectV2DataCreativeWordContentType,
        self::KEYWORD_ToolsCreativeWordSelectV2DataCreativeWordContentType,
        self::NETWORK_ToolsCreativeWordSelectV2DataCreativeWordContentType,
        self::PROVINCE_ToolsCreativeWordSelectV2DataCreativeWordContentType,
        self::REGION_ToolsCreativeWordSelectV2DataCreativeWordContentType,
        self::RICE_ToolsCreativeWordSelectV2DataCreativeWordContentType,
        self::WEEK_ToolsCreativeWordSelectV2DataCreativeWordContentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCreativeWordSelectV2DataCreativeWordContentType', $value));
        }
        return (string) $value;
    }
}

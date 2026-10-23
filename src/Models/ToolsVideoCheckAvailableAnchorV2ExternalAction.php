<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsVideoCheckAvailableAnchorV2ExternalAction
{
    public const AD_CONVERT_TYPE_ACTIVE_ToolsVideoCheckAvailableAnchorV2ExternalAction = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_ToolsVideoCheckAvailableAnchorV2ExternalAction = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';
    public const AD_CONVERT_TYPE_APP_ORDER_ToolsVideoCheckAvailableAnchorV2ExternalAction = 'AD_CONVERT_TYPE_APP_ORDER';
    public const AD_CONVERT_TYPE_APP_PAY_ToolsVideoCheckAvailableAnchorV2ExternalAction = 'AD_CONVERT_TYPE_APP_PAY';
    public const AD_CONVERT_TYPE_APP_UV_ToolsVideoCheckAvailableAnchorV2ExternalAction = 'AD_CONVERT_TYPE_APP_UV';
    public const AD_CONVERT_TYPE_PAY_ToolsVideoCheckAvailableAnchorV2ExternalAction = 'AD_CONVERT_TYPE_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_ACTIVE_ToolsVideoCheckAvailableAnchorV2ExternalAction,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_ToolsVideoCheckAvailableAnchorV2ExternalAction,
        self::AD_CONVERT_TYPE_APP_ORDER_ToolsVideoCheckAvailableAnchorV2ExternalAction,
        self::AD_CONVERT_TYPE_APP_PAY_ToolsVideoCheckAvailableAnchorV2ExternalAction,
        self::AD_CONVERT_TYPE_APP_UV_ToolsVideoCheckAvailableAnchorV2ExternalAction,
        self::AD_CONVERT_TYPE_PAY_ToolsVideoCheckAvailableAnchorV2ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsVideoCheckAvailableAnchorV2ExternalAction', $value));
        }
        return (string) $value;
    }
}

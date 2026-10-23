<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateGetV2DataListBricksType
{
    public const BUTTON_ToolsSiteTemplateGetV2DataListBricksType = 'BUTTON';
    public const COUPON_ToolsSiteTemplateGetV2DataListBricksType = 'COUPON';
    public const FORM_ToolsSiteTemplateGetV2DataListBricksType = 'FORM';
    public const PICTURE_ToolsSiteTemplateGetV2DataListBricksType = 'PICTURE';
    public const PICTURE_GROUP_ToolsSiteTemplateGetV2DataListBricksType = 'PICTURE_GROUP';
    public const RICH_TEXT_ToolsSiteTemplateGetV2DataListBricksType = 'RICH_TEXT';
    public const SIMPLE_TEXT_ToolsSiteTemplateGetV2DataListBricksType = 'SIMPLE_TEXT';
    public const VIDEO_ToolsSiteTemplateGetV2DataListBricksType = 'VIDEO';
    public const WECHAT_APPLET_ToolsSiteTemplateGetV2DataListBricksType = 'WECHAT_APPLET';
    public const WECHAT_GAME_ToolsSiteTemplateGetV2DataListBricksType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::BUTTON_ToolsSiteTemplateGetV2DataListBricksType,
        self::COUPON_ToolsSiteTemplateGetV2DataListBricksType,
        self::FORM_ToolsSiteTemplateGetV2DataListBricksType,
        self::PICTURE_ToolsSiteTemplateGetV2DataListBricksType,
        self::PICTURE_GROUP_ToolsSiteTemplateGetV2DataListBricksType,
        self::RICH_TEXT_ToolsSiteTemplateGetV2DataListBricksType,
        self::SIMPLE_TEXT_ToolsSiteTemplateGetV2DataListBricksType,
        self::VIDEO_ToolsSiteTemplateGetV2DataListBricksType,
        self::WECHAT_APPLET_ToolsSiteTemplateGetV2DataListBricksType,
        self::WECHAT_GAME_ToolsSiteTemplateGetV2DataListBricksType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateGetV2DataListBricksType', $value));
        }
        return (string) $value;
    }
}

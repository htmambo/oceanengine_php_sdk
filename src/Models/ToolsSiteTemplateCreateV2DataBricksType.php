<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateCreateV2DataBricksType
{
    public const BUTTON_ToolsSiteTemplateCreateV2DataBricksType = 'BUTTON';
    public const COUPON_ToolsSiteTemplateCreateV2DataBricksType = 'COUPON';
    public const FORM_ToolsSiteTemplateCreateV2DataBricksType = 'FORM';
    public const PICTURE_ToolsSiteTemplateCreateV2DataBricksType = 'PICTURE';
    public const PICTURE_GROUP_ToolsSiteTemplateCreateV2DataBricksType = 'PICTURE_GROUP';
    public const RICH_TEXT_ToolsSiteTemplateCreateV2DataBricksType = 'RICH_TEXT';
    public const SIMPLE_TEXT_ToolsSiteTemplateCreateV2DataBricksType = 'SIMPLE_TEXT';
    public const VIDEO_ToolsSiteTemplateCreateV2DataBricksType = 'VIDEO';
    public const WECHAT_APPLET_ToolsSiteTemplateCreateV2DataBricksType = 'WECHAT_APPLET';
    public const WECHAT_GAME_ToolsSiteTemplateCreateV2DataBricksType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::BUTTON_ToolsSiteTemplateCreateV2DataBricksType,
        self::COUPON_ToolsSiteTemplateCreateV2DataBricksType,
        self::FORM_ToolsSiteTemplateCreateV2DataBricksType,
        self::PICTURE_ToolsSiteTemplateCreateV2DataBricksType,
        self::PICTURE_GROUP_ToolsSiteTemplateCreateV2DataBricksType,
        self::RICH_TEXT_ToolsSiteTemplateCreateV2DataBricksType,
        self::SIMPLE_TEXT_ToolsSiteTemplateCreateV2DataBricksType,
        self::VIDEO_ToolsSiteTemplateCreateV2DataBricksType,
        self::WECHAT_APPLET_ToolsSiteTemplateCreateV2DataBricksType,
        self::WECHAT_GAME_ToolsSiteTemplateCreateV2DataBricksType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateCreateV2DataBricksType', $value));
        }
        return (string) $value;
    }
}

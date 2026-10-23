<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateSiteCreateV2BricksType
{
    public const BUTTON_ToolsSiteTemplateSiteCreateV2BricksType = 'BUTTON';
    public const COUPON_ToolsSiteTemplateSiteCreateV2BricksType = 'COUPON';
    public const FORM_ToolsSiteTemplateSiteCreateV2BricksType = 'FORM';
    public const PICTURE_ToolsSiteTemplateSiteCreateV2BricksType = 'PICTURE';
    public const PICTURE_GROUP_ToolsSiteTemplateSiteCreateV2BricksType = 'PICTURE_GROUP';
    public const RICH_TEXT_ToolsSiteTemplateSiteCreateV2BricksType = 'RICH_TEXT';
    public const SIMPLE_TEXT_ToolsSiteTemplateSiteCreateV2BricksType = 'SIMPLE_TEXT';
    public const VIDEO_ToolsSiteTemplateSiteCreateV2BricksType = 'VIDEO';
    public const WECHAT_APPLET_ToolsSiteTemplateSiteCreateV2BricksType = 'WECHAT_APPLET';
    public const WECHAT_GAME_ToolsSiteTemplateSiteCreateV2BricksType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::BUTTON_ToolsSiteTemplateSiteCreateV2BricksType,
        self::COUPON_ToolsSiteTemplateSiteCreateV2BricksType,
        self::FORM_ToolsSiteTemplateSiteCreateV2BricksType,
        self::PICTURE_ToolsSiteTemplateSiteCreateV2BricksType,
        self::PICTURE_GROUP_ToolsSiteTemplateSiteCreateV2BricksType,
        self::RICH_TEXT_ToolsSiteTemplateSiteCreateV2BricksType,
        self::SIMPLE_TEXT_ToolsSiteTemplateSiteCreateV2BricksType,
        self::VIDEO_ToolsSiteTemplateSiteCreateV2BricksType,
        self::WECHAT_APPLET_ToolsSiteTemplateSiteCreateV2BricksType,
        self::WECHAT_GAME_ToolsSiteTemplateSiteCreateV2BricksType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateSiteCreateV2BricksType', $value));
        }
        return (string) $value;
    }
}

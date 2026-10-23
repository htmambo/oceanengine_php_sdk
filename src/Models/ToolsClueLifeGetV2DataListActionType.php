<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListActionType
{
    public const SHORT_VIDEO_ToolsClueLifeGetV2DataListActionType = 'SHORT_VIDEO';
    public const LIVE_VIDEO_ToolsClueLifeGetV2DataListActionType = 'LIVE_VIDEO';
    public const HOME_PAGE_ToolsClueLifeGetV2DataListActionType = 'HOME_PAGE';
    public const IM_MESSAGE_ToolsClueLifeGetV2DataListActionType = 'IM_MESSAGE';
    public const GROUPON_ORDER_ToolsClueLifeGetV2DataListActionType = 'GROUPON_ORDER';
    public const ALIEN_CARD_ToolsClueLifeGetV2DataListActionType = 'ALIEN_CARD';
    public const OTHERS_ToolsClueLifeGetV2DataListActionType = 'OTHERS';

    public const ALLOWED_VALUES = [
        self::SHORT_VIDEO_ToolsClueLifeGetV2DataListActionType,
        self::LIVE_VIDEO_ToolsClueLifeGetV2DataListActionType,
        self::HOME_PAGE_ToolsClueLifeGetV2DataListActionType,
        self::IM_MESSAGE_ToolsClueLifeGetV2DataListActionType,
        self::GROUPON_ORDER_ToolsClueLifeGetV2DataListActionType,
        self::ALIEN_CARD_ToolsClueLifeGetV2DataListActionType,
        self::OTHERS_ToolsClueLifeGetV2DataListActionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListActionType', $value));
        }
        return (string) $value;
    }
}

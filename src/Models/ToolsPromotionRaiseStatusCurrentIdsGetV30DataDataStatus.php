<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus
{
    public const DISABLE_RAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus = 'DISABLE_RAISE';
    public const ENABLE_PRERAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus = 'ENABLE_PRERAISE';
    public const ENABLE_RAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus = 'ENABLE_RAISE';
    public const FINISH_RAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus = 'FINISH_RAISE';
    public const HAS_PRERAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus = 'HAS_PRERAISE';
    public const RAISING_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus = 'RAISING';

    public const ALLOWED_VALUES = [
        self::DISABLE_RAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus,
        self::ENABLE_PRERAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus,
        self::ENABLE_RAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus,
        self::FINISH_RAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus,
        self::HAS_PRERAISE_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus,
        self::RAISING_ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus', $value));
        }
        return (string) $value;
    }
}

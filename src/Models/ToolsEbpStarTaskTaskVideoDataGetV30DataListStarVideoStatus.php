<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus
{
    public const AD_DELIVERY_STOPPED_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus = 'AD_DELIVERY_STOPPED';
    public const INVISIBLE_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus = 'INVISIBLE';
    public const SHARING_CANCELED_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus = 'SHARING_CANCELED';
    public const UNPUBLISHED_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus = 'UNPUBLISHED';
    public const VISIBLE_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus = 'VISIBLE';

    public const ALLOWED_VALUES = [
        self::AD_DELIVERY_STOPPED_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus,
        self::INVISIBLE_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus,
        self::SHARING_CANCELED_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus,
        self::UNPUBLISHED_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus,
        self::VISIBLE_ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskTaskVideoDataGetV30DataListStarVideoStatus', $value));
        }
        return (string) $value;
    }
}

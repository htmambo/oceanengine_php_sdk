<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionCardRecommendGetV2DownloadType
{
    public const QUICK_APP_URL_ToolsPromotionCardRecommendGetV2DownloadType = 'QUICK_APP_URL';
    public const EXTERNAL_URL_ToolsPromotionCardRecommendGetV2DownloadType = 'EXTERNAL_URL';
    public const DOWNLOAD_URL_ToolsPromotionCardRecommendGetV2DownloadType = 'DOWNLOAD_URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_URL_ToolsPromotionCardRecommendGetV2DownloadType,
        self::EXTERNAL_URL_ToolsPromotionCardRecommendGetV2DownloadType,
        self::DOWNLOAD_URL_ToolsPromotionCardRecommendGetV2DownloadType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionCardRecommendGetV2DownloadType', $value));
        }
        return (string) $value;
    }
}

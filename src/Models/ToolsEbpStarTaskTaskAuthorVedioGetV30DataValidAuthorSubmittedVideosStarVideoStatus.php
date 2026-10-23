<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus
{
    public const AD_DELIVERY_STOPPED_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus = 'AD_DELIVERY_STOPPED';
    public const INVISIBLE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus = 'INVISIBLE';
    public const SHARING_CANCELED_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus = 'SHARING_CANCELED';
    public const UNPUBLISHED_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus = 'UNPUBLISHED';
    public const VISIBLE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus = 'VISIBLE';

    public const ALLOWED_VALUES = [
        self::AD_DELIVERY_STOPPED_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus,
        self::INVISIBLE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus,
        self::SHARING_CANCELED_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus,
        self::UNPUBLISHED_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus,
        self::VISIBLE_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus', $value));
        }
        return (string) $value;
    }
}

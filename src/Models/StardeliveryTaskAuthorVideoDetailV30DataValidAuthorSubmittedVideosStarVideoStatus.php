<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus
{
    public const AD_DELIVERY_STOPPED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus = 'AD_DELIVERY_STOPPED';
    public const EBP_DELIVERY_STOPPED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus = 'EBP_DELIVERY_STOPPED';
    public const INVISIBLE_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus = 'INVISIBLE';
    public const SHARING_CANCELED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus = 'SHARING_CANCELED';
    public const UNPUBLISHED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus = 'UNPUBLISHED';
    public const VISIBLE_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus = 'VISIBLE';

    public const ALLOWED_VALUES = [
        self::AD_DELIVERY_STOPPED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus,
        self::EBP_DELIVERY_STOPPED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus,
        self::INVISIBLE_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus,
        self::SHARING_CANCELED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus,
        self::UNPUBLISHED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus,
        self::VISIBLE_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoStatus', $value));
        }
        return (string) $value;
    }
}

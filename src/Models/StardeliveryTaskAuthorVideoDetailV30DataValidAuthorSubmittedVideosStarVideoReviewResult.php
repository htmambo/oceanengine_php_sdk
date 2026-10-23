<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoReviewResult
{
    public const STATUS_PENDING_CONFIRM_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoReviewResult = 'STATUS_PENDING_CONFIRM';
    public const STATUS_CONFIRM_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoReviewResult = 'STATUS_CONFIRM';
    public const STATUS_CONFIRM_FAIL_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoReviewResult = 'STATUS_CONFIRM_FAIL';

    public const ALLOWED_VALUES = [
        self::STATUS_PENDING_CONFIRM_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoReviewResult,
        self::STATUS_CONFIRM_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoReviewResult,
        self::STATUS_CONFIRM_FAIL_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoReviewResult,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoReviewResult', $value));
        }
        return (string) $value;
    }
}

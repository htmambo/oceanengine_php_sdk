<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult
{
    public const STATUS_PENDING_CONFIRM_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult = 'STATUS_PENDING_CONFIRM';
    public const STATUS_CONFIRM_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult = 'STATUS_CONFIRM';
    public const STATUS_CONFIRM_FAIL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult = 'STATUS_CONFIRM_FAIL';

    public const ALLOWED_VALUES = [
        self::STATUS_PENDING_CONFIRM_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult,
        self::STATUS_CONFIRM_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult,
        self::STATUS_CONFIRM_FAIL_ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus
{
    public const PASS_BY_CUSTOMER_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus = 'PASS_BY_CUSTOMER';
    public const PASS_BY_ISV_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus = 'PASS_BY_ISV';
    public const REJECTED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus = 'REJECTED';
    public const WAIT_CONFIRM_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus = 'WAIT_CONFIRM';

    public const ALLOWED_VALUES = [
        self::PASS_BY_CUSTOMER_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus,
        self::PASS_BY_ISV_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus,
        self::REJECTED_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus,
        self::WAIT_CONFIRM_StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskAuthorVideoDetailV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus', $value));
        }
        return (string) $value;
    }
}

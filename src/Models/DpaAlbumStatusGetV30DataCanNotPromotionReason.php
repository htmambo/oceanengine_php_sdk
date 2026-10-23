<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaAlbumStatusGetV30DataCanNotPromotionReason
{
    public const RESOURCE_NOT_EXIST_DpaAlbumStatusGetV30DataCanNotPromotionReason = 'RESOURCE_NOT_EXIST';
    public const RESOURCE_AUDITING_DpaAlbumStatusGetV30DataCanNotPromotionReason = 'RESOURCE_AUDITING';
    public const RESOURCE_UNDERRATING_DpaAlbumStatusGetV30DataCanNotPromotionReason = 'RESOURCE_UNDERRATING';
    public const RESOURCE_CREATING_DpaAlbumStatusGetV30DataCanNotPromotionReason = 'RESOURCE_CREATING';
    public const RESOURCE_FAILED_DpaAlbumStatusGetV30DataCanNotPromotionReason = 'RESOURCE_FAILED';

    public const ALLOWED_VALUES = [
        self::RESOURCE_NOT_EXIST_DpaAlbumStatusGetV30DataCanNotPromotionReason,
        self::RESOURCE_AUDITING_DpaAlbumStatusGetV30DataCanNotPromotionReason,
        self::RESOURCE_UNDERRATING_DpaAlbumStatusGetV30DataCanNotPromotionReason,
        self::RESOURCE_CREATING_DpaAlbumStatusGetV30DataCanNotPromotionReason,
        self::RESOURCE_FAILED_DpaAlbumStatusGetV30DataCanNotPromotionReason,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaAlbumStatusGetV30DataCanNotPromotionReason', $value));
        }
        return (string) $value;
    }
}

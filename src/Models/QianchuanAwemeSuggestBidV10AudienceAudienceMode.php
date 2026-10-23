<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeSuggestBidV10AudienceAudienceMode
{
    public const ATUO_QianchuanAwemeSuggestBidV10AudienceAudienceMode = 'ATUO';
    public const CUSTOM_QianchuanAwemeSuggestBidV10AudienceAudienceMode = 'CUSTOM';
    public const FANS_QianchuanAwemeSuggestBidV10AudienceAudienceMode = 'FANS';
    public const LIVEFANS_QianchuanAwemeSuggestBidV10AudienceAudienceMode = 'LIVEFANS';

    public const ALLOWED_VALUES = [
        self::ATUO_QianchuanAwemeSuggestBidV10AudienceAudienceMode,
        self::CUSTOM_QianchuanAwemeSuggestBidV10AudienceAudienceMode,
        self::FANS_QianchuanAwemeSuggestBidV10AudienceAudienceMode,
        self::LIVEFANS_QianchuanAwemeSuggestBidV10AudienceAudienceMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeSuggestBidV10AudienceAudienceMode', $value));
        }
        return (string) $value;
    }
}

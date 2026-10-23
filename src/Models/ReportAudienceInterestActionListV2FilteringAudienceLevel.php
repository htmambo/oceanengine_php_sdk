<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAudienceInterestActionListV2FilteringAudienceLevel
{
    public const FIRST_LEVEL_ReportAudienceInterestActionListV2FilteringAudienceLevel = 'FIRST_LEVEL';
    public const SECOND_LEVEL_ReportAudienceInterestActionListV2FilteringAudienceLevel = 'SECOND_LEVEL';
    public const THIRD_LEVEL_ReportAudienceInterestActionListV2FilteringAudienceLevel = 'THIRD_LEVEL';
    public const KEYWORD_AWEME_ReportAudienceInterestActionListV2FilteringAudienceLevel = 'KEYWORD_AWEME';
    public const FOURTH_LEVEL_ReportAudienceInterestActionListV2FilteringAudienceLevel = 'FOURTH_LEVEL';

    public const ALLOWED_VALUES = [
        self::FIRST_LEVEL_ReportAudienceInterestActionListV2FilteringAudienceLevel,
        self::SECOND_LEVEL_ReportAudienceInterestActionListV2FilteringAudienceLevel,
        self::THIRD_LEVEL_ReportAudienceInterestActionListV2FilteringAudienceLevel,
        self::KEYWORD_AWEME_ReportAudienceInterestActionListV2FilteringAudienceLevel,
        self::FOURTH_LEVEL_ReportAudienceInterestActionListV2FilteringAudienceLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAudienceInterestActionListV2FilteringAudienceLevel', $value));
        }
        return (string) $value;
    }
}

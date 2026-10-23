<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAudienceInterestActionListV2FilteringActionScene
{
    public const APP_ReportAudienceInterestActionListV2FilteringActionScene = 'APP';
    public const SEARCH_ReportAudienceInterestActionListV2FilteringActionScene = 'SEARCH';
    public const AD_ReportAudienceInterestActionListV2FilteringActionScene = 'AD';
    public const E_COMMERCE_ReportAudienceInterestActionListV2FilteringActionScene = 'E-COMMERCE';
    public const NEWS_ReportAudienceInterestActionListV2FilteringActionScene = 'NEWS';

    public const ALLOWED_VALUES = [
        self::APP_ReportAudienceInterestActionListV2FilteringActionScene,
        self::SEARCH_ReportAudienceInterestActionListV2FilteringActionScene,
        self::AD_ReportAudienceInterestActionListV2FilteringActionScene,
        self::E_COMMERCE_ReportAudienceInterestActionListV2FilteringActionScene,
        self::NEWS_ReportAudienceInterestActionListV2FilteringActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAudienceInterestActionListV2FilteringActionScene', $value));
        }
        return (string) $value;
    }
}

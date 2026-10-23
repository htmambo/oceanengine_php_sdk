<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAudienceInterestActionListV2FilteringInterestActionType
{
    public const ACTION_ReportAudienceInterestActionListV2FilteringInterestActionType = 'ACTION';
    public const INTEREST_ReportAudienceInterestActionListV2FilteringInterestActionType = 'INTEREST';

    public const ALLOWED_VALUES = [
        self::ACTION_ReportAudienceInterestActionListV2FilteringInterestActionType,
        self::INTEREST_ReportAudienceInterestActionListV2FilteringInterestActionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAudienceInterestActionListV2FilteringInterestActionType', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAudienceInterestActionListV2FilteringActionDays
{
    public const Enum_7_ReportAudienceInterestActionListV2FilteringActionDays = 7;
    public const Enum_15_ReportAudienceInterestActionListV2FilteringActionDays = 15;
    public const Enum_30_ReportAudienceInterestActionListV2FilteringActionDays = 30;
    public const Enum_60_ReportAudienceInterestActionListV2FilteringActionDays = 60;
    public const Enum_90_ReportAudienceInterestActionListV2FilteringActionDays = 90;
    public const Enum_180_ReportAudienceInterestActionListV2FilteringActionDays = 180;
    public const Enum_365_ReportAudienceInterestActionListV2FilteringActionDays = 365;

    public const ALLOWED_VALUES = [
        self::Enum_7_ReportAudienceInterestActionListV2FilteringActionDays,
        self::Enum_15_ReportAudienceInterestActionListV2FilteringActionDays,
        self::Enum_30_ReportAudienceInterestActionListV2FilteringActionDays,
        self::Enum_60_ReportAudienceInterestActionListV2FilteringActionDays,
        self::Enum_90_ReportAudienceInterestActionListV2FilteringActionDays,
        self::Enum_180_ReportAudienceInterestActionListV2FilteringActionDays,
        self::Enum_365_ReportAudienceInterestActionListV2FilteringActionDays,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAudienceInterestActionListV2FilteringActionDays', $value));
        }
        return (string) $value;
    }
}

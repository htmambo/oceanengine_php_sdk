<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender
{
    public const ALL_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender = 'ALL';
    public const MALE_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender = 'MALE';
    public const FEMALE_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender = 'FEMALE';

    public const ALLOWED_VALUES = [
        self::ALL_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender,
        self::MALE_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender,
        self::FEMALE_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge
{
    public const ALL_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge = 'ALL';
    public const Enum_18_23_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge = '18-23';
    public const Enum_24_30_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge = '24-30';
    public const Enum_31_40_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge = '31-40';
    public const Enum_41_49_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge = '41-49';
    public const Enum_50_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge = '50';

    public const ALLOWED_VALUES = [
        self::ALL_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge,
        self::Enum_18_23_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge,
        self::Enum_24_30_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge,
        self::Enum_31_40_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge,
        self::Enum_41_49_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge,
        self::Enum_50_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge', $value));
        }
        return (string) $value;
    }
}

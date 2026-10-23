<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork
{
    public const ALL_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork = 'ALL';
    public const Enum_5_G_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork = '5G';
    public const Enum_4_G_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork = '4G';
    public const Enum_3_G_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork = '3G';
    public const Enum_2_G_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork = '2G';
    public const WIFI_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork = 'WIFI';

    public const ALLOWED_VALUES = [
        self::ALL_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork,
        self::Enum_5_G_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork,
        self::Enum_4_G_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork,
        self::Enum_3_G_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork,
        self::Enum_2_G_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork,
        self::WIFI_DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork', $value));
        }
        return (string) $value;
    }
}

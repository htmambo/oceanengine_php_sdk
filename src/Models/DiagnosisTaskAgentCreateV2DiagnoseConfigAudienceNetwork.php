<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork
{
    public const ALL_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork = 'ALL';
    public const Enum_5_G_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork = '5G';
    public const Enum_4_G_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork = '4G';
    public const Enum_3_G_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork = '3G';
    public const Enum_2_G_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork = '2G';
    public const WIFI_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork = 'WIFI';

    public const ALLOWED_VALUES = [
        self::ALL_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork,
        self::Enum_5_G_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork,
        self::Enum_4_G_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork,
        self::Enum_3_G_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork,
        self::Enum_2_G_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork,
        self::WIFI_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceNetwork', $value));
        }
        return (string) $value;
    }
}

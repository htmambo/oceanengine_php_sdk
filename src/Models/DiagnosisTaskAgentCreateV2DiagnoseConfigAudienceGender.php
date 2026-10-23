<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceGender
{
    public const ALL_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceGender = 'ALL';
    public const MALE_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceGender = 'MALE';
    public const FEMALE_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceGender = 'FEMALE';

    public const ALLOWED_VALUES = [
        self::ALL_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceGender,
        self::MALE_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceGender,
        self::FEMALE_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceGender', $value));
        }
        return (string) $value;
    }
}

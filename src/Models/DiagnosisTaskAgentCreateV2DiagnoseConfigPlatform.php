<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentCreateV2DiagnoseConfigPlatform
{
    public const AD_DiagnosisTaskAgentCreateV2DiagnoseConfigPlatform = 'AD';
    public const LOCAL_DiagnosisTaskAgentCreateV2DiagnoseConfigPlatform = 'LOCAL';
    public const QIANCHUAN_DiagnosisTaskAgentCreateV2DiagnoseConfigPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_DiagnosisTaskAgentCreateV2DiagnoseConfigPlatform,
        self::LOCAL_DiagnosisTaskAgentCreateV2DiagnoseConfigPlatform,
        self::QIANCHUAN_DiagnosisTaskAgentCreateV2DiagnoseConfigPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentCreateV2DiagnoseConfigPlatform', $value));
        }
        return (string) $value;
    }
}

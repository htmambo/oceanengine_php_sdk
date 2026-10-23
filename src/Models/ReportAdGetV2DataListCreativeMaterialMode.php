<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2DataListCreativeMaterialMode
{
    public const STATIC_ASSEMBLE_ReportAdGetV2DataListCreativeMaterialMode = 'STATIC_ASSEMBLE';
    public const CTR_ReportAdGetV2DataListCreativeMaterialMode = 'CTR';
    public const INTERVENE_ReportAdGetV2DataListCreativeMaterialMode = 'INTERVENE';

    public const ALLOWED_VALUES = [
        self::STATIC_ASSEMBLE_ReportAdGetV2DataListCreativeMaterialMode,
        self::CTR_ReportAdGetV2DataListCreativeMaterialMode,
        self::INTERVENE_ReportAdGetV2DataListCreativeMaterialMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2DataListCreativeMaterialMode', $value));
        }
        return (string) $value;
    }
}

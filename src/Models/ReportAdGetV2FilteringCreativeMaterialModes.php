<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2FilteringCreativeMaterialModes
{
    public const STATIC_ASSEMBLE_ReportAdGetV2FilteringCreativeMaterialModes = 'STATIC_ASSEMBLE';
    public const CTR_ReportAdGetV2FilteringCreativeMaterialModes = 'CTR';
    public const INTERVENE_ReportAdGetV2FilteringCreativeMaterialModes = 'INTERVENE';

    public const ALLOWED_VALUES = [
        self::STATIC_ASSEMBLE_ReportAdGetV2FilteringCreativeMaterialModes,
        self::CTR_ReportAdGetV2FilteringCreativeMaterialModes,
        self::INTERVENE_ReportAdGetV2FilteringCreativeMaterialModes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2FilteringCreativeMaterialModes', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAgentGetV2V2FilteringActive
{
    public const ACTIVE_ReportAgentGetV2V2FilteringActive = 'ACTIVE';
    public const SILENT_ReportAgentGetV2V2FilteringActive = 'SILENT';
    public const ALL_ReportAgentGetV2V2FilteringActive = 'ALL';

    public const ALLOWED_VALUES = [
        self::ACTIVE_ReportAgentGetV2V2FilteringActive,
        self::SILENT_ReportAgentGetV2V2FilteringActive,
        self::ALL_ReportAgentGetV2V2FilteringActive,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAgentGetV2V2FilteringActive', $value));
        }
        return (string) $value;
    }
}

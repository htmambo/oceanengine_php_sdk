<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandAgentDataV30FilterSelfServiceSource
{
    public const AD_ReportBrandAgentDataV30FilterSelfServiceSource = 'AD';
    public const POSEIDON_ReportBrandAgentDataV30FilterSelfServiceSource = 'POSEIDON';

    public const ALLOWED_VALUES = [
        self::AD_ReportBrandAgentDataV30FilterSelfServiceSource,
        self::POSEIDON_ReportBrandAgentDataV30FilterSelfServiceSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandAgentDataV30FilterSelfServiceSource', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAgentGetV2V2DataListAccountSource
{
    public const LUBAN_ACCOUNT_ReportAgentGetV2V2DataListAccountSource = 'LUBAN_ACCOUNT';
    public const NORMAL_ADVERTISER_ReportAgentGetV2V2DataListAccountSource = 'NORMAL_ADVERTISER';

    public const ALLOWED_VALUES = [
        self::LUBAN_ACCOUNT_ReportAgentGetV2V2DataListAccountSource,
        self::NORMAL_ADVERTISER_ReportAgentGetV2V2DataListAccountSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAgentGetV2V2DataListAccountSource', $value));
        }
        return (string) $value;
    }
}

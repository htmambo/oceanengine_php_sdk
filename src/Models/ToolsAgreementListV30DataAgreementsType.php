<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAgreementListV30DataAgreementsType
{
    public const LIVE_TRAFFIC_COMMITMENT_ToolsAgreementListV30DataAgreementsType = 'LIVE_TRAFFIC_COMMITMENT';

    public const ALLOWED_VALUES = [
        self::LIVE_TRAFFIC_COMMITMENT_ToolsAgreementListV30DataAgreementsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAgreementListV30DataAgreementsType', $value));
        }
        return (string) $value;
    }
}

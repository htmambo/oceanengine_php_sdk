<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvRechargeRechargeRecordV2FilteringPlatform
{
    public const AD_AgentAdvRechargeRechargeRecordV2FilteringPlatform = 'AD';
    public const QIANCHUAN_AgentAdvRechargeRechargeRecordV2FilteringPlatform = 'QIANCHUAN';
    public const LOCAL_AgentAdvRechargeRechargeRecordV2FilteringPlatform = 'LOCAL';
    public const STAR_AgentAdvRechargeRechargeRecordV2FilteringPlatform = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_AgentAdvRechargeRechargeRecordV2FilteringPlatform,
        self::QIANCHUAN_AgentAdvRechargeRechargeRecordV2FilteringPlatform,
        self::LOCAL_AgentAdvRechargeRechargeRecordV2FilteringPlatform,
        self::STAR_AgentAdvRechargeRechargeRecordV2FilteringPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvRechargeRechargeRecordV2FilteringPlatform', $value));
        }
        return (string) $value;
    }
}

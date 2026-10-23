<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentTransferTransactionRecordV2FilteringPlatform
{
    public const AD_AgentTransferTransactionRecordV2FilteringPlatform = 'AD';
    public const EFFECT_AgentTransferTransactionRecordV2FilteringPlatform = 'EFFECT';
    public const LOCAL_AgentTransferTransactionRecordV2FilteringPlatform = 'LOCAL';
    public const QIANCHUAN_AgentTransferTransactionRecordV2FilteringPlatform = 'QIANCHUAN';
    public const STAR_AgentTransferTransactionRecordV2FilteringPlatform = 'STAR';
    public const TRUSTEESHIP_MARKETING_AgentTransferTransactionRecordV2FilteringPlatform = 'TRUSTEESHIP_MARKETING';
    public const ZTT_AgentTransferTransactionRecordV2FilteringPlatform = 'ZTT';

    public const ALLOWED_VALUES = [
        self::AD_AgentTransferTransactionRecordV2FilteringPlatform,
        self::EFFECT_AgentTransferTransactionRecordV2FilteringPlatform,
        self::LOCAL_AgentTransferTransactionRecordV2FilteringPlatform,
        self::QIANCHUAN_AgentTransferTransactionRecordV2FilteringPlatform,
        self::STAR_AgentTransferTransactionRecordV2FilteringPlatform,
        self::TRUSTEESHIP_MARKETING_AgentTransferTransactionRecordV2FilteringPlatform,
        self::ZTT_AgentTransferTransactionRecordV2FilteringPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentTransferTransactionRecordV2FilteringPlatform', $value));
        }
        return (string) $value;
    }
}

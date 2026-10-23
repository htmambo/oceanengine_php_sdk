<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferDetailGetV30DataOrigin
{
    public const AGENT_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin = 'AGENT_MAPI';
    public const AGENT_WALLET_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin = 'AGENT_WALLET_MAPI';
    public const BP_ACCOUNT_WALLET_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin = 'BP_ACCOUNT_WALLET_MAPI';
    public const BP_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin = 'BP_MAPI';
    public const BP_WALLET_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin = 'BP_WALLET_MAPI';

    public const ALLOWED_VALUES = [
        self::AGENT_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin,
        self::AGENT_WALLET_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin,
        self::BP_ACCOUNT_WALLET_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin,
        self::BP_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin,
        self::BP_WALLET_MAPI_CgTransferV2BpTransferDetailGetV30DataOrigin,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferDetailGetV30DataOrigin', $value));
        }
        return (string) $value;
    }
}

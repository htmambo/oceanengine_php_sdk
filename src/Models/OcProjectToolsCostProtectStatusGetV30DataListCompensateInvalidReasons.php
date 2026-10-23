<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons
{
    public const ANTI_SPAM_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'ANTI_SPAM';
    public const AUD_BID_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'AUD_BID_CHANGES';
    public const AUD_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'AUD_CHANGES';
    public const AUD_ROI_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'AUD_ROI_CHANGES';
    public const BID_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'BID_CHANGES';
    public const BID_TYPE_EXPIRED_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'BID_TYPE_EXPIRED';
    public const MANUAL_JUDGE_SPAM_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'MANUAL_JUDGE_SPAM';
    public const ROI_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'ROI_CHANGES';
    public const STOP_REJECT_DELETE_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'STOP_REJECT_DELETE';
    public const TRANSFER_ACCOUNT_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons = 'TRANSFER_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::ANTI_SPAM_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
        self::AUD_BID_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
        self::AUD_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
        self::AUD_ROI_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
        self::BID_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
        self::BID_TYPE_EXPIRED_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
        self::MANUAL_JUDGE_SPAM_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
        self::ROI_CHANGES_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
        self::STOP_REJECT_DELETE_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
        self::TRANSFER_ACCOUNT_OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsCostProtectStatusGetV30DataListCompensateInvalidReasons', $value));
        }
        return (string) $value;
    }
}

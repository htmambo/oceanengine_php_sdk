<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons
{
    public const ANTI_SPAM_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'ANTI_SPAM';
    public const AUD_BID_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'AUD_BID_CHANGES';
    public const AUD_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'AUD_CHANGES';
    public const AUD_ROI_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'AUD_ROI_CHANGES';
    public const BID_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'BID_CHANGES';
    public const BID_TYPE_EXPIRED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'BID_TYPE_EXPIRED';
    public const MANUAL_JUDGE_SPAM_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'MANUAL_JUDGE_SPAM';
    public const ROI_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'ROI_CHANGES';
    public const STOP_REJECT_DELETE_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'STOP_REJECT_DELETE';
    public const TRANSFER_ACCOUNT_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons = 'TRANSFER_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::ANTI_SPAM_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
        self::AUD_BID_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
        self::AUD_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
        self::AUD_ROI_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
        self::BID_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
        self::BID_TYPE_EXPIRED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
        self::MANUAL_JUDGE_SPAM_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
        self::ROI_CHANGES_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
        self::STOP_REJECT_DELETE_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
        self::TRANSFER_ACCOUNT_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateInvalidReasons', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons
{
    public const ANTI_SPAM_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'ANTI_SPAM';
    public const AUD_BID_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'AUD_BID_CHANGES';
    public const AUD_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'AUD_CHANGES';
    public const AUD_ROI_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'AUD_ROI_CHANGES';
    public const BID_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'BID_CHANGES';
    public const BID_TYPE_EXPIRED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'BID_TYPE_EXPIRED';
    public const MANUAL_JUDGE_SPAM_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'MANUAL_JUDGE_SPAM';
    public const ROI_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'ROI_CHANGES';
    public const STOP_REJECT_DELETE_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'STOP_REJECT_DELETE';
    public const TRANSFER_ACCOUNT_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons = 'TRANSFER_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::ANTI_SPAM_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
        self::AUD_BID_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
        self::AUD_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
        self::AUD_ROI_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
        self::BID_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
        self::BID_TYPE_EXPIRED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
        self::MANUAL_JUDGE_SPAM_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
        self::ROI_CHANGES_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
        self::STOP_REJECT_DELETE_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
        self::TRANSFER_ACCOUNT_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons', $value));
        }
        return (string) $value;
    }
}

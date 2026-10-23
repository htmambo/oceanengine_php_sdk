<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoAgentGetV2FilteringSource
{
    public const AD_SITE_FileVideoAgentGetV2FilteringSource = 'AD_SITE';
    public const CREATIVE_CENTER_FileVideoAgentGetV2FilteringSource = 'CREATIVE_CENTER';
    public const OPEN_API_FileVideoAgentGetV2FilteringSource = 'OPEN_API';
    public const SUPPLIER_FileVideoAgentGetV2FilteringSource = 'SUPPLIER';
    public const VIDEO_CAPTURE_FileVideoAgentGetV2FilteringSource = 'VIDEO_CAPTURE';
    public const ACCOUNT_PUSH_FileVideoAgentGetV2FilteringSource = 'ACCOUNT_PUSH';
    public const STAR_FileVideoAgentGetV2FilteringSource = 'STAR';
    public const CEWEBRITY_VIDEO_FileVideoAgentGetV2FilteringSource = 'CEWEBRITY_VIDEO';
    public const BP_FileVideoAgentGetV2FilteringSource = 'BP';
    public const E_COMMERCE_FileVideoAgentGetV2FilteringSource = 'E_COMMERCE';
    public const DPA_MERSCHANT_CENTER_FileVideoAgentGetV2FilteringSource = 'DPA_MERSCHANT_CENTER';
    public const QF_FUWU_FileVideoAgentGetV2FilteringSource = 'QF_FUWU';
    public const AIC_FileVideoAgentGetV2FilteringSource = 'AIC';

    public const ALLOWED_VALUES = [
        self::AD_SITE_FileVideoAgentGetV2FilteringSource,
        self::CREATIVE_CENTER_FileVideoAgentGetV2FilteringSource,
        self::OPEN_API_FileVideoAgentGetV2FilteringSource,
        self::SUPPLIER_FileVideoAgentGetV2FilteringSource,
        self::VIDEO_CAPTURE_FileVideoAgentGetV2FilteringSource,
        self::ACCOUNT_PUSH_FileVideoAgentGetV2FilteringSource,
        self::STAR_FileVideoAgentGetV2FilteringSource,
        self::CEWEBRITY_VIDEO_FileVideoAgentGetV2FilteringSource,
        self::BP_FileVideoAgentGetV2FilteringSource,
        self::E_COMMERCE_FileVideoAgentGetV2FilteringSource,
        self::DPA_MERSCHANT_CENTER_FileVideoAgentGetV2FilteringSource,
        self::QF_FUWU_FileVideoAgentGetV2FilteringSource,
        self::AIC_FileVideoAgentGetV2FilteringSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoAgentGetV2FilteringSource', $value));
        }
        return (string) $value;
    }
}

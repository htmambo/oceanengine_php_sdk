<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCampaignOperateV30Operate
{
    public const MODIFY_BrandCampaignOperateV30Operate = 'MODIFY';
    public const REVOKE_MODIFY_BrandCampaignOperateV30Operate = 'REVOKE_MODIFY';
    public const SUBMIT_BrandCampaignOperateV30Operate = 'SUBMIT';

    public const ALLOWED_VALUES = [
        self::MODIFY_BrandCampaignOperateV30Operate,
        self::REVOKE_MODIFY_BrandCampaignOperateV30Operate,
        self::SUBMIT_BrandCampaignOperateV30Operate,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCampaignOperateV30Operate', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandListV2FilteringUniversalSettlementType
{
    public const ALL_StarDemandListV2FilteringUniversalSettlementType = 'ALL';
    public const CPA_StarDemandListV2FilteringUniversalSettlementType = 'CPA';
    public const CPM_StarDemandListV2FilteringUniversalSettlementType = 'CPM';
    public const CUSTOMIZE_StarDemandListV2FilteringUniversalSettlementType = 'CUSTOMIZE';
    public const DOU_PLUS_StarDemandListV2FilteringUniversalSettlementType = 'DOU_PLUS';
    public const EFFECT_StarDemandListV2FilteringUniversalSettlementType = 'EFFECT';
    public const EXCHANGE_StarDemandListV2FilteringUniversalSettlementType = 'EXCHANGE';
    public const FIXED_PRICE_StarDemandListV2FilteringUniversalSettlementType = 'FIXED_PRICE';
    public const FLOW_SHARE_StarDemandListV2FilteringUniversalSettlementType = 'FLOW_SHARE';
    public const GIFT_StarDemandListV2FilteringUniversalSettlementType = 'GIFT';
    public const MONEY_SHARE_StarDemandListV2FilteringUniversalSettlementType = 'MONEY_SHARE';
    public const RANK_StarDemandListV2FilteringUniversalSettlementType = 'RANK';
    public const STAR_SUPPORT_StarDemandListV2FilteringUniversalSettlementType = 'STAR_SUPPORT';

    public const ALLOWED_VALUES = [
        self::ALL_StarDemandListV2FilteringUniversalSettlementType,
        self::CPA_StarDemandListV2FilteringUniversalSettlementType,
        self::CPM_StarDemandListV2FilteringUniversalSettlementType,
        self::CUSTOMIZE_StarDemandListV2FilteringUniversalSettlementType,
        self::DOU_PLUS_StarDemandListV2FilteringUniversalSettlementType,
        self::EFFECT_StarDemandListV2FilteringUniversalSettlementType,
        self::EXCHANGE_StarDemandListV2FilteringUniversalSettlementType,
        self::FIXED_PRICE_StarDemandListV2FilteringUniversalSettlementType,
        self::FLOW_SHARE_StarDemandListV2FilteringUniversalSettlementType,
        self::GIFT_StarDemandListV2FilteringUniversalSettlementType,
        self::MONEY_SHARE_StarDemandListV2FilteringUniversalSettlementType,
        self::RANK_StarDemandListV2FilteringUniversalSettlementType,
        self::STAR_SUPPORT_StarDemandListV2FilteringUniversalSettlementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandListV2FilteringUniversalSettlementType', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAgentGetV2V2DataListCustomerType
{
    public const LA_ReportAgentGetV2V2DataListCustomerType = 'LA';
    public const KA_ReportAgentGetV2V2DataListCustomerType = 'KA';
    public const DSP_ReportAgentGetV2V2DataListCustomerType = 'DSP';
    public const SMB_ReportAgentGetV2V2DataListCustomerType = 'SMB';
    public const LA_AGENT_ReportAgentGetV2V2DataListCustomerType = 'LA_AGENT';
    public const BRANCH_ReportAgentGetV2V2DataListCustomerType = 'BRANCH';
    public const VIRTUAL_CUS_ReportAgentGetV2V2DataListCustomerType = 'VIRTUAL_CUS';
    public const EXCHANGE_ReportAgentGetV2V2DataListCustomerType = 'EXCHANGE';
    public const REGION_ReportAgentGetV2V2DataListCustomerType = 'REGION';
    public const INTERNET_ReportAgentGetV2V2DataListCustomerType = 'INTERNET';
    public const KA_AGENT_ReportAgentGetV2V2DataListCustomerType = 'KA_AGENT';
    public const VERTICAL_ReportAgentGetV2V2DataListCustomerType = 'VERTICAL';
    public const LOCAL_ReportAgentGetV2V2DataListCustomerType = 'LOCAL';
    public const SELF_SERVICE_ReportAgentGetV2V2DataListCustomerType = 'SELF_SERVICE';
    public const I18_N_AGENT_ReportAgentGetV2V2DataListCustomerType = 'I18N_AGENT';
    public const VIRTUAL_KA_ReportAgentGetV2V2DataListCustomerType = 'VIRTUAL_KA';
    public const INTERNAL_ReportAgentGetV2V2DataListCustomerType = 'INTERNAL';
    public const SMB_AGENT_ReportAgentGetV2V2DataListCustomerType = 'SMB_AGENT';
    public const VIRTUAL_LA_ReportAgentGetV2V2DataListCustomerType = 'VIRTUAL_LA';
    public const VIRTUAL_SMB_ReportAgentGetV2V2DataListCustomerType = 'VIRTUAL_SMB';
    public const GAME_ReportAgentGetV2V2DataListCustomerType = 'GAME';
    public const OVERSEA_VIRTUAL_ReportAgentGetV2V2DataListCustomerType = 'OVERSEA_VIRTUAL';
    public const I18_N_ADV_ReportAgentGetV2V2DataListCustomerType = 'I18N_ADV';

    public const ALLOWED_VALUES = [
        self::LA_ReportAgentGetV2V2DataListCustomerType,
        self::KA_ReportAgentGetV2V2DataListCustomerType,
        self::DSP_ReportAgentGetV2V2DataListCustomerType,
        self::SMB_ReportAgentGetV2V2DataListCustomerType,
        self::LA_AGENT_ReportAgentGetV2V2DataListCustomerType,
        self::BRANCH_ReportAgentGetV2V2DataListCustomerType,
        self::VIRTUAL_CUS_ReportAgentGetV2V2DataListCustomerType,
        self::EXCHANGE_ReportAgentGetV2V2DataListCustomerType,
        self::REGION_ReportAgentGetV2V2DataListCustomerType,
        self::INTERNET_ReportAgentGetV2V2DataListCustomerType,
        self::KA_AGENT_ReportAgentGetV2V2DataListCustomerType,
        self::VERTICAL_ReportAgentGetV2V2DataListCustomerType,
        self::LOCAL_ReportAgentGetV2V2DataListCustomerType,
        self::SELF_SERVICE_ReportAgentGetV2V2DataListCustomerType,
        self::I18_N_AGENT_ReportAgentGetV2V2DataListCustomerType,
        self::VIRTUAL_KA_ReportAgentGetV2V2DataListCustomerType,
        self::INTERNAL_ReportAgentGetV2V2DataListCustomerType,
        self::SMB_AGENT_ReportAgentGetV2V2DataListCustomerType,
        self::VIRTUAL_LA_ReportAgentGetV2V2DataListCustomerType,
        self::VIRTUAL_SMB_ReportAgentGetV2V2DataListCustomerType,
        self::GAME_ReportAgentGetV2V2DataListCustomerType,
        self::OVERSEA_VIRTUAL_ReportAgentGetV2V2DataListCustomerType,
        self::I18_N_ADV_ReportAgentGetV2V2DataListCustomerType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAgentGetV2V2DataListCustomerType', $value));
        }
        return (string) $value;
    }
}

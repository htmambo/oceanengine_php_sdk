<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCustomConfigGetV30DataListDataTopic
{
    public const BASIC_DATA_ReportCustomConfigGetV30DataListDataTopic = 'BASIC_DATA';
    public const BIDWORD_DATA_ReportCustomConfigGetV30DataListDataTopic = 'BIDWORD_DATA';
    public const CREATIVE_DATA_ReportCustomConfigGetV30DataListDataTopic = 'CREATIVE_DATA';
    public const DMP_DATA_ReportCustomConfigGetV30DataListDataTopic = 'DMP_DATA';
    public const DPA_VIDEO_DATA_ReportCustomConfigGetV30DataListDataTopic = 'DPA_VIDEO_DATA';
    public const MATERIAL_BOOST_DATA_ReportCustomConfigGetV30DataListDataTopic = 'MATERIAL_BOOST_DATA';
    public const MATERIAL_DATA_ReportCustomConfigGetV30DataListDataTopic = 'MATERIAL_DATA';
    public const ONE_KEY_BOOST_DATA_ReportCustomConfigGetV30DataListDataTopic = 'ONE_KEY_BOOST_DATA';
    public const PRODUCT_DATA_ReportCustomConfigGetV30DataListDataTopic = 'PRODUCT_DATA';
    public const QUERY_DATA_ReportCustomConfigGetV30DataListDataTopic = 'QUERY_DATA';
    public const STD_BASIC_DATA_ReportCustomConfigGetV30DataListDataTopic = 'STD_BASIC_DATA';
    public const STD_BIDWORD_DATA_ReportCustomConfigGetV30DataListDataTopic = 'STD_BIDWORD_DATA';
    public const STD_DMP_DATA_ReportCustomConfigGetV30DataListDataTopic = 'STD_DMP_DATA';
    public const STD_MATERIAL_DATA_ReportCustomConfigGetV30DataListDataTopic = 'STD_MATERIAL_DATA';
    public const STD_PRODUCT_DATA_ReportCustomConfigGetV30DataListDataTopic = 'STD_PRODUCT_DATA';
    public const STD_QUERY_DATA_ReportCustomConfigGetV30DataListDataTopic = 'STD_QUERY_DATA';
    public const UNI_PROJECT_DATA_ReportCustomConfigGetV30DataListDataTopic = 'UNI_PROJECT_DATA';
    public const UNI_PROJECT_MATERIAL_DATA_ReportCustomConfigGetV30DataListDataTopic = 'UNI_PROJECT_MATERIAL_DATA';
    public const VIDEO_DUARATION_DATA_ReportCustomConfigGetV30DataListDataTopic = 'VIDEO_DUARATION_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::BIDWORD_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::CREATIVE_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::DMP_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::DPA_VIDEO_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::MATERIAL_BOOST_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::MATERIAL_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::ONE_KEY_BOOST_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::PRODUCT_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::QUERY_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::STD_BASIC_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::STD_BIDWORD_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::STD_DMP_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::STD_MATERIAL_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::STD_PRODUCT_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::STD_QUERY_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::UNI_PROJECT_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::UNI_PROJECT_MATERIAL_DATA_ReportCustomConfigGetV30DataListDataTopic,
        self::VIDEO_DUARATION_DATA_ReportCustomConfigGetV30DataListDataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCustomConfigGetV30DataListDataTopic', $value));
        }
        return (string) $value;
    }
}

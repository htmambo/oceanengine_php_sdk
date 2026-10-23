<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCustomConfigGetV30DataTopics
{
    public const BASIC_DATA_ReportCustomConfigGetV30DataTopics = 'BASIC_DATA';
    public const BIDWORD_DATA_ReportCustomConfigGetV30DataTopics = 'BIDWORD_DATA';
    public const CREATIVE_DATA_ReportCustomConfigGetV30DataTopics = 'CREATIVE_DATA';
    public const DMP_DATA_ReportCustomConfigGetV30DataTopics = 'DMP_DATA';
    public const DPA_VIDEO_DATA_ReportCustomConfigGetV30DataTopics = 'DPA_VIDEO_DATA';
    public const MATERIAL_BOOST_DATA_ReportCustomConfigGetV30DataTopics = 'MATERIAL_BOOST_DATA';
    public const MATERIAL_DATA_ReportCustomConfigGetV30DataTopics = 'MATERIAL_DATA';
    public const ONE_KEY_BOOST_DATA_ReportCustomConfigGetV30DataTopics = 'ONE_KEY_BOOST_DATA';
    public const PRODUCT_DATA_ReportCustomConfigGetV30DataTopics = 'PRODUCT_DATA';
    public const QUERY_DATA_ReportCustomConfigGetV30DataTopics = 'QUERY_DATA';
    public const STD_BASIC_DATA_ReportCustomConfigGetV30DataTopics = 'STD_BASIC_DATA';
    public const STD_BIDWORD_DATA_ReportCustomConfigGetV30DataTopics = 'STD_BIDWORD_DATA';
    public const STD_DMP_DATA_ReportCustomConfigGetV30DataTopics = 'STD_DMP_DATA';
    public const STD_MATERIAL_DATA_ReportCustomConfigGetV30DataTopics = 'STD_MATERIAL_DATA';
    public const STD_PRODUCT_DATA_ReportCustomConfigGetV30DataTopics = 'STD_PRODUCT_DATA';
    public const STD_QUERY_DATA_ReportCustomConfigGetV30DataTopics = 'STD_QUERY_DATA';
    public const UNI_PROJECT_DATA_ReportCustomConfigGetV30DataTopics = 'UNI_PROJECT_DATA';
    public const UNI_PROJECT_MATERIAL_DATA_ReportCustomConfigGetV30DataTopics = 'UNI_PROJECT_MATERIAL_DATA';
    public const VIDEO_DUARATION_DATA_ReportCustomConfigGetV30DataTopics = 'VIDEO_DUARATION_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_ReportCustomConfigGetV30DataTopics,
        self::BIDWORD_DATA_ReportCustomConfigGetV30DataTopics,
        self::CREATIVE_DATA_ReportCustomConfigGetV30DataTopics,
        self::DMP_DATA_ReportCustomConfigGetV30DataTopics,
        self::DPA_VIDEO_DATA_ReportCustomConfigGetV30DataTopics,
        self::MATERIAL_BOOST_DATA_ReportCustomConfigGetV30DataTopics,
        self::MATERIAL_DATA_ReportCustomConfigGetV30DataTopics,
        self::ONE_KEY_BOOST_DATA_ReportCustomConfigGetV30DataTopics,
        self::PRODUCT_DATA_ReportCustomConfigGetV30DataTopics,
        self::QUERY_DATA_ReportCustomConfigGetV30DataTopics,
        self::STD_BASIC_DATA_ReportCustomConfigGetV30DataTopics,
        self::STD_BIDWORD_DATA_ReportCustomConfigGetV30DataTopics,
        self::STD_DMP_DATA_ReportCustomConfigGetV30DataTopics,
        self::STD_MATERIAL_DATA_ReportCustomConfigGetV30DataTopics,
        self::STD_PRODUCT_DATA_ReportCustomConfigGetV30DataTopics,
        self::STD_QUERY_DATA_ReportCustomConfigGetV30DataTopics,
        self::UNI_PROJECT_DATA_ReportCustomConfigGetV30DataTopics,
        self::UNI_PROJECT_MATERIAL_DATA_ReportCustomConfigGetV30DataTopics,
        self::VIDEO_DUARATION_DATA_ReportCustomConfigGetV30DataTopics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCustomConfigGetV30DataTopics', $value));
        }
        return (string) $value;
    }
}

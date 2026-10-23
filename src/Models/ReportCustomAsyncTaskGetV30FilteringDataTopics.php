<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCustomAsyncTaskGetV30FilteringDataTopics
{
    public const BASIC_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'BASIC_DATA';
    public const BIDWORD_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'BIDWORD_DATA';
    public const DPA_VIDEO_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'DPA_VIDEO_DATA';
    public const MATERIAL_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'MATERIAL_DATA';
    public const ONE_KEY_BOOST_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'ONE_KEY_BOOST_DATA';
    public const PRODUCT_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'PRODUCT_DATA';
    public const QUERY_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'QUERY_DATA';
    public const STD_BASIC_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'STD_BASIC_DATA';
    public const STD_BIDWORD_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'STD_BIDWORD_DATA';
    public const STD_DMP_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'STD_DMP_DATA';
    public const STD_MATERIAL_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'STD_MATERIAL_DATA';
    public const STD_PRODUCT_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'STD_PRODUCT_DATA';
    public const STD_QUERY_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics = 'STD_QUERY_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::BIDWORD_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::DPA_VIDEO_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::MATERIAL_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::ONE_KEY_BOOST_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::PRODUCT_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::QUERY_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::STD_BASIC_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::STD_BIDWORD_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::STD_DMP_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::STD_MATERIAL_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::STD_PRODUCT_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
        self::STD_QUERY_DATA_ReportCustomAsyncTaskGetV30FilteringDataTopics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCustomAsyncTaskGetV30FilteringDataTopics', $value));
        }
        return (string) $value;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAudienceCityV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $cityName = null;

    /**
     * @var \Oceanengine\Models\ReportAudienceCityV2ResponseDataMetricsDict
     */
    protected ?\Oceanengine\Models\ReportAudienceCityV2ResponseDataMetricsDict $metricsDict = null;

    /**
     * @var string
     */
    protected ?string $provinceName = null;

    /**
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return self
     */
    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAudienceCityV2ResponseDataMetricsDict
     */
    public function getMetricsDict(): ?\Oceanengine\Models\ReportAudienceCityV2ResponseDataMetricsDict
    {
        return $this->metricsDict;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceCityV2ResponseDataMetricsDict $metricsDict
     * @return self
     */
    public function setMetricsDict(?\Oceanengine\Models\ReportAudienceCityV2ResponseDataMetricsDict $metricsDict): self
    {
        $this->metricsDict = $metricsDict;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceName(): ?string
    {
        return $this->provinceName;
    }

    /**
     * @param string $provinceName
     * @return self
     */
    public function setProvinceName(?string $provinceName): self
    {
        $this->provinceName = $provinceName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cityName !== null) {
            $result['city_name'] = $this->cityName;
        }
        if ($this->metricsDict !== null) {
            $result['metrics_dict'] = $this->metricsDict;
        }
        if ($this->provinceName !== null) {
            $result['province_name'] = $this->provinceName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['city_name'] ?? null) !== null) {
            $obj->cityName = (string) $v;
        }
        if (($v = $data['metrics_dict'] ?? null) !== null && is_array($v)) {
            $obj->metricsDict = \Oceanengine\Models\ReportAudienceCityV2ResponseDataMetricsDict::fromArray($v);
        }
        if (($v = $data['province_name'] ?? null) !== null) {
            $obj->provinceName = (string) $v;
        }
        return $obj;
    }
}

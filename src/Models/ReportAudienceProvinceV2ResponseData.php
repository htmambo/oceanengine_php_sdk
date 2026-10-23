<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAudienceProvinceV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportAudienceProvinceV2ResponseDataMetricsDict
     */
    protected ?\Oceanengine\Models\ReportAudienceProvinceV2ResponseDataMetricsDict $metricsDict = null;

    /**
     * @var string
     */
    protected ?string $provinceName = null;

    /**
     * @return \Oceanengine\Models\ReportAudienceProvinceV2ResponseDataMetricsDict
     */
    public function getMetricsDict(): ?\Oceanengine\Models\ReportAudienceProvinceV2ResponseDataMetricsDict
    {
        return $this->metricsDict;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceProvinceV2ResponseDataMetricsDict $metricsDict
     * @return self
     */
    public function setMetricsDict(?\Oceanengine\Models\ReportAudienceProvinceV2ResponseDataMetricsDict $metricsDict): self
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
        if (($v = $data['metrics_dict'] ?? null) !== null && is_array($v)) {
            $obj->metricsDict = \Oceanengine\Models\ReportAudienceProvinceV2ResponseDataMetricsDict::fromArray($v);
        }
        if (($v = $data['province_name'] ?? null) !== null) {
            $obj->provinceName = (string) $v;
        }
        return $obj;
    }
}

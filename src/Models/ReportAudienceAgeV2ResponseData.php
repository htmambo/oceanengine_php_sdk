<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAudienceAgeV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $ageName = null;

    /**
     * @var \Oceanengine\Models\ReportAudienceAgeV2ResponseDataMetricsDict
     */
    protected ?\Oceanengine\Models\ReportAudienceAgeV2ResponseDataMetricsDict $metricsDict = null;

    /**
     * @return string
     */
    public function getAgeName(): ?string
    {
        return $this->ageName;
    }

    /**
     * @param string $ageName
     * @return self
     */
    public function setAgeName(?string $ageName): self
    {
        $this->ageName = $ageName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAudienceAgeV2ResponseDataMetricsDict
     */
    public function getMetricsDict(): ?\Oceanengine\Models\ReportAudienceAgeV2ResponseDataMetricsDict
    {
        return $this->metricsDict;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceAgeV2ResponseDataMetricsDict $metricsDict
     * @return self
     */
    public function setMetricsDict(?\Oceanengine\Models\ReportAudienceAgeV2ResponseDataMetricsDict $metricsDict): self
    {
        $this->metricsDict = $metricsDict;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ageName !== null) {
            $result['age_name'] = $this->ageName;
        }
        if ($this->metricsDict !== null) {
            $result['metrics_dict'] = $this->metricsDict;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age_name'] ?? null) !== null) {
            $obj->ageName = (string) $v;
        }
        if (($v = $data['metrics_dict'] ?? null) !== null && is_array($v)) {
            $obj->metricsDict = \Oceanengine\Models\ReportAudienceAgeV2ResponseDataMetricsDict::fromArray($v);
        }
        return $obj;
    }
}

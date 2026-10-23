<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAudienceGenderV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $genderName = null;

    /**
     * @var \Oceanengine\Models\ReportAudienceGenderV2ResponseDataMetricsDict
     */
    protected ?\Oceanengine\Models\ReportAudienceGenderV2ResponseDataMetricsDict $metricsDict = null;

    /**
     * @return string
     */
    public function getGenderName(): ?string
    {
        return $this->genderName;
    }

    /**
     * @param string $genderName
     * @return self
     */
    public function setGenderName(?string $genderName): self
    {
        $this->genderName = $genderName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAudienceGenderV2ResponseDataMetricsDict
     */
    public function getMetricsDict(): ?\Oceanengine\Models\ReportAudienceGenderV2ResponseDataMetricsDict
    {
        return $this->metricsDict;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceGenderV2ResponseDataMetricsDict $metricsDict
     * @return self
     */
    public function setMetricsDict(?\Oceanengine\Models\ReportAudienceGenderV2ResponseDataMetricsDict $metricsDict): self
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
        if ($this->genderName !== null) {
            $result['gender_name'] = $this->genderName;
        }
        if ($this->metricsDict !== null) {
            $result['metrics_dict'] = $this->metricsDict;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['gender_name'] ?? null) !== null) {
            $obj->genderName = (string) $v;
        }
        if (($v = $data['metrics_dict'] ?? null) !== null && is_array($v)) {
            $obj->metricsDict = \Oceanengine\Models\ReportAudienceGenderV2ResponseDataMetricsDict::fromArray($v);
        }
        return $obj;
    }
}

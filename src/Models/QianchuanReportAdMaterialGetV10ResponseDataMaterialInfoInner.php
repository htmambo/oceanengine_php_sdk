<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInnerMetrics
     */
    protected ?\Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInnerMetrics $metrics = null;

    /**
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInnerMetrics
     */
    public function getMetrics(): ?\Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInnerMetrics
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInnerMetrics $metrics
     * @return self
     */
    public function setMetrics(?\Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInnerMetrics $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = \Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInnerMetrics::fromArray($v);
        }
        return $obj;
    }
}

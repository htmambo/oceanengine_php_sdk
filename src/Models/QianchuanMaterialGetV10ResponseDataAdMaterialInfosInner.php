<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanMaterialGetV10ResponseDataAdMaterialInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo
     */
    protected ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo $materialInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMetrics
     */
    protected ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMetrics $metrics = null;

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo
     */
    public function getMaterialInfo(): ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo
    {
        return $this->materialInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo $materialInfo
     * @return self
     */
    public function setMaterialInfo(?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo $materialInfo): self
    {
        $this->materialInfo = $materialInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMetrics
     */
    public function getMetrics(): ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMetrics
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMetrics $metrics
     * @return self
     */
    public function setMetrics(?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMetrics $metrics): self
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
        if ($this->materialInfo !== null) {
            $result['material_info'] = $this->materialInfo;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_info'] ?? null) !== null && is_array($v)) {
            $obj->materialInfo = \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo::fromArray($v);
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMetrics::fromArray($v);
        }
        return $obj;
    }
}

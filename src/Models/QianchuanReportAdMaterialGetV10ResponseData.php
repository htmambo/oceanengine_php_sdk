<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportAdMaterialGetV10ResponseData implements \JsonSerializable
{
    /**
     * 素材信息
     * @var \Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInner[]
     */
    protected ?array $materialInfo = null;

    /**
     * 素材信息
     * @return \Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInner[]
     */
    public function getMaterialInfo(): ?array
    {
        return $this->materialInfo;
    }

    /**
     * 素材信息
     * @param \Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInner[] $materialInfo
     * @return self
     */
    public function setMaterialInfo(?array $materialInfo): self
    {
        $this->materialInfo = $materialInfo;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_info'] ?? null) !== null && is_array($v)) {
            $obj->materialInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanReportAdMaterialGetV10ResponseDataMaterialInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaBrandAdvAuthIndustryGetV30ResponseData implements \JsonSerializable
{
    /**
     * 一级行业信息
     * @var \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30ResponseDataIndustryInfoInner[]
     */
    protected ?array $industryInfo = null;

    /**
     * 一级行业信息
     * @return \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30ResponseDataIndustryInfoInner[]
     */
    public function getIndustryInfo(): ?array
    {
        return $this->industryInfo;
    }

    /**
     * 一级行业信息
     * @param \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30ResponseDataIndustryInfoInner[] $industryInfo
     * @return self
     */
    public function setIndustryInfo(?array $industryInfo): self
    {
        $this->industryInfo = $industryInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->industryInfo !== null) {
            $result['industry_info'] = $this->industryInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['industry_info'] ?? null) !== null && is_array($v)) {
            $obj->industryInfo = array_map(fn ($vv) => \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30ResponseDataIndustryInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

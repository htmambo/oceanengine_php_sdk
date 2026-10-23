<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaBrandAdvAuthIndustryGetV30ResponseDataIndustryInfoInner implements \JsonSerializable
{
    /**
     * 一级行业id
     * @var int
     */
    protected ?int $industryId = null;

    /**
     * 一级行业名称
     * @var string
     */
    protected ?string $industryName = null;

    /**
     * 二级行业信息
     * @var \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30ResponseDataIndustryInfoInnerSubIndustryInfoInner[]
     */
    protected ?array $subIndustryInfo = null;

    /**
     * 一级行业id
     * @return int
     */
    public function getIndustryId(): ?int
    {
        return $this->industryId;
    }

    /**
     * 一级行业id
     * @param int $industryId
     * @return self
     */
    public function setIndustryId(?int $industryId): self
    {
        $this->industryId = $industryId;
        return $this;
    }

    /**
     * 一级行业名称
     * @return string
     */
    public function getIndustryName(): ?string
    {
        return $this->industryName;
    }

    /**
     * 一级行业名称
     * @param string $industryName
     * @return self
     */
    public function setIndustryName(?string $industryName): self
    {
        $this->industryName = $industryName;
        return $this;
    }

    /**
     * 二级行业信息
     * @return \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30ResponseDataIndustryInfoInnerSubIndustryInfoInner[]
     */
    public function getSubIndustryInfo(): ?array
    {
        return $this->subIndustryInfo;
    }

    /**
     * 二级行业信息
     * @param \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30ResponseDataIndustryInfoInnerSubIndustryInfoInner[] $subIndustryInfo
     * @return self
     */
    public function setSubIndustryInfo(?array $subIndustryInfo): self
    {
        $this->subIndustryInfo = $subIndustryInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->industryId !== null) {
            $result['industry_id'] = $this->industryId;
        }
        if ($this->industryName !== null) {
            $result['industry_name'] = $this->industryName;
        }
        if ($this->subIndustryInfo !== null) {
            $result['sub_industry_info'] = $this->subIndustryInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['industry_id'] ?? null) !== null) {
            $obj->industryId = (int) $v;
        }
        if (($v = $data['industry_name'] ?? null) !== null) {
            $obj->industryName = (string) $v;
        }
        if (($v = $data['sub_industry_info'] ?? null) !== null && is_array($v)) {
            $obj->subIndustryInfo = array_map(fn ($vv) => \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30ResponseDataIndustryInfoInnerSubIndustryInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

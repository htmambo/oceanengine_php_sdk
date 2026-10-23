<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaBrandAdvAuthIndustryGetV30OriginReq implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30OriginReqBrandDataSource
     */
    protected ?string $brandDataSource = null;

    /**
     * 品牌数据来源方的品牌id
     * @var int
     */
    protected ?int $outerBrandId = null;

    /**
     * @return \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30OriginReqBrandDataSource
     */
    public function getBrandDataSource(): ?string
    {
        return $this->brandDataSource;
    }

    /**
     * @param \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30OriginReqBrandDataSource $brandDataSource
     * @return self
     */
    public function setBrandDataSource(?string $brandDataSource): self
    {
        $this->brandDataSource = $brandDataSource;
        return $this;
    }

    /**
     * 品牌数据来源方的品牌id
     * @return int
     */
    public function getOuterBrandId(): ?int
    {
        return $this->outerBrandId;
    }

    /**
     * 品牌数据来源方的品牌id
     * @param int $outerBrandId
     * @return self
     */
    public function setOuterBrandId(?int $outerBrandId): self
    {
        $this->outerBrandId = $outerBrandId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandDataSource !== null) {
            $result['brand_data_source'] = $this->brandDataSource;
        }
        if ($this->outerBrandId !== null) {
            $result['outer_brand_id'] = $this->outerBrandId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_data_source'] ?? null) !== null) {
            $obj->brandDataSource = (string) $v;
        }
        if (($v = $data['outer_brand_id'] ?? null) !== null) {
            $obj->outerBrandId = (int) $v;
        }
        return $obj;
    }
}

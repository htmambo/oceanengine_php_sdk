<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarBrandListV2ResponseDataBrandsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $brandId = null;

    /**
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * @var int
     */
    protected ?int $yuntuBrandId = null;

    /**
     * @var \Oceanengine\Models\StarBrandListV2ResponseDataBrandsInnerYuntuIndustryInner[]
     */
    protected ?array $yuntuIndustry = null;

    /**
     * @return int
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @param int $brandId
     * @return self
     */
    public function setBrandId(?int $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * @return int
     */
    public function getYuntuBrandId(): ?int
    {
        return $this->yuntuBrandId;
    }

    /**
     * @param int $yuntuBrandId
     * @return self
     */
    public function setYuntuBrandId(?int $yuntuBrandId): self
    {
        $this->yuntuBrandId = $yuntuBrandId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarBrandListV2ResponseDataBrandsInnerYuntuIndustryInner[]
     */
    public function getYuntuIndustry(): ?array
    {
        return $this->yuntuIndustry;
    }

    /**
     * @param \Oceanengine\Models\StarBrandListV2ResponseDataBrandsInnerYuntuIndustryInner[] $yuntuIndustry
     * @return self
     */
    public function setYuntuIndustry(?array $yuntuIndustry): self
    {
        $this->yuntuIndustry = $yuntuIndustry;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandId !== null) {
            $result['brand_id'] = $this->brandId;
        }
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->yuntuBrandId !== null) {
            $result['yuntu_brand_id'] = $this->yuntuBrandId;
        }
        if ($this->yuntuIndustry !== null) {
            $result['yuntu_industry'] = $this->yuntuIndustry;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_id'] ?? null) !== null) {
            $obj->brandId = (int) $v;
        }
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['yuntu_brand_id'] ?? null) !== null) {
            $obj->yuntuBrandId = (int) $v;
        }
        if (($v = $data['yuntu_industry'] ?? null) !== null && is_array($v)) {
            $obj->yuntuIndustry = array_map(fn ($vv) => \Oceanengine\Models\StarBrandListV2ResponseDataBrandsInnerYuntuIndustryInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

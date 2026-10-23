<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2RequestDemandInfoCarBrandListInner implements \JsonSerializable
{
    /**
     * 品牌id
     * @var int
     */
    protected ?int $brandId = null;

    /**
     * 品牌名称
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoCarBrandListInnerCarSeriesListInner[]
     */
    protected ?array $carSeriesList = null;

    /**
     * 品牌id
     * @return int
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * 品牌id
     * @param int $brandId
     * @return self
     */
    public function setBrandId(?int $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * 品牌名称
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * 品牌名称
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoCarBrandListInnerCarSeriesListInner[]
     */
    public function getCarSeriesList(): ?array
    {
        return $this->carSeriesList;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoCarBrandListInnerCarSeriesListInner[] $carSeriesList
     * @return self
     */
    public function setCarSeriesList(?array $carSeriesList): self
    {
        $this->carSeriesList = $carSeriesList;
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
        if ($this->carSeriesList !== null) {
            $result['car_series_list'] = $this->carSeriesList;
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
        if (($v = $data['car_series_list'] ?? null) !== null && is_array($v)) {
            $obj->carSeriesList = array_map(fn ($vv) => \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoCarBrandListInnerCarSeriesListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

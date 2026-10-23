<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderGetCarBrandListV2ResponseDataCarBrandListInner implements \JsonSerializable
{
    /**
     * 品牌id
     * @var int
     */
    protected ?int $carBrandId = null;

    /**
     * 品牌名称
     * @var string
     */
    protected ?string $carBrandName = null;

    /**
     * 车系列表
     * @var \Oceanengine\Models\StarDemanderGetCarBrandListV2ResponseDataCarBrandListInnerCarSeriesListInner[]
     */
    protected ?array $carSeriesList = null;

    /**
     * 品牌id
     * @return int
     */
    public function getCarBrandId(): ?int
    {
        return $this->carBrandId;
    }

    /**
     * 品牌id
     * @param int $carBrandId
     * @return self
     */
    public function setCarBrandId(?int $carBrandId): self
    {
        $this->carBrandId = $carBrandId;
        return $this;
    }

    /**
     * 品牌名称
     * @return string
     */
    public function getCarBrandName(): ?string
    {
        return $this->carBrandName;
    }

    /**
     * 品牌名称
     * @param string $carBrandName
     * @return self
     */
    public function setCarBrandName(?string $carBrandName): self
    {
        $this->carBrandName = $carBrandName;
        return $this;
    }

    /**
     * 车系列表
     * @return \Oceanengine\Models\StarDemanderGetCarBrandListV2ResponseDataCarBrandListInnerCarSeriesListInner[]
     */
    public function getCarSeriesList(): ?array
    {
        return $this->carSeriesList;
    }

    /**
     * 车系列表
     * @param \Oceanengine\Models\StarDemanderGetCarBrandListV2ResponseDataCarBrandListInnerCarSeriesListInner[] $carSeriesList
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
        if ($this->carBrandId !== null) {
            $result['car_brand_id'] = $this->carBrandId;
        }
        if ($this->carBrandName !== null) {
            $result['car_brand_name'] = $this->carBrandName;
        }
        if ($this->carSeriesList !== null) {
            $result['car_series_list'] = $this->carSeriesList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['car_brand_id'] ?? null) !== null) {
            $obj->carBrandId = (int) $v;
        }
        if (($v = $data['car_brand_name'] ?? null) !== null) {
            $obj->carBrandName = (string) $v;
        }
        if (($v = $data['car_series_list'] ?? null) !== null && is_array($v)) {
            $obj->carSeriesList = array_map(fn ($vv) => \Oceanengine\Models\StarDemanderGetCarBrandListV2ResponseDataCarBrandListInnerCarSeriesListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

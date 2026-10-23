<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderGetCarBrandListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemanderGetCarBrandListV2ResponseDataCarBrandListInner[]
     */
    protected ?array $carBrandList = null;

    /**
     * @return \Oceanengine\Models\StarDemanderGetCarBrandListV2ResponseDataCarBrandListInner[]
     */
    public function getCarBrandList(): ?array
    {
        return $this->carBrandList;
    }

    /**
     * @param \Oceanengine\Models\StarDemanderGetCarBrandListV2ResponseDataCarBrandListInner[] $carBrandList
     * @return self
     */
    public function setCarBrandList(?array $carBrandList): self
    {
        $this->carBrandList = $carBrandList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->carBrandList !== null) {
            $result['car_brand_list'] = $this->carBrandList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['car_brand_list'] ?? null) !== null && is_array($v)) {
            $obj->carBrandList = array_map(fn ($vv) => \Oceanengine\Models\StarDemanderGetCarBrandListV2ResponseDataCarBrandListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarBrandListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarBrandListV2ResponseDataBrandsInner[]
     */
    protected ?array $brands = null;

    /**
     * @return \Oceanengine\Models\StarBrandListV2ResponseDataBrandsInner[]
     */
    public function getBrands(): ?array
    {
        return $this->brands;
    }

    /**
     * @param \Oceanengine\Models\StarBrandListV2ResponseDataBrandsInner[] $brands
     * @return self
     */
    public function setBrands(?array $brands): self
    {
        $this->brands = $brands;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brands !== null) {
            $result['brands'] = $this->brands;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brands'] ?? null) !== null && is_array($v)) {
            $obj->brands = array_map(fn ($vv) => \Oceanengine\Models\StarBrandListV2ResponseDataBrandsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

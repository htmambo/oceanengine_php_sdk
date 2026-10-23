<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandToolQueryPublishPriceV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandToolQueryPublishPriceV30ResponseDataMagazinePrice
     */
    protected ?\Oceanengine\Models\BrandToolQueryPublishPriceV30ResponseDataMagazinePrice $magazinePrice = null;

    /**
     * @return \Oceanengine\Models\BrandToolQueryPublishPriceV30ResponseDataMagazinePrice
     */
    public function getMagazinePrice(): ?\Oceanengine\Models\BrandToolQueryPublishPriceV30ResponseDataMagazinePrice
    {
        return $this->magazinePrice;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryPublishPriceV30ResponseDataMagazinePrice $magazinePrice
     * @return self
     */
    public function setMagazinePrice(?\Oceanengine\Models\BrandToolQueryPublishPriceV30ResponseDataMagazinePrice $magazinePrice): self
    {
        $this->magazinePrice = $magazinePrice;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->magazinePrice !== null) {
            $result['magazine_price'] = $this->magazinePrice;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['magazine_price'] ?? null) !== null && is_array($v)) {
            $obj->magazinePrice = \Oceanengine\Models\BrandToolQueryPublishPriceV30ResponseDataMagazinePrice::fromArray($v);
        }
        return $obj;
    }
}

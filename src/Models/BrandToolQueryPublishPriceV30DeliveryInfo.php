<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandToolQueryPublishPriceV30DeliveryInfo implements \JsonSerializable
{
    /**
     * 投放日期
     * @var \Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfoDateInfoInner[]
     */
    protected ?array $dateInfo = null;

    /**
     * @var \Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType
     */
    protected ?string $stockIncreasePackageType = null;

    /**
     * 投放日期
     * @return \Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfoDateInfoInner[]
     */
    public function getDateInfo(): ?array
    {
        return $this->dateInfo;
    }

    /**
     * 投放日期
     * @param \Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfoDateInfoInner[] $dateInfo
     * @return self
     */
    public function setDateInfo(?array $dateInfo): self
    {
        $this->dateInfo = $dateInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType
     */
    public function getStockIncreasePackageType(): ?string
    {
        return $this->stockIncreasePackageType;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType $stockIncreasePackageType
     * @return self
     */
    public function setStockIncreasePackageType(?string $stockIncreasePackageType): self
    {
        $this->stockIncreasePackageType = $stockIncreasePackageType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dateInfo !== null) {
            $result['date_info'] = $this->dateInfo;
        }
        if ($this->stockIncreasePackageType !== null) {
            $result['stock_increase_package_type'] = $this->stockIncreasePackageType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['date_info'] ?? null) !== null && is_array($v)) {
            $obj->dateInfo = array_map(fn ($vv) => \Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfoDateInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['stock_increase_package_type'] ?? null) !== null) {
            $obj->stockIncreasePackageType = (string) $v;
        }
        return $obj;
    }
}

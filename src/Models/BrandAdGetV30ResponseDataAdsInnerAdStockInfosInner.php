<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerAdStockInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAdStockInfosAdForm
     */
    protected ?string $adForm = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAdStockInfosAppOrigin
     */
    protected ?string $appOrigin = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType
     */
    protected ?string $superiorCreativeType = null;

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAdStockInfosAdForm
     */
    public function getAdForm(): ?string
    {
        return $this->adForm;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAdStockInfosAdForm $adForm
     * @return self
     */
    public function setAdForm(?string $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAdStockInfosAppOrigin
     */
    public function getAppOrigin(): ?string
    {
        return $this->appOrigin;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAdStockInfosAppOrigin $appOrigin
     * @return self
     */
    public function setAppOrigin(?string $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType
     */
    public function getSuperiorCreativeType(): ?string
    {
        return $this->superiorCreativeType;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType $superiorCreativeType
     * @return self
     */
    public function setSuperiorCreativeType(?string $superiorCreativeType): self
    {
        $this->superiorCreativeType = $superiorCreativeType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adForm !== null) {
            $result['ad_form'] = $this->adForm;
        }
        if ($this->appOrigin !== null) {
            $result['app_origin'] = $this->appOrigin;
        }
        if ($this->superiorCreativeType !== null) {
            $result['superior_creative_type'] = $this->superiorCreativeType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_form'] ?? null) !== null) {
            $obj->adForm = (string) $v;
        }
        if (($v = $data['app_origin'] ?? null) !== null) {
            $obj->appOrigin = (string) $v;
        }
        if (($v = $data['superior_creative_type'] ?? null) !== null) {
            $obj->superiorCreativeType = (string) $v;
        }
        return $obj;
    }
}

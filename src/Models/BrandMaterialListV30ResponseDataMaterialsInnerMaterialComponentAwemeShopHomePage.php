<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAwemeShopHomePage implements \JsonSerializable
{
    /**
     * 抖音小店账号ID
     * @var string
     */
    protected ?string $awemeShopId = null;

    /**
     * 落地页链接
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * 抖音小店账号ID
     * @return string
     */
    public function getAwemeShopId(): ?string
    {
        return $this->awemeShopId;
    }

    /**
     * 抖音小店账号ID
     * @param string $awemeShopId
     * @return self
     */
    public function setAwemeShopId(?string $awemeShopId): self
    {
        $this->awemeShopId = $awemeShopId;
        return $this;
    }

    /**
     * 落地页链接
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * 落地页链接
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeShopId !== null) {
            $result['aweme_shop_id'] = $this->awemeShopId;
        }
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_shop_id'] ?? null) !== null) {
            $obj->awemeShopId = (string) $v;
        }
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        return $obj;
    }
}

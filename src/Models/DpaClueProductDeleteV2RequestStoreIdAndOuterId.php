<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductDeleteV2RequestStoreIdAndOuterId implements \JsonSerializable
{
    /**
     * 商品外部ID
     * @var string
     */
    protected ?string $outerId = null;

    /**
     * 店铺ID
     * @var string
     */
    protected ?string $storeId = null;

    /**
     * 商品外部ID
     * @return string
     */
    public function getOuterId(): ?string
    {
        return $this->outerId;
    }

    /**
     * 商品外部ID
     * @param string $outerId
     * @return self
     */
    public function setOuterId(?string $outerId): self
    {
        $this->outerId = $outerId;
        return $this;
    }

    /**
     * 店铺ID
     * @return string
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }

    /**
     * 店铺ID
     * @param string $storeId
     * @return self
     */
    public function setStoreId(?string $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->outerId !== null) {
            $result['outer_id'] = $this->outerId;
        }
        if ($this->storeId !== null) {
            $result['store_id'] = $this->storeId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['outer_id'] ?? null) !== null) {
            $obj->outerId = (string) $v;
        }
        if (($v = $data['store_id'] ?? null) !== null) {
            $obj->storeId = (string) $v;
        }
        return $obj;
    }
}

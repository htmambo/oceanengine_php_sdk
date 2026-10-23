<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductSaveV30ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $outerId = null;

    /**
     * @var int
     */
    protected ?int $platformProductId = null;

    /**
     * @var string
     */
    protected ?string $storeId = null;

    /**
     * @return string
     */
    public function getOuterId(): ?string
    {
        return $this->outerId;
    }

    /**
     * @param string $outerId
     * @return self
     */
    public function setOuterId(?string $outerId): self
    {
        $this->outerId = $outerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlatformProductId(): ?int
    {
        return $this->platformProductId;
    }

    /**
     * @param int $platformProductId
     * @return self
     */
    public function setPlatformProductId(?int $platformProductId): self
    {
        $this->platformProductId = $platformProductId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }

    /**
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
        if ($this->platformProductId !== null) {
            $result['platform_product_id'] = $this->platformProductId;
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
        if (($v = $data['platform_product_id'] ?? null) !== null) {
            $obj->platformProductId = (int) $v;
        }
        if (($v = $data['store_id'] ?? null) !== null) {
            $obj->storeId = (string) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueGetV2ResponseDataListInnerStore implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $storeAddress = null;

    /**
     * @var int
     */
    protected ?int $storeId = null;

    /**
     * @var string
     */
    protected ?string $storeLocation = null;

    /**
     * @var string
     */
    protected ?string $storeName = null;

    /**
     * @var int
     */
    protected ?int $storePackId = null;

    /**
     * @var string
     */
    protected ?string $storePackName = null;

    /**
     * @var string
     */
    protected ?string $storePackRemark = null;

    /**
     * @var string
     */
    protected ?string $storeRemark = null;

    /**
     * @return string
     */
    public function getStoreAddress(): ?string
    {
        return $this->storeAddress;
    }

    /**
     * @param string $storeAddress
     * @return self
     */
    public function setStoreAddress(?string $storeAddress): self
    {
        $this->storeAddress = $storeAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
     * @param int $storeId
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreLocation(): ?string
    {
        return $this->storeLocation;
    }

    /**
     * @param string $storeLocation
     * @return self
     */
    public function setStoreLocation(?string $storeLocation): self
    {
        $this->storeLocation = $storeLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    /**
     * @param string $storeName
     * @return self
     */
    public function setStoreName(?string $storeName): self
    {
        $this->storeName = $storeName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStorePackId(): ?int
    {
        return $this->storePackId;
    }

    /**
     * @param int $storePackId
     * @return self
     */
    public function setStorePackId(?int $storePackId): self
    {
        $this->storePackId = $storePackId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStorePackName(): ?string
    {
        return $this->storePackName;
    }

    /**
     * @param string $storePackName
     * @return self
     */
    public function setStorePackName(?string $storePackName): self
    {
        $this->storePackName = $storePackName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStorePackRemark(): ?string
    {
        return $this->storePackRemark;
    }

    /**
     * @param string $storePackRemark
     * @return self
     */
    public function setStorePackRemark(?string $storePackRemark): self
    {
        $this->storePackRemark = $storePackRemark;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreRemark(): ?string
    {
        return $this->storeRemark;
    }

    /**
     * @param string $storeRemark
     * @return self
     */
    public function setStoreRemark(?string $storeRemark): self
    {
        $this->storeRemark = $storeRemark;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->storeAddress !== null) {
            $result['store_address'] = $this->storeAddress;
        }
        if ($this->storeId !== null) {
            $result['store_id'] = $this->storeId;
        }
        if ($this->storeLocation !== null) {
            $result['store_location'] = $this->storeLocation;
        }
        if ($this->storeName !== null) {
            $result['store_name'] = $this->storeName;
        }
        if ($this->storePackId !== null) {
            $result['store_pack_id'] = $this->storePackId;
        }
        if ($this->storePackName !== null) {
            $result['store_pack_name'] = $this->storePackName;
        }
        if ($this->storePackRemark !== null) {
            $result['store_pack_remark'] = $this->storePackRemark;
        }
        if ($this->storeRemark !== null) {
            $result['store_remark'] = $this->storeRemark;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['store_address'] ?? null) !== null) {
            $obj->storeAddress = (string) $v;
        }
        if (($v = $data['store_id'] ?? null) !== null) {
            $obj->storeId = (int) $v;
        }
        if (($v = $data['store_location'] ?? null) !== null) {
            $obj->storeLocation = (string) $v;
        }
        if (($v = $data['store_name'] ?? null) !== null) {
            $obj->storeName = (string) $v;
        }
        if (($v = $data['store_pack_id'] ?? null) !== null) {
            $obj->storePackId = (int) $v;
        }
        if (($v = $data['store_pack_name'] ?? null) !== null) {
            $obj->storePackName = (string) $v;
        }
        if (($v = $data['store_pack_remark'] ?? null) !== null) {
            $obj->storePackRemark = (string) $v;
        }
        if (($v = $data['store_remark'] ?? null) !== null) {
            $obj->storeRemark = (string) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FilePlayableCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $appId = null;

    /**
     * @var int
     */
    protected ?int $appMaterialId = null;

    /**
     * @var \Oceanengine\Models\FilePlayableCreateV30MaterialType
     */
    protected ?string $materialType = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppMaterialId(): ?int
    {
        return $this->appMaterialId;
    }

    /**
     * @param int $appMaterialId
     * @return self
     */
    public function setAppMaterialId(?int $appMaterialId): self
    {
        $this->appMaterialId = $appMaterialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePlayableCreateV30MaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\FilePlayableCreateV30MaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->appMaterialId !== null) {
            $result['app_material_id'] = $this->appMaterialId;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['app_material_id'] ?? null) !== null) {
            $obj->appMaterialId = (int) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        return $obj;
    }
}

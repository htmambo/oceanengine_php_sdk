<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FilePlayableCreateV30ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appMaterialId = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string
     */
    protected ?string $signature = null;

    /**
     * @var string
     */
    protected ?string $version = null;

    /**
     * @return string
     */
    public function getAppMaterialId(): ?string
    {
        return $this->appMaterialId;
    }

    /**
     * @param string $appMaterialId
     * @return self
     */
    public function setAppMaterialId(?string $appMaterialId): self
    {
        $this->appMaterialId = $appMaterialId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appMaterialId !== null) {
            $result['app_material_id'] = $this->appMaterialId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_material_id'] ?? null) !== null) {
            $obj->appMaterialId = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (string) $v;
        }
        return $obj;
    }
}

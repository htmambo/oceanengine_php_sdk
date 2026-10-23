<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FilePreauditGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FilePreauditGetV30FilteringMaterialChannel
     */
    protected ?string $materialChannel = null;

    /**
     * @var \Oceanengine\Models\FilePreauditGetV30FilteringMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var int[]
     */
    protected ?array $preauditIds = null;

    /**
     * @var \Oceanengine\Models\FilePreauditGetV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\FilePreauditGetV30FilteringMaterialChannel
     */
    public function getMaterialChannel(): ?string
    {
        return $this->materialChannel;
    }

    /**
     * @param \Oceanengine\Models\FilePreauditGetV30FilteringMaterialChannel $materialChannel
     * @return self
     */
    public function setMaterialChannel(?string $materialChannel): self
    {
        $this->materialChannel = $materialChannel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePreauditGetV30FilteringMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\FilePreauditGetV30FilteringMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPreauditIds(): ?array
    {
        return $this->preauditIds;
    }

    /**
     * @param int[] $preauditIds
     * @return self
     */
    public function setPreauditIds(?array $preauditIds): self
    {
        $this->preauditIds = $preauditIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePreauditGetV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\FilePreauditGetV30FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialChannel !== null) {
            $result['material_channel'] = $this->materialChannel;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->preauditIds !== null) {
            $result['preaudit_ids'] = $this->preauditIds;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_channel'] ?? null) !== null) {
            $obj->materialChannel = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['preaudit_ids'] ?? null) !== null && is_array($v)) {
            $obj->preauditIds = $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}

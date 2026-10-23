<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusRtaGetInfoV30ResponseDataRtaListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @var \Oceanengine\Models\DouplusRtaGetInfoV30DataRtaListTargetType
     */
    protected ?string $targetType = null;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusRtaGetInfoV30DataRtaListTargetType
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    /**
     * @param \Oceanengine\Models\DouplusRtaGetInfoV30DataRtaListTargetType $targetType
     * @return self
     */
    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->targetType !== null) {
            $result['target_type'] = $this->targetType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['target_type'] ?? null) !== null) {
            $obj->targetType = (string) $v;
        }
        return $obj;
    }
}

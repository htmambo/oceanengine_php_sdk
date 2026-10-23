<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAssetAuthV30ResponseDataFailedRecordsInnerAuthTarget implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType
     */
    protected ?string $authTargetType = null;

    /**
     * 组织深度 根节点=0 普通bp不返回
     * @var int
     */
    protected ?int $depth = null;

    /**
     * @var int
     */
    protected ?int $targetId = null;

    /**
     * @var string
     */
    protected ?string $targetName = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType
     */
    public function getAuthTargetType(): ?string
    {
        return $this->authTargetType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType $authTargetType
     * @return self
     */
    public function setAuthTargetType(?string $authTargetType): self
    {
        $this->authTargetType = $authTargetType;
        return $this;
    }

    /**
     * 组织深度 根节点=0 普通bp不返回
     * @return int
     */
    public function getDepth(): ?int
    {
        return $this->depth;
    }

    /**
     * 组织深度 根节点=0 普通bp不返回
     * @param int $depth
     * @return self
     */
    public function setDepth(?int $depth): self
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * @return int
     */
    public function getTargetId(): ?int
    {
        return $this->targetId;
    }

    /**
     * @param int $targetId
     * @return self
     */
    public function setTargetId(?int $targetId): self
    {
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetName(): ?string
    {
        return $this->targetName;
    }

    /**
     * @param string $targetName
     * @return self
     */
    public function setTargetName(?string $targetName): self
    {
        $this->targetName = $targetName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authTargetType !== null) {
            $result['auth_target_type'] = $this->authTargetType;
        }
        if ($this->depth !== null) {
            $result['depth'] = $this->depth;
        }
        if ($this->targetId !== null) {
            $result['target_id'] = $this->targetId;
        }
        if ($this->targetName !== null) {
            $result['target_name'] = $this->targetName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_target_type'] ?? null) !== null) {
            $obj->authTargetType = (string) $v;
        }
        if (($v = $data['depth'] ?? null) !== null) {
            $obj->depth = (int) $v;
        }
        if (($v = $data['target_id'] ?? null) !== null) {
            $obj->targetId = (int) $v;
        }
        if (($v = $data['target_name'] ?? null) !== null) {
            $obj->targetName = (string) $v;
        }
        return $obj;
    }
}

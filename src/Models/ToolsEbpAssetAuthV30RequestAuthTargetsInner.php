<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAssetAuthV30RequestAuthTargetsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30AuthTargetsAuthTargetType
     */
    protected ?string $authTargetType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30AuthTargetsSubTarget[]
     */
    protected ?array $subTarget = null;

    /**
     * @var int
     */
    protected ?int $targetId = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30AuthTargetsAuthTargetType
     */
    public function getAuthTargetType(): ?string
    {
        return $this->authTargetType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30AuthTargetsAuthTargetType $authTargetType
     * @return self
     */
    public function setAuthTargetType(?string $authTargetType): self
    {
        $this->authTargetType = $authTargetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30AuthTargetsSubTarget[]
     */
    public function getSubTarget(): ?array
    {
        return $this->subTarget;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30AuthTargetsSubTarget[] $subTarget
     * @return self
     */
    public function setSubTarget(?array $subTarget): self
    {
        $this->subTarget = $subTarget;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authTargetType !== null) {
            $result['auth_target_type'] = $this->authTargetType;
        }
        if ($this->subTarget !== null) {
            $result['sub_target'] = $this->subTarget;
        }
        if ($this->targetId !== null) {
            $result['target_id'] = $this->targetId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_target_type'] ?? null) !== null) {
            $obj->authTargetType = (string) $v;
        }
        if (($v = $data['sub_target'] ?? null) !== null && is_array($v)) {
            $obj->subTarget = $v;
        }
        if (($v = $data['target_id'] ?? null) !== null) {
            $obj->targetId = (int) $v;
        }
        return $obj;
    }
}

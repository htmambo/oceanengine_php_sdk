<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialAuthListV30ResponseDataAuthListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $authId = null;

    /**
     * @var int
     */
    protected ?int $targetEbpId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialAuthListV30DataAuthListTargetEbpRange
     */
    protected ?string $targetEbpRange = null;

    /**
     * @return int
     */
    public function getAuthId(): ?int
    {
        return $this->authId;
    }

    /**
     * @param int $authId
     * @return self
     */
    public function setAuthId(?int $authId): self
    {
        $this->authId = $authId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTargetEbpId(): ?int
    {
        return $this->targetEbpId;
    }

    /**
     * @param int $targetEbpId
     * @return self
     */
    public function setTargetEbpId(?int $targetEbpId): self
    {
        $this->targetEbpId = $targetEbpId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialAuthListV30DataAuthListTargetEbpRange
     */
    public function getTargetEbpRange(): ?string
    {
        return $this->targetEbpRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialAuthListV30DataAuthListTargetEbpRange $targetEbpRange
     * @return self
     */
    public function setTargetEbpRange(?string $targetEbpRange): self
    {
        $this->targetEbpRange = $targetEbpRange;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authId !== null) {
            $result['auth_id'] = $this->authId;
        }
        if ($this->targetEbpId !== null) {
            $result['target_ebp_id'] = $this->targetEbpId;
        }
        if ($this->targetEbpRange !== null) {
            $result['target_ebp_range'] = $this->targetEbpRange;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_id'] ?? null) !== null) {
            $obj->authId = (int) $v;
        }
        if (($v = $data['target_ebp_id'] ?? null) !== null) {
            $obj->targetEbpId = (int) $v;
        }
        if (($v = $data['target_ebp_range'] ?? null) !== null) {
            $obj->targetEbpRange = (string) $v;
        }
        return $obj;
    }
}

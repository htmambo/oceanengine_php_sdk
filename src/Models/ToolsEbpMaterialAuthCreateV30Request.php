<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialAuthCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30MaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30RequestTargetEbpsInner[]
     */
    protected ?array $targetEbps = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30MaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30MaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30RequestTargetEbpsInner[]
     */
    public function getTargetEbps(): ?array
    {
        return $this->targetEbps;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30RequestTargetEbpsInner[] $targetEbps
     * @return self
     */
    public function setTargetEbps(?array $targetEbps): self
    {
        $this->targetEbps = $targetEbps;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->targetEbps !== null) {
            $result['target_ebps'] = $this->targetEbps;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['target_ebps'] ?? null) !== null && is_array($v)) {
            $obj->targetEbps = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30RequestTargetEbpsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

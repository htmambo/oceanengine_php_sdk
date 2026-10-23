<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAssetAuthV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30RequestAssetsInner[]
     */
    protected ?array $assets = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30RequestAuthTargetsInner[]
     */
    protected ?array $authTargets = null;

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
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30RequestAssetsInner[]
     */
    public function getAssets(): ?array
    {
        return $this->assets;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30RequestAssetsInner[] $assets
     * @return self
     */
    public function setAssets(?array $assets): self
    {
        $this->assets = $assets;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30RequestAuthTargetsInner[]
     */
    public function getAuthTargets(): ?array
    {
        return $this->authTargets;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30RequestAuthTargetsInner[] $authTargets
     * @return self
     */
    public function setAuthTargets(?array $authTargets): self
    {
        $this->authTargets = $authTargets;
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
        if ($this->assets !== null) {
            $result['assets'] = $this->assets;
        }
        if ($this->authTargets !== null) {
            $result['auth_targets'] = $this->authTargets;
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
        if (($v = $data['assets'] ?? null) !== null && is_array($v)) {
            $obj->assets = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpAssetAuthV30RequestAssetsInner::fromArray($vv), $v);
        }
        if (($v = $data['auth_targets'] ?? null) !== null && is_array($v)) {
            $obj->authTargets = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpAssetAuthV30RequestAuthTargetsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

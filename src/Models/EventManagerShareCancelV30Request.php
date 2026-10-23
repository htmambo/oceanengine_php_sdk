<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerShareCancelV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerShareCancelV30RequestAccountInfosInner[]
     */
    protected ?array $accountInfos = null;

    /**
     * @var \Oceanengine\Models\EventManagerShareCancelV30AllAccountType[]
     */
    protected ?array $allAccountType = null;

    /**
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * @var int
     */
    protected ?int $organizationId = null;

    /**
     * @var \Oceanengine\Models\EventManagerShareCancelV30ShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\EventManagerShareCancelV30RequestAccountInfosInner[]
     */
    public function getAccountInfos(): ?array
    {
        return $this->accountInfos;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareCancelV30RequestAccountInfosInner[] $accountInfos
     * @return self
     */
    public function setAccountInfos(?array $accountInfos): self
    {
        $this->accountInfos = $accountInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerShareCancelV30AllAccountType[]
     */
    public function getAllAccountType(): ?array
    {
        return $this->allAccountType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareCancelV30AllAccountType[] $allAccountType
     * @return self
     */
    public function setAllAccountType(?array $allAccountType): self
    {
        $this->allAccountType = $allAccountType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrganizationId(): ?int
    {
        return $this->organizationId;
    }

    /**
     * @param int $organizationId
     * @return self
     */
    public function setOrganizationId(?int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerShareCancelV30ShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareCancelV30ShareMode $shareMode
     * @return self
     */
    public function setShareMode(?string $shareMode): self
    {
        $this->shareMode = $shareMode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountInfos !== null) {
            $result['account_infos'] = $this->accountInfos;
        }
        if ($this->allAccountType !== null) {
            $result['all_account_type'] = $this->allAccountType;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->organizationId !== null) {
            $result['organization_id'] = $this->organizationId;
        }
        if ($this->shareMode !== null) {
            $result['share_mode'] = $this->shareMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_infos'] ?? null) !== null && is_array($v)) {
            $obj->accountInfos = array_map(fn ($vv) => \Oceanengine\Models\EventManagerShareCancelV30RequestAccountInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['all_account_type'] ?? null) !== null && is_array($v)) {
            $obj->allAccountType = $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['organization_id'] ?? null) !== null) {
            $obj->organizationId = (int) $v;
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}

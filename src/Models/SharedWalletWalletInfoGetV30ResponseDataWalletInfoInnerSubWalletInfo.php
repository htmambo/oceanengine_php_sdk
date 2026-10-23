<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfo implements \JsonSerializable
{
    /**
     * 钱包下的 adv 数量
     * @var int
     */
    protected ?int $advCnt = null;

    /**
     * 代理给客户授权的公司id集合、或者客户自身钱包所属的公司id
     * @var int[]
     */
    protected ?array $companyIds = null;

    /**
     * 代理给客户授权的ebp_id、或者客户自身钱包所属的ebp_id
     * @var int
     */
    protected ?int $ebpId = null;

    /**
     * 所属大钱包ID
     * @var int
     */
    protected ?int $mainWalletId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType
     */
    protected ?string $ownershipType = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfoSubSharedRange
     */
    protected ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfoSubSharedRange $subSharedRange = null;

    /**
     * 钱包下的 adv 数量
     * @return int
     */
    public function getAdvCnt(): ?int
    {
        return $this->advCnt;
    }

    /**
     * 钱包下的 adv 数量
     * @param int $advCnt
     * @return self
     */
    public function setAdvCnt(?int $advCnt): self
    {
        $this->advCnt = $advCnt;
        return $this;
    }

    /**
     * 代理给客户授权的公司id集合、或者客户自身钱包所属的公司id
     * @return int[]
     */
    public function getCompanyIds(): ?array
    {
        return $this->companyIds;
    }

    /**
     * 代理给客户授权的公司id集合、或者客户自身钱包所属的公司id
     * @param int[] $companyIds
     * @return self
     */
    public function setCompanyIds(?array $companyIds): self
    {
        $this->companyIds = $companyIds;
        return $this;
    }

    /**
     * 代理给客户授权的ebp_id、或者客户自身钱包所属的ebp_id
     * @return int
     */
    public function getEbpId(): ?int
    {
        return $this->ebpId;
    }

    /**
     * 代理给客户授权的ebp_id、或者客户自身钱包所属的ebp_id
     * @param int $ebpId
     * @return self
     */
    public function setEbpId(?int $ebpId): self
    {
        $this->ebpId = $ebpId;
        return $this;
    }

    /**
     * 所属大钱包ID
     * @return int
     */
    public function getMainWalletId(): ?int
    {
        return $this->mainWalletId;
    }

    /**
     * 所属大钱包ID
     * @param int $mainWalletId
     * @return self
     */
    public function setMainWalletId(?int $mainWalletId): self
    {
        $this->mainWalletId = $mainWalletId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType
     */
    public function getOwnershipType(): ?string
    {
        return $this->ownershipType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoOwnershipType $ownershipType
     * @return self
     */
    public function setOwnershipType(?string $ownershipType): self
    {
        $this->ownershipType = $ownershipType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfoSubSharedRange
     */
    public function getSubSharedRange(): ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfoSubSharedRange
    {
        return $this->subSharedRange;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfoSubSharedRange $subSharedRange
     * @return self
     */
    public function setSubSharedRange(?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfoSubSharedRange $subSharedRange): self
    {
        $this->subSharedRange = $subSharedRange;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advCnt !== null) {
            $result['adv_cnt'] = $this->advCnt;
        }
        if ($this->companyIds !== null) {
            $result['company_ids'] = $this->companyIds;
        }
        if ($this->ebpId !== null) {
            $result['ebp_id'] = $this->ebpId;
        }
        if ($this->mainWalletId !== null) {
            $result['main_wallet_id'] = $this->mainWalletId;
        }
        if ($this->ownershipType !== null) {
            $result['ownership_type'] = $this->ownershipType;
        }
        if ($this->subSharedRange !== null) {
            $result['sub_shared_range'] = $this->subSharedRange;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_cnt'] ?? null) !== null) {
            $obj->advCnt = (int) $v;
        }
        if (($v = $data['company_ids'] ?? null) !== null && is_array($v)) {
            $obj->companyIds = $v;
        }
        if (($v = $data['ebp_id'] ?? null) !== null) {
            $obj->ebpId = (int) $v;
        }
        if (($v = $data['main_wallet_id'] ?? null) !== null) {
            $obj->mainWalletId = (int) $v;
        }
        if (($v = $data['ownership_type'] ?? null) !== null) {
            $obj->ownershipType = (string) $v;
        }
        if (($v = $data['sub_shared_range'] ?? null) !== null && is_array($v)) {
            $obj->subSharedRange = \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfoSubSharedRange::fromArray($v);
        }
        return $obj;
    }
}

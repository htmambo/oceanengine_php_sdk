<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfo implements \JsonSerializable
{
    /**
     * 客户自身钱包所属的公司id
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 代理给客户授权的ebp_id、或者客户自身钱包所属的ebp_id
     * @var int
     */
    protected ?int $ebpId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRange
     */
    protected ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRange $mainSharedRange = null;

    /**
     * 所属大钱包ID
     * @var int
     */
    protected ?int $mainWalletId = null;

    /**
     * 客户自身钱包所属的公司id
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 客户自身钱包所属的公司id
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
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
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRange
     */
    public function getMainSharedRange(): ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRange
    {
        return $this->mainSharedRange;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRange $mainSharedRange
     * @return self
     */
    public function setMainSharedRange(?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRange $mainSharedRange): self
    {
        $this->mainSharedRange = $mainSharedRange;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->ebpId !== null) {
            $result['ebp_id'] = $this->ebpId;
        }
        if ($this->mainSharedRange !== null) {
            $result['main_shared_range'] = $this->mainSharedRange;
        }
        if ($this->mainWalletId !== null) {
            $result['main_wallet_id'] = $this->mainWalletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['ebp_id'] ?? null) !== null) {
            $obj->ebpId = (int) $v;
        }
        if (($v = $data['main_shared_range'] ?? null) !== null && is_array($v)) {
            $obj->mainSharedRange = \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfoMainSharedRange::fromArray($v);
        }
        if (($v = $data['main_wallet_id'] ?? null) !== null) {
            $obj->mainWalletId = (int) $v;
        }
        return $obj;
    }
}

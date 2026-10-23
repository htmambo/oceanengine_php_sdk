<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletAccountRelationGetV30ResponseData implements \JsonSerializable
{
    /**
     * 客户公司ID
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 共享钱包ID
     * @var int
     */
    protected ?int $mainWalletId = null;

    /**
     * 子钱包ID列表
     * @var int[]
     */
    protected ?array $subWalletIds = null;

    /**
     * 客户公司ID
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 客户公司ID
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * 共享钱包ID
     * @return int
     */
    public function getMainWalletId(): ?int
    {
        return $this->mainWalletId;
    }

    /**
     * 共享钱包ID
     * @param int $mainWalletId
     * @return self
     */
    public function setMainWalletId(?int $mainWalletId): self
    {
        $this->mainWalletId = $mainWalletId;
        return $this;
    }

    /**
     * 子钱包ID列表
     * @return int[]
     */
    public function getSubWalletIds(): ?array
    {
        return $this->subWalletIds;
    }

    /**
     * 子钱包ID列表
     * @param int[] $subWalletIds
     * @return self
     */
    public function setSubWalletIds(?array $subWalletIds): self
    {
        $this->subWalletIds = $subWalletIds;
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
        if ($this->mainWalletId !== null) {
            $result['main_wallet_id'] = $this->mainWalletId;
        }
        if ($this->subWalletIds !== null) {
            $result['sub_wallet_ids'] = $this->subWalletIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['main_wallet_id'] ?? null) !== null) {
            $obj->mainWalletId = (int) $v;
        }
        if (($v = $data['sub_wallet_ids'] ?? null) !== null && is_array($v)) {
            $obj->subWalletIds = $v;
        }
        return $obj;
    }
}

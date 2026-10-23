<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletMainWalletGetV30ResponseDataMainWalletInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalance $allocatedBalance = null;

    /**
     * 大钱包ID
     * @var int
     */
    protected ?int $mainWalletId = null;

    /**
     * 钱包总余额(单位元)
     * @var float
     */
    protected ?float $totalBalance = null;

    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalance
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalance $unallocatedBalance = null;

    /**
     * 钱包描述
     * @var string
     */
    protected ?string $walletDescription = null;

    /**
     * 钱包标签
     * @var string[]
     */
    protected ?array $walletLabel = null;

    /**
     * 钱包名称
     * @var string
     */
    protected ?string $walletName = null;

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalance
     */
    public function getAllocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalance
    {
        return $this->allocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalance $allocatedBalance
     * @return self
     */
    public function setAllocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalance $allocatedBalance): self
    {
        $this->allocatedBalance = $allocatedBalance;
        return $this;
    }

    /**
     * 大钱包ID
     * @return int
     */
    public function getMainWalletId(): ?int
    {
        return $this->mainWalletId;
    }

    /**
     * 大钱包ID
     * @param int $mainWalletId
     * @return self
     */
    public function setMainWalletId(?int $mainWalletId): self
    {
        $this->mainWalletId = $mainWalletId;
        return $this;
    }

    /**
     * 钱包总余额(单位元)
     * @return float
     */
    public function getTotalBalance(): ?float
    {
        return $this->totalBalance;
    }

    /**
     * 钱包总余额(单位元)
     * @param float $totalBalance
     * @return self
     */
    public function setTotalBalance(?float $totalBalance): self
    {
        $this->totalBalance = $totalBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalance
     */
    public function getUnallocatedBalance(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalance
    {
        return $this->unallocatedBalance;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalance $unallocatedBalance
     * @return self
     */
    public function setUnallocatedBalance(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalance $unallocatedBalance): self
    {
        $this->unallocatedBalance = $unallocatedBalance;
        return $this;
    }

    /**
     * 钱包描述
     * @return string
     */
    public function getWalletDescription(): ?string
    {
        return $this->walletDescription;
    }

    /**
     * 钱包描述
     * @param string $walletDescription
     * @return self
     */
    public function setWalletDescription(?string $walletDescription): self
    {
        $this->walletDescription = $walletDescription;
        return $this;
    }

    /**
     * 钱包标签
     * @return string[]
     */
    public function getWalletLabel(): ?array
    {
        return $this->walletLabel;
    }

    /**
     * 钱包标签
     * @param string[] $walletLabel
     * @return self
     */
    public function setWalletLabel(?array $walletLabel): self
    {
        $this->walletLabel = $walletLabel;
        return $this;
    }

    /**
     * 钱包名称
     * @return string
     */
    public function getWalletName(): ?string
    {
        return $this->walletName;
    }

    /**
     * 钱包名称
     * @param string $walletName
     * @return self
     */
    public function setWalletName(?string $walletName): self
    {
        $this->walletName = $walletName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allocatedBalance !== null) {
            $result['allocated_balance'] = $this->allocatedBalance;
        }
        if ($this->mainWalletId !== null) {
            $result['main_wallet_id'] = $this->mainWalletId;
        }
        if ($this->totalBalance !== null) {
            $result['total_balance'] = $this->totalBalance;
        }
        if ($this->unallocatedBalance !== null) {
            $result['unallocated_balance'] = $this->unallocatedBalance;
        }
        if ($this->walletDescription !== null) {
            $result['wallet_description'] = $this->walletDescription;
        }
        if ($this->walletLabel !== null) {
            $result['wallet_label'] = $this->walletLabel;
        }
        if ($this->walletName !== null) {
            $result['wallet_name'] = $this->walletName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->allocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalance::fromArray($v);
        }
        if (($v = $data['main_wallet_id'] ?? null) !== null) {
            $obj->mainWalletId = (int) $v;
        }
        if (($v = $data['total_balance'] ?? null) !== null) {
            $obj->totalBalance = (float) $v;
        }
        if (($v = $data['unallocated_balance'] ?? null) !== null && is_array($v)) {
            $obj->unallocatedBalance = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalance::fromArray($v);
        }
        if (($v = $data['wallet_description'] ?? null) !== null) {
            $obj->walletDescription = (string) $v;
        }
        if (($v = $data['wallet_label'] ?? null) !== null && is_array($v)) {
            $obj->walletLabel = $v;
        }
        if (($v = $data['wallet_name'] ?? null) !== null) {
            $obj->walletName = (string) $v;
        }
        return $obj;
    }
}

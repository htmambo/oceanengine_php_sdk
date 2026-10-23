<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletSubWalletCreateV30Request implements \JsonSerializable
{
    /**
     * 账户id，BP传bp_id，AGENT传agent_id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletSubWalletCreateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * svip模式下传入钱包所属组织ebp_id
     * @var int
     */
    protected ?int $ebpId = null;

    /**
     * 所属大钱包 id
     * @var int
     */
    protected ?int $mainWalletId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletSubWalletCreateV30Platform
     */
    protected ?string $platform = null;

    /**
     * @var \Oceanengine\Models\SharedWalletSubWalletCreateV30RequestSharedRange
     */
    protected ?\Oceanengine\Models\SharedWalletSubWalletCreateV30RequestSharedRange $sharedRange = null;

    /**
     * 钱包描述，不填为空
     * @var string
     */
    protected ?string $walletDescription = null;

    /**
     * 钱包 id，调用获取唯一操作id接口生成，以此确保唯一
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * 钱包标签，不填为空，最多 10 个，单个标签长度不超过 10
     * @var string[]
     */
    protected ?array $walletLabel = null;

    /**
     * 钱包名称, 长度不超过 255
     * @var string
     */
    protected ?string $walletName = null;

    /**
     * 账户id，BP传bp_id，AGENT传agent_id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户id，BP传bp_id，AGENT传agent_id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletSubWalletCreateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletSubWalletCreateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * svip模式下传入钱包所属组织ebp_id
     * @return int
     */
    public function getEbpId(): ?int
    {
        return $this->ebpId;
    }

    /**
     * svip模式下传入钱包所属组织ebp_id
     * @param int $ebpId
     * @return self
     */
    public function setEbpId(?int $ebpId): self
    {
        $this->ebpId = $ebpId;
        return $this;
    }

    /**
     * 所属大钱包 id
     * @return int
     */
    public function getMainWalletId(): ?int
    {
        return $this->mainWalletId;
    }

    /**
     * 所属大钱包 id
     * @param int $mainWalletId
     * @return self
     */
    public function setMainWalletId(?int $mainWalletId): self
    {
        $this->mainWalletId = $mainWalletId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletSubWalletCreateV30Platform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletSubWalletCreateV30Platform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletSubWalletCreateV30RequestSharedRange
     */
    public function getSharedRange(): ?\Oceanengine\Models\SharedWalletSubWalletCreateV30RequestSharedRange
    {
        return $this->sharedRange;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletSubWalletCreateV30RequestSharedRange $sharedRange
     * @return self
     */
    public function setSharedRange(?\Oceanengine\Models\SharedWalletSubWalletCreateV30RequestSharedRange $sharedRange): self
    {
        $this->sharedRange = $sharedRange;
        return $this;
    }

    /**
     * 钱包描述，不填为空
     * @return string
     */
    public function getWalletDescription(): ?string
    {
        return $this->walletDescription;
    }

    /**
     * 钱包描述，不填为空
     * @param string $walletDescription
     * @return self
     */
    public function setWalletDescription(?string $walletDescription): self
    {
        $this->walletDescription = $walletDescription;
        return $this;
    }

    /**
     * 钱包 id，调用获取唯一操作id接口生成，以此确保唯一
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * 钱包 id，调用获取唯一操作id接口生成，以此确保唯一
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * 钱包标签，不填为空，最多 10 个，单个标签长度不超过 10
     * @return string[]
     */
    public function getWalletLabel(): ?array
    {
        return $this->walletLabel;
    }

    /**
     * 钱包标签，不填为空，最多 10 个，单个标签长度不超过 10
     * @param string[] $walletLabel
     * @return self
     */
    public function setWalletLabel(?array $walletLabel): self
    {
        $this->walletLabel = $walletLabel;
        return $this;
    }

    /**
     * 钱包名称, 长度不超过 255
     * @return string
     */
    public function getWalletName(): ?string
    {
        return $this->walletName;
    }

    /**
     * 钱包名称, 长度不超过 255
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
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->ebpId !== null) {
            $result['ebp_id'] = $this->ebpId;
        }
        if ($this->mainWalletId !== null) {
            $result['main_wallet_id'] = $this->mainWalletId;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->sharedRange !== null) {
            $result['shared_range'] = $this->sharedRange;
        }
        if ($this->walletDescription !== null) {
            $result['wallet_description'] = $this->walletDescription;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
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
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['ebp_id'] ?? null) !== null) {
            $obj->ebpId = (int) $v;
        }
        if (($v = $data['main_wallet_id'] ?? null) !== null) {
            $obj->mainWalletId = (int) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['shared_range'] ?? null) !== null && is_array($v)) {
            $obj->sharedRange = \Oceanengine\Models\SharedWalletSubWalletCreateV30RequestSharedRange::fromArray($v);
        }
        if (($v = $data['wallet_description'] ?? null) !== null) {
            $obj->walletDescription = (string) $v;
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
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

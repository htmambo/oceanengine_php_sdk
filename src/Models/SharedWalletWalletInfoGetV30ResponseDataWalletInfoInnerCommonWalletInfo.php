<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerCommonWalletInfo implements \JsonSerializable
{
    /**
     * 钱包创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus
     */
    protected ?string $sharedWalletStatus = null;

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
     * 钱包创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 钱包创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus
     */
    public function getSharedWalletStatus(): ?string
    {
        return $this->sharedWalletStatus;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus $sharedWalletStatus
     * @return self
     */
    public function setSharedWalletStatus(?string $sharedWalletStatus): self
    {
        $this->sharedWalletStatus = $sharedWalletStatus;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->sharedWalletStatus !== null) {
            $result['shared_wallet_status'] = $this->sharedWalletStatus;
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
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['shared_wallet_status'] ?? null) !== null) {
            $obj->sharedWalletStatus = (string) $v;
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

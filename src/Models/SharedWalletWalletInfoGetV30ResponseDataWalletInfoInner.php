<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletInfoGetV30ResponseDataWalletInfoInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerCommonWalletInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerCommonWalletInfo $commonWalletInfo = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfo $mainWalletInfo = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfo $manageWalletInfo = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfo $subWalletInfo = null;

    /**
     * 共享钱包ID
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoWalletType
     */
    protected ?string $walletType = null;

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerCommonWalletInfo
     */
    public function getCommonWalletInfo(): ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerCommonWalletInfo
    {
        return $this->commonWalletInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerCommonWalletInfo $commonWalletInfo
     * @return self
     */
    public function setCommonWalletInfo(?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerCommonWalletInfo $commonWalletInfo): self
    {
        $this->commonWalletInfo = $commonWalletInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfo
     */
    public function getMainWalletInfo(): ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfo
    {
        return $this->mainWalletInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfo $mainWalletInfo
     * @return self
     */
    public function setMainWalletInfo(?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfo $mainWalletInfo): self
    {
        $this->mainWalletInfo = $mainWalletInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfo
     */
    public function getManageWalletInfo(): ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfo
    {
        return $this->manageWalletInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfo $manageWalletInfo
     * @return self
     */
    public function setManageWalletInfo(?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfo $manageWalletInfo): self
    {
        $this->manageWalletInfo = $manageWalletInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfo
     */
    public function getSubWalletInfo(): ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfo
    {
        return $this->subWalletInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfo $subWalletInfo
     * @return self
     */
    public function setSubWalletInfo(?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfo $subWalletInfo): self
    {
        $this->subWalletInfo = $subWalletInfo;
        return $this;
    }

    /**
     * 共享钱包ID
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * 共享钱包ID
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoWalletType
     */
    public function getWalletType(): ?string
    {
        return $this->walletType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30DataWalletInfoWalletType $walletType
     * @return self
     */
    public function setWalletType(?string $walletType): self
    {
        $this->walletType = $walletType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->commonWalletInfo !== null) {
            $result['common_wallet_info'] = $this->commonWalletInfo;
        }
        if ($this->mainWalletInfo !== null) {
            $result['main_wallet_info'] = $this->mainWalletInfo;
        }
        if ($this->manageWalletInfo !== null) {
            $result['manage_wallet_info'] = $this->manageWalletInfo;
        }
        if ($this->subWalletInfo !== null) {
            $result['sub_wallet_info'] = $this->subWalletInfo;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        if ($this->walletType !== null) {
            $result['wallet_type'] = $this->walletType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['common_wallet_info'] ?? null) !== null && is_array($v)) {
            $obj->commonWalletInfo = \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerCommonWalletInfo::fromArray($v);
        }
        if (($v = $data['main_wallet_info'] ?? null) !== null && is_array($v)) {
            $obj->mainWalletInfo = \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfo::fromArray($v);
        }
        if (($v = $data['manage_wallet_info'] ?? null) !== null && is_array($v)) {
            $obj->manageWalletInfo = \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerManageWalletInfo::fromArray($v);
        }
        if (($v = $data['sub_wallet_info'] ?? null) !== null && is_array($v)) {
            $obj->subWalletInfo = \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerSubWalletInfo::fromArray($v);
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        if (($v = $data['wallet_type'] ?? null) !== null) {
            $obj->walletType = (string) $v;
        }
        return $obj;
    }
}

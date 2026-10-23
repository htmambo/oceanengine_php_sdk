<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAccountBalanceGetV10ResponseData implements \JsonSerializable
{
    /**
     * 竞价不可用总余额
     * @var int
     */
    protected ?int $accountBiddingFrozen = null;

    /**
     * 竞价总余额
     * @var int
     */
    protected ?int $accountBiddingTotal = null;

    /**
     * 竞价可用总余额
     * @var int
     */
    protected ?int $accountBiddingValid = null;

    /**
     * 账户品牌冻结余额
     * @var int
     */
    protected ?int $accountBrandFrozen = null;

    /**
     * 账户品牌总余额
     * @var int
     */
    protected ?int $accountBrandTotal = null;

    /**
     * 账户品牌可用余额
     * @var int
     */
    protected ?int $accountBrandValid = null;

    /**
     * 账户不可用总余额
     * @var int
     */
    protected ?int $accountFrozen = null;

    /**
     * 通用不可用总余额
     * @var int
     */
    protected ?int $accountGeneralFrozen = null;

    /**
     * 通用总余额
     * @var int
     */
    protected ?int $accountGeneralTotal = null;

    /**
     * 通用可用总余额
     * @var int
     */
    protected ?int $accountGeneralValid = null;

    /**
     * 账户总余额
     * @var int
     */
    protected ?int $accountTotal = null;

    /**
     * 账户可用总余额
     * @var int
     */
    protected ?int $accountValid = null;

    /**
     * 广告主ID或代理商ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 总共享赠款
     * @var int
     */
    protected ?int $shareGrantTotal = null;

    /**
     * 共享钱包竞价可用余额
     * @var int
     */
    protected ?int $shareWalletBiddingValid = null;

    /**
     * 共享钱包品牌可用余额
     * @var int
     */
    protected ?int $shareWalletBrandValid = null;

    /**
     * 共享钱包通用可用余额
     * @var int
     */
    protected ?int $shareWalletGeneralValid = null;

    /**
     * 共享钱包id
     * @var string
     */
    protected ?string $shareWalletId = null;

    /**
     * 共享钱包名称
     * @var string
     */
    protected ?string $shareWalletName = null;

    /**
     * @var int
     */
    protected ?int $shareWalletTotal = null;

    /**
     * 竞价不可用总余额
     * @return int
     */
    public function getAccountBiddingFrozen(): ?int
    {
        return $this->accountBiddingFrozen;
    }

    /**
     * 竞价不可用总余额
     * @param int $accountBiddingFrozen
     * @return self
     */
    public function setAccountBiddingFrozen(?int $accountBiddingFrozen): self
    {
        $this->accountBiddingFrozen = $accountBiddingFrozen;
        return $this;
    }

    /**
     * 竞价总余额
     * @return int
     */
    public function getAccountBiddingTotal(): ?int
    {
        return $this->accountBiddingTotal;
    }

    /**
     * 竞价总余额
     * @param int $accountBiddingTotal
     * @return self
     */
    public function setAccountBiddingTotal(?int $accountBiddingTotal): self
    {
        $this->accountBiddingTotal = $accountBiddingTotal;
        return $this;
    }

    /**
     * 竞价可用总余额
     * @return int
     */
    public function getAccountBiddingValid(): ?int
    {
        return $this->accountBiddingValid;
    }

    /**
     * 竞价可用总余额
     * @param int $accountBiddingValid
     * @return self
     */
    public function setAccountBiddingValid(?int $accountBiddingValid): self
    {
        $this->accountBiddingValid = $accountBiddingValid;
        return $this;
    }

    /**
     * 账户品牌冻结余额
     * @return int
     */
    public function getAccountBrandFrozen(): ?int
    {
        return $this->accountBrandFrozen;
    }

    /**
     * 账户品牌冻结余额
     * @param int $accountBrandFrozen
     * @return self
     */
    public function setAccountBrandFrozen(?int $accountBrandFrozen): self
    {
        $this->accountBrandFrozen = $accountBrandFrozen;
        return $this;
    }

    /**
     * 账户品牌总余额
     * @return int
     */
    public function getAccountBrandTotal(): ?int
    {
        return $this->accountBrandTotal;
    }

    /**
     * 账户品牌总余额
     * @param int $accountBrandTotal
     * @return self
     */
    public function setAccountBrandTotal(?int $accountBrandTotal): self
    {
        $this->accountBrandTotal = $accountBrandTotal;
        return $this;
    }

    /**
     * 账户品牌可用余额
     * @return int
     */
    public function getAccountBrandValid(): ?int
    {
        return $this->accountBrandValid;
    }

    /**
     * 账户品牌可用余额
     * @param int $accountBrandValid
     * @return self
     */
    public function setAccountBrandValid(?int $accountBrandValid): self
    {
        $this->accountBrandValid = $accountBrandValid;
        return $this;
    }

    /**
     * 账户不可用总余额
     * @return int
     */
    public function getAccountFrozen(): ?int
    {
        return $this->accountFrozen;
    }

    /**
     * 账户不可用总余额
     * @param int $accountFrozen
     * @return self
     */
    public function setAccountFrozen(?int $accountFrozen): self
    {
        $this->accountFrozen = $accountFrozen;
        return $this;
    }

    /**
     * 通用不可用总余额
     * @return int
     */
    public function getAccountGeneralFrozen(): ?int
    {
        return $this->accountGeneralFrozen;
    }

    /**
     * 通用不可用总余额
     * @param int $accountGeneralFrozen
     * @return self
     */
    public function setAccountGeneralFrozen(?int $accountGeneralFrozen): self
    {
        $this->accountGeneralFrozen = $accountGeneralFrozen;
        return $this;
    }

    /**
     * 通用总余额
     * @return int
     */
    public function getAccountGeneralTotal(): ?int
    {
        return $this->accountGeneralTotal;
    }

    /**
     * 通用总余额
     * @param int $accountGeneralTotal
     * @return self
     */
    public function setAccountGeneralTotal(?int $accountGeneralTotal): self
    {
        $this->accountGeneralTotal = $accountGeneralTotal;
        return $this;
    }

    /**
     * 通用可用总余额
     * @return int
     */
    public function getAccountGeneralValid(): ?int
    {
        return $this->accountGeneralValid;
    }

    /**
     * 通用可用总余额
     * @param int $accountGeneralValid
     * @return self
     */
    public function setAccountGeneralValid(?int $accountGeneralValid): self
    {
        $this->accountGeneralValid = $accountGeneralValid;
        return $this;
    }

    /**
     * 账户总余额
     * @return int
     */
    public function getAccountTotal(): ?int
    {
        return $this->accountTotal;
    }

    /**
     * 账户总余额
     * @param int $accountTotal
     * @return self
     */
    public function setAccountTotal(?int $accountTotal): self
    {
        $this->accountTotal = $accountTotal;
        return $this;
    }

    /**
     * 账户可用总余额
     * @return int
     */
    public function getAccountValid(): ?int
    {
        return $this->accountValid;
    }

    /**
     * 账户可用总余额
     * @param int $accountValid
     * @return self
     */
    public function setAccountValid(?int $accountValid): self
    {
        $this->accountValid = $accountValid;
        return $this;
    }

    /**
     * 广告主ID或代理商ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID或代理商ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 总共享赠款
     * @return int
     */
    public function getShareGrantTotal(): ?int
    {
        return $this->shareGrantTotal;
    }

    /**
     * 总共享赠款
     * @param int $shareGrantTotal
     * @return self
     */
    public function setShareGrantTotal(?int $shareGrantTotal): self
    {
        $this->shareGrantTotal = $shareGrantTotal;
        return $this;
    }

    /**
     * 共享钱包竞价可用余额
     * @return int
     */
    public function getShareWalletBiddingValid(): ?int
    {
        return $this->shareWalletBiddingValid;
    }

    /**
     * 共享钱包竞价可用余额
     * @param int $shareWalletBiddingValid
     * @return self
     */
    public function setShareWalletBiddingValid(?int $shareWalletBiddingValid): self
    {
        $this->shareWalletBiddingValid = $shareWalletBiddingValid;
        return $this;
    }

    /**
     * 共享钱包品牌可用余额
     * @return int
     */
    public function getShareWalletBrandValid(): ?int
    {
        return $this->shareWalletBrandValid;
    }

    /**
     * 共享钱包品牌可用余额
     * @param int $shareWalletBrandValid
     * @return self
     */
    public function setShareWalletBrandValid(?int $shareWalletBrandValid): self
    {
        $this->shareWalletBrandValid = $shareWalletBrandValid;
        return $this;
    }

    /**
     * 共享钱包通用可用余额
     * @return int
     */
    public function getShareWalletGeneralValid(): ?int
    {
        return $this->shareWalletGeneralValid;
    }

    /**
     * 共享钱包通用可用余额
     * @param int $shareWalletGeneralValid
     * @return self
     */
    public function setShareWalletGeneralValid(?int $shareWalletGeneralValid): self
    {
        $this->shareWalletGeneralValid = $shareWalletGeneralValid;
        return $this;
    }

    /**
     * 共享钱包id
     * @return string
     */
    public function getShareWalletId(): ?string
    {
        return $this->shareWalletId;
    }

    /**
     * 共享钱包id
     * @param string $shareWalletId
     * @return self
     */
    public function setShareWalletId(?string $shareWalletId): self
    {
        $this->shareWalletId = $shareWalletId;
        return $this;
    }

    /**
     * 共享钱包名称
     * @return string
     */
    public function getShareWalletName(): ?string
    {
        return $this->shareWalletName;
    }

    /**
     * 共享钱包名称
     * @param string $shareWalletName
     * @return self
     */
    public function setShareWalletName(?string $shareWalletName): self
    {
        $this->shareWalletName = $shareWalletName;
        return $this;
    }

    /**
     * @return int
     */
    public function getShareWalletTotal(): ?int
    {
        return $this->shareWalletTotal;
    }

    /**
     * @param int $shareWalletTotal
     * @return self
     */
    public function setShareWalletTotal(?int $shareWalletTotal): self
    {
        $this->shareWalletTotal = $shareWalletTotal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountBiddingFrozen !== null) {
            $result['account_bidding_frozen'] = $this->accountBiddingFrozen;
        }
        if ($this->accountBiddingTotal !== null) {
            $result['account_bidding_total'] = $this->accountBiddingTotal;
        }
        if ($this->accountBiddingValid !== null) {
            $result['account_bidding_valid'] = $this->accountBiddingValid;
        }
        if ($this->accountBrandFrozen !== null) {
            $result['account_brand_frozen'] = $this->accountBrandFrozen;
        }
        if ($this->accountBrandTotal !== null) {
            $result['account_brand_total'] = $this->accountBrandTotal;
        }
        if ($this->accountBrandValid !== null) {
            $result['account_brand_valid'] = $this->accountBrandValid;
        }
        if ($this->accountFrozen !== null) {
            $result['account_frozen'] = $this->accountFrozen;
        }
        if ($this->accountGeneralFrozen !== null) {
            $result['account_general_frozen'] = $this->accountGeneralFrozen;
        }
        if ($this->accountGeneralTotal !== null) {
            $result['account_general_total'] = $this->accountGeneralTotal;
        }
        if ($this->accountGeneralValid !== null) {
            $result['account_general_valid'] = $this->accountGeneralValid;
        }
        if ($this->accountTotal !== null) {
            $result['account_total'] = $this->accountTotal;
        }
        if ($this->accountValid !== null) {
            $result['account_valid'] = $this->accountValid;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->shareGrantTotal !== null) {
            $result['share_grant_total'] = $this->shareGrantTotal;
        }
        if ($this->shareWalletBiddingValid !== null) {
            $result['share_wallet_bidding_valid'] = $this->shareWalletBiddingValid;
        }
        if ($this->shareWalletBrandValid !== null) {
            $result['share_wallet_brand_valid'] = $this->shareWalletBrandValid;
        }
        if ($this->shareWalletGeneralValid !== null) {
            $result['share_wallet_general_valid'] = $this->shareWalletGeneralValid;
        }
        if ($this->shareWalletId !== null) {
            $result['share_wallet_id'] = $this->shareWalletId;
        }
        if ($this->shareWalletName !== null) {
            $result['share_wallet_name'] = $this->shareWalletName;
        }
        if ($this->shareWalletTotal !== null) {
            $result['share_wallet_total'] = $this->shareWalletTotal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_bidding_frozen'] ?? null) !== null) {
            $obj->accountBiddingFrozen = (int) $v;
        }
        if (($v = $data['account_bidding_total'] ?? null) !== null) {
            $obj->accountBiddingTotal = (int) $v;
        }
        if (($v = $data['account_bidding_valid'] ?? null) !== null) {
            $obj->accountBiddingValid = (int) $v;
        }
        if (($v = $data['account_brand_frozen'] ?? null) !== null) {
            $obj->accountBrandFrozen = (int) $v;
        }
        if (($v = $data['account_brand_total'] ?? null) !== null) {
            $obj->accountBrandTotal = (int) $v;
        }
        if (($v = $data['account_brand_valid'] ?? null) !== null) {
            $obj->accountBrandValid = (int) $v;
        }
        if (($v = $data['account_frozen'] ?? null) !== null) {
            $obj->accountFrozen = (int) $v;
        }
        if (($v = $data['account_general_frozen'] ?? null) !== null) {
            $obj->accountGeneralFrozen = (int) $v;
        }
        if (($v = $data['account_general_total'] ?? null) !== null) {
            $obj->accountGeneralTotal = (int) $v;
        }
        if (($v = $data['account_general_valid'] ?? null) !== null) {
            $obj->accountGeneralValid = (int) $v;
        }
        if (($v = $data['account_total'] ?? null) !== null) {
            $obj->accountTotal = (int) $v;
        }
        if (($v = $data['account_valid'] ?? null) !== null) {
            $obj->accountValid = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['share_grant_total'] ?? null) !== null) {
            $obj->shareGrantTotal = (int) $v;
        }
        if (($v = $data['share_wallet_bidding_valid'] ?? null) !== null) {
            $obj->shareWalletBiddingValid = (int) $v;
        }
        if (($v = $data['share_wallet_brand_valid'] ?? null) !== null) {
            $obj->shareWalletBrandValid = (int) $v;
        }
        if (($v = $data['share_wallet_general_valid'] ?? null) !== null) {
            $obj->shareWalletGeneralValid = (int) $v;
        }
        if (($v = $data['share_wallet_id'] ?? null) !== null) {
            $obj->shareWalletId = (string) $v;
        }
        if (($v = $data['share_wallet_name'] ?? null) !== null) {
            $obj->shareWalletName = (string) $v;
        }
        if (($v = $data['share_wallet_total'] ?? null) !== null) {
            $obj->shareWalletTotal = (int) $v;
        }
        return $obj;
    }
}

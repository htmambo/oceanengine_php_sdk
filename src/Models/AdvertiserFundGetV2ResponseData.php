<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserFundGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var float
     */
    protected ?float $balance = null;

    /**
     * @var float
     */
    protected ?float $cash = null;

    /**
     * @var float
     */
    protected ?float $commonGrant = null;

    /**
     * @var float
     */
    protected ?float $compensationGrant = null;

    /**
     * @var float
     */
    protected ?float $compensationValidGrant = null;

    /**
     * @var float
     */
    protected ?float $defaultGrant = null;

    /**
     * @var string
     */
    protected ?string $email = null;

    /**
     * @var float
     */
    protected ?float $grant = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var float
     */
    protected ?float $returnGoodsAbs = null;

    /**
     * @var float
     */
    protected ?float $returnGoodsCost = null;

    /**
     * @var float
     */
    protected ?float $returnGoodsGrant = null;

    /**
     * @var float
     */
    protected ?float $returnGoodsValidGrant = null;

    /**
     * @var float
     */
    protected ?float $searchGrant = null;

    /**
     * @var float
     */
    protected ?float $unionGrant = null;

    /**
     * @var float
     */
    protected ?float $validBalance = null;

    /**
     * @var float
     */
    protected ?float $validCash = null;

    /**
     * @var float
     */
    protected ?float $validGrant = null;

    /**
     * @var float
     */
    protected ?float $validReturnGoodsAbs = null;

    /**
     * @var string
     */
    protected ?string $walletId = null;

    /**
     * @var string
     */
    protected ?string $walletName = null;

    /**
     * @var string
     */
    protected ?string $walletTotalBalanceValid = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return self
     */
    public function setBalance(?float $balance): self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getCash(): ?float
    {
        return $this->cash;
    }

    /**
     * @param float $cash
     * @return self
     */
    public function setCash(?float $cash): self
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * @return float
     */
    public function getCommonGrant(): ?float
    {
        return $this->commonGrant;
    }

    /**
     * @param float $commonGrant
     * @return self
     */
    public function setCommonGrant(?float $commonGrant): self
    {
        $this->commonGrant = $commonGrant;
        return $this;
    }

    /**
     * @return float
     */
    public function getCompensationGrant(): ?float
    {
        return $this->compensationGrant;
    }

    /**
     * @param float $compensationGrant
     * @return self
     */
    public function setCompensationGrant(?float $compensationGrant): self
    {
        $this->compensationGrant = $compensationGrant;
        return $this;
    }

    /**
     * @return float
     */
    public function getCompensationValidGrant(): ?float
    {
        return $this->compensationValidGrant;
    }

    /**
     * @param float $compensationValidGrant
     * @return self
     */
    public function setCompensationValidGrant(?float $compensationValidGrant): self
    {
        $this->compensationValidGrant = $compensationValidGrant;
        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultGrant(): ?float
    {
        return $this->defaultGrant;
    }

    /**
     * @param float $defaultGrant
     * @return self
     */
    public function setDefaultGrant(?float $defaultGrant): self
    {
        $this->defaultGrant = $defaultGrant;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrant(): ?float
    {
        return $this->grant;
    }

    /**
     * @param float $grant
     * @return self
     */
    public function setGrant(?float $grant): self
    {
        $this->grant = $grant;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getReturnGoodsAbs(): ?float
    {
        return $this->returnGoodsAbs;
    }

    /**
     * @param float $returnGoodsAbs
     * @return self
     */
    public function setReturnGoodsAbs(?float $returnGoodsAbs): self
    {
        $this->returnGoodsAbs = $returnGoodsAbs;
        return $this;
    }

    /**
     * @return float
     */
    public function getReturnGoodsCost(): ?float
    {
        return $this->returnGoodsCost;
    }

    /**
     * @param float $returnGoodsCost
     * @return self
     */
    public function setReturnGoodsCost(?float $returnGoodsCost): self
    {
        $this->returnGoodsCost = $returnGoodsCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getReturnGoodsGrant(): ?float
    {
        return $this->returnGoodsGrant;
    }

    /**
     * @param float $returnGoodsGrant
     * @return self
     */
    public function setReturnGoodsGrant(?float $returnGoodsGrant): self
    {
        $this->returnGoodsGrant = $returnGoodsGrant;
        return $this;
    }

    /**
     * @return float
     */
    public function getReturnGoodsValidGrant(): ?float
    {
        return $this->returnGoodsValidGrant;
    }

    /**
     * @param float $returnGoodsValidGrant
     * @return self
     */
    public function setReturnGoodsValidGrant(?float $returnGoodsValidGrant): self
    {
        $this->returnGoodsValidGrant = $returnGoodsValidGrant;
        return $this;
    }

    /**
     * @return float
     */
    public function getSearchGrant(): ?float
    {
        return $this->searchGrant;
    }

    /**
     * @param float $searchGrant
     * @return self
     */
    public function setSearchGrant(?float $searchGrant): self
    {
        $this->searchGrant = $searchGrant;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionGrant(): ?float
    {
        return $this->unionGrant;
    }

    /**
     * @param float $unionGrant
     * @return self
     */
    public function setUnionGrant(?float $unionGrant): self
    {
        $this->unionGrant = $unionGrant;
        return $this;
    }

    /**
     * @return float
     */
    public function getValidBalance(): ?float
    {
        return $this->validBalance;
    }

    /**
     * @param float $validBalance
     * @return self
     */
    public function setValidBalance(?float $validBalance): self
    {
        $this->validBalance = $validBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getValidCash(): ?float
    {
        return $this->validCash;
    }

    /**
     * @param float $validCash
     * @return self
     */
    public function setValidCash(?float $validCash): self
    {
        $this->validCash = $validCash;
        return $this;
    }

    /**
     * @return float
     */
    public function getValidGrant(): ?float
    {
        return $this->validGrant;
    }

    /**
     * @param float $validGrant
     * @return self
     */
    public function setValidGrant(?float $validGrant): self
    {
        $this->validGrant = $validGrant;
        return $this;
    }

    /**
     * @return float
     */
    public function getValidReturnGoodsAbs(): ?float
    {
        return $this->validReturnGoodsAbs;
    }

    /**
     * @param float $validReturnGoodsAbs
     * @return self
     */
    public function setValidReturnGoodsAbs(?float $validReturnGoodsAbs): self
    {
        $this->validReturnGoodsAbs = $validReturnGoodsAbs;
        return $this;
    }

    /**
     * @return string
     */
    public function getWalletId(): ?string
    {
        return $this->walletId;
    }

    /**
     * @param string $walletId
     * @return self
     */
    public function setWalletId(?string $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWalletName(): ?string
    {
        return $this->walletName;
    }

    /**
     * @param string $walletName
     * @return self
     */
    public function setWalletName(?string $walletName): self
    {
        $this->walletName = $walletName;
        return $this;
    }

    /**
     * @return string
     */
    public function getWalletTotalBalanceValid(): ?string
    {
        return $this->walletTotalBalanceValid;
    }

    /**
     * @param string $walletTotalBalanceValid
     * @return self
     */
    public function setWalletTotalBalanceValid(?string $walletTotalBalanceValid): self
    {
        $this->walletTotalBalanceValid = $walletTotalBalanceValid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->balance !== null) {
            $result['balance'] = $this->balance;
        }
        if ($this->cash !== null) {
            $result['cash'] = $this->cash;
        }
        if ($this->commonGrant !== null) {
            $result['common_grant'] = $this->commonGrant;
        }
        if ($this->compensationGrant !== null) {
            $result['compensation_grant'] = $this->compensationGrant;
        }
        if ($this->compensationValidGrant !== null) {
            $result['compensation_valid_grant'] = $this->compensationValidGrant;
        }
        if ($this->defaultGrant !== null) {
            $result['default_grant'] = $this->defaultGrant;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->grant !== null) {
            $result['grant'] = $this->grant;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->returnGoodsAbs !== null) {
            $result['return_goods_abs'] = $this->returnGoodsAbs;
        }
        if ($this->returnGoodsCost !== null) {
            $result['return_goods_cost'] = $this->returnGoodsCost;
        }
        if ($this->returnGoodsGrant !== null) {
            $result['return_goods_grant'] = $this->returnGoodsGrant;
        }
        if ($this->returnGoodsValidGrant !== null) {
            $result['return_goods_valid_grant'] = $this->returnGoodsValidGrant;
        }
        if ($this->searchGrant !== null) {
            $result['search_grant'] = $this->searchGrant;
        }
        if ($this->unionGrant !== null) {
            $result['union_grant'] = $this->unionGrant;
        }
        if ($this->validBalance !== null) {
            $result['valid_balance'] = $this->validBalance;
        }
        if ($this->validCash !== null) {
            $result['valid_cash'] = $this->validCash;
        }
        if ($this->validGrant !== null) {
            $result['valid_grant'] = $this->validGrant;
        }
        if ($this->validReturnGoodsAbs !== null) {
            $result['valid_return_goods_abs'] = $this->validReturnGoodsAbs;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        if ($this->walletName !== null) {
            $result['wallet_name'] = $this->walletName;
        }
        if ($this->walletTotalBalanceValid !== null) {
            $result['wallet_total_balance_valid'] = $this->walletTotalBalanceValid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['balance'] ?? null) !== null) {
            $obj->balance = (float) $v;
        }
        if (($v = $data['cash'] ?? null) !== null) {
            $obj->cash = (float) $v;
        }
        if (($v = $data['common_grant'] ?? null) !== null) {
            $obj->commonGrant = (float) $v;
        }
        if (($v = $data['compensation_grant'] ?? null) !== null) {
            $obj->compensationGrant = (float) $v;
        }
        if (($v = $data['compensation_valid_grant'] ?? null) !== null) {
            $obj->compensationValidGrant = (float) $v;
        }
        if (($v = $data['default_grant'] ?? null) !== null) {
            $obj->defaultGrant = (float) $v;
        }
        if (($v = $data['email'] ?? null) !== null) {
            $obj->email = (string) $v;
        }
        if (($v = $data['grant'] ?? null) !== null) {
            $obj->grant = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['return_goods_abs'] ?? null) !== null) {
            $obj->returnGoodsAbs = (float) $v;
        }
        if (($v = $data['return_goods_cost'] ?? null) !== null) {
            $obj->returnGoodsCost = (float) $v;
        }
        if (($v = $data['return_goods_grant'] ?? null) !== null) {
            $obj->returnGoodsGrant = (float) $v;
        }
        if (($v = $data['return_goods_valid_grant'] ?? null) !== null) {
            $obj->returnGoodsValidGrant = (float) $v;
        }
        if (($v = $data['search_grant'] ?? null) !== null) {
            $obj->searchGrant = (float) $v;
        }
        if (($v = $data['union_grant'] ?? null) !== null) {
            $obj->unionGrant = (float) $v;
        }
        if (($v = $data['valid_balance'] ?? null) !== null) {
            $obj->validBalance = (float) $v;
        }
        if (($v = $data['valid_cash'] ?? null) !== null) {
            $obj->validCash = (float) $v;
        }
        if (($v = $data['valid_grant'] ?? null) !== null) {
            $obj->validGrant = (float) $v;
        }
        if (($v = $data['valid_return_goods_abs'] ?? null) !== null) {
            $obj->validReturnGoodsAbs = (float) $v;
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (string) $v;
        }
        if (($v = $data['wallet_name'] ?? null) !== null) {
            $obj->walletName = (string) $v;
        }
        if (($v = $data['wallet_total_balance_valid'] ?? null) !== null) {
            $obj->walletTotalBalanceValid = (string) $v;
        }
        return $obj;
    }
}

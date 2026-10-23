<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerItemInfoDailyListInner implements \JsonSerializable
{
    /**
     * 达人已发放收益
     * @var int
     */
    protected ?int $authorAmount = null;

    /**
     * @var int
     */
    protected ?int $authorAmountIaa = null;

    /**
     * @var int
     */
    protected ?int $authorAmountIap = null;

    /**
     * 达人预估广告消耗收益
     * @var int
     */
    protected ?int $authorCostAdReward = null;

    /**
     * 达人预估cpa收益
     * @var int
     */
    protected ?int $authorEstAmountCpa = null;

    /**
     * 达人预估cps收益
     * @var int
     */
    protected ?int $authorEstAmountCps = null;

    /**
     * 达人 预估 除广告消耗收益之外的收益
     * @var int
     */
    protected ?int $authorEstAmountNonAd = null;

    /**
     * 达人已结算广告消耗收益
     * @var int
     */
    protected ?int $authorSettleAdReward = null;

    /**
     * 达人 已结算 除广告消耗收益之外的收益
     * @var int
     */
    protected ?int $authorSettleAmountNonAd = null;

    /**
     * item_id 产生的分天广告收益，单位为厘（元*1000）
     * @var string
     */
    protected ?string $iaaIncomeDaily = null;

    /**
     * @var string
     */
    protected ?string $pDate = null;

    /**
     * 服务商预估广告消耗收益
     * @var int
     */
    protected ?int $providerCostAdReward = null;

    /**
     * 服务商预估收益
     * @var int
     */
    protected ?int $providerEstAmount = null;

    /**
     * 服务商预估cpa收益
     * @var int
     */
    protected ?int $providerEstAmountCpa = null;

    /**
     * 服务商预估cps收益
     * @var int
     */
    protected ?int $providerEstAmountCps = null;

    /**
     * 服务商预估收益iaa
     * @var int
     */
    protected ?int $providerEstAmountIaa = null;

    /**
     * 服务商预估收益iap
     * @var int
     */
    protected ?int $providerEstAmountIap = null;

    /**
     * 服务商 预估 除广告消耗收益之外的收益
     * @var int
     */
    protected ?int $providerEstAmountNonAd = null;

    /**
     * 服务商已结算广告消耗收益
     * @var int
     */
    protected ?int $providerSettleAdReward = null;

    /**
     * 服务商 已结算 除广告消耗收益之外的收益
     * @var int
     */
    protected ?int $providerSettleAmountNonAd = null;

    /**
     * 撮合中介已发放佣金(和mcn_amount类似)，单位为厘（元*1000）
     * @var int
     */
    protected ?int $serviceProviderAmount = null;

    /**
     * @var int
     */
    protected ?int $serviceProviderAmountIaa = null;

    /**
     * @var int
     */
    protected ?int $serviceProviderAmountIap = null;

    /**
     * @var int
     */
    protected ?int $sharePrice = null;

    /**
     * @var int
     */
    protected ?int $sharePriceIaa = null;

    /**
     * @var int
     */
    protected ?int $sharePriceIap = null;

    /**
     * @var int
     */
    protected ?int $sharePriceTotal = null;

    /**
     * @var int
     */
    protected ?int $sharePriceTotalIaa = null;

    /**
     * @var int
     */
    protected ?int $sharePriceTotalIap = null;

    /**
     * 达人+服务商 预估 广告消耗收益
     * @var int
     */
    protected ?int $totalCostAdReward = null;

    /**
     * 达人+服务商 已结算 除广告消耗收益之外的收益
     * @var int
     */
    protected ?int $totalEstAmountNonAd = null;

    /**
     * 达人已发放收益
     * @return int
     */
    public function getAuthorAmount(): ?int
    {
        return $this->authorAmount;
    }

    /**
     * 达人已发放收益
     * @param int $authorAmount
     * @return self
     */
    public function setAuthorAmount(?int $authorAmount): self
    {
        $this->authorAmount = $authorAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorAmountIaa(): ?int
    {
        return $this->authorAmountIaa;
    }

    /**
     * @param int $authorAmountIaa
     * @return self
     */
    public function setAuthorAmountIaa(?int $authorAmountIaa): self
    {
        $this->authorAmountIaa = $authorAmountIaa;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorAmountIap(): ?int
    {
        return $this->authorAmountIap;
    }

    /**
     * @param int $authorAmountIap
     * @return self
     */
    public function setAuthorAmountIap(?int $authorAmountIap): self
    {
        $this->authorAmountIap = $authorAmountIap;
        return $this;
    }

    /**
     * 达人预估广告消耗收益
     * @return int
     */
    public function getAuthorCostAdReward(): ?int
    {
        return $this->authorCostAdReward;
    }

    /**
     * 达人预估广告消耗收益
     * @param int $authorCostAdReward
     * @return self
     */
    public function setAuthorCostAdReward(?int $authorCostAdReward): self
    {
        $this->authorCostAdReward = $authorCostAdReward;
        return $this;
    }

    /**
     * 达人预估cpa收益
     * @return int
     */
    public function getAuthorEstAmountCpa(): ?int
    {
        return $this->authorEstAmountCpa;
    }

    /**
     * 达人预估cpa收益
     * @param int $authorEstAmountCpa
     * @return self
     */
    public function setAuthorEstAmountCpa(?int $authorEstAmountCpa): self
    {
        $this->authorEstAmountCpa = $authorEstAmountCpa;
        return $this;
    }

    /**
     * 达人预估cps收益
     * @return int
     */
    public function getAuthorEstAmountCps(): ?int
    {
        return $this->authorEstAmountCps;
    }

    /**
     * 达人预估cps收益
     * @param int $authorEstAmountCps
     * @return self
     */
    public function setAuthorEstAmountCps(?int $authorEstAmountCps): self
    {
        $this->authorEstAmountCps = $authorEstAmountCps;
        return $this;
    }

    /**
     * 达人 预估 除广告消耗收益之外的收益
     * @return int
     */
    public function getAuthorEstAmountNonAd(): ?int
    {
        return $this->authorEstAmountNonAd;
    }

    /**
     * 达人 预估 除广告消耗收益之外的收益
     * @param int $authorEstAmountNonAd
     * @return self
     */
    public function setAuthorEstAmountNonAd(?int $authorEstAmountNonAd): self
    {
        $this->authorEstAmountNonAd = $authorEstAmountNonAd;
        return $this;
    }

    /**
     * 达人已结算广告消耗收益
     * @return int
     */
    public function getAuthorSettleAdReward(): ?int
    {
        return $this->authorSettleAdReward;
    }

    /**
     * 达人已结算广告消耗收益
     * @param int $authorSettleAdReward
     * @return self
     */
    public function setAuthorSettleAdReward(?int $authorSettleAdReward): self
    {
        $this->authorSettleAdReward = $authorSettleAdReward;
        return $this;
    }

    /**
     * 达人 已结算 除广告消耗收益之外的收益
     * @return int
     */
    public function getAuthorSettleAmountNonAd(): ?int
    {
        return $this->authorSettleAmountNonAd;
    }

    /**
     * 达人 已结算 除广告消耗收益之外的收益
     * @param int $authorSettleAmountNonAd
     * @return self
     */
    public function setAuthorSettleAmountNonAd(?int $authorSettleAmountNonAd): self
    {
        $this->authorSettleAmountNonAd = $authorSettleAmountNonAd;
        return $this;
    }

    /**
     * item_id 产生的分天广告收益，单位为厘（元*1000）
     * @return string
     */
    public function getIaaIncomeDaily(): ?string
    {
        return $this->iaaIncomeDaily;
    }

    /**
     * item_id 产生的分天广告收益，单位为厘（元*1000）
     * @param string $iaaIncomeDaily
     * @return self
     */
    public function setIaaIncomeDaily(?string $iaaIncomeDaily): self
    {
        $this->iaaIncomeDaily = $iaaIncomeDaily;
        return $this;
    }

    /**
     * @return string
     */
    public function getPDate(): ?string
    {
        return $this->pDate;
    }

    /**
     * @param string $pDate
     * @return self
     */
    public function setPDate(?string $pDate): self
    {
        $this->pDate = $pDate;
        return $this;
    }

    /**
     * 服务商预估广告消耗收益
     * @return int
     */
    public function getProviderCostAdReward(): ?int
    {
        return $this->providerCostAdReward;
    }

    /**
     * 服务商预估广告消耗收益
     * @param int $providerCostAdReward
     * @return self
     */
    public function setProviderCostAdReward(?int $providerCostAdReward): self
    {
        $this->providerCostAdReward = $providerCostAdReward;
        return $this;
    }

    /**
     * 服务商预估收益
     * @return int
     */
    public function getProviderEstAmount(): ?int
    {
        return $this->providerEstAmount;
    }

    /**
     * 服务商预估收益
     * @param int $providerEstAmount
     * @return self
     */
    public function setProviderEstAmount(?int $providerEstAmount): self
    {
        $this->providerEstAmount = $providerEstAmount;
        return $this;
    }

    /**
     * 服务商预估cpa收益
     * @return int
     */
    public function getProviderEstAmountCpa(): ?int
    {
        return $this->providerEstAmountCpa;
    }

    /**
     * 服务商预估cpa收益
     * @param int $providerEstAmountCpa
     * @return self
     */
    public function setProviderEstAmountCpa(?int $providerEstAmountCpa): self
    {
        $this->providerEstAmountCpa = $providerEstAmountCpa;
        return $this;
    }

    /**
     * 服务商预估cps收益
     * @return int
     */
    public function getProviderEstAmountCps(): ?int
    {
        return $this->providerEstAmountCps;
    }

    /**
     * 服务商预估cps收益
     * @param int $providerEstAmountCps
     * @return self
     */
    public function setProviderEstAmountCps(?int $providerEstAmountCps): self
    {
        $this->providerEstAmountCps = $providerEstAmountCps;
        return $this;
    }

    /**
     * 服务商预估收益iaa
     * @return int
     */
    public function getProviderEstAmountIaa(): ?int
    {
        return $this->providerEstAmountIaa;
    }

    /**
     * 服务商预估收益iaa
     * @param int $providerEstAmountIaa
     * @return self
     */
    public function setProviderEstAmountIaa(?int $providerEstAmountIaa): self
    {
        $this->providerEstAmountIaa = $providerEstAmountIaa;
        return $this;
    }

    /**
     * 服务商预估收益iap
     * @return int
     */
    public function getProviderEstAmountIap(): ?int
    {
        return $this->providerEstAmountIap;
    }

    /**
     * 服务商预估收益iap
     * @param int $providerEstAmountIap
     * @return self
     */
    public function setProviderEstAmountIap(?int $providerEstAmountIap): self
    {
        $this->providerEstAmountIap = $providerEstAmountIap;
        return $this;
    }

    /**
     * 服务商 预估 除广告消耗收益之外的收益
     * @return int
     */
    public function getProviderEstAmountNonAd(): ?int
    {
        return $this->providerEstAmountNonAd;
    }

    /**
     * 服务商 预估 除广告消耗收益之外的收益
     * @param int $providerEstAmountNonAd
     * @return self
     */
    public function setProviderEstAmountNonAd(?int $providerEstAmountNonAd): self
    {
        $this->providerEstAmountNonAd = $providerEstAmountNonAd;
        return $this;
    }

    /**
     * 服务商已结算广告消耗收益
     * @return int
     */
    public function getProviderSettleAdReward(): ?int
    {
        return $this->providerSettleAdReward;
    }

    /**
     * 服务商已结算广告消耗收益
     * @param int $providerSettleAdReward
     * @return self
     */
    public function setProviderSettleAdReward(?int $providerSettleAdReward): self
    {
        $this->providerSettleAdReward = $providerSettleAdReward;
        return $this;
    }

    /**
     * 服务商 已结算 除广告消耗收益之外的收益
     * @return int
     */
    public function getProviderSettleAmountNonAd(): ?int
    {
        return $this->providerSettleAmountNonAd;
    }

    /**
     * 服务商 已结算 除广告消耗收益之外的收益
     * @param int $providerSettleAmountNonAd
     * @return self
     */
    public function setProviderSettleAmountNonAd(?int $providerSettleAmountNonAd): self
    {
        $this->providerSettleAmountNonAd = $providerSettleAmountNonAd;
        return $this;
    }

    /**
     * 撮合中介已发放佣金(和mcn_amount类似)，单位为厘（元*1000）
     * @return int
     */
    public function getServiceProviderAmount(): ?int
    {
        return $this->serviceProviderAmount;
    }

    /**
     * 撮合中介已发放佣金(和mcn_amount类似)，单位为厘（元*1000）
     * @param int $serviceProviderAmount
     * @return self
     */
    public function setServiceProviderAmount(?int $serviceProviderAmount): self
    {
        $this->serviceProviderAmount = $serviceProviderAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceProviderAmountIaa(): ?int
    {
        return $this->serviceProviderAmountIaa;
    }

    /**
     * @param int $serviceProviderAmountIaa
     * @return self
     */
    public function setServiceProviderAmountIaa(?int $serviceProviderAmountIaa): self
    {
        $this->serviceProviderAmountIaa = $serviceProviderAmountIaa;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceProviderAmountIap(): ?int
    {
        return $this->serviceProviderAmountIap;
    }

    /**
     * @param int $serviceProviderAmountIap
     * @return self
     */
    public function setServiceProviderAmountIap(?int $serviceProviderAmountIap): self
    {
        $this->serviceProviderAmountIap = $serviceProviderAmountIap;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharePrice(): ?int
    {
        return $this->sharePrice;
    }

    /**
     * @param int $sharePrice
     * @return self
     */
    public function setSharePrice(?int $sharePrice): self
    {
        $this->sharePrice = $sharePrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharePriceIaa(): ?int
    {
        return $this->sharePriceIaa;
    }

    /**
     * @param int $sharePriceIaa
     * @return self
     */
    public function setSharePriceIaa(?int $sharePriceIaa): self
    {
        $this->sharePriceIaa = $sharePriceIaa;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharePriceIap(): ?int
    {
        return $this->sharePriceIap;
    }

    /**
     * @param int $sharePriceIap
     * @return self
     */
    public function setSharePriceIap(?int $sharePriceIap): self
    {
        $this->sharePriceIap = $sharePriceIap;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharePriceTotal(): ?int
    {
        return $this->sharePriceTotal;
    }

    /**
     * @param int $sharePriceTotal
     * @return self
     */
    public function setSharePriceTotal(?int $sharePriceTotal): self
    {
        $this->sharePriceTotal = $sharePriceTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharePriceTotalIaa(): ?int
    {
        return $this->sharePriceTotalIaa;
    }

    /**
     * @param int $sharePriceTotalIaa
     * @return self
     */
    public function setSharePriceTotalIaa(?int $sharePriceTotalIaa): self
    {
        $this->sharePriceTotalIaa = $sharePriceTotalIaa;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharePriceTotalIap(): ?int
    {
        return $this->sharePriceTotalIap;
    }

    /**
     * @param int $sharePriceTotalIap
     * @return self
     */
    public function setSharePriceTotalIap(?int $sharePriceTotalIap): self
    {
        $this->sharePriceTotalIap = $sharePriceTotalIap;
        return $this;
    }

    /**
     * 达人+服务商 预估 广告消耗收益
     * @return int
     */
    public function getTotalCostAdReward(): ?int
    {
        return $this->totalCostAdReward;
    }

    /**
     * 达人+服务商 预估 广告消耗收益
     * @param int $totalCostAdReward
     * @return self
     */
    public function setTotalCostAdReward(?int $totalCostAdReward): self
    {
        $this->totalCostAdReward = $totalCostAdReward;
        return $this;
    }

    /**
     * 达人+服务商 已结算 除广告消耗收益之外的收益
     * @return int
     */
    public function getTotalEstAmountNonAd(): ?int
    {
        return $this->totalEstAmountNonAd;
    }

    /**
     * 达人+服务商 已结算 除广告消耗收益之外的收益
     * @param int $totalEstAmountNonAd
     * @return self
     */
    public function setTotalEstAmountNonAd(?int $totalEstAmountNonAd): self
    {
        $this->totalEstAmountNonAd = $totalEstAmountNonAd;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorAmount !== null) {
            $result['author_amount'] = $this->authorAmount;
        }
        if ($this->authorAmountIaa !== null) {
            $result['author_amount_iaa'] = $this->authorAmountIaa;
        }
        if ($this->authorAmountIap !== null) {
            $result['author_amount_iap'] = $this->authorAmountIap;
        }
        if ($this->authorCostAdReward !== null) {
            $result['author_cost_ad_reward'] = $this->authorCostAdReward;
        }
        if ($this->authorEstAmountCpa !== null) {
            $result['author_est_amount_cpa'] = $this->authorEstAmountCpa;
        }
        if ($this->authorEstAmountCps !== null) {
            $result['author_est_amount_cps'] = $this->authorEstAmountCps;
        }
        if ($this->authorEstAmountNonAd !== null) {
            $result['author_est_amount_non_ad'] = $this->authorEstAmountNonAd;
        }
        if ($this->authorSettleAdReward !== null) {
            $result['author_settle_ad_reward'] = $this->authorSettleAdReward;
        }
        if ($this->authorSettleAmountNonAd !== null) {
            $result['author_settle_amount_non_ad'] = $this->authorSettleAmountNonAd;
        }
        if ($this->iaaIncomeDaily !== null) {
            $result['iaa_income_daily'] = $this->iaaIncomeDaily;
        }
        if ($this->pDate !== null) {
            $result['p_date'] = $this->pDate;
        }
        if ($this->providerCostAdReward !== null) {
            $result['provider_cost_ad_reward'] = $this->providerCostAdReward;
        }
        if ($this->providerEstAmount !== null) {
            $result['provider_est_amount'] = $this->providerEstAmount;
        }
        if ($this->providerEstAmountCpa !== null) {
            $result['provider_est_amount_cpa'] = $this->providerEstAmountCpa;
        }
        if ($this->providerEstAmountCps !== null) {
            $result['provider_est_amount_cps'] = $this->providerEstAmountCps;
        }
        if ($this->providerEstAmountIaa !== null) {
            $result['provider_est_amount_iaa'] = $this->providerEstAmountIaa;
        }
        if ($this->providerEstAmountIap !== null) {
            $result['provider_est_amount_iap'] = $this->providerEstAmountIap;
        }
        if ($this->providerEstAmountNonAd !== null) {
            $result['provider_est_amount_non_ad'] = $this->providerEstAmountNonAd;
        }
        if ($this->providerSettleAdReward !== null) {
            $result['provider_settle_ad_reward'] = $this->providerSettleAdReward;
        }
        if ($this->providerSettleAmountNonAd !== null) {
            $result['provider_settle_amount_non_ad'] = $this->providerSettleAmountNonAd;
        }
        if ($this->serviceProviderAmount !== null) {
            $result['service_provider_amount'] = $this->serviceProviderAmount;
        }
        if ($this->serviceProviderAmountIaa !== null) {
            $result['service_provider_amount_iaa'] = $this->serviceProviderAmountIaa;
        }
        if ($this->serviceProviderAmountIap !== null) {
            $result['service_provider_amount_iap'] = $this->serviceProviderAmountIap;
        }
        if ($this->sharePrice !== null) {
            $result['share_price'] = $this->sharePrice;
        }
        if ($this->sharePriceIaa !== null) {
            $result['share_price_iaa'] = $this->sharePriceIaa;
        }
        if ($this->sharePriceIap !== null) {
            $result['share_price_iap'] = $this->sharePriceIap;
        }
        if ($this->sharePriceTotal !== null) {
            $result['share_price_total'] = $this->sharePriceTotal;
        }
        if ($this->sharePriceTotalIaa !== null) {
            $result['share_price_total_iaa'] = $this->sharePriceTotalIaa;
        }
        if ($this->sharePriceTotalIap !== null) {
            $result['share_price_total_iap'] = $this->sharePriceTotalIap;
        }
        if ($this->totalCostAdReward !== null) {
            $result['total_cost_ad_reward'] = $this->totalCostAdReward;
        }
        if ($this->totalEstAmountNonAd !== null) {
            $result['total_est_amount_non_ad'] = $this->totalEstAmountNonAd;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_amount'] ?? null) !== null) {
            $obj->authorAmount = (int) $v;
        }
        if (($v = $data['author_amount_iaa'] ?? null) !== null) {
            $obj->authorAmountIaa = (int) $v;
        }
        if (($v = $data['author_amount_iap'] ?? null) !== null) {
            $obj->authorAmountIap = (int) $v;
        }
        if (($v = $data['author_cost_ad_reward'] ?? null) !== null) {
            $obj->authorCostAdReward = (int) $v;
        }
        if (($v = $data['author_est_amount_cpa'] ?? null) !== null) {
            $obj->authorEstAmountCpa = (int) $v;
        }
        if (($v = $data['author_est_amount_cps'] ?? null) !== null) {
            $obj->authorEstAmountCps = (int) $v;
        }
        if (($v = $data['author_est_amount_non_ad'] ?? null) !== null) {
            $obj->authorEstAmountNonAd = (int) $v;
        }
        if (($v = $data['author_settle_ad_reward'] ?? null) !== null) {
            $obj->authorSettleAdReward = (int) $v;
        }
        if (($v = $data['author_settle_amount_non_ad'] ?? null) !== null) {
            $obj->authorSettleAmountNonAd = (int) $v;
        }
        if (($v = $data['iaa_income_daily'] ?? null) !== null) {
            $obj->iaaIncomeDaily = (string) $v;
        }
        if (($v = $data['p_date'] ?? null) !== null) {
            $obj->pDate = (string) $v;
        }
        if (($v = $data['provider_cost_ad_reward'] ?? null) !== null) {
            $obj->providerCostAdReward = (int) $v;
        }
        if (($v = $data['provider_est_amount'] ?? null) !== null) {
            $obj->providerEstAmount = (int) $v;
        }
        if (($v = $data['provider_est_amount_cpa'] ?? null) !== null) {
            $obj->providerEstAmountCpa = (int) $v;
        }
        if (($v = $data['provider_est_amount_cps'] ?? null) !== null) {
            $obj->providerEstAmountCps = (int) $v;
        }
        if (($v = $data['provider_est_amount_iaa'] ?? null) !== null) {
            $obj->providerEstAmountIaa = (int) $v;
        }
        if (($v = $data['provider_est_amount_iap'] ?? null) !== null) {
            $obj->providerEstAmountIap = (int) $v;
        }
        if (($v = $data['provider_est_amount_non_ad'] ?? null) !== null) {
            $obj->providerEstAmountNonAd = (int) $v;
        }
        if (($v = $data['provider_settle_ad_reward'] ?? null) !== null) {
            $obj->providerSettleAdReward = (int) $v;
        }
        if (($v = $data['provider_settle_amount_non_ad'] ?? null) !== null) {
            $obj->providerSettleAmountNonAd = (int) $v;
        }
        if (($v = $data['service_provider_amount'] ?? null) !== null) {
            $obj->serviceProviderAmount = (int) $v;
        }
        if (($v = $data['service_provider_amount_iaa'] ?? null) !== null) {
            $obj->serviceProviderAmountIaa = (int) $v;
        }
        if (($v = $data['service_provider_amount_iap'] ?? null) !== null) {
            $obj->serviceProviderAmountIap = (int) $v;
        }
        if (($v = $data['share_price'] ?? null) !== null) {
            $obj->sharePrice = (int) $v;
        }
        if (($v = $data['share_price_iaa'] ?? null) !== null) {
            $obj->sharePriceIaa = (int) $v;
        }
        if (($v = $data['share_price_iap'] ?? null) !== null) {
            $obj->sharePriceIap = (int) $v;
        }
        if (($v = $data['share_price_total'] ?? null) !== null) {
            $obj->sharePriceTotal = (int) $v;
        }
        if (($v = $data['share_price_total_iaa'] ?? null) !== null) {
            $obj->sharePriceTotalIaa = (int) $v;
        }
        if (($v = $data['share_price_total_iap'] ?? null) !== null) {
            $obj->sharePriceTotalIap = (int) $v;
        }
        if (($v = $data['total_cost_ad_reward'] ?? null) !== null) {
            $obj->totalCostAdReward = (int) $v;
        }
        if (($v = $data['total_est_amount_non_ad'] ?? null) !== null) {
            $obj->totalEstAmountNonAd = (int) $v;
        }
        return $obj;
    }
}

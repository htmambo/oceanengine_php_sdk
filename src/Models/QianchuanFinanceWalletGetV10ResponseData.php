<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanFinanceWalletGetV10ResponseData implements \JsonSerializable
{
    /**
     * 品牌余额
     * @var int
     */
    protected ?int $brandBalance = null;

    /**
     * 品牌余额-不可用余额
     * @var int
     */
    protected ?int $brandBalanceInvalid = null;

    /**
     * 品牌余额-不可用余额-冻结
     * @var int
     */
    protected ?int $brandBalanceInvalidFrozen = null;

    /**
     * 品牌余额-可用余额
     * @var int
     */
    protected ?int $brandBalanceValid = null;

    /**
     * 品牌余额-可用余额-赠款
     * @var int
     */
    protected ?int $brandBalanceValidGrant = null;

    /**
     * 品牌余额-可用余额-非赠款
     * @var int
     */
    protected ?int $brandBalanceValidNonGrant = null;

    /**
     * 赠款余额-巨量信息流广告-可用
     * @var int
     */
    protected ?int $commonValidGrantBalance = null;

    /**
     * 消返红包余额
     * @var int
     */
    protected ?int $deductionCouponBalance = null;

    /**
     * 消返红包余额（通用）
     * @var int
     */
    protected ?int $deductionCouponBalanceAll = null;

    /**
     * 消返红包余额（代投）
     * @var int
     */
    protected ?int $deductionCouponBalanceOther = null;

    /**
     * 消返红包余额（自投）
     * @var int
     */
    protected ?int $deductionCouponBalanceSelf = null;

    /**
     * 赠款余额-通用-可用
     * @var int
     */
    protected ?int $defaultValidGrantBalance = null;

    /**
     * 通用余额-不可用余额
     * @var int
     */
    protected ?int $generalBalanceInvalid = null;

    /**
     * 通用余额-不可用余额-冻结
     * @var int
     */
    protected ?int $generalBalanceInvalidFrozen = null;

    /**
     * 通用余额-不可用余额-随心推已下单
     * @var int
     */
    protected ?int $generalBalanceInvalidOrder = null;

    /**
     * 通用余额-可用余额
     * @var int
     */
    protected ?int $generalBalanceValid = null;

    /**
     * 通用余额-可用余额-赠款-巨量信息流广告
     * @var int
     */
    protected ?int $generalBalanceValidGrantCommon = null;

    /**
     * 通用余额-可用余额-赠款-通用
     * @var int
     */
    protected ?int $generalBalanceValidGrantDefault = null;

    /**
     * 通用余额-可用余额-赠款-巨量搜索广告
     * @var int
     */
    protected ?int $generalBalanceValidGrantSearch = null;

    /**
     * 通用余额-可用余额-赠款-穿山甲
     * @var int
     */
    protected ?int $generalBalanceValidGrantUnion = null;

    /**
     * 通用余额-可用余额-非赠款
     * @var int
     */
    protected ?int $generalBalanceValidNonGrant = null;

    /**
     * 通用余额
     * @var int
     */
    protected ?int $generalTotalBalance = null;

    /**
     * 赠款余额
     * @var int
     */
    protected ?int $grantBalance = null;

    /**
     * 15天内赠款到期金额
     * @var int
     */
    protected ?int $grantExpiring = null;

    /**
     * 赠款余额-穿山甲-可用
     * @var int
     */
    protected ?int $searchValidGrantBalance = null;

    /**
     * 共享赠款余额
     * @var int
     */
    protected ?int $shareBalance = null;

    /**
     * 共享赠款余额-30天内到期余额
     * @var int
     */
    protected ?int $shareBalanceExpiring = null;

    /**
     * 共享赠款余额-可用余额
     * @var int
     */
    protected ?int $shareBalanceValid = null;

    /**
     * 共享赠款余额-可用余额-赠款-巨量信息流广告
     * @var int
     */
    protected ?int $shareBalanceValidGrantCommon = null;

    /**
     * 共享赠款余额-可用余额-赠款-通用
     * @var int
     */
    protected ?int $shareBalanceValidGrantDefault = null;

    /**
     * 共享赠款余额-可用余额-赠款-巨量搜索广告
     * @var int
     */
    protected ?int $shareBalanceValidGrantSearch = null;

    /**
     * 共享赠款余额-可用余额-赠款-穿山甲
     * @var int
     */
    protected ?int $shareBalanceValidGrantUnion = null;

    /**
     * 共享赠款余额到期详情
     * @var \Oceanengine\Models\QianchuanFinanceWalletGetV10ResponseDataShareExpiringDetailListInner[]
     */
    protected ?array $shareExpiringDetailList = null;

    /**
     * 账户总余额
     * @var int
     */
    protected ?int $totalBalanceAbs = null;

    /**
     * 赠款余额-穿山甲-可用
     * @var int
     */
    protected ?int $unionValidGrantBalance = null;

    /**
     * 品牌余额
     * @return int
     */
    public function getBrandBalance(): ?int
    {
        return $this->brandBalance;
    }

    /**
     * 品牌余额
     * @param int $brandBalance
     * @return self
     */
    public function setBrandBalance(?int $brandBalance): self
    {
        $this->brandBalance = $brandBalance;
        return $this;
    }

    /**
     * 品牌余额-不可用余额
     * @return int
     */
    public function getBrandBalanceInvalid(): ?int
    {
        return $this->brandBalanceInvalid;
    }

    /**
     * 品牌余额-不可用余额
     * @param int $brandBalanceInvalid
     * @return self
     */
    public function setBrandBalanceInvalid(?int $brandBalanceInvalid): self
    {
        $this->brandBalanceInvalid = $brandBalanceInvalid;
        return $this;
    }

    /**
     * 品牌余额-不可用余额-冻结
     * @return int
     */
    public function getBrandBalanceInvalidFrozen(): ?int
    {
        return $this->brandBalanceInvalidFrozen;
    }

    /**
     * 品牌余额-不可用余额-冻结
     * @param int $brandBalanceInvalidFrozen
     * @return self
     */
    public function setBrandBalanceInvalidFrozen(?int $brandBalanceInvalidFrozen): self
    {
        $this->brandBalanceInvalidFrozen = $brandBalanceInvalidFrozen;
        return $this;
    }

    /**
     * 品牌余额-可用余额
     * @return int
     */
    public function getBrandBalanceValid(): ?int
    {
        return $this->brandBalanceValid;
    }

    /**
     * 品牌余额-可用余额
     * @param int $brandBalanceValid
     * @return self
     */
    public function setBrandBalanceValid(?int $brandBalanceValid): self
    {
        $this->brandBalanceValid = $brandBalanceValid;
        return $this;
    }

    /**
     * 品牌余额-可用余额-赠款
     * @return int
     */
    public function getBrandBalanceValidGrant(): ?int
    {
        return $this->brandBalanceValidGrant;
    }

    /**
     * 品牌余额-可用余额-赠款
     * @param int $brandBalanceValidGrant
     * @return self
     */
    public function setBrandBalanceValidGrant(?int $brandBalanceValidGrant): self
    {
        $this->brandBalanceValidGrant = $brandBalanceValidGrant;
        return $this;
    }

    /**
     * 品牌余额-可用余额-非赠款
     * @return int
     */
    public function getBrandBalanceValidNonGrant(): ?int
    {
        return $this->brandBalanceValidNonGrant;
    }

    /**
     * 品牌余额-可用余额-非赠款
     * @param int $brandBalanceValidNonGrant
     * @return self
     */
    public function setBrandBalanceValidNonGrant(?int $brandBalanceValidNonGrant): self
    {
        $this->brandBalanceValidNonGrant = $brandBalanceValidNonGrant;
        return $this;
    }

    /**
     * 赠款余额-巨量信息流广告-可用
     * @return int
     */
    public function getCommonValidGrantBalance(): ?int
    {
        return $this->commonValidGrantBalance;
    }

    /**
     * 赠款余额-巨量信息流广告-可用
     * @param int $commonValidGrantBalance
     * @return self
     */
    public function setCommonValidGrantBalance(?int $commonValidGrantBalance): self
    {
        $this->commonValidGrantBalance = $commonValidGrantBalance;
        return $this;
    }

    /**
     * 消返红包余额
     * @return int
     */
    public function getDeductionCouponBalance(): ?int
    {
        return $this->deductionCouponBalance;
    }

    /**
     * 消返红包余额
     * @param int $deductionCouponBalance
     * @return self
     */
    public function setDeductionCouponBalance(?int $deductionCouponBalance): self
    {
        $this->deductionCouponBalance = $deductionCouponBalance;
        return $this;
    }

    /**
     * 消返红包余额（通用）
     * @return int
     */
    public function getDeductionCouponBalanceAll(): ?int
    {
        return $this->deductionCouponBalanceAll;
    }

    /**
     * 消返红包余额（通用）
     * @param int $deductionCouponBalanceAll
     * @return self
     */
    public function setDeductionCouponBalanceAll(?int $deductionCouponBalanceAll): self
    {
        $this->deductionCouponBalanceAll = $deductionCouponBalanceAll;
        return $this;
    }

    /**
     * 消返红包余额（代投）
     * @return int
     */
    public function getDeductionCouponBalanceOther(): ?int
    {
        return $this->deductionCouponBalanceOther;
    }

    /**
     * 消返红包余额（代投）
     * @param int $deductionCouponBalanceOther
     * @return self
     */
    public function setDeductionCouponBalanceOther(?int $deductionCouponBalanceOther): self
    {
        $this->deductionCouponBalanceOther = $deductionCouponBalanceOther;
        return $this;
    }

    /**
     * 消返红包余额（自投）
     * @return int
     */
    public function getDeductionCouponBalanceSelf(): ?int
    {
        return $this->deductionCouponBalanceSelf;
    }

    /**
     * 消返红包余额（自投）
     * @param int $deductionCouponBalanceSelf
     * @return self
     */
    public function setDeductionCouponBalanceSelf(?int $deductionCouponBalanceSelf): self
    {
        $this->deductionCouponBalanceSelf = $deductionCouponBalanceSelf;
        return $this;
    }

    /**
     * 赠款余额-通用-可用
     * @return int
     */
    public function getDefaultValidGrantBalance(): ?int
    {
        return $this->defaultValidGrantBalance;
    }

    /**
     * 赠款余额-通用-可用
     * @param int $defaultValidGrantBalance
     * @return self
     */
    public function setDefaultValidGrantBalance(?int $defaultValidGrantBalance): self
    {
        $this->defaultValidGrantBalance = $defaultValidGrantBalance;
        return $this;
    }

    /**
     * 通用余额-不可用余额
     * @return int
     */
    public function getGeneralBalanceInvalid(): ?int
    {
        return $this->generalBalanceInvalid;
    }

    /**
     * 通用余额-不可用余额
     * @param int $generalBalanceInvalid
     * @return self
     */
    public function setGeneralBalanceInvalid(?int $generalBalanceInvalid): self
    {
        $this->generalBalanceInvalid = $generalBalanceInvalid;
        return $this;
    }

    /**
     * 通用余额-不可用余额-冻结
     * @return int
     */
    public function getGeneralBalanceInvalidFrozen(): ?int
    {
        return $this->generalBalanceInvalidFrozen;
    }

    /**
     * 通用余额-不可用余额-冻结
     * @param int $generalBalanceInvalidFrozen
     * @return self
     */
    public function setGeneralBalanceInvalidFrozen(?int $generalBalanceInvalidFrozen): self
    {
        $this->generalBalanceInvalidFrozen = $generalBalanceInvalidFrozen;
        return $this;
    }

    /**
     * 通用余额-不可用余额-随心推已下单
     * @return int
     */
    public function getGeneralBalanceInvalidOrder(): ?int
    {
        return $this->generalBalanceInvalidOrder;
    }

    /**
     * 通用余额-不可用余额-随心推已下单
     * @param int $generalBalanceInvalidOrder
     * @return self
     */
    public function setGeneralBalanceInvalidOrder(?int $generalBalanceInvalidOrder): self
    {
        $this->generalBalanceInvalidOrder = $generalBalanceInvalidOrder;
        return $this;
    }

    /**
     * 通用余额-可用余额
     * @return int
     */
    public function getGeneralBalanceValid(): ?int
    {
        return $this->generalBalanceValid;
    }

    /**
     * 通用余额-可用余额
     * @param int $generalBalanceValid
     * @return self
     */
    public function setGeneralBalanceValid(?int $generalBalanceValid): self
    {
        $this->generalBalanceValid = $generalBalanceValid;
        return $this;
    }

    /**
     * 通用余额-可用余额-赠款-巨量信息流广告
     * @return int
     */
    public function getGeneralBalanceValidGrantCommon(): ?int
    {
        return $this->generalBalanceValidGrantCommon;
    }

    /**
     * 通用余额-可用余额-赠款-巨量信息流广告
     * @param int $generalBalanceValidGrantCommon
     * @return self
     */
    public function setGeneralBalanceValidGrantCommon(?int $generalBalanceValidGrantCommon): self
    {
        $this->generalBalanceValidGrantCommon = $generalBalanceValidGrantCommon;
        return $this;
    }

    /**
     * 通用余额-可用余额-赠款-通用
     * @return int
     */
    public function getGeneralBalanceValidGrantDefault(): ?int
    {
        return $this->generalBalanceValidGrantDefault;
    }

    /**
     * 通用余额-可用余额-赠款-通用
     * @param int $generalBalanceValidGrantDefault
     * @return self
     */
    public function setGeneralBalanceValidGrantDefault(?int $generalBalanceValidGrantDefault): self
    {
        $this->generalBalanceValidGrantDefault = $generalBalanceValidGrantDefault;
        return $this;
    }

    /**
     * 通用余额-可用余额-赠款-巨量搜索广告
     * @return int
     */
    public function getGeneralBalanceValidGrantSearch(): ?int
    {
        return $this->generalBalanceValidGrantSearch;
    }

    /**
     * 通用余额-可用余额-赠款-巨量搜索广告
     * @param int $generalBalanceValidGrantSearch
     * @return self
     */
    public function setGeneralBalanceValidGrantSearch(?int $generalBalanceValidGrantSearch): self
    {
        $this->generalBalanceValidGrantSearch = $generalBalanceValidGrantSearch;
        return $this;
    }

    /**
     * 通用余额-可用余额-赠款-穿山甲
     * @return int
     */
    public function getGeneralBalanceValidGrantUnion(): ?int
    {
        return $this->generalBalanceValidGrantUnion;
    }

    /**
     * 通用余额-可用余额-赠款-穿山甲
     * @param int $generalBalanceValidGrantUnion
     * @return self
     */
    public function setGeneralBalanceValidGrantUnion(?int $generalBalanceValidGrantUnion): self
    {
        $this->generalBalanceValidGrantUnion = $generalBalanceValidGrantUnion;
        return $this;
    }

    /**
     * 通用余额-可用余额-非赠款
     * @return int
     */
    public function getGeneralBalanceValidNonGrant(): ?int
    {
        return $this->generalBalanceValidNonGrant;
    }

    /**
     * 通用余额-可用余额-非赠款
     * @param int $generalBalanceValidNonGrant
     * @return self
     */
    public function setGeneralBalanceValidNonGrant(?int $generalBalanceValidNonGrant): self
    {
        $this->generalBalanceValidNonGrant = $generalBalanceValidNonGrant;
        return $this;
    }

    /**
     * 通用余额
     * @return int
     */
    public function getGeneralTotalBalance(): ?int
    {
        return $this->generalTotalBalance;
    }

    /**
     * 通用余额
     * @param int $generalTotalBalance
     * @return self
     */
    public function setGeneralTotalBalance(?int $generalTotalBalance): self
    {
        $this->generalTotalBalance = $generalTotalBalance;
        return $this;
    }

    /**
     * 赠款余额
     * @return int
     */
    public function getGrantBalance(): ?int
    {
        return $this->grantBalance;
    }

    /**
     * 赠款余额
     * @param int $grantBalance
     * @return self
     */
    public function setGrantBalance(?int $grantBalance): self
    {
        $this->grantBalance = $grantBalance;
        return $this;
    }

    /**
     * 15天内赠款到期金额
     * @return int
     */
    public function getGrantExpiring(): ?int
    {
        return $this->grantExpiring;
    }

    /**
     * 15天内赠款到期金额
     * @param int $grantExpiring
     * @return self
     */
    public function setGrantExpiring(?int $grantExpiring): self
    {
        $this->grantExpiring = $grantExpiring;
        return $this;
    }

    /**
     * 赠款余额-穿山甲-可用
     * @return int
     */
    public function getSearchValidGrantBalance(): ?int
    {
        return $this->searchValidGrantBalance;
    }

    /**
     * 赠款余额-穿山甲-可用
     * @param int $searchValidGrantBalance
     * @return self
     */
    public function setSearchValidGrantBalance(?int $searchValidGrantBalance): self
    {
        $this->searchValidGrantBalance = $searchValidGrantBalance;
        return $this;
    }

    /**
     * 共享赠款余额
     * @return int
     */
    public function getShareBalance(): ?int
    {
        return $this->shareBalance;
    }

    /**
     * 共享赠款余额
     * @param int $shareBalance
     * @return self
     */
    public function setShareBalance(?int $shareBalance): self
    {
        $this->shareBalance = $shareBalance;
        return $this;
    }

    /**
     * 共享赠款余额-30天内到期余额
     * @return int
     */
    public function getShareBalanceExpiring(): ?int
    {
        return $this->shareBalanceExpiring;
    }

    /**
     * 共享赠款余额-30天内到期余额
     * @param int $shareBalanceExpiring
     * @return self
     */
    public function setShareBalanceExpiring(?int $shareBalanceExpiring): self
    {
        $this->shareBalanceExpiring = $shareBalanceExpiring;
        return $this;
    }

    /**
     * 共享赠款余额-可用余额
     * @return int
     */
    public function getShareBalanceValid(): ?int
    {
        return $this->shareBalanceValid;
    }

    /**
     * 共享赠款余额-可用余额
     * @param int $shareBalanceValid
     * @return self
     */
    public function setShareBalanceValid(?int $shareBalanceValid): self
    {
        $this->shareBalanceValid = $shareBalanceValid;
        return $this;
    }

    /**
     * 共享赠款余额-可用余额-赠款-巨量信息流广告
     * @return int
     */
    public function getShareBalanceValidGrantCommon(): ?int
    {
        return $this->shareBalanceValidGrantCommon;
    }

    /**
     * 共享赠款余额-可用余额-赠款-巨量信息流广告
     * @param int $shareBalanceValidGrantCommon
     * @return self
     */
    public function setShareBalanceValidGrantCommon(?int $shareBalanceValidGrantCommon): self
    {
        $this->shareBalanceValidGrantCommon = $shareBalanceValidGrantCommon;
        return $this;
    }

    /**
     * 共享赠款余额-可用余额-赠款-通用
     * @return int
     */
    public function getShareBalanceValidGrantDefault(): ?int
    {
        return $this->shareBalanceValidGrantDefault;
    }

    /**
     * 共享赠款余额-可用余额-赠款-通用
     * @param int $shareBalanceValidGrantDefault
     * @return self
     */
    public function setShareBalanceValidGrantDefault(?int $shareBalanceValidGrantDefault): self
    {
        $this->shareBalanceValidGrantDefault = $shareBalanceValidGrantDefault;
        return $this;
    }

    /**
     * 共享赠款余额-可用余额-赠款-巨量搜索广告
     * @return int
     */
    public function getShareBalanceValidGrantSearch(): ?int
    {
        return $this->shareBalanceValidGrantSearch;
    }

    /**
     * 共享赠款余额-可用余额-赠款-巨量搜索广告
     * @param int $shareBalanceValidGrantSearch
     * @return self
     */
    public function setShareBalanceValidGrantSearch(?int $shareBalanceValidGrantSearch): self
    {
        $this->shareBalanceValidGrantSearch = $shareBalanceValidGrantSearch;
        return $this;
    }

    /**
     * 共享赠款余额-可用余额-赠款-穿山甲
     * @return int
     */
    public function getShareBalanceValidGrantUnion(): ?int
    {
        return $this->shareBalanceValidGrantUnion;
    }

    /**
     * 共享赠款余额-可用余额-赠款-穿山甲
     * @param int $shareBalanceValidGrantUnion
     * @return self
     */
    public function setShareBalanceValidGrantUnion(?int $shareBalanceValidGrantUnion): self
    {
        $this->shareBalanceValidGrantUnion = $shareBalanceValidGrantUnion;
        return $this;
    }

    /**
     * 共享赠款余额到期详情
     * @return \Oceanengine\Models\QianchuanFinanceWalletGetV10ResponseDataShareExpiringDetailListInner[]
     */
    public function getShareExpiringDetailList(): ?array
    {
        return $this->shareExpiringDetailList;
    }

    /**
     * 共享赠款余额到期详情
     * @param \Oceanengine\Models\QianchuanFinanceWalletGetV10ResponseDataShareExpiringDetailListInner[] $shareExpiringDetailList
     * @return self
     */
    public function setShareExpiringDetailList(?array $shareExpiringDetailList): self
    {
        $this->shareExpiringDetailList = $shareExpiringDetailList;
        return $this;
    }

    /**
     * 账户总余额
     * @return int
     */
    public function getTotalBalanceAbs(): ?int
    {
        return $this->totalBalanceAbs;
    }

    /**
     * 账户总余额
     * @param int $totalBalanceAbs
     * @return self
     */
    public function setTotalBalanceAbs(?int $totalBalanceAbs): self
    {
        $this->totalBalanceAbs = $totalBalanceAbs;
        return $this;
    }

    /**
     * 赠款余额-穿山甲-可用
     * @return int
     */
    public function getUnionValidGrantBalance(): ?int
    {
        return $this->unionValidGrantBalance;
    }

    /**
     * 赠款余额-穿山甲-可用
     * @param int $unionValidGrantBalance
     * @return self
     */
    public function setUnionValidGrantBalance(?int $unionValidGrantBalance): self
    {
        $this->unionValidGrantBalance = $unionValidGrantBalance;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandBalance !== null) {
            $result['brand_balance'] = $this->brandBalance;
        }
        if ($this->brandBalanceInvalid !== null) {
            $result['brand_balance_invalid'] = $this->brandBalanceInvalid;
        }
        if ($this->brandBalanceInvalidFrozen !== null) {
            $result['brand_balance_invalid_frozen'] = $this->brandBalanceInvalidFrozen;
        }
        if ($this->brandBalanceValid !== null) {
            $result['brand_balance_valid'] = $this->brandBalanceValid;
        }
        if ($this->brandBalanceValidGrant !== null) {
            $result['brand_balance_valid_grant'] = $this->brandBalanceValidGrant;
        }
        if ($this->brandBalanceValidNonGrant !== null) {
            $result['brand_balance_valid_non_grant'] = $this->brandBalanceValidNonGrant;
        }
        if ($this->commonValidGrantBalance !== null) {
            $result['common_valid_grant_balance'] = $this->commonValidGrantBalance;
        }
        if ($this->deductionCouponBalance !== null) {
            $result['deduction_coupon_balance'] = $this->deductionCouponBalance;
        }
        if ($this->deductionCouponBalanceAll !== null) {
            $result['deduction_coupon_balance_all'] = $this->deductionCouponBalanceAll;
        }
        if ($this->deductionCouponBalanceOther !== null) {
            $result['deduction_coupon_balance_other'] = $this->deductionCouponBalanceOther;
        }
        if ($this->deductionCouponBalanceSelf !== null) {
            $result['deduction_coupon_balance_self'] = $this->deductionCouponBalanceSelf;
        }
        if ($this->defaultValidGrantBalance !== null) {
            $result['default_valid_grant_balance'] = $this->defaultValidGrantBalance;
        }
        if ($this->generalBalanceInvalid !== null) {
            $result['general_balance_invalid'] = $this->generalBalanceInvalid;
        }
        if ($this->generalBalanceInvalidFrozen !== null) {
            $result['general_balance_invalid_frozen'] = $this->generalBalanceInvalidFrozen;
        }
        if ($this->generalBalanceInvalidOrder !== null) {
            $result['general_balance_invalid_order'] = $this->generalBalanceInvalidOrder;
        }
        if ($this->generalBalanceValid !== null) {
            $result['general_balance_valid'] = $this->generalBalanceValid;
        }
        if ($this->generalBalanceValidGrantCommon !== null) {
            $result['general_balance_valid_grant_common'] = $this->generalBalanceValidGrantCommon;
        }
        if ($this->generalBalanceValidGrantDefault !== null) {
            $result['general_balance_valid_grant_default'] = $this->generalBalanceValidGrantDefault;
        }
        if ($this->generalBalanceValidGrantSearch !== null) {
            $result['general_balance_valid_grant_search'] = $this->generalBalanceValidGrantSearch;
        }
        if ($this->generalBalanceValidGrantUnion !== null) {
            $result['general_balance_valid_grant_union'] = $this->generalBalanceValidGrantUnion;
        }
        if ($this->generalBalanceValidNonGrant !== null) {
            $result['general_balance_valid_non_grant'] = $this->generalBalanceValidNonGrant;
        }
        if ($this->generalTotalBalance !== null) {
            $result['general_total_balance'] = $this->generalTotalBalance;
        }
        if ($this->grantBalance !== null) {
            $result['grant_balance'] = $this->grantBalance;
        }
        if ($this->grantExpiring !== null) {
            $result['grant_expiring'] = $this->grantExpiring;
        }
        if ($this->searchValidGrantBalance !== null) {
            $result['search_valid_grant_balance'] = $this->searchValidGrantBalance;
        }
        if ($this->shareBalance !== null) {
            $result['share_balance'] = $this->shareBalance;
        }
        if ($this->shareBalanceExpiring !== null) {
            $result['share_balance_expiring'] = $this->shareBalanceExpiring;
        }
        if ($this->shareBalanceValid !== null) {
            $result['share_balance_valid'] = $this->shareBalanceValid;
        }
        if ($this->shareBalanceValidGrantCommon !== null) {
            $result['share_balance_valid_grant_common'] = $this->shareBalanceValidGrantCommon;
        }
        if ($this->shareBalanceValidGrantDefault !== null) {
            $result['share_balance_valid_grant_default'] = $this->shareBalanceValidGrantDefault;
        }
        if ($this->shareBalanceValidGrantSearch !== null) {
            $result['share_balance_valid_grant_search'] = $this->shareBalanceValidGrantSearch;
        }
        if ($this->shareBalanceValidGrantUnion !== null) {
            $result['share_balance_valid_grant_union'] = $this->shareBalanceValidGrantUnion;
        }
        if ($this->shareExpiringDetailList !== null) {
            $result['share_expiring_detail_list'] = $this->shareExpiringDetailList;
        }
        if ($this->totalBalanceAbs !== null) {
            $result['total_balance_abs'] = $this->totalBalanceAbs;
        }
        if ($this->unionValidGrantBalance !== null) {
            $result['union_valid_grant_balance'] = $this->unionValidGrantBalance;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_balance'] ?? null) !== null) {
            $obj->brandBalance = (int) $v;
        }
        if (($v = $data['brand_balance_invalid'] ?? null) !== null) {
            $obj->brandBalanceInvalid = (int) $v;
        }
        if (($v = $data['brand_balance_invalid_frozen'] ?? null) !== null) {
            $obj->brandBalanceInvalidFrozen = (int) $v;
        }
        if (($v = $data['brand_balance_valid'] ?? null) !== null) {
            $obj->brandBalanceValid = (int) $v;
        }
        if (($v = $data['brand_balance_valid_grant'] ?? null) !== null) {
            $obj->brandBalanceValidGrant = (int) $v;
        }
        if (($v = $data['brand_balance_valid_non_grant'] ?? null) !== null) {
            $obj->brandBalanceValidNonGrant = (int) $v;
        }
        if (($v = $data['common_valid_grant_balance'] ?? null) !== null) {
            $obj->commonValidGrantBalance = (int) $v;
        }
        if (($v = $data['deduction_coupon_balance'] ?? null) !== null) {
            $obj->deductionCouponBalance = (int) $v;
        }
        if (($v = $data['deduction_coupon_balance_all'] ?? null) !== null) {
            $obj->deductionCouponBalanceAll = (int) $v;
        }
        if (($v = $data['deduction_coupon_balance_other'] ?? null) !== null) {
            $obj->deductionCouponBalanceOther = (int) $v;
        }
        if (($v = $data['deduction_coupon_balance_self'] ?? null) !== null) {
            $obj->deductionCouponBalanceSelf = (int) $v;
        }
        if (($v = $data['default_valid_grant_balance'] ?? null) !== null) {
            $obj->defaultValidGrantBalance = (int) $v;
        }
        if (($v = $data['general_balance_invalid'] ?? null) !== null) {
            $obj->generalBalanceInvalid = (int) $v;
        }
        if (($v = $data['general_balance_invalid_frozen'] ?? null) !== null) {
            $obj->generalBalanceInvalidFrozen = (int) $v;
        }
        if (($v = $data['general_balance_invalid_order'] ?? null) !== null) {
            $obj->generalBalanceInvalidOrder = (int) $v;
        }
        if (($v = $data['general_balance_valid'] ?? null) !== null) {
            $obj->generalBalanceValid = (int) $v;
        }
        if (($v = $data['general_balance_valid_grant_common'] ?? null) !== null) {
            $obj->generalBalanceValidGrantCommon = (int) $v;
        }
        if (($v = $data['general_balance_valid_grant_default'] ?? null) !== null) {
            $obj->generalBalanceValidGrantDefault = (int) $v;
        }
        if (($v = $data['general_balance_valid_grant_search'] ?? null) !== null) {
            $obj->generalBalanceValidGrantSearch = (int) $v;
        }
        if (($v = $data['general_balance_valid_grant_union'] ?? null) !== null) {
            $obj->generalBalanceValidGrantUnion = (int) $v;
        }
        if (($v = $data['general_balance_valid_non_grant'] ?? null) !== null) {
            $obj->generalBalanceValidNonGrant = (int) $v;
        }
        if (($v = $data['general_total_balance'] ?? null) !== null) {
            $obj->generalTotalBalance = (int) $v;
        }
        if (($v = $data['grant_balance'] ?? null) !== null) {
            $obj->grantBalance = (int) $v;
        }
        if (($v = $data['grant_expiring'] ?? null) !== null) {
            $obj->grantExpiring = (int) $v;
        }
        if (($v = $data['search_valid_grant_balance'] ?? null) !== null) {
            $obj->searchValidGrantBalance = (int) $v;
        }
        if (($v = $data['share_balance'] ?? null) !== null) {
            $obj->shareBalance = (int) $v;
        }
        if (($v = $data['share_balance_expiring'] ?? null) !== null) {
            $obj->shareBalanceExpiring = (int) $v;
        }
        if (($v = $data['share_balance_valid'] ?? null) !== null) {
            $obj->shareBalanceValid = (int) $v;
        }
        if (($v = $data['share_balance_valid_grant_common'] ?? null) !== null) {
            $obj->shareBalanceValidGrantCommon = (int) $v;
        }
        if (($v = $data['share_balance_valid_grant_default'] ?? null) !== null) {
            $obj->shareBalanceValidGrantDefault = (int) $v;
        }
        if (($v = $data['share_balance_valid_grant_search'] ?? null) !== null) {
            $obj->shareBalanceValidGrantSearch = (int) $v;
        }
        if (($v = $data['share_balance_valid_grant_union'] ?? null) !== null) {
            $obj->shareBalanceValidGrantUnion = (int) $v;
        }
        if (($v = $data['share_expiring_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->shareExpiringDetailList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanFinanceWalletGetV10ResponseDataShareExpiringDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['total_balance_abs'] ?? null) !== null) {
            $obj->totalBalanceAbs = (int) $v;
        }
        if (($v = $data['union_valid_grant_balance'] ?? null) !== null) {
            $obj->unionValidGrantBalance = (int) $v;
        }
        return $obj;
    }
}

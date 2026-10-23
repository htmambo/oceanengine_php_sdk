<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryProjectV30ResponseDataProjectInfoListInner implements \JsonSerializable
{
    /**
     * 广告发布协议ID
     * @var int
     */
    protected ?int $adcId = null;

    /**
     * 广告发布协议编号
     * @var string
     */
    protected ?string $adcSerial = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 广告主名称
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * 项目金额（元）
     * @var string
     */
    protected ?string $amount = null;

    /**
     * 确认状态
     * @var int
     */
    protected ?int $confirmStatus = null;

    /**
     * 确认状态名称
     * @var string
     */
    protected ?string $confirmStatusName = null;

    /**
     * 主合同编号
     * @var string
     */
    protected ?string $contractSerial = null;

    /**
     * 客户ID
     * @var int
     */
    protected ?int $costCustomerId = null;

    /**
     * 客户名称
     * @var string
     */
    protected ?string $costCustomerName = null;

    /**
     * 授信消耗
     * @var string
     */
    protected ?string $creditCost = null;

    /**
     * 应回款时间
     * @var string
     */
    protected ?string $deadline = null;

    /**
     * 赠款消耗
     * @var string
     */
    protected ?string $grantCost = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 已开票金额
     * @var string
     */
    protected ?string $invoiceAmount = null;

    /**
     * 项目名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 主订单编号
     * @var int[]
     */
    protected ?array $orderIds = null;

    /**
     * 付款方式
     * @var string
     */
    protected ?string $payMethodName = null;

    /**
     * 平台
     * @var int
     */
    protected ?int $platform = null;

    /**
     * 平台名称
     * @var string
     */
    protected ?string $platformName = null;

    /**
     * 预付消耗
     * @var string
     */
    protected ?string $prepayCost = null;

    /**
     * 项目结束时间 例如 2023-07-06
     * @var string
     */
    protected ?string $projectEndDate = null;

    /**
     * 项目类型分组
     * @var int
     */
    protected ?int $projectGroupType = null;

    /**
     * 项目类型分组名称
     * @var string
     */
    protected ?string $projectGroupTypeName = null;

    /**
     * 项目开始时间 例如 2023-07-06
     * @var string
     */
    protected ?string $projectStartDate = null;

    /**
     * 项目状态
     * @var int
     */
    protected ?int $projectStatus = null;

    /**
     * 项目状态名称
     * @var string
     */
    protected ?string $projectStatusName = null;

    /**
     * 回款状态
     * @var int
     */
    protected ?int $receiptStatus = null;

    /**
     * 回款状态名称
     * @var string
     */
    protected ?string $receiptStatusName = null;

    /**
     * 我方主体名称
     * @var string
     */
    protected ?string $receiptSubjectName = null;

    /**
     * 现金消耗
     * @var string
     */
    protected ?string $rechargeCost = null;

    /**
     * 待回款金额（元）
     * @var string
     */
    protected ?string $remainVerificationAmount = null;

    /**
     * 项目编号
     * @var string
     */
    protected ?string $serial = null;

    /**
     * 投放方式
     * @var int
     */
    protected ?int $servingType = null;

    /**
     * 投放方式名称
     * @var string
     */
    protected ?string $servingTypeName = null;

    /**
     * 代理商ID
     * @var int
     */
    protected ?int $settlementCustomerId = null;

    /**
     * 代理商名称
     * @var string
     */
    protected ?string $settlementCustomerName = null;

    /**
     * 广告发布协议ID
     * @return int
     */
    public function getAdcId(): ?int
    {
        return $this->adcId;
    }

    /**
     * 广告发布协议ID
     * @param int $adcId
     * @return self
     */
    public function setAdcId(?int $adcId): self
    {
        $this->adcId = $adcId;
        return $this;
    }

    /**
     * 广告发布协议编号
     * @return string
     */
    public function getAdcSerial(): ?string
    {
        return $this->adcSerial;
    }

    /**
     * 广告发布协议编号
     * @param string $adcSerial
     * @return self
     */
    public function setAdcSerial(?string $adcSerial): self
    {
        $this->adcSerial = $adcSerial;
        return $this;
    }

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告主名称
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 广告主名称
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * 项目金额（元）
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * 项目金额（元）
     * @param string $amount
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 确认状态
     * @return int
     */
    public function getConfirmStatus(): ?int
    {
        return $this->confirmStatus;
    }

    /**
     * 确认状态
     * @param int $confirmStatus
     * @return self
     */
    public function setConfirmStatus(?int $confirmStatus): self
    {
        $this->confirmStatus = $confirmStatus;
        return $this;
    }

    /**
     * 确认状态名称
     * @return string
     */
    public function getConfirmStatusName(): ?string
    {
        return $this->confirmStatusName;
    }

    /**
     * 确认状态名称
     * @param string $confirmStatusName
     * @return self
     */
    public function setConfirmStatusName(?string $confirmStatusName): self
    {
        $this->confirmStatusName = $confirmStatusName;
        return $this;
    }

    /**
     * 主合同编号
     * @return string
     */
    public function getContractSerial(): ?string
    {
        return $this->contractSerial;
    }

    /**
     * 主合同编号
     * @param string $contractSerial
     * @return self
     */
    public function setContractSerial(?string $contractSerial): self
    {
        $this->contractSerial = $contractSerial;
        return $this;
    }

    /**
     * 客户ID
     * @return int
     */
    public function getCostCustomerId(): ?int
    {
        return $this->costCustomerId;
    }

    /**
     * 客户ID
     * @param int $costCustomerId
     * @return self
     */
    public function setCostCustomerId(?int $costCustomerId): self
    {
        $this->costCustomerId = $costCustomerId;
        return $this;
    }

    /**
     * 客户名称
     * @return string
     */
    public function getCostCustomerName(): ?string
    {
        return $this->costCustomerName;
    }

    /**
     * 客户名称
     * @param string $costCustomerName
     * @return self
     */
    public function setCostCustomerName(?string $costCustomerName): self
    {
        $this->costCustomerName = $costCustomerName;
        return $this;
    }

    /**
     * 授信消耗
     * @return string
     */
    public function getCreditCost(): ?string
    {
        return $this->creditCost;
    }

    /**
     * 授信消耗
     * @param string $creditCost
     * @return self
     */
    public function setCreditCost(?string $creditCost): self
    {
        $this->creditCost = $creditCost;
        return $this;
    }

    /**
     * 应回款时间
     * @return string
     */
    public function getDeadline(): ?string
    {
        return $this->deadline;
    }

    /**
     * 应回款时间
     * @param string $deadline
     * @return self
     */
    public function setDeadline(?string $deadline): self
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * 赠款消耗
     * @return string
     */
    public function getGrantCost(): ?string
    {
        return $this->grantCost;
    }

    /**
     * 赠款消耗
     * @param string $grantCost
     * @return self
     */
    public function setGrantCost(?string $grantCost): self
    {
        $this->grantCost = $grantCost;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 项目ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 已开票金额
     * @return string
     */
    public function getInvoiceAmount(): ?string
    {
        return $this->invoiceAmount;
    }

    /**
     * 已开票金额
     * @param string $invoiceAmount
     * @return self
     */
    public function setInvoiceAmount(?string $invoiceAmount): self
    {
        $this->invoiceAmount = $invoiceAmount;
        return $this;
    }

    /**
     * 项目名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 项目名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 主订单编号
     * @return int[]
     */
    public function getOrderIds(): ?array
    {
        return $this->orderIds;
    }

    /**
     * 主订单编号
     * @param int[] $orderIds
     * @return self
     */
    public function setOrderIds(?array $orderIds): self
    {
        $this->orderIds = $orderIds;
        return $this;
    }

    /**
     * 付款方式
     * @return string
     */
    public function getPayMethodName(): ?string
    {
        return $this->payMethodName;
    }

    /**
     * 付款方式
     * @param string $payMethodName
     * @return self
     */
    public function setPayMethodName(?string $payMethodName): self
    {
        $this->payMethodName = $payMethodName;
        return $this;
    }

    /**
     * 平台
     * @return int
     */
    public function getPlatform(): ?int
    {
        return $this->platform;
    }

    /**
     * 平台
     * @param int $platform
     * @return self
     */
    public function setPlatform(?int $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 平台名称
     * @return string
     */
    public function getPlatformName(): ?string
    {
        return $this->platformName;
    }

    /**
     * 平台名称
     * @param string $platformName
     * @return self
     */
    public function setPlatformName(?string $platformName): self
    {
        $this->platformName = $platformName;
        return $this;
    }

    /**
     * 预付消耗
     * @return string
     */
    public function getPrepayCost(): ?string
    {
        return $this->prepayCost;
    }

    /**
     * 预付消耗
     * @param string $prepayCost
     * @return self
     */
    public function setPrepayCost(?string $prepayCost): self
    {
        $this->prepayCost = $prepayCost;
        return $this;
    }

    /**
     * 项目结束时间 例如 2023-07-06
     * @return string
     */
    public function getProjectEndDate(): ?string
    {
        return $this->projectEndDate;
    }

    /**
     * 项目结束时间 例如 2023-07-06
     * @param string $projectEndDate
     * @return self
     */
    public function setProjectEndDate(?string $projectEndDate): self
    {
        $this->projectEndDate = $projectEndDate;
        return $this;
    }

    /**
     * 项目类型分组
     * @return int
     */
    public function getProjectGroupType(): ?int
    {
        return $this->projectGroupType;
    }

    /**
     * 项目类型分组
     * @param int $projectGroupType
     * @return self
     */
    public function setProjectGroupType(?int $projectGroupType): self
    {
        $this->projectGroupType = $projectGroupType;
        return $this;
    }

    /**
     * 项目类型分组名称
     * @return string
     */
    public function getProjectGroupTypeName(): ?string
    {
        return $this->projectGroupTypeName;
    }

    /**
     * 项目类型分组名称
     * @param string $projectGroupTypeName
     * @return self
     */
    public function setProjectGroupTypeName(?string $projectGroupTypeName): self
    {
        $this->projectGroupTypeName = $projectGroupTypeName;
        return $this;
    }

    /**
     * 项目开始时间 例如 2023-07-06
     * @return string
     */
    public function getProjectStartDate(): ?string
    {
        return $this->projectStartDate;
    }

    /**
     * 项目开始时间 例如 2023-07-06
     * @param string $projectStartDate
     * @return self
     */
    public function setProjectStartDate(?string $projectStartDate): self
    {
        $this->projectStartDate = $projectStartDate;
        return $this;
    }

    /**
     * 项目状态
     * @return int
     */
    public function getProjectStatus(): ?int
    {
        return $this->projectStatus;
    }

    /**
     * 项目状态
     * @param int $projectStatus
     * @return self
     */
    public function setProjectStatus(?int $projectStatus): self
    {
        $this->projectStatus = $projectStatus;
        return $this;
    }

    /**
     * 项目状态名称
     * @return string
     */
    public function getProjectStatusName(): ?string
    {
        return $this->projectStatusName;
    }

    /**
     * 项目状态名称
     * @param string $projectStatusName
     * @return self
     */
    public function setProjectStatusName(?string $projectStatusName): self
    {
        $this->projectStatusName = $projectStatusName;
        return $this;
    }

    /**
     * 回款状态
     * @return int
     */
    public function getReceiptStatus(): ?int
    {
        return $this->receiptStatus;
    }

    /**
     * 回款状态
     * @param int $receiptStatus
     * @return self
     */
    public function setReceiptStatus(?int $receiptStatus): self
    {
        $this->receiptStatus = $receiptStatus;
        return $this;
    }

    /**
     * 回款状态名称
     * @return string
     */
    public function getReceiptStatusName(): ?string
    {
        return $this->receiptStatusName;
    }

    /**
     * 回款状态名称
     * @param string $receiptStatusName
     * @return self
     */
    public function setReceiptStatusName(?string $receiptStatusName): self
    {
        $this->receiptStatusName = $receiptStatusName;
        return $this;
    }

    /**
     * 我方主体名称
     * @return string
     */
    public function getReceiptSubjectName(): ?string
    {
        return $this->receiptSubjectName;
    }

    /**
     * 我方主体名称
     * @param string $receiptSubjectName
     * @return self
     */
    public function setReceiptSubjectName(?string $receiptSubjectName): self
    {
        $this->receiptSubjectName = $receiptSubjectName;
        return $this;
    }

    /**
     * 现金消耗
     * @return string
     */
    public function getRechargeCost(): ?string
    {
        return $this->rechargeCost;
    }

    /**
     * 现金消耗
     * @param string $rechargeCost
     * @return self
     */
    public function setRechargeCost(?string $rechargeCost): self
    {
        $this->rechargeCost = $rechargeCost;
        return $this;
    }

    /**
     * 待回款金额（元）
     * @return string
     */
    public function getRemainVerificationAmount(): ?string
    {
        return $this->remainVerificationAmount;
    }

    /**
     * 待回款金额（元）
     * @param string $remainVerificationAmount
     * @return self
     */
    public function setRemainVerificationAmount(?string $remainVerificationAmount): self
    {
        $this->remainVerificationAmount = $remainVerificationAmount;
        return $this;
    }

    /**
     * 项目编号
     * @return string
     */
    public function getSerial(): ?string
    {
        return $this->serial;
    }

    /**
     * 项目编号
     * @param string $serial
     * @return self
     */
    public function setSerial(?string $serial): self
    {
        $this->serial = $serial;
        return $this;
    }

    /**
     * 投放方式
     * @return int
     */
    public function getServingType(): ?int
    {
        return $this->servingType;
    }

    /**
     * 投放方式
     * @param int $servingType
     * @return self
     */
    public function setServingType(?int $servingType): self
    {
        $this->servingType = $servingType;
        return $this;
    }

    /**
     * 投放方式名称
     * @return string
     */
    public function getServingTypeName(): ?string
    {
        return $this->servingTypeName;
    }

    /**
     * 投放方式名称
     * @param string $servingTypeName
     * @return self
     */
    public function setServingTypeName(?string $servingTypeName): self
    {
        $this->servingTypeName = $servingTypeName;
        return $this;
    }

    /**
     * 代理商ID
     * @return int
     */
    public function getSettlementCustomerId(): ?int
    {
        return $this->settlementCustomerId;
    }

    /**
     * 代理商ID
     * @param int $settlementCustomerId
     * @return self
     */
    public function setSettlementCustomerId(?int $settlementCustomerId): self
    {
        $this->settlementCustomerId = $settlementCustomerId;
        return $this;
    }

    /**
     * 代理商名称
     * @return string
     */
    public function getSettlementCustomerName(): ?string
    {
        return $this->settlementCustomerName;
    }

    /**
     * 代理商名称
     * @param string $settlementCustomerName
     * @return self
     */
    public function setSettlementCustomerName(?string $settlementCustomerName): self
    {
        $this->settlementCustomerName = $settlementCustomerName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adcId !== null) {
            $result['adc_id'] = $this->adcId;
        }
        if ($this->adcSerial !== null) {
            $result['adc_serial'] = $this->adcSerial;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->confirmStatus !== null) {
            $result['confirm_status'] = $this->confirmStatus;
        }
        if ($this->confirmStatusName !== null) {
            $result['confirm_status_name'] = $this->confirmStatusName;
        }
        if ($this->contractSerial !== null) {
            $result['contract_serial'] = $this->contractSerial;
        }
        if ($this->costCustomerId !== null) {
            $result['cost_customer_id'] = $this->costCustomerId;
        }
        if ($this->costCustomerName !== null) {
            $result['cost_customer_name'] = $this->costCustomerName;
        }
        if ($this->creditCost !== null) {
            $result['credit_cost'] = $this->creditCost;
        }
        if ($this->deadline !== null) {
            $result['deadline'] = $this->deadline;
        }
        if ($this->grantCost !== null) {
            $result['grant_cost'] = $this->grantCost;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->invoiceAmount !== null) {
            $result['invoice_amount'] = $this->invoiceAmount;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->orderIds !== null) {
            $result['order_ids'] = $this->orderIds;
        }
        if ($this->payMethodName !== null) {
            $result['pay_method_name'] = $this->payMethodName;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->platformName !== null) {
            $result['platform_name'] = $this->platformName;
        }
        if ($this->prepayCost !== null) {
            $result['prepay_cost'] = $this->prepayCost;
        }
        if ($this->projectEndDate !== null) {
            $result['project_end_date'] = $this->projectEndDate;
        }
        if ($this->projectGroupType !== null) {
            $result['project_group_type'] = $this->projectGroupType;
        }
        if ($this->projectGroupTypeName !== null) {
            $result['project_group_type_name'] = $this->projectGroupTypeName;
        }
        if ($this->projectStartDate !== null) {
            $result['project_start_date'] = $this->projectStartDate;
        }
        if ($this->projectStatus !== null) {
            $result['project_status'] = $this->projectStatus;
        }
        if ($this->projectStatusName !== null) {
            $result['project_status_name'] = $this->projectStatusName;
        }
        if ($this->receiptStatus !== null) {
            $result['receipt_status'] = $this->receiptStatus;
        }
        if ($this->receiptStatusName !== null) {
            $result['receipt_status_name'] = $this->receiptStatusName;
        }
        if ($this->receiptSubjectName !== null) {
            $result['receipt_subject_name'] = $this->receiptSubjectName;
        }
        if ($this->rechargeCost !== null) {
            $result['recharge_cost'] = $this->rechargeCost;
        }
        if ($this->remainVerificationAmount !== null) {
            $result['remain_verification_amount'] = $this->remainVerificationAmount;
        }
        if ($this->serial !== null) {
            $result['serial'] = $this->serial;
        }
        if ($this->servingType !== null) {
            $result['serving_type'] = $this->servingType;
        }
        if ($this->servingTypeName !== null) {
            $result['serving_type_name'] = $this->servingTypeName;
        }
        if ($this->settlementCustomerId !== null) {
            $result['settlement_customer_id'] = $this->settlementCustomerId;
        }
        if ($this->settlementCustomerName !== null) {
            $result['settlement_customer_name'] = $this->settlementCustomerName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adc_id'] ?? null) !== null) {
            $obj->adcId = (int) $v;
        }
        if (($v = $data['adc_serial'] ?? null) !== null) {
            $obj->adcSerial = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (string) $v;
        }
        if (($v = $data['confirm_status'] ?? null) !== null) {
            $obj->confirmStatus = (int) $v;
        }
        if (($v = $data['confirm_status_name'] ?? null) !== null) {
            $obj->confirmStatusName = (string) $v;
        }
        if (($v = $data['contract_serial'] ?? null) !== null) {
            $obj->contractSerial = (string) $v;
        }
        if (($v = $data['cost_customer_id'] ?? null) !== null) {
            $obj->costCustomerId = (int) $v;
        }
        if (($v = $data['cost_customer_name'] ?? null) !== null) {
            $obj->costCustomerName = (string) $v;
        }
        if (($v = $data['credit_cost'] ?? null) !== null) {
            $obj->creditCost = (string) $v;
        }
        if (($v = $data['deadline'] ?? null) !== null) {
            $obj->deadline = (string) $v;
        }
        if (($v = $data['grant_cost'] ?? null) !== null) {
            $obj->grantCost = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['invoice_amount'] ?? null) !== null) {
            $obj->invoiceAmount = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['order_ids'] ?? null) !== null && is_array($v)) {
            $obj->orderIds = $v;
        }
        if (($v = $data['pay_method_name'] ?? null) !== null) {
            $obj->payMethodName = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (int) $v;
        }
        if (($v = $data['platform_name'] ?? null) !== null) {
            $obj->platformName = (string) $v;
        }
        if (($v = $data['prepay_cost'] ?? null) !== null) {
            $obj->prepayCost = (string) $v;
        }
        if (($v = $data['project_end_date'] ?? null) !== null) {
            $obj->projectEndDate = (string) $v;
        }
        if (($v = $data['project_group_type'] ?? null) !== null) {
            $obj->projectGroupType = (int) $v;
        }
        if (($v = $data['project_group_type_name'] ?? null) !== null) {
            $obj->projectGroupTypeName = (string) $v;
        }
        if (($v = $data['project_start_date'] ?? null) !== null) {
            $obj->projectStartDate = (string) $v;
        }
        if (($v = $data['project_status'] ?? null) !== null) {
            $obj->projectStatus = (int) $v;
        }
        if (($v = $data['project_status_name'] ?? null) !== null) {
            $obj->projectStatusName = (string) $v;
        }
        if (($v = $data['receipt_status'] ?? null) !== null) {
            $obj->receiptStatus = (int) $v;
        }
        if (($v = $data['receipt_status_name'] ?? null) !== null) {
            $obj->receiptStatusName = (string) $v;
        }
        if (($v = $data['receipt_subject_name'] ?? null) !== null) {
            $obj->receiptSubjectName = (string) $v;
        }
        if (($v = $data['recharge_cost'] ?? null) !== null) {
            $obj->rechargeCost = (string) $v;
        }
        if (($v = $data['remain_verification_amount'] ?? null) !== null) {
            $obj->remainVerificationAmount = (string) $v;
        }
        if (($v = $data['serial'] ?? null) !== null) {
            $obj->serial = (string) $v;
        }
        if (($v = $data['serving_type'] ?? null) !== null) {
            $obj->servingType = (int) $v;
        }
        if (($v = $data['serving_type_name'] ?? null) !== null) {
            $obj->servingTypeName = (string) $v;
        }
        if (($v = $data['settlement_customer_id'] ?? null) !== null) {
            $obj->settlementCustomerId = (int) $v;
        }
        if (($v = $data['settlement_customer_name'] ?? null) !== null) {
            $obj->settlementCustomerName = (string) $v;
        }
        return $obj;
    }
}

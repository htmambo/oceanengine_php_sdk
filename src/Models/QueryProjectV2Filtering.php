<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryProjectV2Filtering implements \JsonSerializable
{
    /**
     * 投放账号ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 客户ID
     * @var int
     */
    protected ?int $customerId = null;

    /**
     * 应回款日期
     * @var string
     */
    protected ?string $deadline = null;

    /**
     * 平台列表
     * @var \Oceanengine\Models\QueryProjectV2FilteringPlatformList[]
     */
    protected ?array $platformList = null;

    /**
     * 项目结束时间-开始 例如 2023-07-06
     * @var string
     */
    protected ?string $projectEndDateBegin = null;

    /**
     * 项目结束时间-结束 例如 2023-07-06
     * @var string
     */
    protected ?string $projectEndDateEnd = null;

    /**
     * 项目开始时间-开始 例如 2023-07-06
     * @var string
     */
    protected ?string $projectStartDateBegin = null;

    /**
     * 项目开始时间-结束 例如 2023-07-06
     * @var string
     */
    protected ?string $projectStartDateEnd = null;

    /**
     * 项目状态
     * @var \Oceanengine\Models\QueryProjectV2FilteringProjectStatusList[]
     */
    protected ?array $projectStatusList = null;

    /**
     * 项目回款状态
     * @var \Oceanengine\Models\QueryProjectV2FilteringReceiptStatusList[]
     */
    protected ?array $receiptStatusList = null;

    /**
     * 投放类型
     * @var \Oceanengine\Models\QueryProjectV2FilteringServingTypeList[]
     */
    protected ?array $servingTypeList = null;

    /**
     * 投放账号ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 投放账号ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 客户ID
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * 客户ID
     * @param int $customerId
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * 应回款日期
     * @return string
     */
    public function getDeadline(): ?string
    {
        return $this->deadline;
    }

    /**
     * 应回款日期
     * @param string $deadline
     * @return self
     */
    public function setDeadline(?string $deadline): self
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * 平台列表
     * @return \Oceanengine\Models\QueryProjectV2FilteringPlatformList[]
     */
    public function getPlatformList(): ?array
    {
        return $this->platformList;
    }

    /**
     * 平台列表
     * @param \Oceanengine\Models\QueryProjectV2FilteringPlatformList[] $platformList
     * @return self
     */
    public function setPlatformList(?array $platformList): self
    {
        $this->platformList = $platformList;
        return $this;
    }

    /**
     * 项目结束时间-开始 例如 2023-07-06
     * @return string
     */
    public function getProjectEndDateBegin(): ?string
    {
        return $this->projectEndDateBegin;
    }

    /**
     * 项目结束时间-开始 例如 2023-07-06
     * @param string $projectEndDateBegin
     * @return self
     */
    public function setProjectEndDateBegin(?string $projectEndDateBegin): self
    {
        $this->projectEndDateBegin = $projectEndDateBegin;
        return $this;
    }

    /**
     * 项目结束时间-结束 例如 2023-07-06
     * @return string
     */
    public function getProjectEndDateEnd(): ?string
    {
        return $this->projectEndDateEnd;
    }

    /**
     * 项目结束时间-结束 例如 2023-07-06
     * @param string $projectEndDateEnd
     * @return self
     */
    public function setProjectEndDateEnd(?string $projectEndDateEnd): self
    {
        $this->projectEndDateEnd = $projectEndDateEnd;
        return $this;
    }

    /**
     * 项目开始时间-开始 例如 2023-07-06
     * @return string
     */
    public function getProjectStartDateBegin(): ?string
    {
        return $this->projectStartDateBegin;
    }

    /**
     * 项目开始时间-开始 例如 2023-07-06
     * @param string $projectStartDateBegin
     * @return self
     */
    public function setProjectStartDateBegin(?string $projectStartDateBegin): self
    {
        $this->projectStartDateBegin = $projectStartDateBegin;
        return $this;
    }

    /**
     * 项目开始时间-结束 例如 2023-07-06
     * @return string
     */
    public function getProjectStartDateEnd(): ?string
    {
        return $this->projectStartDateEnd;
    }

    /**
     * 项目开始时间-结束 例如 2023-07-06
     * @param string $projectStartDateEnd
     * @return self
     */
    public function setProjectStartDateEnd(?string $projectStartDateEnd): self
    {
        $this->projectStartDateEnd = $projectStartDateEnd;
        return $this;
    }

    /**
     * 项目状态
     * @return \Oceanengine\Models\QueryProjectV2FilteringProjectStatusList[]
     */
    public function getProjectStatusList(): ?array
    {
        return $this->projectStatusList;
    }

    /**
     * 项目状态
     * @param \Oceanengine\Models\QueryProjectV2FilteringProjectStatusList[] $projectStatusList
     * @return self
     */
    public function setProjectStatusList(?array $projectStatusList): self
    {
        $this->projectStatusList = $projectStatusList;
        return $this;
    }

    /**
     * 项目回款状态
     * @return \Oceanengine\Models\QueryProjectV2FilteringReceiptStatusList[]
     */
    public function getReceiptStatusList(): ?array
    {
        return $this->receiptStatusList;
    }

    /**
     * 项目回款状态
     * @param \Oceanengine\Models\QueryProjectV2FilteringReceiptStatusList[] $receiptStatusList
     * @return self
     */
    public function setReceiptStatusList(?array $receiptStatusList): self
    {
        $this->receiptStatusList = $receiptStatusList;
        return $this;
    }

    /**
     * 投放类型
     * @return \Oceanengine\Models\QueryProjectV2FilteringServingTypeList[]
     */
    public function getServingTypeList(): ?array
    {
        return $this->servingTypeList;
    }

    /**
     * 投放类型
     * @param \Oceanengine\Models\QueryProjectV2FilteringServingTypeList[] $servingTypeList
     * @return self
     */
    public function setServingTypeList(?array $servingTypeList): self
    {
        $this->servingTypeList = $servingTypeList;
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
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        if ($this->deadline !== null) {
            $result['deadline'] = $this->deadline;
        }
        if ($this->platformList !== null) {
            $result['platform_list'] = $this->platformList;
        }
        if ($this->projectEndDateBegin !== null) {
            $result['project_end_date_begin'] = $this->projectEndDateBegin;
        }
        if ($this->projectEndDateEnd !== null) {
            $result['project_end_date_end'] = $this->projectEndDateEnd;
        }
        if ($this->projectStartDateBegin !== null) {
            $result['project_start_date_begin'] = $this->projectStartDateBegin;
        }
        if ($this->projectStartDateEnd !== null) {
            $result['project_start_date_end'] = $this->projectStartDateEnd;
        }
        if ($this->projectStatusList !== null) {
            $result['project_status_list'] = $this->projectStatusList;
        }
        if ($this->receiptStatusList !== null) {
            $result['receipt_status_list'] = $this->receiptStatusList;
        }
        if ($this->servingTypeList !== null) {
            $result['serving_type_list'] = $this->servingTypeList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        if (($v = $data['deadline'] ?? null) !== null) {
            $obj->deadline = (string) $v;
        }
        if (($v = $data['platform_list'] ?? null) !== null && is_array($v)) {
            $obj->platformList = $v;
        }
        if (($v = $data['project_end_date_begin'] ?? null) !== null) {
            $obj->projectEndDateBegin = (string) $v;
        }
        if (($v = $data['project_end_date_end'] ?? null) !== null) {
            $obj->projectEndDateEnd = (string) $v;
        }
        if (($v = $data['project_start_date_begin'] ?? null) !== null) {
            $obj->projectStartDateBegin = (string) $v;
        }
        if (($v = $data['project_start_date_end'] ?? null) !== null) {
            $obj->projectStartDateEnd = (string) $v;
        }
        if (($v = $data['project_status_list'] ?? null) !== null && is_array($v)) {
            $obj->projectStatusList = $v;
        }
        if (($v = $data['receipt_status_list'] ?? null) !== null && is_array($v)) {
            $obj->receiptStatusList = $v;
        }
        if (($v = $data['serving_type_list'] ?? null) !== null && is_array($v)) {
            $obj->servingTypeList = $v;
        }
        return $obj;
    }
}

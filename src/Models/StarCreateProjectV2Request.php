<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarCreateProjectV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $demanderId = null;

    /**
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * 一级行业名称
     * @var string
     */
    protected ?string $firstClassCategoryName = null;

    /**
     * 推广内容（标的）
     * @var int
     */
    protected ?int $firstPromotionTarget = null;

    /**
     * 京东父任务code
     * @var string
     */
    protected ?string $jdProjectCode = null;

    /**
     * 京东父任务id
     * @var string
     */
    protected ?string $jdProjectId = null;

    /**
     * 营销目标
     * @var int
     */
    protected ?int $marketingTarget = null;

    /**
     * 项目名称
     * @var string
     */
    protected ?string $projectName = null;

    /**
     * 营销数据指标目标数量
     * @var int
     */
    protected ?int $promotionIndicatorTargetCnt = null;

    /**
     * 考核指标
     * @var int
     */
    protected ?int $promotionIndicatorType = null;

    /**
     * 二级行业名称
     * @var string
     */
    protected ?string $secondClassCategoryName = null;

    /**
     * 星图品牌名称
     * @var string
     */
    protected ?string $starBrandName = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 星图细分品牌名称
     * @var string
     */
    protected ?string $starSubBrandName = null;

    /**
     * @var int
     */
    protected ?int $startTime = null;

    /**
     * 淘宝父任务code
     * @var string
     */
    protected ?string $taobaoProjectCode = null;

    /**
     * 淘宝父任务id
     * @var string
     */
    protected ?string $taobaoProjectId = null;

    /**
     * 项目总预算（元）
     * @var int
     */
    protected ?int $totalBudget = null;

    /**
     * @return int
     */
    public function getDemanderId(): ?int
    {
        return $this->demanderId;
    }

    /**
     * @param int $demanderId
     * @return self
     */
    public function setDemanderId(?int $demanderId): self
    {
        $this->demanderId = $demanderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 一级行业名称
     * @return string
     */
    public function getFirstClassCategoryName(): ?string
    {
        return $this->firstClassCategoryName;
    }

    /**
     * 一级行业名称
     * @param string $firstClassCategoryName
     * @return self
     */
    public function setFirstClassCategoryName(?string $firstClassCategoryName): self
    {
        $this->firstClassCategoryName = $firstClassCategoryName;
        return $this;
    }

    /**
     * 推广内容（标的）
     * @return int
     */
    public function getFirstPromotionTarget(): ?int
    {
        return $this->firstPromotionTarget;
    }

    /**
     * 推广内容（标的）
     * @param int $firstPromotionTarget
     * @return self
     */
    public function setFirstPromotionTarget(?int $firstPromotionTarget): self
    {
        $this->firstPromotionTarget = $firstPromotionTarget;
        return $this;
    }

    /**
     * 京东父任务code
     * @return string
     */
    public function getJdProjectCode(): ?string
    {
        return $this->jdProjectCode;
    }

    /**
     * 京东父任务code
     * @param string $jdProjectCode
     * @return self
     */
    public function setJdProjectCode(?string $jdProjectCode): self
    {
        $this->jdProjectCode = $jdProjectCode;
        return $this;
    }

    /**
     * 京东父任务id
     * @return string
     */
    public function getJdProjectId(): ?string
    {
        return $this->jdProjectId;
    }

    /**
     * 京东父任务id
     * @param string $jdProjectId
     * @return self
     */
    public function setJdProjectId(?string $jdProjectId): self
    {
        $this->jdProjectId = $jdProjectId;
        return $this;
    }

    /**
     * 营销目标
     * @return int
     */
    public function getMarketingTarget(): ?int
    {
        return $this->marketingTarget;
    }

    /**
     * 营销目标
     * @param int $marketingTarget
     * @return self
     */
    public function setMarketingTarget(?int $marketingTarget): self
    {
        $this->marketingTarget = $marketingTarget;
        return $this;
    }

    /**
     * 项目名称
     * @return string
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * 项目名称
     * @param string $projectName
     * @return self
     */
    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;
        return $this;
    }

    /**
     * 营销数据指标目标数量
     * @return int
     */
    public function getPromotionIndicatorTargetCnt(): ?int
    {
        return $this->promotionIndicatorTargetCnt;
    }

    /**
     * 营销数据指标目标数量
     * @param int $promotionIndicatorTargetCnt
     * @return self
     */
    public function setPromotionIndicatorTargetCnt(?int $promotionIndicatorTargetCnt): self
    {
        $this->promotionIndicatorTargetCnt = $promotionIndicatorTargetCnt;
        return $this;
    }

    /**
     * 考核指标
     * @return int
     */
    public function getPromotionIndicatorType(): ?int
    {
        return $this->promotionIndicatorType;
    }

    /**
     * 考核指标
     * @param int $promotionIndicatorType
     * @return self
     */
    public function setPromotionIndicatorType(?int $promotionIndicatorType): self
    {
        $this->promotionIndicatorType = $promotionIndicatorType;
        return $this;
    }

    /**
     * 二级行业名称
     * @return string
     */
    public function getSecondClassCategoryName(): ?string
    {
        return $this->secondClassCategoryName;
    }

    /**
     * 二级行业名称
     * @param string $secondClassCategoryName
     * @return self
     */
    public function setSecondClassCategoryName(?string $secondClassCategoryName): self
    {
        $this->secondClassCategoryName = $secondClassCategoryName;
        return $this;
    }

    /**
     * 星图品牌名称
     * @return string
     */
    public function getStarBrandName(): ?string
    {
        return $this->starBrandName;
    }

    /**
     * 星图品牌名称
     * @param string $starBrandName
     * @return self
     */
    public function setStarBrandName(?string $starBrandName): self
    {
        $this->starBrandName = $starBrandName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 星图细分品牌名称
     * @return string
     */
    public function getStarSubBrandName(): ?string
    {
        return $this->starSubBrandName;
    }

    /**
     * 星图细分品牌名称
     * @param string $starSubBrandName
     * @return self
     */
    public function setStarSubBrandName(?string $starSubBrandName): self
    {
        $this->starSubBrandName = $starSubBrandName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * @param int $startTime
     * @return self
     */
    public function setStartTime(?int $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 淘宝父任务code
     * @return string
     */
    public function getTaobaoProjectCode(): ?string
    {
        return $this->taobaoProjectCode;
    }

    /**
     * 淘宝父任务code
     * @param string $taobaoProjectCode
     * @return self
     */
    public function setTaobaoProjectCode(?string $taobaoProjectCode): self
    {
        $this->taobaoProjectCode = $taobaoProjectCode;
        return $this;
    }

    /**
     * 淘宝父任务id
     * @return string
     */
    public function getTaobaoProjectId(): ?string
    {
        return $this->taobaoProjectId;
    }

    /**
     * 淘宝父任务id
     * @param string $taobaoProjectId
     * @return self
     */
    public function setTaobaoProjectId(?string $taobaoProjectId): self
    {
        $this->taobaoProjectId = $taobaoProjectId;
        return $this;
    }

    /**
     * 项目总预算（元）
     * @return int
     */
    public function getTotalBudget(): ?int
    {
        return $this->totalBudget;
    }

    /**
     * 项目总预算（元）
     * @param int $totalBudget
     * @return self
     */
    public function setTotalBudget(?int $totalBudget): self
    {
        $this->totalBudget = $totalBudget;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->demanderId !== null) {
            $result['demander_id'] = $this->demanderId;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->firstClassCategoryName !== null) {
            $result['first_class_category_name'] = $this->firstClassCategoryName;
        }
        if ($this->firstPromotionTarget !== null) {
            $result['first_promotion_target'] = $this->firstPromotionTarget;
        }
        if ($this->jdProjectCode !== null) {
            $result['jd_project_code'] = $this->jdProjectCode;
        }
        if ($this->jdProjectId !== null) {
            $result['jd_project_id'] = $this->jdProjectId;
        }
        if ($this->marketingTarget !== null) {
            $result['marketing_target'] = $this->marketingTarget;
        }
        if ($this->projectName !== null) {
            $result['project_name'] = $this->projectName;
        }
        if ($this->promotionIndicatorTargetCnt !== null) {
            $result['promotion_indicator_target_cnt'] = $this->promotionIndicatorTargetCnt;
        }
        if ($this->promotionIndicatorType !== null) {
            $result['promotion_indicator_type'] = $this->promotionIndicatorType;
        }
        if ($this->secondClassCategoryName !== null) {
            $result['second_class_category_name'] = $this->secondClassCategoryName;
        }
        if ($this->starBrandName !== null) {
            $result['star_brand_name'] = $this->starBrandName;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->starSubBrandName !== null) {
            $result['star_sub_brand_name'] = $this->starSubBrandName;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->taobaoProjectCode !== null) {
            $result['taobao_project_code'] = $this->taobaoProjectCode;
        }
        if ($this->taobaoProjectId !== null) {
            $result['taobao_project_id'] = $this->taobaoProjectId;
        }
        if ($this->totalBudget !== null) {
            $result['total_budget'] = $this->totalBudget;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['demander_id'] ?? null) !== null) {
            $obj->demanderId = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        if (($v = $data['first_class_category_name'] ?? null) !== null) {
            $obj->firstClassCategoryName = (string) $v;
        }
        if (($v = $data['first_promotion_target'] ?? null) !== null) {
            $obj->firstPromotionTarget = (int) $v;
        }
        if (($v = $data['jd_project_code'] ?? null) !== null) {
            $obj->jdProjectCode = (string) $v;
        }
        if (($v = $data['jd_project_id'] ?? null) !== null) {
            $obj->jdProjectId = (string) $v;
        }
        if (($v = $data['marketing_target'] ?? null) !== null) {
            $obj->marketingTarget = (int) $v;
        }
        if (($v = $data['project_name'] ?? null) !== null) {
            $obj->projectName = (string) $v;
        }
        if (($v = $data['promotion_indicator_target_cnt'] ?? null) !== null) {
            $obj->promotionIndicatorTargetCnt = (int) $v;
        }
        if (($v = $data['promotion_indicator_type'] ?? null) !== null) {
            $obj->promotionIndicatorType = (int) $v;
        }
        if (($v = $data['second_class_category_name'] ?? null) !== null) {
            $obj->secondClassCategoryName = (string) $v;
        }
        if (($v = $data['star_brand_name'] ?? null) !== null) {
            $obj->starBrandName = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['star_sub_brand_name'] ?? null) !== null) {
            $obj->starSubBrandName = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (int) $v;
        }
        if (($v = $data['taobao_project_code'] ?? null) !== null) {
            $obj->taobaoProjectCode = (string) $v;
        }
        if (($v = $data['taobao_project_id'] ?? null) !== null) {
            $obj->taobaoProjectId = (string) $v;
        }
        if (($v = $data['total_budget'] ?? null) !== null) {
            $obj->totalBudget = (int) $v;
        }
        return $obj;
    }
}

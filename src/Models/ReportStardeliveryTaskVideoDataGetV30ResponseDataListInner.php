<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportStardeliveryTaskVideoDataGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $active = null;

    /**
     * @var int
     */
    protected ?int $activePay = null;

    /**
     * @var int
     */
    protected ?int $activeRegister = null;

    /**
     * @var int
     */
    protected ?int $androidConvertCnt = null;

    /**
     * @var int
     */
    protected ?int $gamePayCount = null;

    /**
     * @var string
     */
    protected ?string $iesAvatarUrl = null;

    /**
     * @var string
     */
    protected ?string $iesNickname = null;

    /**
     * @var float[]
     */
    protected ?array $inAppPaymentAmountRange = null;

    /**
     * @var float[]
     */
    protected ?array $inAppPaymentAmountRangeT1 = null;

    /**
     * @var float[]
     */
    protected ?array $inAppStatCostRange = null;

    /**
     * @var float[]
     */
    protected ?array $inAppStatCostRangeT1 = null;

    /**
     * @var int
     */
    protected ?int $installFinishCnt = null;

    /**
     * @var int
     */
    protected ?int $iosConvertCnt = null;

    /**
     * 服务商ID
     * @var int
     */
    protected ?int $isvId = null;

    /**
     * 服务商名称
     * @var string
     */
    protected ?string $isvName = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var float
     */
    protected ?float $nonAdStatCost = null;

    /**
     * @var int
     */
    protected ?int $starActiveCount = null;

    /**
     * @var int
     */
    protected ?int $starActivePayCount = null;

    /**
     * @var int
     */
    protected ?int $starActiveRegisterCount = null;

    /**
     * @var int
     */
    protected ?int $starConvertCnt = null;

    /**
     * @var int[]
     */
    protected ?array $starCpm = null;

    /**
     * @var int
     */
    protected ?int $starDeepPurchaseCount = null;

    /**
     * @var int
     */
    protected ?int $starInstallFinishCount = null;

    /**
     * 视频创意方向
     * @var string
     */
    protected ?string $starMaterialCreativeOrient = null;

    /**
     * 视频呈现形式
     * @var string
     */
    protected ?string $starMaterialDisplayFormat = null;

    /**
     * @var int
     */
    protected ?int $starMaterialNaturalViewsT1 = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialPurchaseMethod
     */
    protected ?string $starMaterialPurchaseMethod = null;

    /**
     * @var float
     */
    protected ?float $starMaterialStatCost = null;

    /**
     * @var int
     */
    protected ?int $starMaterialTotalViews = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType
     */
    protected ?string $starMaterialType = null;

    /**
     * @var float
     */
    protected ?float $starSaleMaterialStatCost = null;

    /**
     * @var float
     */
    protected ?float $starStatCost = null;

    /**
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment[]
     */
    protected ?array $starVideoMaterialAssessment = null;

    /**
     * @var int
     */
    protected ?int $starVideoRelatePromotionCount = null;

    /**
     * @var \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus
     */
    protected ?string $starVideoStatus = null;

    /**
     * @var float
     */
    protected ?float $statAndroidCost = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * @var float
     */
    protected ?float $statIosCost = null;

    /**
     * @var string
     */
    protected ?string $videoCoverUrl = null;

    /**
     * @var string
     */
    protected ?string $videoPlayLink = null;

    /**
     * @var string
     */
    protected ?string $videoTitle = null;

    /**
     * @return int
     */
    public function getActive(): ?int
    {
        return $this->active;
    }

    /**
     * @param int $active
     * @return self
     */
    public function setActive(?int $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivePay(): ?int
    {
        return $this->activePay;
    }

    /**
     * @param int $activePay
     * @return self
     */
    public function setActivePay(?int $activePay): self
    {
        $this->activePay = $activePay;
        return $this;
    }

    /**
     * @return int
     */
    public function getActiveRegister(): ?int
    {
        return $this->activeRegister;
    }

    /**
     * @param int $activeRegister
     * @return self
     */
    public function setActiveRegister(?int $activeRegister): self
    {
        $this->activeRegister = $activeRegister;
        return $this;
    }

    /**
     * @return int
     */
    public function getAndroidConvertCnt(): ?int
    {
        return $this->androidConvertCnt;
    }

    /**
     * @param int $androidConvertCnt
     * @return self
     */
    public function setAndroidConvertCnt(?int $androidConvertCnt): self
    {
        $this->androidConvertCnt = $androidConvertCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getGamePayCount(): ?int
    {
        return $this->gamePayCount;
    }

    /**
     * @param int $gamePayCount
     * @return self
     */
    public function setGamePayCount(?int $gamePayCount): self
    {
        $this->gamePayCount = $gamePayCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getIesAvatarUrl(): ?string
    {
        return $this->iesAvatarUrl;
    }

    /**
     * @param string $iesAvatarUrl
     * @return self
     */
    public function setIesAvatarUrl(?string $iesAvatarUrl): self
    {
        $this->iesAvatarUrl = $iesAvatarUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getIesNickname(): ?string
    {
        return $this->iesNickname;
    }

    /**
     * @param string $iesNickname
     * @return self
     */
    public function setIesNickname(?string $iesNickname): self
    {
        $this->iesNickname = $iesNickname;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getInAppPaymentAmountRange(): ?array
    {
        return $this->inAppPaymentAmountRange;
    }

    /**
     * @param float[] $inAppPaymentAmountRange
     * @return self
     */
    public function setInAppPaymentAmountRange(?array $inAppPaymentAmountRange): self
    {
        $this->inAppPaymentAmountRange = $inAppPaymentAmountRange;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getInAppPaymentAmountRangeT1(): ?array
    {
        return $this->inAppPaymentAmountRangeT1;
    }

    /**
     * @param float[] $inAppPaymentAmountRangeT1
     * @return self
     */
    public function setInAppPaymentAmountRangeT1(?array $inAppPaymentAmountRangeT1): self
    {
        $this->inAppPaymentAmountRangeT1 = $inAppPaymentAmountRangeT1;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getInAppStatCostRange(): ?array
    {
        return $this->inAppStatCostRange;
    }

    /**
     * @param float[] $inAppStatCostRange
     * @return self
     */
    public function setInAppStatCostRange(?array $inAppStatCostRange): self
    {
        $this->inAppStatCostRange = $inAppStatCostRange;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getInAppStatCostRangeT1(): ?array
    {
        return $this->inAppStatCostRangeT1;
    }

    /**
     * @param float[] $inAppStatCostRangeT1
     * @return self
     */
    public function setInAppStatCostRangeT1(?array $inAppStatCostRangeT1): self
    {
        $this->inAppStatCostRangeT1 = $inAppStatCostRangeT1;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallFinishCnt(): ?int
    {
        return $this->installFinishCnt;
    }

    /**
     * @param int $installFinishCnt
     * @return self
     */
    public function setInstallFinishCnt(?int $installFinishCnt): self
    {
        $this->installFinishCnt = $installFinishCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getIosConvertCnt(): ?int
    {
        return $this->iosConvertCnt;
    }

    /**
     * @param int $iosConvertCnt
     * @return self
     */
    public function setIosConvertCnt(?int $iosConvertCnt): self
    {
        $this->iosConvertCnt = $iosConvertCnt;
        return $this;
    }

    /**
     * 服务商ID
     * @return int
     */
    public function getIsvId(): ?int
    {
        return $this->isvId;
    }

    /**
     * 服务商ID
     * @param int $isvId
     * @return self
     */
    public function setIsvId(?int $isvId): self
    {
        $this->isvId = $isvId;
        return $this;
    }

    /**
     * 服务商名称
     * @return string
     */
    public function getIsvName(): ?string
    {
        return $this->isvName;
    }

    /**
     * 服务商名称
     * @param string $isvName
     * @return self
     */
    public function setIsvName(?string $isvName): self
    {
        $this->isvName = $isvName;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return float
     */
    public function getNonAdStatCost(): ?float
    {
        return $this->nonAdStatCost;
    }

    /**
     * @param float $nonAdStatCost
     * @return self
     */
    public function setNonAdStatCost(?float $nonAdStatCost): self
    {
        $this->nonAdStatCost = $nonAdStatCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarActiveCount(): ?int
    {
        return $this->starActiveCount;
    }

    /**
     * @param int $starActiveCount
     * @return self
     */
    public function setStarActiveCount(?int $starActiveCount): self
    {
        $this->starActiveCount = $starActiveCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarActivePayCount(): ?int
    {
        return $this->starActivePayCount;
    }

    /**
     * @param int $starActivePayCount
     * @return self
     */
    public function setStarActivePayCount(?int $starActivePayCount): self
    {
        $this->starActivePayCount = $starActivePayCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarActiveRegisterCount(): ?int
    {
        return $this->starActiveRegisterCount;
    }

    /**
     * @param int $starActiveRegisterCount
     * @return self
     */
    public function setStarActiveRegisterCount(?int $starActiveRegisterCount): self
    {
        $this->starActiveRegisterCount = $starActiveRegisterCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarConvertCnt(): ?int
    {
        return $this->starConvertCnt;
    }

    /**
     * @param int $starConvertCnt
     * @return self
     */
    public function setStarConvertCnt(?int $starConvertCnt): self
    {
        $this->starConvertCnt = $starConvertCnt;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getStarCpm(): ?array
    {
        return $this->starCpm;
    }

    /**
     * @param int[] $starCpm
     * @return self
     */
    public function setStarCpm(?array $starCpm): self
    {
        $this->starCpm = $starCpm;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarDeepPurchaseCount(): ?int
    {
        return $this->starDeepPurchaseCount;
    }

    /**
     * @param int $starDeepPurchaseCount
     * @return self
     */
    public function setStarDeepPurchaseCount(?int $starDeepPurchaseCount): self
    {
        $this->starDeepPurchaseCount = $starDeepPurchaseCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarInstallFinishCount(): ?int
    {
        return $this->starInstallFinishCount;
    }

    /**
     * @param int $starInstallFinishCount
     * @return self
     */
    public function setStarInstallFinishCount(?int $starInstallFinishCount): self
    {
        $this->starInstallFinishCount = $starInstallFinishCount;
        return $this;
    }

    /**
     * 视频创意方向
     * @return string
     */
    public function getStarMaterialCreativeOrient(): ?string
    {
        return $this->starMaterialCreativeOrient;
    }

    /**
     * 视频创意方向
     * @param string $starMaterialCreativeOrient
     * @return self
     */
    public function setStarMaterialCreativeOrient(?string $starMaterialCreativeOrient): self
    {
        $this->starMaterialCreativeOrient = $starMaterialCreativeOrient;
        return $this;
    }

    /**
     * 视频呈现形式
     * @return string
     */
    public function getStarMaterialDisplayFormat(): ?string
    {
        return $this->starMaterialDisplayFormat;
    }

    /**
     * 视频呈现形式
     * @param string $starMaterialDisplayFormat
     * @return self
     */
    public function setStarMaterialDisplayFormat(?string $starMaterialDisplayFormat): self
    {
        $this->starMaterialDisplayFormat = $starMaterialDisplayFormat;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarMaterialNaturalViewsT1(): ?int
    {
        return $this->starMaterialNaturalViewsT1;
    }

    /**
     * @param int $starMaterialNaturalViewsT1
     * @return self
     */
    public function setStarMaterialNaturalViewsT1(?int $starMaterialNaturalViewsT1): self
    {
        $this->starMaterialNaturalViewsT1 = $starMaterialNaturalViewsT1;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialPurchaseMethod
     */
    public function getStarMaterialPurchaseMethod(): ?string
    {
        return $this->starMaterialPurchaseMethod;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialPurchaseMethod $starMaterialPurchaseMethod
     * @return self
     */
    public function setStarMaterialPurchaseMethod(?string $starMaterialPurchaseMethod): self
    {
        $this->starMaterialPurchaseMethod = $starMaterialPurchaseMethod;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarMaterialStatCost(): ?float
    {
        return $this->starMaterialStatCost;
    }

    /**
     * @param float $starMaterialStatCost
     * @return self
     */
    public function setStarMaterialStatCost(?float $starMaterialStatCost): self
    {
        $this->starMaterialStatCost = $starMaterialStatCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarMaterialTotalViews(): ?int
    {
        return $this->starMaterialTotalViews;
    }

    /**
     * @param int $starMaterialTotalViews
     * @return self
     */
    public function setStarMaterialTotalViews(?int $starMaterialTotalViews): self
    {
        $this->starMaterialTotalViews = $starMaterialTotalViews;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType
     */
    public function getStarMaterialType(): ?string
    {
        return $this->starMaterialType;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarMaterialType $starMaterialType
     * @return self
     */
    public function setStarMaterialType(?string $starMaterialType): self
    {
        $this->starMaterialType = $starMaterialType;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarSaleMaterialStatCost(): ?float
    {
        return $this->starSaleMaterialStatCost;
    }

    /**
     * @param float $starSaleMaterialStatCost
     * @return self
     */
    public function setStarSaleMaterialStatCost(?float $starSaleMaterialStatCost): self
    {
        $this->starSaleMaterialStatCost = $starSaleMaterialStatCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarStatCost(): ?float
    {
        return $this->starStatCost;
    }

    /**
     * @param float $starStatCost
     * @return self
     */
    public function setStarStatCost(?float $starStatCost): self
    {
        $this->starStatCost = $starStatCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarTaskId(): ?int
    {
        return $this->starTaskId;
    }

    /**
     * @param int $starTaskId
     * @return self
     */
    public function setStarTaskId(?int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment[]
     */
    public function getStarVideoMaterialAssessment(): ?array
    {
        return $this->starVideoMaterialAssessment;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarVideoMaterialAssessment[] $starVideoMaterialAssessment
     * @return self
     */
    public function setStarVideoMaterialAssessment(?array $starVideoMaterialAssessment): self
    {
        $this->starVideoMaterialAssessment = $starVideoMaterialAssessment;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarVideoRelatePromotionCount(): ?int
    {
        return $this->starVideoRelatePromotionCount;
    }

    /**
     * @param int $starVideoRelatePromotionCount
     * @return self
     */
    public function setStarVideoRelatePromotionCount(?int $starVideoRelatePromotionCount): self
    {
        $this->starVideoRelatePromotionCount = $starVideoRelatePromotionCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus
     */
    public function getStarVideoStatus(): ?string
    {
        return $this->starVideoStatus;
    }

    /**
     * @param \Oceanengine\Models\ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus $starVideoStatus
     * @return self
     */
    public function setStarVideoStatus(?string $starVideoStatus): self
    {
        $this->starVideoStatus = $starVideoStatus;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatAndroidCost(): ?float
    {
        return $this->statAndroidCost;
    }

    /**
     * @param float $statAndroidCost
     * @return self
     */
    public function setStatAndroidCost(?float $statAndroidCost): self
    {
        $this->statAndroidCost = $statAndroidCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatIosCost(): ?float
    {
        return $this->statIosCost;
    }

    /**
     * @param float $statIosCost
     * @return self
     */
    public function setStatIosCost(?float $statIosCost): self
    {
        $this->statIosCost = $statIosCost;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCoverUrl(): ?string
    {
        return $this->videoCoverUrl;
    }

    /**
     * @param string $videoCoverUrl
     * @return self
     */
    public function setVideoCoverUrl(?string $videoCoverUrl): self
    {
        $this->videoCoverUrl = $videoCoverUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoPlayLink(): ?string
    {
        return $this->videoPlayLink;
    }

    /**
     * @param string $videoPlayLink
     * @return self
     */
    public function setVideoPlayLink(?string $videoPlayLink): self
    {
        $this->videoPlayLink = $videoPlayLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoTitle(): ?string
    {
        return $this->videoTitle;
    }

    /**
     * @param string $videoTitle
     * @return self
     */
    public function setVideoTitle(?string $videoTitle): self
    {
        $this->videoTitle = $videoTitle;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->active !== null) {
            $result['active'] = $this->active;
        }
        if ($this->activePay !== null) {
            $result['active_pay'] = $this->activePay;
        }
        if ($this->activeRegister !== null) {
            $result['active_register'] = $this->activeRegister;
        }
        if ($this->androidConvertCnt !== null) {
            $result['android_convert_cnt'] = $this->androidConvertCnt;
        }
        if ($this->gamePayCount !== null) {
            $result['game_pay_count'] = $this->gamePayCount;
        }
        if ($this->iesAvatarUrl !== null) {
            $result['ies_avatar_url'] = $this->iesAvatarUrl;
        }
        if ($this->iesNickname !== null) {
            $result['ies_nickname'] = $this->iesNickname;
        }
        if ($this->inAppPaymentAmountRange !== null) {
            $result['in_app_payment_amount_range'] = $this->inAppPaymentAmountRange;
        }
        if ($this->inAppPaymentAmountRangeT1 !== null) {
            $result['in_app_payment_amount_range_t1'] = $this->inAppPaymentAmountRangeT1;
        }
        if ($this->inAppStatCostRange !== null) {
            $result['in_app_stat_cost_range'] = $this->inAppStatCostRange;
        }
        if ($this->inAppStatCostRangeT1 !== null) {
            $result['in_app_stat_cost_range_t1'] = $this->inAppStatCostRangeT1;
        }
        if ($this->installFinishCnt !== null) {
            $result['install_finish_cnt'] = $this->installFinishCnt;
        }
        if ($this->iosConvertCnt !== null) {
            $result['ios_convert_cnt'] = $this->iosConvertCnt;
        }
        if ($this->isvId !== null) {
            $result['isv_id'] = $this->isvId;
        }
        if ($this->isvName !== null) {
            $result['isv_name'] = $this->isvName;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->nonAdStatCost !== null) {
            $result['non_ad_stat_cost'] = $this->nonAdStatCost;
        }
        if ($this->starActiveCount !== null) {
            $result['star_active_count'] = $this->starActiveCount;
        }
        if ($this->starActivePayCount !== null) {
            $result['star_active_pay_count'] = $this->starActivePayCount;
        }
        if ($this->starActiveRegisterCount !== null) {
            $result['star_active_register_count'] = $this->starActiveRegisterCount;
        }
        if ($this->starConvertCnt !== null) {
            $result['star_convert_cnt'] = $this->starConvertCnt;
        }
        if ($this->starCpm !== null) {
            $result['star_cpm'] = $this->starCpm;
        }
        if ($this->starDeepPurchaseCount !== null) {
            $result['star_deep_purchase_count'] = $this->starDeepPurchaseCount;
        }
        if ($this->starInstallFinishCount !== null) {
            $result['star_install_finish_count'] = $this->starInstallFinishCount;
        }
        if ($this->starMaterialCreativeOrient !== null) {
            $result['star_material_creative_orient'] = $this->starMaterialCreativeOrient;
        }
        if ($this->starMaterialDisplayFormat !== null) {
            $result['star_material_display_format'] = $this->starMaterialDisplayFormat;
        }
        if ($this->starMaterialNaturalViewsT1 !== null) {
            $result['star_material_natural_views_t1'] = $this->starMaterialNaturalViewsT1;
        }
        if ($this->starMaterialPurchaseMethod !== null) {
            $result['star_material_purchase_method'] = $this->starMaterialPurchaseMethod;
        }
        if ($this->starMaterialStatCost !== null) {
            $result['star_material_stat_cost'] = $this->starMaterialStatCost;
        }
        if ($this->starMaterialTotalViews !== null) {
            $result['star_material_total_views'] = $this->starMaterialTotalViews;
        }
        if ($this->starMaterialType !== null) {
            $result['star_material_type'] = $this->starMaterialType;
        }
        if ($this->starSaleMaterialStatCost !== null) {
            $result['star_sale_material_stat_cost'] = $this->starSaleMaterialStatCost;
        }
        if ($this->starStatCost !== null) {
            $result['star_stat_cost'] = $this->starStatCost;
        }
        if ($this->starTaskId !== null) {
            $result['star_task_id'] = $this->starTaskId;
        }
        if ($this->starVideoMaterialAssessment !== null) {
            $result['star_video_material_assessment'] = $this->starVideoMaterialAssessment;
        }
        if ($this->starVideoRelatePromotionCount !== null) {
            $result['star_video_relate_promotion_count'] = $this->starVideoRelatePromotionCount;
        }
        if ($this->starVideoStatus !== null) {
            $result['star_video_status'] = $this->starVideoStatus;
        }
        if ($this->statAndroidCost !== null) {
            $result['stat_android_cost'] = $this->statAndroidCost;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->statIosCost !== null) {
            $result['stat_ios_cost'] = $this->statIosCost;
        }
        if ($this->videoCoverUrl !== null) {
            $result['video_cover_url'] = $this->videoCoverUrl;
        }
        if ($this->videoPlayLink !== null) {
            $result['video_play_link'] = $this->videoPlayLink;
        }
        if ($this->videoTitle !== null) {
            $result['video_title'] = $this->videoTitle;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['active'] ?? null) !== null) {
            $obj->active = (int) $v;
        }
        if (($v = $data['active_pay'] ?? null) !== null) {
            $obj->activePay = (int) $v;
        }
        if (($v = $data['active_register'] ?? null) !== null) {
            $obj->activeRegister = (int) $v;
        }
        if (($v = $data['android_convert_cnt'] ?? null) !== null) {
            $obj->androidConvertCnt = (int) $v;
        }
        if (($v = $data['game_pay_count'] ?? null) !== null) {
            $obj->gamePayCount = (int) $v;
        }
        if (($v = $data['ies_avatar_url'] ?? null) !== null) {
            $obj->iesAvatarUrl = (string) $v;
        }
        if (($v = $data['ies_nickname'] ?? null) !== null) {
            $obj->iesNickname = (string) $v;
        }
        if (($v = $data['in_app_payment_amount_range'] ?? null) !== null && is_array($v)) {
            $obj->inAppPaymentAmountRange = $v;
        }
        if (($v = $data['in_app_payment_amount_range_t1'] ?? null) !== null && is_array($v)) {
            $obj->inAppPaymentAmountRangeT1 = $v;
        }
        if (($v = $data['in_app_stat_cost_range'] ?? null) !== null && is_array($v)) {
            $obj->inAppStatCostRange = $v;
        }
        if (($v = $data['in_app_stat_cost_range_t1'] ?? null) !== null && is_array($v)) {
            $obj->inAppStatCostRangeT1 = $v;
        }
        if (($v = $data['install_finish_cnt'] ?? null) !== null) {
            $obj->installFinishCnt = (int) $v;
        }
        if (($v = $data['ios_convert_cnt'] ?? null) !== null) {
            $obj->iosConvertCnt = (int) $v;
        }
        if (($v = $data['isv_id'] ?? null) !== null) {
            $obj->isvId = (int) $v;
        }
        if (($v = $data['isv_name'] ?? null) !== null) {
            $obj->isvName = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['non_ad_stat_cost'] ?? null) !== null) {
            $obj->nonAdStatCost = (float) $v;
        }
        if (($v = $data['star_active_count'] ?? null) !== null) {
            $obj->starActiveCount = (int) $v;
        }
        if (($v = $data['star_active_pay_count'] ?? null) !== null) {
            $obj->starActivePayCount = (int) $v;
        }
        if (($v = $data['star_active_register_count'] ?? null) !== null) {
            $obj->starActiveRegisterCount = (int) $v;
        }
        if (($v = $data['star_convert_cnt'] ?? null) !== null) {
            $obj->starConvertCnt = (int) $v;
        }
        if (($v = $data['star_cpm'] ?? null) !== null && is_array($v)) {
            $obj->starCpm = $v;
        }
        if (($v = $data['star_deep_purchase_count'] ?? null) !== null) {
            $obj->starDeepPurchaseCount = (int) $v;
        }
        if (($v = $data['star_install_finish_count'] ?? null) !== null) {
            $obj->starInstallFinishCount = (int) $v;
        }
        if (($v = $data['star_material_creative_orient'] ?? null) !== null) {
            $obj->starMaterialCreativeOrient = (string) $v;
        }
        if (($v = $data['star_material_display_format'] ?? null) !== null) {
            $obj->starMaterialDisplayFormat = (string) $v;
        }
        if (($v = $data['star_material_natural_views_t1'] ?? null) !== null) {
            $obj->starMaterialNaturalViewsT1 = (int) $v;
        }
        if (($v = $data['star_material_purchase_method'] ?? null) !== null) {
            $obj->starMaterialPurchaseMethod = (string) $v;
        }
        if (($v = $data['star_material_stat_cost'] ?? null) !== null) {
            $obj->starMaterialStatCost = (float) $v;
        }
        if (($v = $data['star_material_total_views'] ?? null) !== null) {
            $obj->starMaterialTotalViews = (int) $v;
        }
        if (($v = $data['star_material_type'] ?? null) !== null) {
            $obj->starMaterialType = (string) $v;
        }
        if (($v = $data['star_sale_material_stat_cost'] ?? null) !== null) {
            $obj->starSaleMaterialStatCost = (float) $v;
        }
        if (($v = $data['star_stat_cost'] ?? null) !== null) {
            $obj->starStatCost = (float) $v;
        }
        if (($v = $data['star_task_id'] ?? null) !== null) {
            $obj->starTaskId = (int) $v;
        }
        if (($v = $data['star_video_material_assessment'] ?? null) !== null && is_array($v)) {
            $obj->starVideoMaterialAssessment = $v;
        }
        if (($v = $data['star_video_relate_promotion_count'] ?? null) !== null) {
            $obj->starVideoRelatePromotionCount = (int) $v;
        }
        if (($v = $data['star_video_status'] ?? null) !== null) {
            $obj->starVideoStatus = (string) $v;
        }
        if (($v = $data['stat_android_cost'] ?? null) !== null) {
            $obj->statAndroidCost = (float) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['stat_ios_cost'] ?? null) !== null) {
            $obj->statIosCost = (float) $v;
        }
        if (($v = $data['video_cover_url'] ?? null) !== null) {
            $obj->videoCoverUrl = (string) $v;
        }
        if (($v = $data['video_play_link'] ?? null) !== null) {
            $obj->videoPlayLink = (string) $v;
        }
        if (($v = $data['video_title'] ?? null) !== null) {
            $obj->videoTitle = (string) $v;
        }
        return $obj;
    }
}

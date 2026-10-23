<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectCreateV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30AdType
     */
    protected ?string $adType = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30AigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30RequestAudience
     */
    protected ?\Oceanengine\Models\LocalProjectCreateV30RequestAudience $audience = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30AutoUpdatePois
     */
    protected ?string $autoUpdatePois = null;

    /**
     * 用于推广直播间的抖音号，可通过【获取本地推创编可用抖音号】接口获取，仅推广目的=非线索使用 填写说明： 当marketing_goal=`LIVE`时有效且必填
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 出价（单位：分）
     * @var int
     */
    protected ?int $bid = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30BidType
     */
    protected ?string $bidType = null;

    /**
     * 预算（单位：分）
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30BudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * 私信接待抖音号，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、intelligent_selection_mode = On时：(选的留咨组件+选的n个营销页里有1个关联组件里包含私信)->必传，否则不传 3、intelligent_selection_mode = Off时 3.1、 localAssetType=详情页/私信页:选的留咨组件里包含私信->必传，否则不传 3.2、 localAssetType=营销页：选的n个营销页里有1个关联组件里包含私信->必传，否则不传
     * @var string
     */
    protected ?string $consultAwemeUid = null;

    /**
     * 每日投放时长（单位：秒，必须为1800s的整数倍） 仅local_delivery_scene=“EXTERNAL”线索且直播且schedule_type=DAILY_DELIVERY_DURATION时允许传
     * @var int
     */
    protected ?int $dailyDeliverySeconds = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30DeliveryGoal
     */
    protected ?string $deliveryGoal = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30DeliveryPackage
     */
    protected ?string $deliveryPackage = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30DeliveryPoiMode
     */
    protected ?string $deliveryPoiMode = null;

    /**
     * 结束投放时间 注意：当schedule_type=“START_TO_END”时支持填写该字段
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30ExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 高峰日预算上调比例（注意：该字段为百分比，例如：传“40”表示高峰日时预算上调“40%”）
     * @var int
     */
    protected ?int $highBudgetRate = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30IntelligentSelectionMode
     */
    protected ?string $intelligentSelectionMode = null;

    /**
     * 高峰日预算设置 该字段为false时：高峰日（自然周、节假日）、高峰日预算上调比例 均不可填值
     * @var bool
     */
    protected ?bool $isSetPeakBudget = null;

    /**
     * 本地推广告账户ID
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30LocalAssetType
     */
    protected ?string $localAssetType = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30LocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * 选择的营销页ids，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、仅(intelligent_selection_mode = Off && local_asset_type = 营销页 ) 或者  （intelligent_selection_mode = On && 所选的门店/商品包含营销页） 时必传，否则不传
     * @var int[]
     */
    protected ?array $marketPageIds = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30MarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 项目名称，长度是1-50个字（两个英文字符占1个字）
     * @var string
     */
    protected ?string $name = null;

    /**
     * 高峰日-节假日
     * @var \Oceanengine\Models\LocalProjectCreateV30PeakHolidays[]
     */
    protected ?array $peakHolidays = null;

    /**
     * 高峰日-自然周
     * @var \Oceanengine\Models\LocalProjectCreateV30PeakWeekDays[]
     */
    protected ?array $peakWeekDays = null;

    /**
     * 推广商品ID，可通过【获取可投商品列表】接口查询获取 填写说明： 当marketing_goal=`VIDEO_AND_IMAGE` 且 delivery_goal=`PRODUCT` 时有效且必填
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 推广门店ID列表  填写说明： 当delivery_goal=`POI`且 delivery_poi_mode=`CUSTOM` 投放指定门店时，有效且必填
     * @var int[]
     */
    protected ?array $promotionPoiIds = null;

    /**
     * 直播固定时长（单位：秒） 交易场景下的设置规则： 仅在营销场景设置为直播时可用
     * @var int
     */
    protected ?int $scheduleFixedSeconds = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\LocalProjectCreateV30ScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * 开始投放时间 注意：当schedule_type=“START_TO_END”/“DELIVERY_7DAY”时支持填写该字段
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 留咨组件id,详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传  2、仅intelligent_selection_mode=Off&local_asset_type=营销页不能传（营销页本身绑定了留咨组件），否则必传 3、intelligent_selection_mode=On&所选商品/门店不包含营销页:所选组件需要支持优选(enableInteLligentSelection=true)
     * @var int
     */
    protected ?int $toolPackId = null;

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30AdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30AdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30AigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30AigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\LocalProjectCreateV30RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\LocalProjectCreateV30RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30AutoUpdatePois
     */
    public function getAutoUpdatePois(): ?string
    {
        return $this->autoUpdatePois;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30AutoUpdatePois $autoUpdatePois
     * @return self
     */
    public function setAutoUpdatePois(?string $autoUpdatePois): self
    {
        $this->autoUpdatePois = $autoUpdatePois;
        return $this;
    }

    /**
     * 用于推广直播间的抖音号，可通过【获取本地推创编可用抖音号】接口获取，仅推广目的=非线索使用 填写说明： 当marketing_goal=`LIVE`时有效且必填
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 用于推广直播间的抖音号，可通过【获取本地推创编可用抖音号】接口获取，仅推广目的=非线索使用 填写说明： 当marketing_goal=`LIVE`时有效且必填
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 出价（单位：分）
     * @return int
     */
    public function getBid(): ?int
    {
        return $this->bid;
    }

    /**
     * 出价（单位：分）
     * @param int $bid
     * @return self
     */
    public function setBid(?int $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30BidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30BidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * 预算（单位：分）
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 预算（单位：分）
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30BudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30BudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * 私信接待抖音号，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、intelligent_selection_mode = On时：(选的留咨组件+选的n个营销页里有1个关联组件里包含私信)->必传，否则不传 3、intelligent_selection_mode = Off时 3.1、 localAssetType=详情页/私信页:选的留咨组件里包含私信->必传，否则不传 3.2、 localAssetType=营销页：选的n个营销页里有1个关联组件里包含私信->必传，否则不传
     * @return string
     */
    public function getConsultAwemeUid(): ?string
    {
        return $this->consultAwemeUid;
    }

    /**
     * 私信接待抖音号，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、intelligent_selection_mode = On时：(选的留咨组件+选的n个营销页里有1个关联组件里包含私信)->必传，否则不传 3、intelligent_selection_mode = Off时 3.1、 localAssetType=详情页/私信页:选的留咨组件里包含私信->必传，否则不传 3.2、 localAssetType=营销页：选的n个营销页里有1个关联组件里包含私信->必传，否则不传
     * @param string $consultAwemeUid
     * @return self
     */
    public function setConsultAwemeUid(?string $consultAwemeUid): self
    {
        $this->consultAwemeUid = $consultAwemeUid;
        return $this;
    }

    /**
     * 每日投放时长（单位：秒，必须为1800s的整数倍） 仅local_delivery_scene=“EXTERNAL”线索且直播且schedule_type=DAILY_DELIVERY_DURATION时允许传
     * @return int
     */
    public function getDailyDeliverySeconds(): ?int
    {
        return $this->dailyDeliverySeconds;
    }

    /**
     * 每日投放时长（单位：秒，必须为1800s的整数倍） 仅local_delivery_scene=“EXTERNAL”线索且直播且schedule_type=DAILY_DELIVERY_DURATION时允许传
     * @param int $dailyDeliverySeconds
     * @return self
     */
    public function setDailyDeliverySeconds(?int $dailyDeliverySeconds): self
    {
        $this->dailyDeliverySeconds = $dailyDeliverySeconds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30DeliveryGoal
     */
    public function getDeliveryGoal(): ?string
    {
        return $this->deliveryGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30DeliveryGoal $deliveryGoal
     * @return self
     */
    public function setDeliveryGoal(?string $deliveryGoal): self
    {
        $this->deliveryGoal = $deliveryGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30DeliveryPackage
     */
    public function getDeliveryPackage(): ?string
    {
        return $this->deliveryPackage;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30DeliveryPackage $deliveryPackage
     * @return self
     */
    public function setDeliveryPackage(?string $deliveryPackage): self
    {
        $this->deliveryPackage = $deliveryPackage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30DeliveryPoiMode
     */
    public function getDeliveryPoiMode(): ?string
    {
        return $this->deliveryPoiMode;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30DeliveryPoiMode $deliveryPoiMode
     * @return self
     */
    public function setDeliveryPoiMode(?string $deliveryPoiMode): self
    {
        $this->deliveryPoiMode = $deliveryPoiMode;
        return $this;
    }

    /**
     * 结束投放时间 注意：当schedule_type=“START_TO_END”时支持填写该字段
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束投放时间 注意：当schedule_type=“START_TO_END”时支持填写该字段
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30ExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30ExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 高峰日预算上调比例（注意：该字段为百分比，例如：传“40”表示高峰日时预算上调“40%”）
     * @return int
     */
    public function getHighBudgetRate(): ?int
    {
        return $this->highBudgetRate;
    }

    /**
     * 高峰日预算上调比例（注意：该字段为百分比，例如：传“40”表示高峰日时预算上调“40%”）
     * @param int $highBudgetRate
     * @return self
     */
    public function setHighBudgetRate(?int $highBudgetRate): self
    {
        $this->highBudgetRate = $highBudgetRate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30IntelligentSelectionMode
     */
    public function getIntelligentSelectionMode(): ?string
    {
        return $this->intelligentSelectionMode;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30IntelligentSelectionMode $intelligentSelectionMode
     * @return self
     */
    public function setIntelligentSelectionMode(?string $intelligentSelectionMode): self
    {
        $this->intelligentSelectionMode = $intelligentSelectionMode;
        return $this;
    }

    /**
     * 高峰日预算设置 该字段为false时：高峰日（自然周、节假日）、高峰日预算上调比例 均不可填值
     * @return bool
     */
    public function getIsSetPeakBudget(): ?bool
    {
        return $this->isSetPeakBudget;
    }

    /**
     * 高峰日预算设置 该字段为false时：高峰日（自然周、节假日）、高峰日预算上调比例 均不可填值
     * @param bool $isSetPeakBudget
     * @return self
     */
    public function setIsSetPeakBudget(?bool $isSetPeakBudget): self
    {
        $this->isSetPeakBudget = $isSetPeakBudget;
        return $this;
    }

    /**
     * 本地推广告账户ID
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * 本地推广告账户ID
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30LocalAssetType
     */
    public function getLocalAssetType(): ?string
    {
        return $this->localAssetType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30LocalAssetType $localAssetType
     * @return self
     */
    public function setLocalAssetType(?string $localAssetType): self
    {
        $this->localAssetType = $localAssetType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30LocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30LocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * 选择的营销页ids，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、仅(intelligent_selection_mode = Off && local_asset_type = 营销页 ) 或者  （intelligent_selection_mode = On && 所选的门店/商品包含营销页） 时必传，否则不传
     * @return int[]
     */
    public function getMarketPageIds(): ?array
    {
        return $this->marketPageIds;
    }

    /**
     * 选择的营销页ids，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、仅(intelligent_selection_mode = Off && local_asset_type = 营销页 ) 或者  （intelligent_selection_mode = On && 所选的门店/商品包含营销页） 时必传，否则不传
     * @param int[] $marketPageIds
     * @return self
     */
    public function setMarketPageIds(?array $marketPageIds): self
    {
        $this->marketPageIds = $marketPageIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30MarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30MarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 项目名称，长度是1-50个字（两个英文字符占1个字）
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 项目名称，长度是1-50个字（两个英文字符占1个字）
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 高峰日-节假日
     * @return \Oceanengine\Models\LocalProjectCreateV30PeakHolidays[]
     */
    public function getPeakHolidays(): ?array
    {
        return $this->peakHolidays;
    }

    /**
     * 高峰日-节假日
     * @param \Oceanengine\Models\LocalProjectCreateV30PeakHolidays[] $peakHolidays
     * @return self
     */
    public function setPeakHolidays(?array $peakHolidays): self
    {
        $this->peakHolidays = $peakHolidays;
        return $this;
    }

    /**
     * 高峰日-自然周
     * @return \Oceanengine\Models\LocalProjectCreateV30PeakWeekDays[]
     */
    public function getPeakWeekDays(): ?array
    {
        return $this->peakWeekDays;
    }

    /**
     * 高峰日-自然周
     * @param \Oceanengine\Models\LocalProjectCreateV30PeakWeekDays[] $peakWeekDays
     * @return self
     */
    public function setPeakWeekDays(?array $peakWeekDays): self
    {
        $this->peakWeekDays = $peakWeekDays;
        return $this;
    }

    /**
     * 推广商品ID，可通过【获取可投商品列表】接口查询获取 填写说明： 当marketing_goal=`VIDEO_AND_IMAGE` 且 delivery_goal=`PRODUCT` 时有效且必填
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 推广商品ID，可通过【获取可投商品列表】接口查询获取 填写说明： 当marketing_goal=`VIDEO_AND_IMAGE` 且 delivery_goal=`PRODUCT` 时有效且必填
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 推广门店ID列表  填写说明： 当delivery_goal=`POI`且 delivery_poi_mode=`CUSTOM` 投放指定门店时，有效且必填
     * @return int[]
     */
    public function getPromotionPoiIds(): ?array
    {
        return $this->promotionPoiIds;
    }

    /**
     * 推广门店ID列表  填写说明： 当delivery_goal=`POI`且 delivery_poi_mode=`CUSTOM` 投放指定门店时，有效且必填
     * @param int[] $promotionPoiIds
     * @return self
     */
    public function setPromotionPoiIds(?array $promotionPoiIds): self
    {
        $this->promotionPoiIds = $promotionPoiIds;
        return $this;
    }

    /**
     * 直播固定时长（单位：秒） 交易场景下的设置规则： 仅在营销场景设置为直播时可用
     * @return int
     */
    public function getScheduleFixedSeconds(): ?int
    {
        return $this->scheduleFixedSeconds;
    }

    /**
     * 直播固定时长（单位：秒） 交易场景下的设置规则： 仅在营销场景设置为直播时可用
     * @param int $scheduleFixedSeconds
     * @return self
     */
    public function setScheduleFixedSeconds(?int $scheduleFixedSeconds): self
    {
        $this->scheduleFixedSeconds = $scheduleFixedSeconds;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
     * @param string $scheduleTime
     * @return self
     */
    public function setScheduleTime(?string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectCreateV30ScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectCreateV30ScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * 开始投放时间 注意：当schedule_type=“START_TO_END”/“DELIVERY_7DAY”时支持填写该字段
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 开始投放时间 注意：当schedule_type=“START_TO_END”/“DELIVERY_7DAY”时支持填写该字段
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 留咨组件id,详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传  2、仅intelligent_selection_mode=Off&local_asset_type=营销页不能传（营销页本身绑定了留咨组件），否则必传 3、intelligent_selection_mode=On&所选商品/门店不包含营销页:所选组件需要支持优选(enableInteLligentSelection=true)
     * @return int
     */
    public function getToolPackId(): ?int
    {
        return $this->toolPackId;
    }

    /**
     * 留咨组件id,详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传  2、仅intelligent_selection_mode=Off&local_asset_type=营销页不能传（营销页本身绑定了留咨组件），否则必传 3、intelligent_selection_mode=On&所选商品/门店不包含营销页:所选组件需要支持优选(enableInteLligentSelection=true)
     * @param int $toolPackId
     * @return self
     */
    public function setToolPackId(?int $toolPackId): self
    {
        $this->toolPackId = $toolPackId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adType !== null) {
            $result['ad_type'] = $this->adType;
        }
        if ($this->aigcDynamicCreativeSwitch !== null) {
            $result['aigc_dynamic_creative_switch'] = $this->aigcDynamicCreativeSwitch;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->autoUpdatePois !== null) {
            $result['auto_update_pois'] = $this->autoUpdatePois;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->consultAwemeUid !== null) {
            $result['consult_aweme_uid'] = $this->consultAwemeUid;
        }
        if ($this->dailyDeliverySeconds !== null) {
            $result['daily_delivery_seconds'] = $this->dailyDeliverySeconds;
        }
        if ($this->deliveryGoal !== null) {
            $result['delivery_goal'] = $this->deliveryGoal;
        }
        if ($this->deliveryPackage !== null) {
            $result['delivery_package'] = $this->deliveryPackage;
        }
        if ($this->deliveryPoiMode !== null) {
            $result['delivery_poi_mode'] = $this->deliveryPoiMode;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->highBudgetRate !== null) {
            $result['high_budget_rate'] = $this->highBudgetRate;
        }
        if ($this->intelligentSelectionMode !== null) {
            $result['intelligent_selection_mode'] = $this->intelligentSelectionMode;
        }
        if ($this->isSetPeakBudget !== null) {
            $result['is_set_peak_budget'] = $this->isSetPeakBudget;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->localAssetType !== null) {
            $result['local_asset_type'] = $this->localAssetType;
        }
        if ($this->localDeliveryScene !== null) {
            $result['local_delivery_scene'] = $this->localDeliveryScene;
        }
        if ($this->marketPageIds !== null) {
            $result['market_page_ids'] = $this->marketPageIds;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->peakHolidays !== null) {
            $result['peak_holidays'] = $this->peakHolidays;
        }
        if ($this->peakWeekDays !== null) {
            $result['peak_week_days'] = $this->peakWeekDays;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->promotionPoiIds !== null) {
            $result['promotion_poi_ids'] = $this->promotionPoiIds;
        }
        if ($this->scheduleFixedSeconds !== null) {
            $result['schedule_fixed_seconds'] = $this->scheduleFixedSeconds;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->toolPackId !== null) {
            $result['tool_pack_id'] = $this->toolPackId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['aigc_dynamic_creative_switch'] ?? null) !== null) {
            $obj->aigcDynamicCreativeSwitch = (string) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\LocalProjectCreateV30RequestAudience::fromArray($v);
        }
        if (($v = $data['auto_update_pois'] ?? null) !== null) {
            $obj->autoUpdatePois = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (int) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['consult_aweme_uid'] ?? null) !== null) {
            $obj->consultAwemeUid = (string) $v;
        }
        if (($v = $data['daily_delivery_seconds'] ?? null) !== null) {
            $obj->dailyDeliverySeconds = (int) $v;
        }
        if (($v = $data['delivery_goal'] ?? null) !== null) {
            $obj->deliveryGoal = (string) $v;
        }
        if (($v = $data['delivery_package'] ?? null) !== null) {
            $obj->deliveryPackage = (string) $v;
        }
        if (($v = $data['delivery_poi_mode'] ?? null) !== null) {
            $obj->deliveryPoiMode = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['high_budget_rate'] ?? null) !== null) {
            $obj->highBudgetRate = (int) $v;
        }
        if (($v = $data['intelligent_selection_mode'] ?? null) !== null) {
            $obj->intelligentSelectionMode = (string) $v;
        }
        if (($v = $data['is_set_peak_budget'] ?? null) !== null) {
            $obj->isSetPeakBudget = (bool) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['local_asset_type'] ?? null) !== null) {
            $obj->localAssetType = (string) $v;
        }
        if (($v = $data['local_delivery_scene'] ?? null) !== null) {
            $obj->localDeliveryScene = (string) $v;
        }
        if (($v = $data['market_page_ids'] ?? null) !== null && is_array($v)) {
            $obj->marketPageIds = $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['peak_holidays'] ?? null) !== null && is_array($v)) {
            $obj->peakHolidays = $v;
        }
        if (($v = $data['peak_week_days'] ?? null) !== null && is_array($v)) {
            $obj->peakWeekDays = $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['promotion_poi_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionPoiIds = $v;
        }
        if (($v = $data['schedule_fixed_seconds'] ?? null) !== null) {
            $obj->scheduleFixedSeconds = (int) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['tool_pack_id'] ?? null) !== null) {
            $obj->toolPackId = (int) $v;
        }
        return $obj;
    }
}

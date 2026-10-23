<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionListV30ResponseDataPromotionListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalPromotionListV30DataPromotionListAdType
     */
    protected ?string $adType = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音号昵称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30DataPromotionListLearningPhase
     */
    protected ?string $learningPhase = null;

    /**
     * 广告账户id
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30DataPromotionListLocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * 项目启停状态
     * @var int
     */
    protected ?int $optStatus = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 广告创建时间，格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $promotionCreateTime = null;

    /**
     * 广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 广告更新时间，格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $promotionModifyTime = null;

    /**
     * 广告名称
     * @var string
     */
    protected ?string $promotionName = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionListV30DataPromotionListPromotionStatusFirst
     */
    protected ?string $promotionStatusFirst = null;

    /**
     * 广告二级状态
     * @var \Oceanengine\Models\LocalPromotionListV30DataPromotionListPromotionStatusSecond[]
     */
    protected ?array $promotionStatusSecond = null;

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30DataPromotionListAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30DataPromotionListAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * 抖音号
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音号昵称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音号昵称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30DataPromotionListLearningPhase
     */
    public function getLearningPhase(): ?string
    {
        return $this->learningPhase;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30DataPromotionListLearningPhase $learningPhase
     * @return self
     */
    public function setLearningPhase(?string $learningPhase): self
    {
        $this->learningPhase = $learningPhase;
        return $this;
    }

    /**
     * 广告账户id
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * 广告账户id
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30DataPromotionListLocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30DataPromotionListLocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * 项目启停状态
     * @return int
     */
    public function getOptStatus(): ?int
    {
        return $this->optStatus;
    }

    /**
     * 项目启停状态
     * @param int $optStatus
     * @return self
     */
    public function setOptStatus(?int $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 广告创建时间，格式yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getPromotionCreateTime(): ?string
    {
        return $this->promotionCreateTime;
    }

    /**
     * 广告创建时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $promotionCreateTime
     * @return self
     */
    public function setPromotionCreateTime(?string $promotionCreateTime): self
    {
        $this->promotionCreateTime = $promotionCreateTime;
        return $this;
    }

    /**
     * 广告ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告ID
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * 广告更新时间，格式yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getPromotionModifyTime(): ?string
    {
        return $this->promotionModifyTime;
    }

    /**
     * 广告更新时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $promotionModifyTime
     * @return self
     */
    public function setPromotionModifyTime(?string $promotionModifyTime): self
    {
        $this->promotionModifyTime = $promotionModifyTime;
        return $this;
    }

    /**
     * 广告名称
     * @return string
     */
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    /**
     * 广告名称
     * @param string $promotionName
     * @return self
     */
    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionListV30DataPromotionListPromotionStatusFirst
     */
    public function getPromotionStatusFirst(): ?string
    {
        return $this->promotionStatusFirst;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionListV30DataPromotionListPromotionStatusFirst $promotionStatusFirst
     * @return self
     */
    public function setPromotionStatusFirst(?string $promotionStatusFirst): self
    {
        $this->promotionStatusFirst = $promotionStatusFirst;
        return $this;
    }

    /**
     * 广告二级状态
     * @return \Oceanengine\Models\LocalPromotionListV30DataPromotionListPromotionStatusSecond[]
     */
    public function getPromotionStatusSecond(): ?array
    {
        return $this->promotionStatusSecond;
    }

    /**
     * 广告二级状态
     * @param \Oceanengine\Models\LocalPromotionListV30DataPromotionListPromotionStatusSecond[] $promotionStatusSecond
     * @return self
     */
    public function setPromotionStatusSecond(?array $promotionStatusSecond): self
    {
        $this->promotionStatusSecond = $promotionStatusSecond;
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
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->learningPhase !== null) {
            $result['learning_phase'] = $this->learningPhase;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->localDeliveryScene !== null) {
            $result['local_delivery_scene'] = $this->localDeliveryScene;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionCreateTime !== null) {
            $result['promotion_create_time'] = $this->promotionCreateTime;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->promotionModifyTime !== null) {
            $result['promotion_modify_time'] = $this->promotionModifyTime;
        }
        if ($this->promotionName !== null) {
            $result['promotion_name'] = $this->promotionName;
        }
        if ($this->promotionStatusFirst !== null) {
            $result['promotion_status_first'] = $this->promotionStatusFirst;
        }
        if ($this->promotionStatusSecond !== null) {
            $result['promotion_status_second'] = $this->promotionStatusSecond;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['learning_phase'] ?? null) !== null) {
            $obj->learningPhase = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['local_delivery_scene'] ?? null) !== null) {
            $obj->localDeliveryScene = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (int) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_create_time'] ?? null) !== null) {
            $obj->promotionCreateTime = (string) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['promotion_modify_time'] ?? null) !== null) {
            $obj->promotionModifyTime = (string) $v;
        }
        if (($v = $data['promotion_name'] ?? null) !== null) {
            $obj->promotionName = (string) $v;
        }
        if (($v = $data['promotion_status_first'] ?? null) !== null) {
            $obj->promotionStatusFirst = (string) $v;
        }
        if (($v = $data['promotion_status_second'] ?? null) !== null && is_array($v)) {
            $obj->promotionStatusSecond = $v;
        }
        return $obj;
    }
}

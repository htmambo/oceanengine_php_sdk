<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialCreateV30RequestCarouselMaterialListInner[]
     */
    protected ?array $carouselMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialCreateV30RequestImageMaterialListInner[]
     */
    protected ?array $imageMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialCreateV30RequestInstantPlayMaterialListInner[]
     */
    protected ?array $instantPlayMaterialList = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 标题素材列表
     * @var \Oceanengine\Models\OcProjectMaterialCreateV30RequestTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialCreateV30RequestTrialPlayMaterialListInner[]
     */
    protected ?array $trialPlayMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialCreateV30RequestVideoMaterialListInner[]
     */
    protected ?array $videoMaterialList = null;

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
     * @return \Oceanengine\Models\OcProjectMaterialCreateV30RequestCarouselMaterialListInner[]
     */
    public function getCarouselMaterialList(): ?array
    {
        return $this->carouselMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialCreateV30RequestCarouselMaterialListInner[] $carouselMaterialList
     * @return self
     */
    public function setCarouselMaterialList(?array $carouselMaterialList): self
    {
        $this->carouselMaterialList = $carouselMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialCreateV30RequestImageMaterialListInner[]
     */
    public function getImageMaterialList(): ?array
    {
        return $this->imageMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialCreateV30RequestImageMaterialListInner[] $imageMaterialList
     * @return self
     */
    public function setImageMaterialList(?array $imageMaterialList): self
    {
        $this->imageMaterialList = $imageMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialCreateV30RequestInstantPlayMaterialListInner[]
     */
    public function getInstantPlayMaterialList(): ?array
    {
        return $this->instantPlayMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialCreateV30RequestInstantPlayMaterialListInner[] $instantPlayMaterialList
     * @return self
     */
    public function setInstantPlayMaterialList(?array $instantPlayMaterialList): self
    {
        $this->instantPlayMaterialList = $instantPlayMaterialList;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 标题素材列表
     * @return \Oceanengine\Models\OcProjectMaterialCreateV30RequestTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * 标题素材列表
     * @param \Oceanengine\Models\OcProjectMaterialCreateV30RequestTitleMaterialListInner[] $titleMaterialList
     * @return self
     */
    public function setTitleMaterialList(?array $titleMaterialList): self
    {
        $this->titleMaterialList = $titleMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialCreateV30RequestTrialPlayMaterialListInner[]
     */
    public function getTrialPlayMaterialList(): ?array
    {
        return $this->trialPlayMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialCreateV30RequestTrialPlayMaterialListInner[] $trialPlayMaterialList
     * @return self
     */
    public function setTrialPlayMaterialList(?array $trialPlayMaterialList): self
    {
        $this->trialPlayMaterialList = $trialPlayMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialCreateV30RequestVideoMaterialListInner[]
     */
    public function getVideoMaterialList(): ?array
    {
        return $this->videoMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialCreateV30RequestVideoMaterialListInner[] $videoMaterialList
     * @return self
     */
    public function setVideoMaterialList(?array $videoMaterialList): self
    {
        $this->videoMaterialList = $videoMaterialList;
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
        if ($this->carouselMaterialList !== null) {
            $result['carousel_material_list'] = $this->carouselMaterialList;
        }
        if ($this->imageMaterialList !== null) {
            $result['image_material_list'] = $this->imageMaterialList;
        }
        if ($this->instantPlayMaterialList !== null) {
            $result['instant_play_material_list'] = $this->instantPlayMaterialList;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->titleMaterialList !== null) {
            $result['title_material_list'] = $this->titleMaterialList;
        }
        if ($this->trialPlayMaterialList !== null) {
            $result['trial_play_material_list'] = $this->trialPlayMaterialList;
        }
        if ($this->videoMaterialList !== null) {
            $result['video_material_list'] = $this->videoMaterialList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['carousel_material_list'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialCreateV30RequestCarouselMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['image_material_list'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialCreateV30RequestImageMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['instant_play_material_list'] ?? null) !== null && is_array($v)) {
            $obj->instantPlayMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialCreateV30RequestInstantPlayMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialCreateV30RequestTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['trial_play_material_list'] ?? null) !== null && is_array($v)) {
            $obj->trialPlayMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialCreateV30RequestTrialPlayMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialCreateV30RequestVideoMaterialListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30RequestPromotionMaterialsVideoMaterialListInner implements \JsonSerializable
{
    /**
     * 引导视频id，白名单功能，仅游戏广告主投放奖励关卡广告时必填
     * @var string
     */
    protected ?string $guideVideoId = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsVideoMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsVideoMaterialListVideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 自定义商品库视频模板ID，创建DPA创意时可传入，传入后该素材下image_info与video_info不生效，长度限制1，从【获取 DPA 商品库视频模板】接口中获取
     * @var string[]
     */
    protected ?array $videoTaskIds = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsVideoMaterialListVideoTemplateType
     */
    protected ?string $videoTemplateType = null;

    /**
     * 引导视频id，白名单功能，仅游戏广告主投放奖励关卡广告时必填
     * @return string
     */
    public function getGuideVideoId(): ?string
    {
        return $this->guideVideoId;
    }

    /**
     * 引导视频id，白名单功能，仅游戏广告主投放奖励关卡广告时必填
     * @param string $guideVideoId
     * @return self
     */
    public function setGuideVideoId(?string $guideVideoId): self
    {
        $this->guideVideoId = $guideVideoId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsVideoMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsVideoMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsVideoMaterialListVideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsVideoMaterialListVideoHpVisibility $videoHpVisibility
     * @return self
     */
    public function setVideoHpVisibility(?string $videoHpVisibility): self
    {
        $this->videoHpVisibility = $videoHpVisibility;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 自定义商品库视频模板ID，创建DPA创意时可传入，传入后该素材下image_info与video_info不生效，长度限制1，从【获取 DPA 商品库视频模板】接口中获取
     * @return string[]
     */
    public function getVideoTaskIds(): ?array
    {
        return $this->videoTaskIds;
    }

    /**
     * 自定义商品库视频模板ID，创建DPA创意时可传入，传入后该素材下image_info与video_info不生效，长度限制1，从【获取 DPA 商品库视频模板】接口中获取
     * @param string[] $videoTaskIds
     * @return self
     */
    public function setVideoTaskIds(?array $videoTaskIds): self
    {
        $this->videoTaskIds = $videoTaskIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsVideoMaterialListVideoTemplateType
     */
    public function getVideoTemplateType(): ?string
    {
        return $this->videoTemplateType;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsVideoMaterialListVideoTemplateType $videoTemplateType
     * @return self
     */
    public function setVideoTemplateType(?string $videoTemplateType): self
    {
        $this->videoTemplateType = $videoTemplateType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->guideVideoId !== null) {
            $result['guide_video_id'] = $this->guideVideoId;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoHpVisibility !== null) {
            $result['video_hp_visibility'] = $this->videoHpVisibility;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoTaskIds !== null) {
            $result['video_task_ids'] = $this->videoTaskIds;
        }
        if ($this->videoTemplateType !== null) {
            $result['video_template_type'] = $this->videoTemplateType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['guide_video_id'] ?? null) !== null) {
            $obj->guideVideoId = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_task_ids'] ?? null) !== null && is_array($v)) {
            $obj->videoTaskIds = $v;
        }
        if (($v = $data['video_template_type'] ?? null) !== null) {
            $obj->videoTemplateType = (string) $v;
        }
        return $obj;
    }
}

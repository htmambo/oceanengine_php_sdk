<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInner implements \JsonSerializable
{
    /**
     * 抖音短视频ID
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * 自定义商品库视频模板ID
     * @var string[]
     */
    protected ?array $dpaVideoTaskIds = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType
     */
    protected ?string $dpaVideoTemplateType = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerImageInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerImageInfo $imageInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataCreativeVideoMaterialsImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerVideoInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerVideoInfo $videoInfo = null;

    /**
     * 抖音短视频ID
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * 抖音短视频ID
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * 自定义商品库视频模板ID
     * @return string[]
     */
    public function getDpaVideoTaskIds(): ?array
    {
        return $this->dpaVideoTaskIds;
    }

    /**
     * 自定义商品库视频模板ID
     * @param string[] $dpaVideoTaskIds
     * @return self
     */
    public function setDpaVideoTaskIds(?array $dpaVideoTaskIds): self
    {
        $this->dpaVideoTaskIds = $dpaVideoTaskIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType
     */
    public function getDpaVideoTemplateType(): ?string
    {
        return $this->dpaVideoTemplateType;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType $dpaVideoTemplateType
     * @return self
     */
    public function setDpaVideoTemplateType(?string $dpaVideoTemplateType): self
    {
        $this->dpaVideoTemplateType = $dpaVideoTemplateType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerImageInfo $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataCreativeVideoMaterialsImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataCreativeVideoMaterialsImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->dpaVideoTaskIds !== null) {
            $result['dpa_video_task_ids'] = $this->dpaVideoTaskIds;
        }
        if ($this->dpaVideoTemplateType !== null) {
            $result['dpa_video_template_type'] = $this->dpaVideoTemplateType;
        }
        if ($this->imageInfo !== null) {
            $result['image_info'] = $this->imageInfo;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['dpa_video_task_ids'] ?? null) !== null && is_array($v)) {
            $obj->dpaVideoTaskIds = $v;
        }
        if (($v = $data['dpa_video_template_type'] ?? null) !== null) {
            $obj->dpaVideoTemplateType = (string) $v;
        }
        if (($v = $data['image_info'] ?? null) !== null && is_array($v)) {
            $obj->imageInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerImageInfo::fromArray($v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeVideoMaterialsInnerVideoInfo::fromArray($v);
        }
        return $obj;
    }
}

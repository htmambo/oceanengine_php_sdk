<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideo implements \JsonSerializable
{
    /**
     * 抖音视频id
     * @var string
     */
    protected ?string $awemeItemId = null;

    /**
     * 是否塞物料 1为塞物料（拉取抖音主页视频），0为取物料（上传视频）
     * @var int
     */
    protected ?int $awemeItemSource = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideoVideo
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideoVideo $video = null;

    /**
     * 抖音视频id
     * @return string
     */
    public function getAwemeItemId(): ?string
    {
        return $this->awemeItemId;
    }

    /**
     * 抖音视频id
     * @param string $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?string $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * 是否塞物料 1为塞物料（拉取抖音主页视频），0为取物料（上传视频）
     * @return int
     */
    public function getAwemeItemSource(): ?int
    {
        return $this->awemeItemSource;
    }

    /**
     * 是否塞物料 1为塞物料（拉取抖音主页视频），0为取物料（上传视频）
     * @param int $awemeItemSource
     * @return self
     */
    public function setAwemeItemSource(?int $awemeItemSource): self
    {
        $this->awemeItemSource = $awemeItemSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideoVideo
     */
    public function getVideo(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideoVideo
    {
        return $this->video;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideoVideo $video
     * @return self
     */
    public function setVideo(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideoVideo $video): self
    {
        $this->video = $video;
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
        if ($this->awemeItemSource !== null) {
            $result['aweme_item_source'] = $this->awemeItemSource;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->video !== null) {
            $result['video'] = $this->video;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (string) $v;
        }
        if (($v = $data['aweme_item_source'] ?? null) !== null) {
            $obj->awemeItemSource = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video'] ?? null) !== null && is_array($v)) {
            $obj->video = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideoVideo::fromArray($v);
        }
        return $obj;
    }
}

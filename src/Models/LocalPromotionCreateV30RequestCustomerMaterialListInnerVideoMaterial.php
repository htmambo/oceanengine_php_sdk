<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionCreateV30RequestCustomerMaterialListInnerVideoMaterial implements \JsonSerializable
{
    /**
     * 抖音短视频ID 注意：如果视频为抖音主页视频，则该字段必填
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * 封面信息设置
     * @var string
     */
    protected ?string $coverWebUri = null;

    /**
     * 视频
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 抖音短视频ID 注意：如果视频为抖音主页视频，则该字段必填
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * 抖音短视频ID 注意：如果视频为抖音主页视频，则该字段必填
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * 封面信息设置
     * @return string
     */
    public function getCoverWebUri(): ?string
    {
        return $this->coverWebUri;
    }

    /**
     * 封面信息设置
     * @param string $coverWebUri
     * @return self
     */
    public function setCoverWebUri(?string $coverWebUri): self
    {
        $this->coverWebUri = $coverWebUri;
        return $this;
    }

    /**
     * 视频
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
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
        if ($this->coverWebUri !== null) {
            $result['cover_web_uri'] = $this->coverWebUri;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['cover_web_uri'] ?? null) !== null) {
            $obj->coverWebUri = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}

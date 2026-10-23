<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoUpdateV2Request implements \JsonSerializable
{
    /**
     * 客户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 限制最多 100 个
     * @var \Oceanengine\Models\FileVideoUpdateV2RequestVideosInner[]
     */
    protected ?array $videos = null;

    /**
     * 客户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 客户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 限制最多 100 个
     * @return \Oceanengine\Models\FileVideoUpdateV2RequestVideosInner[]
     */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /**
     * 限制最多 100 个
     * @param \Oceanengine\Models\FileVideoUpdateV2RequestVideosInner[] $videos
     * @return self
     */
    public function setVideos(?array $videos): self
    {
        $this->videos = $videos;
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
        if ($this->videos !== null) {
            $result['videos'] = $this->videos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['videos'] ?? null) !== null && is_array($v)) {
            $obj->videos = array_map(fn ($vv) => \Oceanengine\Models\FileVideoUpdateV2RequestVideosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

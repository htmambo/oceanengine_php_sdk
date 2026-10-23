<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanQianchuanVideoStarGetV10ResponseDataVideoListInner implements \JsonSerializable
{
    /**
     * 抖音号id
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var int
     */
    protected ?int $commentCnt = null;

    /**
     * @var float
     */
    protected ?float $duration = null;

    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var int
     */
    protected ?int $likeCnt = null;

    /**
     * @var int
     */
    protected ?int $shareCnt = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @var string
     */
    protected ?string $videoCoverUrl = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var int
     */
    protected ?int $viewCnt = null;

    /**
     * @var int
     */
    protected ?int $width = null;

    /**
     * 抖音号id
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommentCnt(): ?int
    {
        return $this->commentCnt;
    }

    /**
     * @param int $commentCnt
     * @return self
     */
    public function setCommentCnt(?int $commentCnt): self
    {
        $this->commentCnt = $commentCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getLikeCnt(): ?int
    {
        return $this->likeCnt;
    }

    /**
     * @param int $likeCnt
     * @return self
     */
    public function setLikeCnt(?int $likeCnt): self
    {
        $this->likeCnt = $likeCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getShareCnt(): ?int
    {
        return $this->shareCnt;
    }

    /**
     * @param int $shareCnt
     * @return self
     */
    public function setShareCnt(?int $shareCnt): self
    {
        $this->shareCnt = $shareCnt;
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
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
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
     * @return int
     */
    public function getViewCnt(): ?int
    {
        return $this->viewCnt;
    }

    /**
     * @param int $viewCnt
     * @return self
     */
    public function setViewCnt(?int $viewCnt): self
    {
        $this->viewCnt = $viewCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->commentCnt !== null) {
            $result['comment_cnt'] = $this->commentCnt;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->likeCnt !== null) {
            $result['like_cnt'] = $this->likeCnt;
        }
        if ($this->shareCnt !== null) {
            $result['share_cnt'] = $this->shareCnt;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->videoCoverUrl !== null) {
            $result['video_cover_url'] = $this->videoCoverUrl;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->viewCnt !== null) {
            $result['view_cnt'] = $this->viewCnt;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['comment_cnt'] ?? null) !== null) {
            $obj->commentCnt = (int) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['like_cnt'] ?? null) !== null) {
            $obj->likeCnt = (int) $v;
        }
        if (($v = $data['share_cnt'] ?? null) !== null) {
            $obj->shareCnt = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['video_cover_url'] ?? null) !== null) {
            $obj->videoCoverUrl = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['view_cnt'] ?? null) !== null) {
            $obj->viewCnt = (int) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}

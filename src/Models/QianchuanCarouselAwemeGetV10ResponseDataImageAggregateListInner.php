<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerAuditSuggestions
     */
    protected ?\Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerAuditSuggestions $auditSuggestions = null;

    /**
     * 图文itemid
     * @var string
     */
    protected ?string $awemeCarouselId = null;

    /**
     * 图文描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * 图文图片
     * @var \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * 主页图文素材mid
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerMetrics
     */
    protected ?\Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerMetrics $metrics = null;

    /**
     * 音乐ID
     * @var string
     */
    protected ?string $musicId = null;

    /**
     * 音乐播放链接
     * @var string
     */
    protected ?string $musicUrl = null;

    /**
     * 图文标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * @return \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerAuditSuggestions
     */
    public function getAuditSuggestions(): ?\Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerAuditSuggestions
    {
        return $this->auditSuggestions;
    }

    /**
     * @param \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerAuditSuggestions $auditSuggestions
     * @return self
     */
    public function setAuditSuggestions(?\Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerAuditSuggestions $auditSuggestions): self
    {
        $this->auditSuggestions = $auditSuggestions;
        return $this;
    }

    /**
     * 图文itemid
     * @return string
     */
    public function getAwemeCarouselId(): ?string
    {
        return $this->awemeCarouselId;
    }

    /**
     * 图文itemid
     * @param string $awemeCarouselId
     * @return self
     */
    public function setAwemeCarouselId(?string $awemeCarouselId): self
    {
        $this->awemeCarouselId = $awemeCarouselId;
        return $this;
    }

    /**
     * 图文描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 图文描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 图文图片
     * @return \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * 图文图片
     * @param \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * 主页图文素材mid
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 主页图文素材mid
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerMetrics
     */
    public function getMetrics(): ?\Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerMetrics
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerMetrics $metrics
     * @return self
     */
    public function setMetrics(?\Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerMetrics $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * 音乐ID
     * @return string
     */
    public function getMusicId(): ?string
    {
        return $this->musicId;
    }

    /**
     * 音乐ID
     * @param string $musicId
     * @return self
     */
    public function setMusicId(?string $musicId): self
    {
        $this->musicId = $musicId;
        return $this;
    }

    /**
     * 音乐播放链接
     * @return string
     */
    public function getMusicUrl(): ?string
    {
        return $this->musicUrl;
    }

    /**
     * 音乐播放链接
     * @param string $musicUrl
     * @return self
     */
    public function setMusicUrl(?string $musicUrl): self
    {
        $this->musicUrl = $musicUrl;
        return $this;
    }

    /**
     * 图文标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 图文标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditSuggestions !== null) {
            $result['audit_suggestions'] = $this->auditSuggestions;
        }
        if ($this->awemeCarouselId !== null) {
            $result['aweme_carousel_id'] = $this->awemeCarouselId;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        if ($this->musicId !== null) {
            $result['music_id'] = $this->musicId;
        }
        if ($this->musicUrl !== null) {
            $result['music_url'] = $this->musicUrl;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_suggestions'] ?? null) !== null && is_array($v)) {
            $obj->auditSuggestions = \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerAuditSuggestions::fromArray($v);
        }
        if (($v = $data['aweme_carousel_id'] ?? null) !== null) {
            $obj->awemeCarouselId = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = \Oceanengine\Models\QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerMetrics::fromArray($v);
        }
        if (($v = $data['music_id'] ?? null) !== null) {
            $obj->musicId = (string) $v;
        }
        if (($v = $data['music_url'] ?? null) !== null) {
            $obj->musicUrl = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}

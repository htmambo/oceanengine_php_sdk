<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInner implements \JsonSerializable
{
    /**
     * 预览链接，存在有效期
     * @var string
     */
    protected ?string $preVideoUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetail
     */
    protected ?\Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetail $strategyDetail = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 预览链接，存在有效期
     * @return string
     */
    public function getPreVideoUrl(): ?string
    {
        return $this->preVideoUrl;
    }

    /**
     * 预览链接，存在有效期
     * @param string $preVideoUrl
     * @return self
     */
    public function setPreVideoUrl(?string $preVideoUrl): self
    {
        $this->preVideoUrl = $preVideoUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetail
     */
    public function getStrategyDetail(): ?\Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetail
    {
        return $this->strategyDetail;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetail $strategyDetail
     * @return self
     */
    public function setStrategyDetail(?\Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetail $strategyDetail): self
    {
        $this->strategyDetail = $strategyDetail;
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
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->preVideoUrl !== null) {
            $result['pre_video_url'] = $this->preVideoUrl;
        }
        if ($this->strategyDetail !== null) {
            $result['strategy_detail'] = $this->strategyDetail;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['pre_video_url'] ?? null) !== null) {
            $obj->preVideoUrl = (string) $v;
        }
        if (($v = $data['strategy_detail'] ?? null) !== null && is_array($v)) {
            $obj->strategyDetail = \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInnerDeriveMaterialsInnerStrategyDetail::fromArray($v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}

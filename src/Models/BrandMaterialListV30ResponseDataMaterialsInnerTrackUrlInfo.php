<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlInfo implements \JsonSerializable
{
    /**
     * 点击监测链接
     * @var string[]
     */
    protected ?array $actionTrackUrl = null;

    /**
     * 卡片展现第三方监测链接
     * @var string[]
     */
    protected ?array $cardShowTrackUrl = null;

    /**
     * 评论监测链接
     * @var string[]
     */
    protected ?array $commentTrackUrl = null;

    /**
     * 第三方上下文内容监测链接
     * @var string[]
     */
    protected ?array $contextTrackUrl = null;

    /**
     * 视频有效播放监测链接
     * @var string[]
     */
    protected ?array $effectiveFrame = null;

    /**
     * 视频开始播放监测链接
     * @var string[]
     */
    protected ?array $firstFrame = null;

    /**
     * 互动监控链接监测链接
     * @var string[]
     */
    protected ?array $interactTrackUrl = null;

    /**
     * 视频播放完成监测链接
     * @var string[]
     */
    protected ?array $lastFrame = null;

    /**
     * 点赞取消监测链接
     * @var string[]
     */
    protected ?array $likeCancelTrackUrl = null;

    /**
     * 点赞监测链接
     * @var string[]
     */
    protected ?array $likeTrackUrl = null;

    /**
     * 视频主动播放监测链接
     * @var string[]
     */
    protected ?array $manualFrame = null;

    /**
     * 分享监测链接
     * @var string[]
     */
    protected ?array $shareTrackUrl = null;

    /**
     * 展示监测链接
     * @var string[]
     */
    protected ?array $trackUrl = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30DataMaterialsTrackUrlInfoTrackUrlSendType
     */
    protected ?string $trackUrlSendType = null;

    /**
     * 点击监测链接
     * @return string[]
     */
    public function getActionTrackUrl(): ?array
    {
        return $this->actionTrackUrl;
    }

    /**
     * 点击监测链接
     * @param string[] $actionTrackUrl
     * @return self
     */
    public function setActionTrackUrl(?array $actionTrackUrl): self
    {
        $this->actionTrackUrl = $actionTrackUrl;
        return $this;
    }

    /**
     * 卡片展现第三方监测链接
     * @return string[]
     */
    public function getCardShowTrackUrl(): ?array
    {
        return $this->cardShowTrackUrl;
    }

    /**
     * 卡片展现第三方监测链接
     * @param string[] $cardShowTrackUrl
     * @return self
     */
    public function setCardShowTrackUrl(?array $cardShowTrackUrl): self
    {
        $this->cardShowTrackUrl = $cardShowTrackUrl;
        return $this;
    }

    /**
     * 评论监测链接
     * @return string[]
     */
    public function getCommentTrackUrl(): ?array
    {
        return $this->commentTrackUrl;
    }

    /**
     * 评论监测链接
     * @param string[] $commentTrackUrl
     * @return self
     */
    public function setCommentTrackUrl(?array $commentTrackUrl): self
    {
        $this->commentTrackUrl = $commentTrackUrl;
        return $this;
    }

    /**
     * 第三方上下文内容监测链接
     * @return string[]
     */
    public function getContextTrackUrl(): ?array
    {
        return $this->contextTrackUrl;
    }

    /**
     * 第三方上下文内容监测链接
     * @param string[] $contextTrackUrl
     * @return self
     */
    public function setContextTrackUrl(?array $contextTrackUrl): self
    {
        $this->contextTrackUrl = $contextTrackUrl;
        return $this;
    }

    /**
     * 视频有效播放监测链接
     * @return string[]
     */
    public function getEffectiveFrame(): ?array
    {
        return $this->effectiveFrame;
    }

    /**
     * 视频有效播放监测链接
     * @param string[] $effectiveFrame
     * @return self
     */
    public function setEffectiveFrame(?array $effectiveFrame): self
    {
        $this->effectiveFrame = $effectiveFrame;
        return $this;
    }

    /**
     * 视频开始播放监测链接
     * @return string[]
     */
    public function getFirstFrame(): ?array
    {
        return $this->firstFrame;
    }

    /**
     * 视频开始播放监测链接
     * @param string[] $firstFrame
     * @return self
     */
    public function setFirstFrame(?array $firstFrame): self
    {
        $this->firstFrame = $firstFrame;
        return $this;
    }

    /**
     * 互动监控链接监测链接
     * @return string[]
     */
    public function getInteractTrackUrl(): ?array
    {
        return $this->interactTrackUrl;
    }

    /**
     * 互动监控链接监测链接
     * @param string[] $interactTrackUrl
     * @return self
     */
    public function setInteractTrackUrl(?array $interactTrackUrl): self
    {
        $this->interactTrackUrl = $interactTrackUrl;
        return $this;
    }

    /**
     * 视频播放完成监测链接
     * @return string[]
     */
    public function getLastFrame(): ?array
    {
        return $this->lastFrame;
    }

    /**
     * 视频播放完成监测链接
     * @param string[] $lastFrame
     * @return self
     */
    public function setLastFrame(?array $lastFrame): self
    {
        $this->lastFrame = $lastFrame;
        return $this;
    }

    /**
     * 点赞取消监测链接
     * @return string[]
     */
    public function getLikeCancelTrackUrl(): ?array
    {
        return $this->likeCancelTrackUrl;
    }

    /**
     * 点赞取消监测链接
     * @param string[] $likeCancelTrackUrl
     * @return self
     */
    public function setLikeCancelTrackUrl(?array $likeCancelTrackUrl): self
    {
        $this->likeCancelTrackUrl = $likeCancelTrackUrl;
        return $this;
    }

    /**
     * 点赞监测链接
     * @return string[]
     */
    public function getLikeTrackUrl(): ?array
    {
        return $this->likeTrackUrl;
    }

    /**
     * 点赞监测链接
     * @param string[] $likeTrackUrl
     * @return self
     */
    public function setLikeTrackUrl(?array $likeTrackUrl): self
    {
        $this->likeTrackUrl = $likeTrackUrl;
        return $this;
    }

    /**
     * 视频主动播放监测链接
     * @return string[]
     */
    public function getManualFrame(): ?array
    {
        return $this->manualFrame;
    }

    /**
     * 视频主动播放监测链接
     * @param string[] $manualFrame
     * @return self
     */
    public function setManualFrame(?array $manualFrame): self
    {
        $this->manualFrame = $manualFrame;
        return $this;
    }

    /**
     * 分享监测链接
     * @return string[]
     */
    public function getShareTrackUrl(): ?array
    {
        return $this->shareTrackUrl;
    }

    /**
     * 分享监测链接
     * @param string[] $shareTrackUrl
     * @return self
     */
    public function setShareTrackUrl(?array $shareTrackUrl): self
    {
        $this->shareTrackUrl = $shareTrackUrl;
        return $this;
    }

    /**
     * 展示监测链接
     * @return string[]
     */
    public function getTrackUrl(): ?array
    {
        return $this->trackUrl;
    }

    /**
     * 展示监测链接
     * @param string[] $trackUrl
     * @return self
     */
    public function setTrackUrl(?array $trackUrl): self
    {
        $this->trackUrl = $trackUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30DataMaterialsTrackUrlInfoTrackUrlSendType
     */
    public function getTrackUrlSendType(): ?string
    {
        return $this->trackUrlSendType;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30DataMaterialsTrackUrlInfoTrackUrlSendType $trackUrlSendType
     * @return self
     */
    public function setTrackUrlSendType(?string $trackUrlSendType): self
    {
        $this->trackUrlSendType = $trackUrlSendType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionTrackUrl !== null) {
            $result['action_track_url'] = $this->actionTrackUrl;
        }
        if ($this->cardShowTrackUrl !== null) {
            $result['card_show_track_url'] = $this->cardShowTrackUrl;
        }
        if ($this->commentTrackUrl !== null) {
            $result['comment_track_url'] = $this->commentTrackUrl;
        }
        if ($this->contextTrackUrl !== null) {
            $result['context_track_url'] = $this->contextTrackUrl;
        }
        if ($this->effectiveFrame !== null) {
            $result['effective_frame'] = $this->effectiveFrame;
        }
        if ($this->firstFrame !== null) {
            $result['first_frame'] = $this->firstFrame;
        }
        if ($this->interactTrackUrl !== null) {
            $result['interact_track_url'] = $this->interactTrackUrl;
        }
        if ($this->lastFrame !== null) {
            $result['last_frame'] = $this->lastFrame;
        }
        if ($this->likeCancelTrackUrl !== null) {
            $result['like_cancel_track_url'] = $this->likeCancelTrackUrl;
        }
        if ($this->likeTrackUrl !== null) {
            $result['like_track_url'] = $this->likeTrackUrl;
        }
        if ($this->manualFrame !== null) {
            $result['manual_frame'] = $this->manualFrame;
        }
        if ($this->shareTrackUrl !== null) {
            $result['share_track_url'] = $this->shareTrackUrl;
        }
        if ($this->trackUrl !== null) {
            $result['track_url'] = $this->trackUrl;
        }
        if ($this->trackUrlSendType !== null) {
            $result['track_url_send_type'] = $this->trackUrlSendType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_track_url'] ?? null) !== null && is_array($v)) {
            $obj->actionTrackUrl = $v;
        }
        if (($v = $data['card_show_track_url'] ?? null) !== null && is_array($v)) {
            $obj->cardShowTrackUrl = $v;
        }
        if (($v = $data['comment_track_url'] ?? null) !== null && is_array($v)) {
            $obj->commentTrackUrl = $v;
        }
        if (($v = $data['context_track_url'] ?? null) !== null && is_array($v)) {
            $obj->contextTrackUrl = $v;
        }
        if (($v = $data['effective_frame'] ?? null) !== null && is_array($v)) {
            $obj->effectiveFrame = $v;
        }
        if (($v = $data['first_frame'] ?? null) !== null && is_array($v)) {
            $obj->firstFrame = $v;
        }
        if (($v = $data['interact_track_url'] ?? null) !== null && is_array($v)) {
            $obj->interactTrackUrl = $v;
        }
        if (($v = $data['last_frame'] ?? null) !== null && is_array($v)) {
            $obj->lastFrame = $v;
        }
        if (($v = $data['like_cancel_track_url'] ?? null) !== null && is_array($v)) {
            $obj->likeCancelTrackUrl = $v;
        }
        if (($v = $data['like_track_url'] ?? null) !== null && is_array($v)) {
            $obj->likeTrackUrl = $v;
        }
        if (($v = $data['manual_frame'] ?? null) !== null && is_array($v)) {
            $obj->manualFrame = $v;
        }
        if (($v = $data['share_track_url'] ?? null) !== null && is_array($v)) {
            $obj->shareTrackUrl = $v;
        }
        if (($v = $data['track_url'] ?? null) !== null && is_array($v)) {
            $obj->trackUrl = $v;
        }
        if (($v = $data['track_url_send_type'] ?? null) !== null) {
            $obj->trackUrlSendType = (string) $v;
        }
        return $obj;
    }
}

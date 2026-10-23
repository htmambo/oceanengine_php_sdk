<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDataTaskTimelineReportV2ResponseDataTaskDataValue implements \JsonSerializable
{
    /**
     * 评论次数
     * @var int
     */
    protected ?int $commentCnt = null;

    /**
     * 视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 点赞次数
     * @var int
     */
    protected ?int $likeCnt = null;

    /**
     * 播放次数
     * @var int
     */
    protected ?int $playCnt = null;

    /**
     * 分享次数
     * @var int
     */
    protected ?int $shareCnt = null;

    /**
     * 评论次数
     * @return int
     */
    public function getCommentCnt(): ?int
    {
        return $this->commentCnt;
    }

    /**
     * 评论次数
     * @param int $commentCnt
     * @return self
     */
    public function setCommentCnt(?int $commentCnt): self
    {
        $this->commentCnt = $commentCnt;
        return $this;
    }

    /**
     * 视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 点赞次数
     * @return int
     */
    public function getLikeCnt(): ?int
    {
        return $this->likeCnt;
    }

    /**
     * 点赞次数
     * @param int $likeCnt
     * @return self
     */
    public function setLikeCnt(?int $likeCnt): self
    {
        $this->likeCnt = $likeCnt;
        return $this;
    }

    /**
     * 播放次数
     * @return int
     */
    public function getPlayCnt(): ?int
    {
        return $this->playCnt;
    }

    /**
     * 播放次数
     * @param int $playCnt
     * @return self
     */
    public function setPlayCnt(?int $playCnt): self
    {
        $this->playCnt = $playCnt;
        return $this;
    }

    /**
     * 分享次数
     * @return int
     */
    public function getShareCnt(): ?int
    {
        return $this->shareCnt;
    }

    /**
     * 分享次数
     * @param int $shareCnt
     * @return self
     */
    public function setShareCnt(?int $shareCnt): self
    {
        $this->shareCnt = $shareCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->commentCnt !== null) {
            $result['comment_cnt'] = $this->commentCnt;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->likeCnt !== null) {
            $result['like_cnt'] = $this->likeCnt;
        }
        if ($this->playCnt !== null) {
            $result['play_cnt'] = $this->playCnt;
        }
        if ($this->shareCnt !== null) {
            $result['share_cnt'] = $this->shareCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['comment_cnt'] ?? null) !== null) {
            $obj->commentCnt = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['like_cnt'] ?? null) !== null) {
            $obj->likeCnt = (int) $v;
        }
        if (($v = $data['play_cnt'] ?? null) !== null) {
            $obj->playCnt = (int) $v;
        }
        if (($v = $data['share_cnt'] ?? null) !== null) {
            $obj->shareCnt = (int) $v;
        }
        return $obj;
    }
}

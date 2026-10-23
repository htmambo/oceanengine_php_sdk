<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanCarouselAwemeGetV10ResponseDataImageAggregateListInnerMetrics implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $commentCnt = null;

    /**
     * @var int
     */
    protected ?int $likeCnt = null;

    /**
     * @var int
     */
    protected ?int $shareCnt = null;

    /**
     * @var int
     */
    protected ?int $viewCnt = null;

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->commentCnt !== null) {
            $result['comment_cnt'] = $this->commentCnt;
        }
        if ($this->likeCnt !== null) {
            $result['like_cnt'] = $this->likeCnt;
        }
        if ($this->shareCnt !== null) {
            $result['share_cnt'] = $this->shareCnt;
        }
        if ($this->viewCnt !== null) {
            $result['view_cnt'] = $this->viewCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['comment_cnt'] ?? null) !== null) {
            $obj->commentCnt = (int) $v;
        }
        if (($v = $data['like_cnt'] ?? null) !== null) {
            $obj->likeCnt = (int) $v;
        }
        if (($v = $data['share_cnt'] ?? null) !== null) {
            $obj->shareCnt = (int) $v;
        }
        if (($v = $data['view_cnt'] ?? null) !== null) {
            $obj->viewCnt = (int) $v;
        }
        return $obj;
    }
}

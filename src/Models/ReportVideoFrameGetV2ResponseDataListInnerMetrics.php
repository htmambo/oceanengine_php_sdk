<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportVideoFrameGetV2ResponseDataListInnerMetrics implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $clickCnt = null;

    /**
     * @var int
     */
    protected ?int $dyComment = null;

    /**
     * @var int
     */
    protected ?int $dyFollow = null;

    /**
     * @var int
     */
    protected ?int $dyLike = null;

    /**
     * @var int
     */
    protected ?int $userLoseCnt = null;

    /**
     * @return int
     */
    public function getClickCnt(): ?int
    {
        return $this->clickCnt;
    }

    /**
     * @param int $clickCnt
     * @return self
     */
    public function setClickCnt(?int $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyComment(): ?int
    {
        return $this->dyComment;
    }

    /**
     * @param int $dyComment
     * @return self
     */
    public function setDyComment(?int $dyComment): self
    {
        $this->dyComment = $dyComment;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyFollow(): ?int
    {
        return $this->dyFollow;
    }

    /**
     * @param int $dyFollow
     * @return self
     */
    public function setDyFollow(?int $dyFollow): self
    {
        $this->dyFollow = $dyFollow;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyLike(): ?int
    {
        return $this->dyLike;
    }

    /**
     * @param int $dyLike
     * @return self
     */
    public function setDyLike(?int $dyLike): self
    {
        $this->dyLike = $dyLike;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserLoseCnt(): ?int
    {
        return $this->userLoseCnt;
    }

    /**
     * @param int $userLoseCnt
     * @return self
     */
    public function setUserLoseCnt(?int $userLoseCnt): self
    {
        $this->userLoseCnt = $userLoseCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->dyComment !== null) {
            $result['dy_comment'] = $this->dyComment;
        }
        if ($this->dyFollow !== null) {
            $result['dy_follow'] = $this->dyFollow;
        }
        if ($this->dyLike !== null) {
            $result['dy_like'] = $this->dyLike;
        }
        if ($this->userLoseCnt !== null) {
            $result['user_lose_cnt'] = $this->userLoseCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (int) $v;
        }
        if (($v = $data['dy_comment'] ?? null) !== null) {
            $obj->dyComment = (int) $v;
        }
        if (($v = $data['dy_follow'] ?? null) !== null) {
            $obj->dyFollow = (int) $v;
        }
        if (($v = $data['dy_like'] ?? null) !== null) {
            $obj->dyLike = (int) $v;
        }
        if (($v = $data['user_lose_cnt'] ?? null) !== null) {
            $obj->userLoseCnt = (int) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityScoreTotalGetV30ResponseDataScoreInfoListInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreTotalGetV30DataScoreInfoListIllegalType
     */
    protected ?string $illegalType = null;

    /**
     * 年分
     * @var int
     */
    protected ?int $score = null;

    /**
     * 积分年度
     * @var string
     */
    protected ?string $year = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityScoreTotalGetV30DataScoreInfoListIllegalType
     */
    public function getIllegalType(): ?string
    {
        return $this->illegalType;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreTotalGetV30DataScoreInfoListIllegalType $illegalType
     * @return self
     */
    public function setIllegalType(?string $illegalType): self
    {
        $this->illegalType = $illegalType;
        return $this;
    }

    /**
     * 年分
     * @return int
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * 年分
     * @param int $score
     * @return self
     */
    public function setScore(?int $score): self
    {
        $this->score = $score;
        return $this;
    }

    /**
     * 积分年度
     * @return string
     */
    public function getYear(): ?string
    {
        return $this->year;
    }

    /**
     * 积分年度
     * @param string $year
     * @return self
     */
    public function setYear(?string $year): self
    {
        $this->year = $year;
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
        if ($this->illegalType !== null) {
            $result['illegal_type'] = $this->illegalType;
        }
        if ($this->score !== null) {
            $result['score'] = $this->score;
        }
        if ($this->year !== null) {
            $result['year'] = $this->year;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['illegal_type'] ?? null) !== null) {
            $obj->illegalType = (string) $v;
        }
        if (($v = $data['score'] ?? null) !== null) {
            $obj->score = (int) $v;
        }
        if (($v = $data['year'] ?? null) !== null) {
            $obj->year = (string) $v;
        }
        return $obj;
    }
}

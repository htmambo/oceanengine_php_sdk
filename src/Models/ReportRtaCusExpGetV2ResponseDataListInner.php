<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRtaCusExpGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * rta参竞数
     * @var int
     */
    protected ?int $bidCount = null;

    /**
     * 点击数
     * @var int
     */
    protected ?int $clickCount = null;

    /**
     * 转化数
     * @var int
     */
    protected ?int $convertCount = null;

    /**
     * 消耗（元）
     * @var float
     */
    protected ?float $cost = null;

    /**
     * 时间
     * @var string
     */
    protected ?string $date = null;

    /**
     * rta请求数
     * @var int
     */
    protected ?int $requestCount = null;

    /**
     * rta反向联合实验id
     * @var string
     */
    protected ?string $rtaVid = null;

    /**
     * 展示数
     * @var int
     */
    protected ?int $showCount = null;

    /**
     * 竞胜数
     * @var int
     */
    protected ?int $winCount = null;

    /**
     * rta参竞数
     * @return int
     */
    public function getBidCount(): ?int
    {
        return $this->bidCount;
    }

    /**
     * rta参竞数
     * @param int $bidCount
     * @return self
     */
    public function setBidCount(?int $bidCount): self
    {
        $this->bidCount = $bidCount;
        return $this;
    }

    /**
     * 点击数
     * @return int
     */
    public function getClickCount(): ?int
    {
        return $this->clickCount;
    }

    /**
     * 点击数
     * @param int $clickCount
     * @return self
     */
    public function setClickCount(?int $clickCount): self
    {
        $this->clickCount = $clickCount;
        return $this;
    }

    /**
     * 转化数
     * @return int
     */
    public function getConvertCount(): ?int
    {
        return $this->convertCount;
    }

    /**
     * 转化数
     * @param int $convertCount
     * @return self
     */
    public function setConvertCount(?int $convertCount): self
    {
        $this->convertCount = $convertCount;
        return $this;
    }

    /**
     * 消耗（元）
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * 消耗（元）
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * 时间
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 时间
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * rta请求数
     * @return int
     */
    public function getRequestCount(): ?int
    {
        return $this->requestCount;
    }

    /**
     * rta请求数
     * @param int $requestCount
     * @return self
     */
    public function setRequestCount(?int $requestCount): self
    {
        $this->requestCount = $requestCount;
        return $this;
    }

    /**
     * rta反向联合实验id
     * @return string
     */
    public function getRtaVid(): ?string
    {
        return $this->rtaVid;
    }

    /**
     * rta反向联合实验id
     * @param string $rtaVid
     * @return self
     */
    public function setRtaVid(?string $rtaVid): self
    {
        $this->rtaVid = $rtaVid;
        return $this;
    }

    /**
     * 展示数
     * @return int
     */
    public function getShowCount(): ?int
    {
        return $this->showCount;
    }

    /**
     * 展示数
     * @param int $showCount
     * @return self
     */
    public function setShowCount(?int $showCount): self
    {
        $this->showCount = $showCount;
        return $this;
    }

    /**
     * 竞胜数
     * @return int
     */
    public function getWinCount(): ?int
    {
        return $this->winCount;
    }

    /**
     * 竞胜数
     * @param int $winCount
     * @return self
     */
    public function setWinCount(?int $winCount): self
    {
        $this->winCount = $winCount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bidCount !== null) {
            $result['bid_count'] = $this->bidCount;
        }
        if ($this->clickCount !== null) {
            $result['click_count'] = $this->clickCount;
        }
        if ($this->convertCount !== null) {
            $result['convert_count'] = $this->convertCount;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->requestCount !== null) {
            $result['request_count'] = $this->requestCount;
        }
        if ($this->rtaVid !== null) {
            $result['rta_vid'] = $this->rtaVid;
        }
        if ($this->showCount !== null) {
            $result['show_count'] = $this->showCount;
        }
        if ($this->winCount !== null) {
            $result['win_count'] = $this->winCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid_count'] ?? null) !== null) {
            $obj->bidCount = (int) $v;
        }
        if (($v = $data['click_count'] ?? null) !== null) {
            $obj->clickCount = (int) $v;
        }
        if (($v = $data['convert_count'] ?? null) !== null) {
            $obj->convertCount = (int) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['request_count'] ?? null) !== null) {
            $obj->requestCount = (int) $v;
        }
        if (($v = $data['rta_vid'] ?? null) !== null) {
            $obj->rtaVid = (string) $v;
        }
        if (($v = $data['show_count'] ?? null) !== null) {
            $obj->showCount = (int) $v;
        }
        if (($v = $data['win_count'] ?? null) !== null) {
            $obj->winCount = (int) $v;
        }
        return $obj;
    }
}

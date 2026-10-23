<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatEmotionDistribution implements \JsonSerializable
{
    /**
     * 评论舆情负向
     * @var int
     */
    protected ?int $negCnt = null;

    /**
     * 负向表现
     * @var float
     */
    protected ?float $negRate = null;

    /**
     * 评论舆情中立
     * @var int
     */
    protected ?int $neuCnt = null;

    /**
     * 中立表现
     * @var float
     */
    protected ?float $neuRate = null;

    /**
     * 评论舆情正向
     * @var int
     */
    protected ?int $posCnt = null;

    /**
     * 正向表现
     * @var float
     */
    protected ?float $posRate = null;

    /**
     * 评论舆情负向
     * @return int
     */
    public function getNegCnt(): ?int
    {
        return $this->negCnt;
    }

    /**
     * 评论舆情负向
     * @param int $negCnt
     * @return self
     */
    public function setNegCnt(?int $negCnt): self
    {
        $this->negCnt = $negCnt;
        return $this;
    }

    /**
     * 负向表现
     * @return float
     */
    public function getNegRate(): ?float
    {
        return $this->negRate;
    }

    /**
     * 负向表现
     * @param float $negRate
     * @return self
     */
    public function setNegRate(?float $negRate): self
    {
        $this->negRate = $negRate;
        return $this;
    }

    /**
     * 评论舆情中立
     * @return int
     */
    public function getNeuCnt(): ?int
    {
        return $this->neuCnt;
    }

    /**
     * 评论舆情中立
     * @param int $neuCnt
     * @return self
     */
    public function setNeuCnt(?int $neuCnt): self
    {
        $this->neuCnt = $neuCnt;
        return $this;
    }

    /**
     * 中立表现
     * @return float
     */
    public function getNeuRate(): ?float
    {
        return $this->neuRate;
    }

    /**
     * 中立表现
     * @param float $neuRate
     * @return self
     */
    public function setNeuRate(?float $neuRate): self
    {
        $this->neuRate = $neuRate;
        return $this;
    }

    /**
     * 评论舆情正向
     * @return int
     */
    public function getPosCnt(): ?int
    {
        return $this->posCnt;
    }

    /**
     * 评论舆情正向
     * @param int $posCnt
     * @return self
     */
    public function setPosCnt(?int $posCnt): self
    {
        $this->posCnt = $posCnt;
        return $this;
    }

    /**
     * 正向表现
     * @return float
     */
    public function getPosRate(): ?float
    {
        return $this->posRate;
    }

    /**
     * 正向表现
     * @param float $posRate
     * @return self
     */
    public function setPosRate(?float $posRate): self
    {
        $this->posRate = $posRate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->negCnt !== null) {
            $result['neg_cnt'] = $this->negCnt;
        }
        if ($this->negRate !== null) {
            $result['neg_rate'] = $this->negRate;
        }
        if ($this->neuCnt !== null) {
            $result['neu_cnt'] = $this->neuCnt;
        }
        if ($this->neuRate !== null) {
            $result['neu_rate'] = $this->neuRate;
        }
        if ($this->posCnt !== null) {
            $result['pos_cnt'] = $this->posCnt;
        }
        if ($this->posRate !== null) {
            $result['pos_rate'] = $this->posRate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['neg_cnt'] ?? null) !== null) {
            $obj->negCnt = (int) $v;
        }
        if (($v = $data['neg_rate'] ?? null) !== null) {
            $obj->negRate = (float) $v;
        }
        if (($v = $data['neu_cnt'] ?? null) !== null) {
            $obj->neuCnt = (int) $v;
        }
        if (($v = $data['neu_rate'] ?? null) !== null) {
            $obj->neuRate = (float) $v;
        }
        if (($v = $data['pos_cnt'] ?? null) !== null) {
            $obj->posCnt = (int) $v;
        }
        if (($v = $data['pos_rate'] ?? null) !== null) {
            $obj->posRate = (float) $v;
        }
        return $obj;
    }
}

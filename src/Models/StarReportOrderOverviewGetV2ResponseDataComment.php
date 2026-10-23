<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewGetV2ResponseDataComment implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $highFrequencyWords = null;

    /**
     * @var int
     */
    protected ?int $negRate = null;

    /**
     * @var int
     */
    protected ?int $neuRate = null;

    /**
     * @var int
     */
    protected ?int $posRate = null;

    /**
     * @return string[]
     */
    public function getHighFrequencyWords(): ?array
    {
        return $this->highFrequencyWords;
    }

    /**
     * @param string[] $highFrequencyWords
     * @return self
     */
    public function setHighFrequencyWords(?array $highFrequencyWords): self
    {
        $this->highFrequencyWords = $highFrequencyWords;
        return $this;
    }

    /**
     * @return int
     */
    public function getNegRate(): ?int
    {
        return $this->negRate;
    }

    /**
     * @param int $negRate
     * @return self
     */
    public function setNegRate(?int $negRate): self
    {
        $this->negRate = $negRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getNeuRate(): ?int
    {
        return $this->neuRate;
    }

    /**
     * @param int $neuRate
     * @return self
     */
    public function setNeuRate(?int $neuRate): self
    {
        $this->neuRate = $neuRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosRate(): ?int
    {
        return $this->posRate;
    }

    /**
     * @param int $posRate
     * @return self
     */
    public function setPosRate(?int $posRate): self
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
        if ($this->highFrequencyWords !== null) {
            $result['high_frequency_words'] = $this->highFrequencyWords;
        }
        if ($this->negRate !== null) {
            $result['neg_rate'] = $this->negRate;
        }
        if ($this->neuRate !== null) {
            $result['neu_rate'] = $this->neuRate;
        }
        if ($this->posRate !== null) {
            $result['pos_rate'] = $this->posRate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['high_frequency_words'] ?? null) !== null && is_array($v)) {
            $obj->highFrequencyWords = $v;
        }
        if (($v = $data['neg_rate'] ?? null) !== null) {
            $obj->negRate = (int) $v;
        }
        if (($v = $data['neu_rate'] ?? null) !== null) {
            $obj->neuRate = (int) $v;
        }
        if (($v = $data['pos_rate'] ?? null) !== null) {
            $obj->posRate = (int) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerDisplayValue implements \JsonSerializable
{
    /**
     * 点击数
     * @var string
     */
    protected ?string $clickCnt = null;

    /**
     * 点击率
     * @var string
     */
    protected ?string $clickRate = null;

    /**
     * 展示数
     * @var string
     */
    protected ?string $showCnt = null;

    /**
     * 广告来源
     * @var string
     */
    protected ?string $sourceType = null;

    /**
     * 点击数
     * @return string
     */
    public function getClickCnt(): ?string
    {
        return $this->clickCnt;
    }

    /**
     * 点击数
     * @param string $clickCnt
     * @return self
     */
    public function setClickCnt(?string $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * 点击率
     * @return string
     */
    public function getClickRate(): ?string
    {
        return $this->clickRate;
    }

    /**
     * 点击率
     * @param string $clickRate
     * @return self
     */
    public function setClickRate(?string $clickRate): self
    {
        $this->clickRate = $clickRate;
        return $this;
    }

    /**
     * 展示数
     * @return string
     */
    public function getShowCnt(): ?string
    {
        return $this->showCnt;
    }

    /**
     * 展示数
     * @param string $showCnt
     * @return self
     */
    public function setShowCnt(?string $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * 广告来源
     * @return string
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    /**
     * 广告来源
     * @param string $sourceType
     * @return self
     */
    public function setSourceType(?string $sourceType): self
    {
        $this->sourceType = $sourceType;
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
        if ($this->clickRate !== null) {
            $result['click_rate'] = $this->clickRate;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->sourceType !== null) {
            $result['source_type'] = $this->sourceType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (string) $v;
        }
        if (($v = $data['click_rate'] ?? null) !== null) {
            $obj->clickRate = (string) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (string) $v;
        }
        if (($v = $data['source_type'] ?? null) !== null) {
            $obj->sourceType = (string) $v;
        }
        return $obj;
    }
}

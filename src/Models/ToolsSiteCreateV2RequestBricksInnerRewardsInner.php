<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerRewardsInner implements \JsonSerializable
{
    /**
     * 奖品图片
     * @var string
     */
    protected ?string $image = null;

    /**
     * 中奖页奖品名称
     * @var string
     */
    protected ?string $popupText = null;

    /**
     * 中奖概率,所有奖品中奖概率和为100
     * @var float
     */
    protected ?float $rate = null;

    /**
     * 奖品名称
     * @var string
     */
    protected ?string $text = null;

    /**
     * 奖品图片
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * 奖品图片
     * @param string $image
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * 中奖页奖品名称
     * @return string
     */
    public function getPopupText(): ?string
    {
        return $this->popupText;
    }

    /**
     * 中奖页奖品名称
     * @param string $popupText
     * @return self
     */
    public function setPopupText(?string $popupText): self
    {
        $this->popupText = $popupText;
        return $this;
    }

    /**
     * 中奖概率,所有奖品中奖概率和为100
     * @return float
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * 中奖概率,所有奖品中奖概率和为100
     * @param float $rate
     * @return self
     */
    public function setRate(?float $rate): self
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * 奖品名称
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * 奖品名称
     * @param string $text
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->popupText !== null) {
            $result['popup_text'] = $this->popupText;
        }
        if ($this->rate !== null) {
            $result['rate'] = $this->rate;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image'] ?? null) !== null) {
            $obj->image = (string) $v;
        }
        if (($v = $data['popup_text'] ?? null) !== null) {
            $obj->popupText = (string) $v;
        }
        if (($v = $data['rate'] ?? null) !== null) {
            $obj->rate = (float) $v;
        }
        if (($v = $data['text'] ?? null) !== null) {
            $obj->text = (string) $v;
        }
        return $obj;
    }
}

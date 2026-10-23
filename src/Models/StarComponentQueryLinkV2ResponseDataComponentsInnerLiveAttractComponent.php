<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentQueryLinkV2ResponseDataComponentsInnerLiveAttractComponent implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $cardId = null;

    /**
     * @var string
     */
    protected ?string $douyinId = null;

    /**
     * @var int
     */
    protected ?int $liveAttractType = null;

    /**
     * @var string
     */
    protected ?string $productLink = null;

    /**
     * @return string
     */
    public function getCardId(): ?string
    {
        return $this->cardId;
    }

    /**
     * @param string $cardId
     * @return self
     */
    public function setCardId(?string $cardId): self
    {
        $this->cardId = $cardId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDouyinId(): ?string
    {
        return $this->douyinId;
    }

    /**
     * @param string $douyinId
     * @return self
     */
    public function setDouyinId(?string $douyinId): self
    {
        $this->douyinId = $douyinId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveAttractType(): ?int
    {
        return $this->liveAttractType;
    }

    /**
     * @param int $liveAttractType
     * @return self
     */
    public function setLiveAttractType(?int $liveAttractType): self
    {
        $this->liveAttractType = $liveAttractType;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductLink(): ?string
    {
        return $this->productLink;
    }

    /**
     * @param string $productLink
     * @return self
     */
    public function setProductLink(?string $productLink): self
    {
        $this->productLink = $productLink;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cardId !== null) {
            $result['card_id'] = $this->cardId;
        }
        if ($this->douyinId !== null) {
            $result['douyin_id'] = $this->douyinId;
        }
        if ($this->liveAttractType !== null) {
            $result['live_attract_type'] = $this->liveAttractType;
        }
        if ($this->productLink !== null) {
            $result['product_link'] = $this->productLink;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['card_id'] ?? null) !== null) {
            $obj->cardId = (string) $v;
        }
        if (($v = $data['douyin_id'] ?? null) !== null) {
            $obj->douyinId = (string) $v;
        }
        if (($v = $data['live_attract_type'] ?? null) !== null) {
            $obj->liveAttractType = (int) $v;
        }
        if (($v = $data['product_link'] ?? null) !== null) {
            $obj->productLink = (string) $v;
        }
        return $obj;
    }
}

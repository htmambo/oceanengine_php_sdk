<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEasyUpdateV30RequestPromotionMaterialsCarouselMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $carouselId = null;

    /**
     * 抖音图文id
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @return string
     */
    public function getCarouselId(): ?string
    {
        return $this->carouselId;
    }

    /**
     * @param string $carouselId
     * @return self
     */
    public function setCarouselId(?string $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * 抖音图文id
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 抖音图文id
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        return $obj;
    }
}

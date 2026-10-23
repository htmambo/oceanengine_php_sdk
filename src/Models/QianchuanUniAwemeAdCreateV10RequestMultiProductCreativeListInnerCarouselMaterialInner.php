<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerCarouselMaterialInner implements \JsonSerializable
{
    /**
     * 抖音图文id
     * @var int
     */
    protected ?int $awemeCarouselId = null;

    /**
     * 图文id
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * 抖音图文id
     * @return int
     */
    public function getAwemeCarouselId(): ?int
    {
        return $this->awemeCarouselId;
    }

    /**
     * 抖音图文id
     * @param int $awemeCarouselId
     * @return self
     */
    public function setAwemeCarouselId(?int $awemeCarouselId): self
    {
        $this->awemeCarouselId = $awemeCarouselId;
        return $this;
    }

    /**
     * 图文id
     * @return int
     */
    public function getCarouselId(): ?int
    {
        return $this->carouselId;
    }

    /**
     * 图文id
     * @param int $carouselId
     * @return self
     */
    public function setCarouselId(?int $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeCarouselId !== null) {
            $result['aweme_carousel_id'] = $this->awemeCarouselId;
        }
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_carousel_id'] ?? null) !== null) {
            $obj->awemeCarouselId = (int) $v;
        }
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        return $obj;
    }
}

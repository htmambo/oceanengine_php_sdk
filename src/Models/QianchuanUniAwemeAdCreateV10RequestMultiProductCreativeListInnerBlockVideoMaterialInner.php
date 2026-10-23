<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdCreateV10RequestMultiProductCreativeListInnerBlockVideoMaterialInner implements \JsonSerializable
{
    /**
     * 抖音图文id
     * @var int
     */
    protected ?int $awemeCarouselId = null;

    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

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
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
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
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_carousel_id'] ?? null) !== null) {
            $obj->awemeCarouselId = (int) $v;
        }
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        return $obj;
    }
}

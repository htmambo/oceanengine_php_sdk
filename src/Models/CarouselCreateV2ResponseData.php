<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselCreateV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CarouselCreateV2ResponseDataCarousel
     */
    protected ?\Oceanengine\Models\CarouselCreateV2ResponseDataCarousel $carousel = null;

    /**
     * @return \Oceanengine\Models\CarouselCreateV2ResponseDataCarousel
     */
    public function getCarousel(): ?\Oceanengine\Models\CarouselCreateV2ResponseDataCarousel
    {
        return $this->carousel;
    }

    /**
     * @param \Oceanengine\Models\CarouselCreateV2ResponseDataCarousel $carousel
     * @return self
     */
    public function setCarousel(?\Oceanengine\Models\CarouselCreateV2ResponseDataCarousel $carousel): self
    {
        $this->carousel = $carousel;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->carousel !== null) {
            $result['carousel'] = $this->carousel;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel'] ?? null) !== null && is_array($v)) {
            $obj->carousel = \Oceanengine\Models\CarouselCreateV2ResponseDataCarousel::fromArray($v);
        }
        return $obj;
    }
}

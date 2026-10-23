<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CarouselUpdateV2ResponseDataCarouselsInner[]
     */
    protected ?array $carousels = null;

    /**
     * @return \Oceanengine\Models\CarouselUpdateV2ResponseDataCarouselsInner[]
     */
    public function getCarousels(): ?array
    {
        return $this->carousels;
    }

    /**
     * @param \Oceanengine\Models\CarouselUpdateV2ResponseDataCarouselsInner[] $carousels
     * @return self
     */
    public function setCarousels(?array $carousels): self
    {
        $this->carousels = $carousels;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->carousels !== null) {
            $result['carousels'] = $this->carousels;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousels'] ?? null) !== null && is_array($v)) {
            $obj->carousels = array_map(fn ($vv) => \Oceanengine\Models\CarouselUpdateV2ResponseDataCarouselsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

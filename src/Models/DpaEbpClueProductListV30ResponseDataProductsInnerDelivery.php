<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductListV30ResponseDataProductsInnerDelivery implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $deliverVideo = null;

    /**
     * @return int
     */
    public function getDeliverVideo(): ?int
    {
        return $this->deliverVideo;
    }

    /**
     * @param int $deliverVideo
     * @return self
     */
    public function setDeliverVideo(?int $deliverVideo): self
    {
        $this->deliverVideo = $deliverVideo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deliverVideo !== null) {
            $result['deliver_video'] = $this->deliverVideo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deliver_video'] ?? null) !== null) {
            $obj->deliverVideo = (int) $v;
        }
        return $obj;
    }
}

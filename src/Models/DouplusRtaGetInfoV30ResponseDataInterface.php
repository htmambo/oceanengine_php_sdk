<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusRtaGetInfoV30ResponseDataInterface implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusRtaGetInfoV30DataInterfaceDeliveryRange
     */
    protected ?string $deliveryRange = null;

    /**
     * @var int
     */
    protected ?int $localQps = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return \Oceanengine\Models\DouplusRtaGetInfoV30DataInterfaceDeliveryRange
     */
    public function getDeliveryRange(): ?string
    {
        return $this->deliveryRange;
    }

    /**
     * @param \Oceanengine\Models\DouplusRtaGetInfoV30DataInterfaceDeliveryRange $deliveryRange
     * @return self
     */
    public function setDeliveryRange(?string $deliveryRange): self
    {
        $this->deliveryRange = $deliveryRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalQps(): ?int
    {
        return $this->localQps;
    }

    /**
     * @param int $localQps
     * @return self
     */
    public function setLocalQps(?int $localQps): self
    {
        $this->localQps = $localQps;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deliveryRange !== null) {
            $result['delivery_range'] = $this->deliveryRange;
        }
        if ($this->localQps !== null) {
            $result['local_qps'] = $this->localQps;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['delivery_range'] ?? null) !== null) {
            $obj->deliveryRange = (string) $v;
        }
        if (($v = $data['local_qps'] ?? null) !== null) {
            $obj->localQps = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}

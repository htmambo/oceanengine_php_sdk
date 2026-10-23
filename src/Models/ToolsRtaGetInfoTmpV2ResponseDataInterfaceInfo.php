<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRtaGetInfoTmpV2ResponseDataInterfaceInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange
     */
    protected ?string $deliveryRange = null;

    /**
     * 站内QPS
     * @var int
     */
    protected ?int $localQps = null;

    /**
     * 接口地址状态；1：生效 0：无效
     * @var int
     */
    protected ?int $status = null;

    /**
     * 穿山甲QPS
     * @var int
     */
    protected ?int $unionQps = null;

    /**
     * 接口地址
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return \Oceanengine\Models\ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange
     */
    public function getDeliveryRange(): ?string
    {
        return $this->deliveryRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange $deliveryRange
     * @return self
     */
    public function setDeliveryRange(?string $deliveryRange): self
    {
        $this->deliveryRange = $deliveryRange;
        return $this;
    }

    /**
     * 站内QPS
     * @return int
     */
    public function getLocalQps(): ?int
    {
        return $this->localQps;
    }

    /**
     * 站内QPS
     * @param int $localQps
     * @return self
     */
    public function setLocalQps(?int $localQps): self
    {
        $this->localQps = $localQps;
        return $this;
    }

    /**
     * 接口地址状态；1：生效 0：无效
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 接口地址状态；1：生效 0：无效
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 穿山甲QPS
     * @return int
     */
    public function getUnionQps(): ?int
    {
        return $this->unionQps;
    }

    /**
     * 穿山甲QPS
     * @param int $unionQps
     * @return self
     */
    public function setUnionQps(?int $unionQps): self
    {
        $this->unionQps = $unionQps;
        return $this;
    }

    /**
     * 接口地址
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 接口地址
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
        if ($this->unionQps !== null) {
            $result['union_qps'] = $this->unionQps;
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
        if (($v = $data['union_qps'] ?? null) !== null) {
            $obj->unionQps = (int) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementBookingRecordsGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var string
     */
    protected ?string $orderId = null;

    /**
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * @var string
     */
    protected ?string $reqId = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return self
     */
    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReqId(): ?string
    {
        return $this->reqId;
    }

    /**
     * @param string $reqId
     * @return self
     */
    public function setReqId(?string $reqId): self
    {
        $this->reqId = $reqId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->reqId !== null) {
            $result['req_id'] = $this->reqId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (string) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        if (($v = $data['req_id'] ?? null) !== null) {
            $obj->reqId = (string) $v;
        }
        return $obj;
    }
}

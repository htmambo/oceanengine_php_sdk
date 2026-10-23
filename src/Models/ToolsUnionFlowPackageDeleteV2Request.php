<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsUnionFlowPackageDeleteV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $flowPackageId = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFlowPackageId(): ?int
    {
        return $this->flowPackageId;
    }

    /**
     * @param int $flowPackageId
     * @return self
     */
    public function setFlowPackageId(?int $flowPackageId): self
    {
        $this->flowPackageId = $flowPackageId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->flowPackageId !== null) {
            $result['flow_package_id'] = $this->flowPackageId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['flow_package_id'] ?? null) !== null) {
            $obj->flowPackageId = (int) $v;
        }
        return $obj;
    }
}

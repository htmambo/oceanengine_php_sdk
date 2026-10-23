<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementUpdateAuthorizationV2Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 共享关系变更的广告主对象id，不允许为空，且数量不允许大于20个。
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * 应用资产id
     * @var string
     */
    protected ?string $basicPackageId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementUpdateAuthorizationV2OperationType
     */
    protected ?string $operationType = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 共享关系变更的广告主对象id，不允许为空，且数量不允许大于20个。
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 共享关系变更的广告主对象id，不允许为空，且数量不允许大于20个。
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 应用资产id
     * @return string
     */
    public function getBasicPackageId(): ?string
    {
        return $this->basicPackageId;
    }

    /**
     * 应用资产id
     * @param string $basicPackageId
     * @return self
     */
    public function setBasicPackageId(?string $basicPackageId): self
    {
        $this->basicPackageId = $basicPackageId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementUpdateAuthorizationV2OperationType
     */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementUpdateAuthorizationV2OperationType $operationType
     * @return self
     */
    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
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
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->basicPackageId !== null) {
            $result['basic_package_id'] = $this->basicPackageId;
        }
        if ($this->operationType !== null) {
            $result['operation_type'] = $this->operationType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['basic_package_id'] ?? null) !== null) {
            $obj->basicPackageId = (string) $v;
        }
        if (($v = $data['operation_type'] ?? null) !== null) {
            $obj->operationType = (string) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskStatusUpdateV10Request implements \JsonSerializable
{
    /**
     * 千川广告账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType
     */
    protected ?string $optType = null;

    /**
     * 一键起量计划ID
     * @var int[]
     */
    protected ?array $taskIds = null;

    /**
     * 千川广告账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 千川广告账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType
     */
    public function getOptType(): ?string
    {
        return $this->optType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType $optType
     * @return self
     */
    public function setOptType(?string $optType): self
    {
        $this->optType = $optType;
        return $this;
    }

    /**
     * 一键起量计划ID
     * @return int[]
     */
    public function getTaskIds(): ?array
    {
        return $this->taskIds;
    }

    /**
     * 一键起量计划ID
     * @param int[] $taskIds
     * @return self
     */
    public function setTaskIds(?array $taskIds): self
    {
        $this->taskIds = $taskIds;
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
        if ($this->optType !== null) {
            $result['opt_type'] = $this->optType;
        }
        if ($this->taskIds !== null) {
            $result['task_ids'] = $this->taskIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['opt_type'] ?? null) !== null) {
            $obj->optType = (string) $v;
        }
        if (($v = $data['task_ids'] ?? null) !== null && is_array($v)) {
            $obj->taskIds = $v;
        }
        return $obj;
    }
}

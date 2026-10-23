<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpCustomAudiencePushV2V2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $customAudienceId = null;

    /**
     * @var int[]
     */
    protected ?array $targetAdvertiserIds = null;

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
    public function getCustomAudienceId(): ?int
    {
        return $this->customAudienceId;
    }

    /**
     * @param int $customAudienceId
     * @return self
     */
    public function setCustomAudienceId(?int $customAudienceId): self
    {
        $this->customAudienceId = $customAudienceId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTargetAdvertiserIds(): ?array
    {
        return $this->targetAdvertiserIds;
    }

    /**
     * @param int[] $targetAdvertiserIds
     * @return self
     */
    public function setTargetAdvertiserIds(?array $targetAdvertiserIds): self
    {
        $this->targetAdvertiserIds = $targetAdvertiserIds;
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
        if ($this->customAudienceId !== null) {
            $result['custom_audience_id'] = $this->customAudienceId;
        }
        if ($this->targetAdvertiserIds !== null) {
            $result['target_advertiser_ids'] = $this->targetAdvertiserIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['custom_audience_id'] ?? null) !== null) {
            $obj->customAudienceId = (int) $v;
        }
        if (($v = $data['target_advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->targetAdvertiserIds = $v;
        }
        return $obj;
    }
}

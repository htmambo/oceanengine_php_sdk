<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpCustomAudienceCopyV2Request implements \JsonSerializable
{
    /**
     * 人群包所属广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 人群包ID
     * @var int
     */
    protected ?int $customAudienceId = null;

    /**
     * 推送广告主ID（云图虚拟广告主ID，即virtual_adv_id）
     * @var int
     */
    protected ?int $toAdvertiserId = null;

    /**
     * 人群包所属广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 人群包所属广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 人群包ID
     * @return int
     */
    public function getCustomAudienceId(): ?int
    {
        return $this->customAudienceId;
    }

    /**
     * 人群包ID
     * @param int $customAudienceId
     * @return self
     */
    public function setCustomAudienceId(?int $customAudienceId): self
    {
        $this->customAudienceId = $customAudienceId;
        return $this;
    }

    /**
     * 推送广告主ID（云图虚拟广告主ID，即virtual_adv_id）
     * @return int
     */
    public function getToAdvertiserId(): ?int
    {
        return $this->toAdvertiserId;
    }

    /**
     * 推送广告主ID（云图虚拟广告主ID，即virtual_adv_id）
     * @param int $toAdvertiserId
     * @return self
     */
    public function setToAdvertiserId(?int $toAdvertiserId): self
    {
        $this->toAdvertiserId = $toAdvertiserId;
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
        if ($this->toAdvertiserId !== null) {
            $result['to_advertiser_id'] = $this->toAdvertiserId;
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
        if (($v = $data['to_advertiser_id'] ?? null) !== null) {
            $obj->toAdvertiserId = (int) $v;
        }
        return $obj;
    }
}

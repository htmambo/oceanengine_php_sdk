<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEasyKeepDeliverySwitchUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30KeepDeliverySwitch
     */
    protected ?string $keepDeliverySwitch = null;

    /**
     * @var int[]
     */
    protected ?array $projectIds = null;

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
     * @return \Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30KeepDeliverySwitch
     */
    public function getKeepDeliverySwitch(): ?string
    {
        return $this->keepDeliverySwitch;
    }

    /**
     * @param \Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30KeepDeliverySwitch $keepDeliverySwitch
     * @return self
     */
    public function setKeepDeliverySwitch(?string $keepDeliverySwitch): self
    {
        $this->keepDeliverySwitch = $keepDeliverySwitch;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * @param int[] $projectIds
     * @return self
     */
    public function setProjectIds(?array $projectIds): self
    {
        $this->projectIds = $projectIds;
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
        if ($this->keepDeliverySwitch !== null) {
            $result['keep_delivery_switch'] = $this->keepDeliverySwitch;
        }
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['keep_delivery_switch'] ?? null) !== null) {
            $obj->keepDeliverySwitch = (string) $v;
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        return $obj;
    }
}

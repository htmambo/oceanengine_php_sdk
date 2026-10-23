<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskSmartControlCreateV10Request implements \JsonSerializable
{
    /**
     * 调控计划 ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 调控预算，单位元，小数点后两位，注意：不得超过全域计划预算，注意：调控类型为SMART_BOOST时必填
     * @var float
     */
    protected ?float $budget = null;

    /**
     * 调控计划 ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 调控计划 ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

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
     * 调控预算，单位元，小数点后两位，注意：不得超过全域计划预算，注意：调控类型为SMART_BOOST时必填
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 调控预算，单位元，小数点后两位，注意：不得超过全域计划预算，注意：调控类型为SMART_BOOST时必填
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        return $obj;
    }
}

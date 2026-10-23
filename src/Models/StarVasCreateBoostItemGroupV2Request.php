<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasCreateBoostItemGroupV2Request implements \JsonSerializable
{
    /**
     * 手动出价，乘百取整（如：0.1 -> 10）。仅在boost_action为LINK_ACTION传参。如果不传，则为自动出价。可出价范围0.1~1000
     * @var int
     */
    protected ?int $bidAmount = null;

    /**
     * @var \Oceanengine\Models\StarVasCreateBoostItemGroupV2BoostAction
     */
    protected ?string $boostAction = null;

    /**
     * 助推金额，单位元。范围为1千~1亿，且为100的倍数
     * @var int
     */
    protected ?int $boostAmount = null;

    /**
     * 自定义投放时长，单位时，仅且必须在boost_action为LINK_ACTION传参。时长范围为2天~7天。
     * @var int
     */
    protected ?int $boostHours = null;

    /**
     * @var \Oceanengine\Models\StarVasCreateBoostItemGroupV2BoostType
     */
    protected ?string $boostType = null;

    /**
     * @var \Oceanengine\Models\StarVasCreateBoostItemGroupV2RequestCustomAudienceTag
     */
    protected ?\Oceanengine\Models\StarVasCreateBoostItemGroupV2RequestCustomAudienceTag $customAudienceTag = null;

    /**
     * 关联投稿视频，该字段与order_ids只取其一。同一助推组下指派和投稿不可共存
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * 加热组名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 关联指派单，指派单必须在当前同一主体账户下。该字段与item_ids只取其一。同一助推组下指派和投稿不可共存
     * @var int[]
     */
    protected ?array $orderIds = null;

    /**
     * 关联人群包，仅boost_type为CUSTOM_PACKAGE时传参
     * @var int
     */
    protected ?int $packId = null;

    /**
     * 客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 手动出价，乘百取整（如：0.1 -> 10）。仅在boost_action为LINK_ACTION传参。如果不传，则为自动出价。可出价范围0.1~1000
     * @return int
     */
    public function getBidAmount(): ?int
    {
        return $this->bidAmount;
    }

    /**
     * 手动出价，乘百取整（如：0.1 -> 10）。仅在boost_action为LINK_ACTION传参。如果不传，则为自动出价。可出价范围0.1~1000
     * @param int $bidAmount
     * @return self
     */
    public function setBidAmount(?int $bidAmount): self
    {
        $this->bidAmount = $bidAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasCreateBoostItemGroupV2BoostAction
     */
    public function getBoostAction(): ?string
    {
        return $this->boostAction;
    }

    /**
     * @param \Oceanengine\Models\StarVasCreateBoostItemGroupV2BoostAction $boostAction
     * @return self
     */
    public function setBoostAction(?string $boostAction): self
    {
        $this->boostAction = $boostAction;
        return $this;
    }

    /**
     * 助推金额，单位元。范围为1千~1亿，且为100的倍数
     * @return int
     */
    public function getBoostAmount(): ?int
    {
        return $this->boostAmount;
    }

    /**
     * 助推金额，单位元。范围为1千~1亿，且为100的倍数
     * @param int $boostAmount
     * @return self
     */
    public function setBoostAmount(?int $boostAmount): self
    {
        $this->boostAmount = $boostAmount;
        return $this;
    }

    /**
     * 自定义投放时长，单位时，仅且必须在boost_action为LINK_ACTION传参。时长范围为2天~7天。
     * @return int
     */
    public function getBoostHours(): ?int
    {
        return $this->boostHours;
    }

    /**
     * 自定义投放时长，单位时，仅且必须在boost_action为LINK_ACTION传参。时长范围为2天~7天。
     * @param int $boostHours
     * @return self
     */
    public function setBoostHours(?int $boostHours): self
    {
        $this->boostHours = $boostHours;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasCreateBoostItemGroupV2BoostType
     */
    public function getBoostType(): ?string
    {
        return $this->boostType;
    }

    /**
     * @param \Oceanengine\Models\StarVasCreateBoostItemGroupV2BoostType $boostType
     * @return self
     */
    public function setBoostType(?string $boostType): self
    {
        $this->boostType = $boostType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasCreateBoostItemGroupV2RequestCustomAudienceTag
     */
    public function getCustomAudienceTag(): ?\Oceanengine\Models\StarVasCreateBoostItemGroupV2RequestCustomAudienceTag
    {
        return $this->customAudienceTag;
    }

    /**
     * @param \Oceanengine\Models\StarVasCreateBoostItemGroupV2RequestCustomAudienceTag $customAudienceTag
     * @return self
     */
    public function setCustomAudienceTag(?\Oceanengine\Models\StarVasCreateBoostItemGroupV2RequestCustomAudienceTag $customAudienceTag): self
    {
        $this->customAudienceTag = $customAudienceTag;
        return $this;
    }

    /**
     * 关联投稿视频，该字段与order_ids只取其一。同一助推组下指派和投稿不可共存
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * 关联投稿视频，该字段与order_ids只取其一。同一助推组下指派和投稿不可共存
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * 加热组名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 加热组名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 关联指派单，指派单必须在当前同一主体账户下。该字段与item_ids只取其一。同一助推组下指派和投稿不可共存
     * @return int[]
     */
    public function getOrderIds(): ?array
    {
        return $this->orderIds;
    }

    /**
     * 关联指派单，指派单必须在当前同一主体账户下。该字段与item_ids只取其一。同一助推组下指派和投稿不可共存
     * @param int[] $orderIds
     * @return self
     */
    public function setOrderIds(?array $orderIds): self
    {
        $this->orderIds = $orderIds;
        return $this;
    }

    /**
     * 关联人群包，仅boost_type为CUSTOM_PACKAGE时传参
     * @return int
     */
    public function getPackId(): ?int
    {
        return $this->packId;
    }

    /**
     * 关联人群包，仅boost_type为CUSTOM_PACKAGE时传参
     * @param int $packId
     * @return self
     */
    public function setPackId(?int $packId): self
    {
        $this->packId = $packId;
        return $this;
    }

    /**
     * 客户ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 客户ID
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bidAmount !== null) {
            $result['bid_amount'] = $this->bidAmount;
        }
        if ($this->boostAction !== null) {
            $result['boost_action'] = $this->boostAction;
        }
        if ($this->boostAmount !== null) {
            $result['boost_amount'] = $this->boostAmount;
        }
        if ($this->boostHours !== null) {
            $result['boost_hours'] = $this->boostHours;
        }
        if ($this->boostType !== null) {
            $result['boost_type'] = $this->boostType;
        }
        if ($this->customAudienceTag !== null) {
            $result['custom_audience_tag'] = $this->customAudienceTag;
        }
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->orderIds !== null) {
            $result['order_ids'] = $this->orderIds;
        }
        if ($this->packId !== null) {
            $result['pack_id'] = $this->packId;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid_amount'] ?? null) !== null) {
            $obj->bidAmount = (int) $v;
        }
        if (($v = $data['boost_action'] ?? null) !== null) {
            $obj->boostAction = (string) $v;
        }
        if (($v = $data['boost_amount'] ?? null) !== null) {
            $obj->boostAmount = (int) $v;
        }
        if (($v = $data['boost_hours'] ?? null) !== null) {
            $obj->boostHours = (int) $v;
        }
        if (($v = $data['boost_type'] ?? null) !== null) {
            $obj->boostType = (string) $v;
        }
        if (($v = $data['custom_audience_tag'] ?? null) !== null && is_array($v)) {
            $obj->customAudienceTag = \Oceanengine\Models\StarVasCreateBoostItemGroupV2RequestCustomAudienceTag::fromArray($v);
        }
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['order_ids'] ?? null) !== null && is_array($v)) {
            $obj->orderIds = $v;
        }
        if (($v = $data['pack_id'] ?? null) !== null) {
            $obj->packId = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}

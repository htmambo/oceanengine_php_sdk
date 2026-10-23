<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfo $billInfo = null;

    /**
     * 需求ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 任务ID列表
     * @var int[]
     */
    protected ?array $orderIds = null;

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfo
     */
    public function getBillInfo(): ?\Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfo
    {
        return $this->billInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfo $billInfo
     * @return self
     */
    public function setBillInfo(?\Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfo $billInfo): self
    {
        $this->billInfo = $billInfo;
        return $this;
    }

    /**
     * 需求ID
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 需求ID
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 任务ID列表
     * @return int[]
     */
    public function getOrderIds(): ?array
    {
        return $this->orderIds;
    }

    /**
     * 任务ID列表
     * @param int[] $orderIds
     * @return self
     */
    public function setOrderIds(?array $orderIds): self
    {
        $this->orderIds = $orderIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->billInfo !== null) {
            $result['bill_info'] = $this->billInfo;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->orderIds !== null) {
            $result['order_ids'] = $this->orderIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bill_info'] ?? null) !== null && is_array($v)) {
            $obj->billInfo = \Oceanengine\Models\StarDemandCreateAssignV2ResponseDataBillInfo::fromArray($v);
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['order_ids'] ?? null) !== null && is_array($v)) {
            $obj->orderIds = $v;
        }
        return $obj;
    }
}

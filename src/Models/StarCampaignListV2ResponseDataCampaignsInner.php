<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarCampaignListV2ResponseDataCampaignsInner implements \JsonSerializable
{
    /**
     * 需求ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 创建时间 unix timestamp
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 需求名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 需求状态 (1): 进行中 (2): 已完成 (3): 已取消
     * @var int
     */
    protected ?int $status = null;

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
     * 创建时间 unix timestamp
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 创建时间 unix timestamp
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 需求名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 需求名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 需求状态 (1): 进行中 (2): 已完成 (3): 已取消
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 需求状态 (1): 进行中 (2): 已完成 (3): 已取消
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        return $obj;
    }
}

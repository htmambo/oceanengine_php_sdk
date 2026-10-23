<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInnerRefPromotionListInner implements \JsonSerializable
{
    /**
     * 同代理商账户下的其他关联广告ID所属的广告主账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 同代理商账户下的其他关联广告ID所属的代理商账户ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 同代理商账户下的其他关联广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 同代理商账户下的其他关联广告ID所属的广告主账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 同代理商账户下的其他关联广告ID所属的广告主账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 同代理商账户下的其他关联广告ID所属的代理商账户ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 同代理商账户下的其他关联广告ID所属的代理商账户ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 同代理商账户下的其他关联广告ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 同代理商账户下的其他关联广告ID
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
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
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}

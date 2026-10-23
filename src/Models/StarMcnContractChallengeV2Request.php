<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnContractChallengeV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * @var int
     */
    protected ?int $developerId = null;

    /**
     * @var int
     */
    protected ?int $mcnProfitRate = null;

    /**
     * @var array<string,int>
     */
    protected ?array $profitRateChannel = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeveloperId(): ?int
    {
        return $this->developerId;
    }

    /**
     * @param int $developerId
     * @return self
     */
    public function setDeveloperId(?int $developerId): self
    {
        $this->developerId = $developerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMcnProfitRate(): ?int
    {
        return $this->mcnProfitRate;
    }

    /**
     * @param int $mcnProfitRate
     * @return self
     */
    public function setMcnProfitRate(?int $mcnProfitRate): self
    {
        $this->mcnProfitRate = $mcnProfitRate;
        return $this;
    }

    /**
     * @return array<string,int>
     */
    public function getProfitRateChannel(): ?array
    {
        return $this->profitRateChannel;
    }

    /**
     * @param array<string,int> $profitRateChannel
     * @return self
     */
    public function setProfitRateChannel(?array $profitRateChannel): self
    {
        $this->profitRateChannel = $profitRateChannel;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
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
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->developerId !== null) {
            $result['developer_id'] = $this->developerId;
        }
        if ($this->mcnProfitRate !== null) {
            $result['mcn_profit_rate'] = $this->mcnProfitRate;
        }
        if ($this->profitRateChannel !== null) {
            $result['profit_rate_channel'] = $this->profitRateChannel;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['developer_id'] ?? null) !== null) {
            $obj->developerId = (int) $v;
        }
        if (($v = $data['mcn_profit_rate'] ?? null) !== null) {
            $obj->mcnProfitRate = (int) $v;
        }
        if (($v = $data['profit_rate_channel'] ?? null) !== null && is_array($v)) {
            $obj->profitRateChannel = $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}

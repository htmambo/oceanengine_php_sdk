<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportJointGrowthGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $click = null;

    /**
     * @var int
     */
    protected ?int $convert = null;

    /**
     * @var float
     */
    protected ?float $cost = null;

    /**
     * @var float
     */
    protected ?float $costGrowth = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var int
     */
    protected ?int $show = null;

    /**
     * @var string
     */
    protected ?string $statTimeHour = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
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
    public function getClick(): ?int
    {
        return $this->click;
    }

    /**
     * @param int $click
     * @return self
     */
    public function setClick(?int $click): self
    {
        $this->click = $click;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvert(): ?int
    {
        return $this->convert;
    }

    /**
     * @param int $convert
     * @return self
     */
    public function setConvert(?int $convert): self
    {
        $this->convert = $convert;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCostGrowth(): ?float
    {
        return $this->costGrowth;
    }

    /**
     * @param float $costGrowth
     * @return self
     */
    public function setCostGrowth(?float $costGrowth): self
    {
        $this->costGrowth = $costGrowth;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getShow(): ?int
    {
        return $this->show;
    }

    /**
     * @param int $show
     * @return self
     */
    public function setShow(?int $show): self
    {
        $this->show = $show;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatTimeHour(): ?string
    {
        return $this->statTimeHour;
    }

    /**
     * @param string $statTimeHour
     * @return self
     */
    public function setStatTimeHour(?string $statTimeHour): self
    {
        $this->statTimeHour = $statTimeHour;
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
        if ($this->click !== null) {
            $result['click'] = $this->click;
        }
        if ($this->convert !== null) {
            $result['convert'] = $this->convert;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->costGrowth !== null) {
            $result['cost_growth'] = $this->costGrowth;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->show !== null) {
            $result['show'] = $this->show;
        }
        if ($this->statTimeHour !== null) {
            $result['stat_time_hour'] = $this->statTimeHour;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['click'] ?? null) !== null) {
            $obj->click = (int) $v;
        }
        if (($v = $data['convert'] ?? null) !== null) {
            $obj->convert = (int) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['cost_growth'] ?? null) !== null) {
            $obj->costGrowth = (float) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        if (($v = $data['stat_time_hour'] ?? null) !== null) {
            $obj->statTimeHour = (string) $v;
        }
        return $obj;
    }
}

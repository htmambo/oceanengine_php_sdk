<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerShopMultiRoiGoalsInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListShopMultiRoiGoalsShopPlatform
     */
    protected ?string $shopPlatform = null;

    /**
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
     * @param float $roiGoal
     * @return self
     */
    public function setRoiGoal(?float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListShopMultiRoiGoalsShopPlatform
     */
    public function getShopPlatform(): ?string
    {
        return $this->shopPlatform;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListShopMultiRoiGoalsShopPlatform $shopPlatform
     * @return self
     */
    public function setShopPlatform(?string $shopPlatform): self
    {
        $this->shopPlatform = $shopPlatform;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->shopPlatform !== null) {
            $result['shop_platform'] = $this->shopPlatform;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['shop_platform'] ?? null) !== null) {
            $obj->shopPlatform = (string) $v;
        }
        return $obj;
    }
}

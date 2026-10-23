<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdRoi2GoalUpdateV10RequestUpdateRoi2InfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10UpdateRoi2InfosDeepExternalAction
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var float
     */
    protected ?float $roi2Goal = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10UpdateRoi2InfosDeepExternalAction
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10UpdateRoi2InfosDeepExternalAction $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoi2Goal(): ?float
    {
        return $this->roi2Goal;
    }

    /**
     * @param float $roi2Goal
     * @return self
     */
    public function setRoi2Goal(?float $roi2Goal): self
    {
        $this->roi2Goal = $roi2Goal;
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
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->roi2Goal !== null) {
            $result['roi2_goal'] = $this->roi2Goal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['roi2_goal'] ?? null) !== null) {
            $obj->roi2Goal = (float) $v;
        }
        return $obj;
    }
}

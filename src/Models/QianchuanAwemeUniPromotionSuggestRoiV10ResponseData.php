<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionSuggestRoiV10ResponseData implements \JsonSerializable
{
    /**
     * 推荐支付ROI
     * @var float
     */
    protected ?float $suggestPayRoi = null;

    /**
     * 推荐净成交ROI
     * @var float
     */
    protected ?float $suggestSettleRoi = null;

    /**
     * 推荐支付ROI
     * @return float
     */
    public function getSuggestPayRoi(): ?float
    {
        return $this->suggestPayRoi;
    }

    /**
     * 推荐支付ROI
     * @param float $suggestPayRoi
     * @return self
     */
    public function setSuggestPayRoi(?float $suggestPayRoi): self
    {
        $this->suggestPayRoi = $suggestPayRoi;
        return $this;
    }

    /**
     * 推荐净成交ROI
     * @return float
     */
    public function getSuggestSettleRoi(): ?float
    {
        return $this->suggestSettleRoi;
    }

    /**
     * 推荐净成交ROI
     * @param float $suggestSettleRoi
     * @return self
     */
    public function setSuggestSettleRoi(?float $suggestSettleRoi): self
    {
        $this->suggestSettleRoi = $suggestSettleRoi;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->suggestPayRoi !== null) {
            $result['suggest_pay_roi'] = $this->suggestPayRoi;
        }
        if ($this->suggestSettleRoi !== null) {
            $result['suggest_settle_roi'] = $this->suggestSettleRoi;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['suggest_pay_roi'] ?? null) !== null) {
            $obj->suggestPayRoi = (float) $v;
        }
        if (($v = $data['suggest_settle_roi'] ?? null) !== null) {
            $obj->suggestSettleRoi = (float) $v;
        }
        return $obj;
    }
}

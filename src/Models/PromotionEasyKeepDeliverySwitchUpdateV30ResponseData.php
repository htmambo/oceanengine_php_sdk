<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEasyKeepDeliverySwitchUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30ResponseDataResult
     */
    protected ?\Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30ResponseDataResult $result = null;

    /**
     * @return \Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30ResponseDataResult
     */
    public function getResult(): ?\Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30ResponseDataResult
    {
        return $this->result;
    }

    /**
     * @param \Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30ResponseDataResult $result
     * @return self
     */
    public function setResult(?\Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30ResponseDataResult $result): self
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->result !== null) {
            $result['result'] = $this->result;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['result'] ?? null) !== null && is_array($v)) {
            $obj->result = \Oceanengine\Models\PromotionEasyKeepDeliverySwitchUpdateV30ResponseDataResult::fromArray($v);
        }
        return $obj;
    }
}

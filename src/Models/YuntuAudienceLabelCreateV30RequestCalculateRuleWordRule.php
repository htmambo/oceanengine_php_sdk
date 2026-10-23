<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceLabelCreateV30RequestCalculateRuleWordRule implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRuleYuntuRule
     */
    protected ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRuleYuntuRule $yuntuRule = null;

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRuleYuntuRule
     */
    public function getYuntuRule(): ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRuleYuntuRule
    {
        return $this->yuntuRule;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRuleYuntuRule $yuntuRule
     * @return self
     */
    public function setYuntuRule(?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRuleYuntuRule $yuntuRule): self
    {
        $this->yuntuRule = $yuntuRule;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->yuntuRule !== null) {
            $result['yuntu_rule'] = $this->yuntuRule;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['yuntu_rule'] ?? null) !== null && is_array($v)) {
            $obj->yuntuRule = \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRuleYuntuRule::fromArray($v);
        }
        return $obj;
    }
}

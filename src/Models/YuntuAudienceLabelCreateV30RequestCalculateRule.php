<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceLabelCreateV30RequestCalculateRule implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleBehaviorFilters
     */
    protected ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleBehaviorFilters $behaviorFilters = null;

    /**
     * 匹配方式。其中内容人群标签下，title 必选，额外可多选 ocr_content 及 asr_content；搜索人群标签固定为 query；商品人群标签固定为 product_name。 title = 内容标题ocr,asr, query,product_name(商品名称)
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleFieldFilters[]
     */
    protected ?array $fieldFilters = null;

    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleItemFilters
     */
    protected ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleItemFilters $itemFilters = null;

    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRule
     */
    protected ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRule $wordRule = null;

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleBehaviorFilters
     */
    public function getBehaviorFilters(): ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleBehaviorFilters
    {
        return $this->behaviorFilters;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleBehaviorFilters $behaviorFilters
     * @return self
     */
    public function setBehaviorFilters(?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleBehaviorFilters $behaviorFilters): self
    {
        $this->behaviorFilters = $behaviorFilters;
        return $this;
    }

    /**
     * 匹配方式。其中内容人群标签下，title 必选，额外可多选 ocr_content 及 asr_content；搜索人群标签固定为 query；商品人群标签固定为 product_name。 title = 内容标题ocr,asr, query,product_name(商品名称)
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleFieldFilters[]
     */
    public function getFieldFilters(): ?array
    {
        return $this->fieldFilters;
    }

    /**
     * 匹配方式。其中内容人群标签下，title 必选，额外可多选 ocr_content 及 asr_content；搜索人群标签固定为 query；商品人群标签固定为 product_name。 title = 内容标题ocr,asr, query,product_name(商品名称)
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30CalculateRuleFieldFilters[] $fieldFilters
     * @return self
     */
    public function setFieldFilters(?array $fieldFilters): self
    {
        $this->fieldFilters = $fieldFilters;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleItemFilters
     */
    public function getItemFilters(): ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleItemFilters
    {
        return $this->itemFilters;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleItemFilters $itemFilters
     * @return self
     */
    public function setItemFilters(?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleItemFilters $itemFilters): self
    {
        $this->itemFilters = $itemFilters;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRule
     */
    public function getWordRule(): ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRule
    {
        return $this->wordRule;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRule $wordRule
     * @return self
     */
    public function setWordRule(?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRule $wordRule): self
    {
        $this->wordRule = $wordRule;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->behaviorFilters !== null) {
            $result['behavior_filters'] = $this->behaviorFilters;
        }
        if ($this->fieldFilters !== null) {
            $result['field_filters'] = $this->fieldFilters;
        }
        if ($this->itemFilters !== null) {
            $result['item_filters'] = $this->itemFilters;
        }
        if ($this->wordRule !== null) {
            $result['word_rule'] = $this->wordRule;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['behavior_filters'] ?? null) !== null && is_array($v)) {
            $obj->behaviorFilters = \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleBehaviorFilters::fromArray($v);
        }
        if (($v = $data['field_filters'] ?? null) !== null && is_array($v)) {
            $obj->fieldFilters = $v;
        }
        if (($v = $data['item_filters'] ?? null) !== null && is_array($v)) {
            $obj->itemFilters = \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleItemFilters::fromArray($v);
        }
        if (($v = $data['word_rule'] ?? null) !== null && is_array($v)) {
            $obj->wordRule = \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRuleWordRule::fromArray($v);
        }
        return $obj;
    }
}

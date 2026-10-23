<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceLabelCreateV30RequestCalculateRuleWordRuleYuntuRule implements \JsonSerializable
{
    /**
     * 关键词池列表。二维数组，列表中每个元素为一个字符串数组，每个字符串数组代表一个关键词池。
     * @var string[][]
     */
    protected ?array $keywordsList = null;

    /**
     * 关键词池间合并规则，&代表池间交集，~代表池间差集，交差关系不存在层级。数字下标由0开始，单调递增至 keywords_list 长度 - 1。
     * @var string
     */
    protected ?string $keywordsMergeRule = null;

    /**
     * 关键词池列表。二维数组，列表中每个元素为一个字符串数组，每个字符串数组代表一个关键词池。
     * @return string[][]
     */
    public function getKeywordsList(): ?array
    {
        return $this->keywordsList;
    }

    /**
     * 关键词池列表。二维数组，列表中每个元素为一个字符串数组，每个字符串数组代表一个关键词池。
     * @param string[][] $keywordsList
     * @return self
     */
    public function setKeywordsList(?array $keywordsList): self
    {
        $this->keywordsList = $keywordsList;
        return $this;
    }

    /**
     * 关键词池间合并规则，&代表池间交集，~代表池间差集，交差关系不存在层级。数字下标由0开始，单调递增至 keywords_list 长度 - 1。
     * @return string
     */
    public function getKeywordsMergeRule(): ?string
    {
        return $this->keywordsMergeRule;
    }

    /**
     * 关键词池间合并规则，&代表池间交集，~代表池间差集，交差关系不存在层级。数字下标由0开始，单调递增至 keywords_list 长度 - 1。
     * @param string $keywordsMergeRule
     * @return self
     */
    public function setKeywordsMergeRule(?string $keywordsMergeRule): self
    {
        $this->keywordsMergeRule = $keywordsMergeRule;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->keywordsList !== null) {
            $result['keywords_list'] = $this->keywordsList;
        }
        if ($this->keywordsMergeRule !== null) {
            $result['keywords_merge_rule'] = $this->keywordsMergeRule;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['keywords_list'] ?? null) !== null && is_array($v)) {
            $obj->keywordsList = $v;
        }
        if (($v = $data['keywords_merge_rule'] ?? null) !== null) {
            $obj->keywordsMergeRule = (string) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceInfoCreateV30RequestCalculatePoolsInner implements \JsonSerializable
{
    /**
     * 池内运算符，枚举值\"|\"或\"&\"，当运算池内只有一个标签/人群包时，该运算符必须为空字符串
     * @var string
     */
    protected ?string $innerOp = null;

    /**
     * 池间运算符，枚举值\"|\"或\"&\"或\"~\"，第0个运算池的池间运算符必须为空字符串
     * @var string
     */
    protected ?string $outerOp = null;

    /**
     * 运算池中人群包/标签数组
     * @var \Oceanengine\Models\YuntuAudienceInfoCreateV30RequestCalculatePoolsInnerTagsInner[]
     */
    protected ?array $tags = null;

    /**
     * 池内运算符，枚举值\"|\"或\"&\"，当运算池内只有一个标签/人群包时，该运算符必须为空字符串
     * @return string
     */
    public function getInnerOp(): ?string
    {
        return $this->innerOp;
    }

    /**
     * 池内运算符，枚举值\"|\"或\"&\"，当运算池内只有一个标签/人群包时，该运算符必须为空字符串
     * @param string $innerOp
     * @return self
     */
    public function setInnerOp(?string $innerOp): self
    {
        $this->innerOp = $innerOp;
        return $this;
    }

    /**
     * 池间运算符，枚举值\"|\"或\"&\"或\"~\"，第0个运算池的池间运算符必须为空字符串
     * @return string
     */
    public function getOuterOp(): ?string
    {
        return $this->outerOp;
    }

    /**
     * 池间运算符，枚举值\"|\"或\"&\"或\"~\"，第0个运算池的池间运算符必须为空字符串
     * @param string $outerOp
     * @return self
     */
    public function setOuterOp(?string $outerOp): self
    {
        $this->outerOp = $outerOp;
        return $this;
    }

    /**
     * 运算池中人群包/标签数组
     * @return \Oceanengine\Models\YuntuAudienceInfoCreateV30RequestCalculatePoolsInnerTagsInner[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * 运算池中人群包/标签数组
     * @param \Oceanengine\Models\YuntuAudienceInfoCreateV30RequestCalculatePoolsInnerTagsInner[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->innerOp !== null) {
            $result['inner_op'] = $this->innerOp;
        }
        if ($this->outerOp !== null) {
            $result['outer_op'] = $this->outerOp;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['inner_op'] ?? null) !== null) {
            $obj->innerOp = (string) $v;
        }
        if (($v = $data['outer_op'] ?? null) !== null) {
            $obj->outerOp = (string) $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = array_map(fn ($vv) => \Oceanengine\Models\YuntuAudienceInfoCreateV30RequestCalculatePoolsInnerTagsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}

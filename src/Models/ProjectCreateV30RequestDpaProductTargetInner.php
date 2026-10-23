<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectCreateV30RequestDpaProductTargetInner implements \JsonSerializable
{
    /**
     * 定向规则，允许值：=、 !=、 >、 <、 contain、 exclude、 notEmpty
     * @var string
     */
    protected ?string $rule = null;

    /**
     * 筛选字段
     * @var string
     */
    protected ?string $title = null;

    /**
     * 字段类型，允许值：int、 double、 long、 string
     * @var string
     */
    protected ?string $type = null;

    /**
     * 规则值
     * @var string
     */
    protected ?string $value = null;

    /**
     * 定向规则，允许值：=、 !=、 >、 <、 contain、 exclude、 notEmpty
     * @return string
     */
    public function getRule(): ?string
    {
        return $this->rule;
    }

    /**
     * 定向规则，允许值：=、 !=、 >、 <、 contain、 exclude、 notEmpty
     * @param string $rule
     * @return self
     */
    public function setRule(?string $rule): self
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * 筛选字段
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 筛选字段
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 字段类型，允许值：int、 double、 long、 string
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * 字段类型，允许值：int、 double、 long、 string
     * @param string $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * 规则值
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * 规则值
     * @param string $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->rule !== null) {
            $result['rule'] = $this->rule;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['rule'] ?? null) !== null) {
            $obj->rule = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}

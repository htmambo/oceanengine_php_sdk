<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatApplet implements \JsonSerializable
{
    /**
     * 微信小程序组件ID
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 简介，长度不超过40
     * @var string
     */
    protected ?string $introduction = null;

    /**
     * 标签，个数不超过2，字数不超过5
     * @var string[]
     */
    protected ?array $items = null;

    /**
     * logo链接
     * @var string
     */
    protected ?string $logo = null;

    /**
     * 微信小程序组件ID
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 微信小程序组件ID
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * 简介，长度不超过40
     * @return string
     */
    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    /**
     * 简介，长度不超过40
     * @param string $introduction
     * @return self
     */
    public function setIntroduction(?string $introduction): self
    {
        $this->introduction = $introduction;
        return $this;
    }

    /**
     * 标签，个数不超过2，字数不超过5
     * @return string[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * 标签，个数不超过2，字数不超过5
     * @param string[] $items
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }

    /**
     * logo链接
     * @return string
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * logo链接
     * @param string $logo
     * @return self
     */
    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->introduction !== null) {
            $result['introduction'] = $this->introduction;
        }
        if ($this->items !== null) {
            $result['items'] = $this->items;
        }
        if ($this->logo !== null) {
            $result['logo'] = $this->logo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['introduction'] ?? null) !== null) {
            $obj->introduction = (string) $v;
        }
        if (($v = $data['items'] ?? null) !== null && is_array($v)) {
            $obj->items = $v;
        }
        if (($v = $data['logo'] ?? null) !== null) {
            $obj->logo = (string) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceInfoCreateV30RequestCalculatePoolsInnerTagsInner implements \JsonSerializable
{
    /**
     * 人群包/标签的参数
     * @var array<string,mixed>
     */
    protected ?array $data = null;

    /**
     * 人群包/标签的标识
     * @var string
     */
    protected ?string $paramConfigId = null;

    /**
     * 人群包/标签的参数
     * @return array<string,mixed>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 人群包/标签的参数
     * @param array<string,mixed> $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * 人群包/标签的标识
     * @return string
     */
    public function getParamConfigId(): ?string
    {
        return $this->paramConfigId;
    }

    /**
     * 人群包/标签的标识
     * @param string $paramConfigId
     * @return self
     */
    public function setParamConfigId(?string $paramConfigId): self
    {
        $this->paramConfigId = $paramConfigId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->paramConfigId !== null) {
            $result['param_config_id'] = $this->paramConfigId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = $v;
        }
        if (($v = $data['param_config_id'] ?? null) !== null) {
            $obj->paramConfigId = (string) $v;
        }
        return $obj;
    }
}

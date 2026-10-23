<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsVideoCoverSuggestV2ResponseData implements \JsonSerializable
{
    /**
     * 视频封面列表
     * @var \Oceanengine\Models\ToolsVideoCoverSuggestV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * 封面生成的状态枚举值：RUNNING（生成中）、SUCCESS（成功）、FAILED（失败）注意：视频封面不是实时生成，需要根据status字段判断封面生成的状态，大概需要6，7s中生成，所以当status=RUNNING时请等待后重试
     * @var string
     */
    protected ?string $status = null;

    /**
     * 视频封面列表
     * @return \Oceanengine\Models\ToolsVideoCoverSuggestV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 视频封面列表
     * @param \Oceanengine\Models\ToolsVideoCoverSuggestV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * 封面生成的状态枚举值：RUNNING（生成中）、SUCCESS（成功）、FAILED（失败）注意：视频封面不是实时生成，需要根据status字段判断封面生成的状态，大概需要6，7s中生成，所以当status=RUNNING时请等待后重试
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * 封面生成的状态枚举值：RUNNING（生成中）、SUCCESS（成功）、FAILED（失败）注意：视频封面不是实时生成，需要根据status字段判断封面生成的状态，大概需要6，7s中生成，所以当status=RUNNING时请等待后重试
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsVideoCoverSuggestV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}

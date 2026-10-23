<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoChannel implements \JsonSerializable
{
    /**
     * 渠道ID
     * @var int
     */
    protected ?int $channelId = null;

    /**
     * 渠道类型 1=达人专属（待下线废弃）  2=超市小时达业务  3=自播 4=达播 5=云零售
     * @var int
     */
    protected ?int $channelType = null;

    /**
     * 渠道ID
     * @return int
     */
    public function getChannelId(): ?int
    {
        return $this->channelId;
    }

    /**
     * 渠道ID
     * @param int $channelId
     * @return self
     */
    public function setChannelId(?int $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * 渠道类型 1=达人专属（待下线废弃）  2=超市小时达业务  3=自播 4=达播 5=云零售
     * @return int
     */
    public function getChannelType(): ?int
    {
        return $this->channelType;
    }

    /**
     * 渠道类型 1=达人专属（待下线废弃）  2=超市小时达业务  3=自播 4=达播 5=云零售
     * @param int $channelType
     * @return self
     */
    public function setChannelType(?int $channelType): self
    {
        $this->channelType = $channelType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->channelId !== null) {
            $result['channel_id'] = $this->channelId;
        }
        if ($this->channelType !== null) {
            $result['channel_type'] = $this->channelType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['channel_id'] ?? null) !== null) {
            $obj->channelId = (int) $v;
        }
        if (($v = $data['channel_type'] ?? null) !== null) {
            $obj->channelType = (int) $v;
        }
        return $obj;
    }
}

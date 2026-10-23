<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdUpdateV10RequestProductChannelInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $channelId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10ProductChannelInfoChannelType
     */
    protected ?string $channelType = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @return int
     */
    public function getChannelId(): ?int
    {
        return $this->channelId;
    }

    /**
     * @param int $channelId
     * @return self
     */
    public function setChannelId(?int $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10ProductChannelInfoChannelType
     */
    public function getChannelType(): ?string
    {
        return $this->channelType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10ProductChannelInfoChannelType $channelType
     * @return self
     */
    public function setChannelType(?string $channelType): self
    {
        $this->channelType = $channelType;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
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
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
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
            $obj->channelType = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        return $obj;
    }
}

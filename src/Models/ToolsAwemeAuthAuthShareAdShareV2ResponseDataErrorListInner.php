<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeAuthAuthShareAdShareV2ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * 共享失败的广告账户id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 共享失败的原因
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * 共享失败的广告账户id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 共享失败的广告账户id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 共享失败的原因
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * 共享失败的原因
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAgreementCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsAgreementCreateV30DataSignStatus
     */
    protected ?string $signStatus = null;

    /**
     * @var int
     */
    protected ?int $signTime = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAgreementCreateV30DataSignStatus
     */
    public function getSignStatus(): ?string
    {
        return $this->signStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsAgreementCreateV30DataSignStatus $signStatus
     * @return self
     */
    public function setSignStatus(?string $signStatus): self
    {
        $this->signStatus = $signStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getSignTime(): ?int
    {
        return $this->signTime;
    }

    /**
     * @param int $signTime
     * @return self
     */
    public function setSignTime(?int $signTime): self
    {
        $this->signTime = $signTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->signStatus !== null) {
            $result['sign_status'] = $this->signStatus;
        }
        if ($this->signTime !== null) {
            $result['sign_time'] = $this->signTime;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['sign_status'] ?? null) !== null) {
            $obj->signStatus = (string) $v;
        }
        if (($v = $data['sign_time'] ?? null) !== null) {
            $obj->signTime = (int) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}

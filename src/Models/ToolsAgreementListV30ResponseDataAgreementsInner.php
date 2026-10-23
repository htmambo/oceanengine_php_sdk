<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAgreementListV30ResponseDataAgreementsInner implements \JsonSerializable
{
    /**
     * 协议名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsAgreementListV30DataAgreementsSignStatus
     */
    protected ?string $signStatus = null;

    /**
     * 签署时间，秒级时间戳
     * @var int
     */
    protected ?int $signTime = null;

    /**
     * @var \Oceanengine\Models\ToolsAgreementListV30DataAgreementsType
     */
    protected ?string $type = null;

    /**
     * 协议链接
     * @var string
     */
    protected ?string $url = null;

    /**
     * 协议名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 协议名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAgreementListV30DataAgreementsSignStatus
     */
    public function getSignStatus(): ?string
    {
        return $this->signStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsAgreementListV30DataAgreementsSignStatus $signStatus
     * @return self
     */
    public function setSignStatus(?string $signStatus): self
    {
        $this->signStatus = $signStatus;
        return $this;
    }

    /**
     * 签署时间，秒级时间戳
     * @return int
     */
    public function getSignTime(): ?int
    {
        return $this->signTime;
    }

    /**
     * 签署时间，秒级时间戳
     * @param int $signTime
     * @return self
     */
    public function setSignTime(?int $signTime): self
    {
        $this->signTime = $signTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAgreementListV30DataAgreementsType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ToolsAgreementListV30DataAgreementsType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * 协议链接
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 协议链接
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
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
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAbnormalAssetsGetV30ResponseDataSingleCaseInnerSuggestionInner implements \JsonSerializable
{
    /**
     * 建议
     * @var string
     */
    protected ?string $message = null;

    /**
     * 明细信息链接
     * @var string
     */
    protected ?string $url = null;

    /**
     * 建议
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * 建议
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * 明细信息链接
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 明细信息链接
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
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}

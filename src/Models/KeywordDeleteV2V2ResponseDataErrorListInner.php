<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class KeywordDeleteV2V2ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $errorReason = null;

    /**
     * @var int
     */
    protected ?int $keywordId = null;

    /**
     * @return string
     */
    public function getErrorReason(): ?string
    {
        return $this->errorReason;
    }

    /**
     * @param string $errorReason
     * @return self
     */
    public function setErrorReason(?string $errorReason): self
    {
        $this->errorReason = $errorReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getKeywordId(): ?int
    {
        return $this->keywordId;
    }

    /**
     * @param int $keywordId
     * @return self
     */
    public function setKeywordId(?int $keywordId): self
    {
        $this->keywordId = $keywordId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorReason !== null) {
            $result['error_reason'] = $this->errorReason;
        }
        if ($this->keywordId !== null) {
            $result['keyword_id'] = $this->keywordId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_reason'] ?? null) !== null) {
            $obj->errorReason = (string) $v;
        }
        if (($v = $data['keyword_id'] ?? null) !== null) {
            $obj->keywordId = (int) $v;
        }
        return $obj;
    }
}

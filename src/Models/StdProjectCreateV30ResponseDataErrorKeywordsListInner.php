<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectCreateV30ResponseDataErrorKeywordsListInner implements \JsonSerializable
{
    /**
     * 失败的关键词
     * @var string
     */
    protected ?string $errorKeyword = null;

    /**
     * 失败原因
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * 失败的关键词
     * @return string
     */
    public function getErrorKeyword(): ?string
    {
        return $this->errorKeyword;
    }

    /**
     * 失败的关键词
     * @param string $errorKeyword
     * @return self
     */
    public function setErrorKeyword(?string $errorKeyword): self
    {
        $this->errorKeyword = $errorKeyword;
        return $this;
    }

    /**
     * 失败原因
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * 失败原因
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
        if ($this->errorKeyword !== null) {
            $result['error_keyword'] = $this->errorKeyword;
        }
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_keyword'] ?? null) !== null) {
            $obj->errorKeyword = (string) $v;
        }
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        return $obj;
    }
}

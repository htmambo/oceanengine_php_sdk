<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdUpdateV10ResponseDataNoticeInfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $code = null;

    /**
     * @var string
     */
    protected ?string $message = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10ResponseDataNoticeInfosInnerSearchKeywordError
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10ResponseDataNoticeInfosInnerSearchKeywordError $searchKeywordError = null;

    /**
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10ResponseDataNoticeInfosInnerSearchKeywordError
     */
    public function getSearchKeywordError(): ?\Oceanengine\Models\QianchuanAdUpdateV10ResponseDataNoticeInfosInnerSearchKeywordError
    {
        return $this->searchKeywordError;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10ResponseDataNoticeInfosInnerSearchKeywordError $searchKeywordError
     * @return self
     */
    public function setSearchKeywordError(?\Oceanengine\Models\QianchuanAdUpdateV10ResponseDataNoticeInfosInnerSearchKeywordError $searchKeywordError): self
    {
        $this->searchKeywordError = $searchKeywordError;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->searchKeywordError !== null) {
            $result['search_keyword_error'] = $this->searchKeywordError;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (int) $v;
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        if (($v = $data['search_keyword_error'] ?? null) !== null && is_array($v)) {
            $obj->searchKeywordError = \Oceanengine\Models\QianchuanAdUpdateV10ResponseDataNoticeInfosInnerSearchKeywordError::fromArray($v);
        }
        return $obj;
    }
}

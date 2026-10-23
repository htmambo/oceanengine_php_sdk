<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanKeywordCheckV10ResponseDataFailListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $failReason = null;

    /**
     * @var string
     */
    protected ?string $keyword = null;

    /**
     * @return string
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * @param string $failReason
     * @return self
     */
    public function setFailReason(?string $failReason): self
    {
        $this->failReason = $failReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     * @return self
     */
    public function setKeyword(?string $keyword): self
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failReason !== null) {
            $result['fail_reason'] = $this->failReason;
        }
        if ($this->keyword !== null) {
            $result['keyword'] = $this->keyword;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_reason'] ?? null) !== null) {
            $obj->failReason = (string) $v;
        }
        if (($v = $data['keyword'] ?? null) !== null) {
            $obj->keyword = (string) $v;
        }
        return $obj;
    }
}

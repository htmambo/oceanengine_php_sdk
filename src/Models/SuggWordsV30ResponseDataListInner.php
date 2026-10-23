<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SuggWordsV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 推荐关键词
     * @var string
     */
    protected ?string $keyword = null;

    /**
     * 月搜索量
     * @var int
     */
    protected ?int $msv = null;

    /**
     * 推荐关键词
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * 推荐关键词
     * @param string $keyword
     * @return self
     */
    public function setKeyword(?string $keyword): self
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * 月搜索量
     * @return int
     */
    public function getMsv(): ?int
    {
        return $this->msv;
    }

    /**
     * 月搜索量
     * @param int $msv
     * @return self
     */
    public function setMsv(?int $msv): self
    {
        $this->msv = $msv;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->keyword !== null) {
            $result['keyword'] = $this->keyword;
        }
        if ($this->msv !== null) {
            $result['msv'] = $this->msv;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['keyword'] ?? null) !== null) {
            $obj->keyword = (string) $v;
        }
        if (($v = $data['msv'] ?? null) !== null) {
            $obj->msv = (int) $v;
        }
        return $obj;
    }
}

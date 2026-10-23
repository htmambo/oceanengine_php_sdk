<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductListV30ResponseDataProductsInnerProductHisEval implements \JsonSerializable
{
    /**
     * 购买量
     * @var int
     */
    protected ?int $bought = null;

    /**
     * 评论数?好评数
     * @var int
     */
    protected ?int $comments = null;

    /**
     * 评分
     * @var int
     */
    protected ?int $mark = null;

    /**
     * 购买量
     * @return int
     */
    public function getBought(): ?int
    {
        return $this->bought;
    }

    /**
     * 购买量
     * @param int $bought
     * @return self
     */
    public function setBought(?int $bought): self
    {
        $this->bought = $bought;
        return $this;
    }

    /**
     * 评论数?好评数
     * @return int
     */
    public function getComments(): ?int
    {
        return $this->comments;
    }

    /**
     * 评论数?好评数
     * @param int $comments
     * @return self
     */
    public function setComments(?int $comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * 评分
     * @return int
     */
    public function getMark(): ?int
    {
        return $this->mark;
    }

    /**
     * 评分
     * @param int $mark
     * @return self
     */
    public function setMark(?int $mark): self
    {
        $this->mark = $mark;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bought !== null) {
            $result['bought'] = $this->bought;
        }
        if ($this->comments !== null) {
            $result['comments'] = $this->comments;
        }
        if ($this->mark !== null) {
            $result['mark'] = $this->mark;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bought'] ?? null) !== null) {
            $obj->bought = (int) $v;
        }
        if (($v = $data['comments'] ?? null) !== null) {
            $obj->comments = (int) $v;
        }
        if (($v = $data['mark'] ?? null) !== null) {
            $obj->mark = (int) $v;
        }
        return $obj;
    }
}

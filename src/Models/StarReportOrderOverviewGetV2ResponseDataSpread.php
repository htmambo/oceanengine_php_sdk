<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewGetV2ResponseDataSpread implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $comment = null;

    /**
     * @var int
     */
    protected ?int $like = null;

    /**
     * @var int
     */
    protected ?int $play = null;

    /**
     * @var int
     */
    protected ?int $share = null;

    /**
     * @return int
     */
    public function getComment(): ?int
    {
        return $this->comment;
    }

    /**
     * @param int $comment
     * @return self
     */
    public function setComment(?int $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return int
     */
    public function getLike(): ?int
    {
        return $this->like;
    }

    /**
     * @param int $like
     * @return self
     */
    public function setLike(?int $like): self
    {
        $this->like = $like;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlay(): ?int
    {
        return $this->play;
    }

    /**
     * @param int $play
     * @return self
     */
    public function setPlay(?int $play): self
    {
        $this->play = $play;
        return $this;
    }

    /**
     * @return int
     */
    public function getShare(): ?int
    {
        return $this->share;
    }

    /**
     * @param int $share
     * @return self
     */
    public function setShare(?int $share): self
    {
        $this->share = $share;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->comment !== null) {
            $result['comment'] = $this->comment;
        }
        if ($this->like !== null) {
            $result['like'] = $this->like;
        }
        if ($this->play !== null) {
            $result['play'] = $this->play;
        }
        if ($this->share !== null) {
            $result['share'] = $this->share;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['comment'] ?? null) !== null) {
            $obj->comment = (int) $v;
        }
        if (($v = $data['like'] ?? null) !== null) {
            $obj->like = (int) $v;
        }
        if (($v = $data['play'] ?? null) !== null) {
            $obj->play = (int) $v;
        }
        if (($v = $data['share'] ?? null) !== null) {
            $obj->share = (int) $v;
        }
        return $obj;
    }
}

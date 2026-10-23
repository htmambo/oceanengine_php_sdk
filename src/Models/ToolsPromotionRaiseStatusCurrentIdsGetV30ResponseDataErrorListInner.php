<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * 获取一键起量状态失败的错误原因
     * @var string
     */
    protected ?string $errorReason = null;

    /**
     * 获取一键起量状态失败的广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 获取一键起量状态失败的错误原因
     * @return string
     */
    public function getErrorReason(): ?string
    {
        return $this->errorReason;
    }

    /**
     * 获取一键起量状态失败的错误原因
     * @param string $errorReason
     * @return self
     */
    public function setErrorReason(?string $errorReason): self
    {
        $this->errorReason = $errorReason;
        return $this;
    }

    /**
     * 获取一键起量状态失败的广告ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 获取一键起量状态失败的广告ID
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
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
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_reason'] ?? null) !== null) {
            $obj->errorReason = (string) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}

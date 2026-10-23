<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeSyncItemToAdV2ResponseDataSyncDetailsInner implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $failReasons = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * @return string[]
     */
    public function getFailReasons(): ?array
    {
        return $this->failReasons;
    }

    /**
     * @param string[] $failReasons
     * @return self
     */
    public function setFailReasons(?array $failReasons): self
    {
        $this->failReasons = $failReasons;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failReasons !== null) {
            $result['fail_reasons'] = $this->failReasons;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_reasons'] ?? null) !== null && is_array($v)) {
            $obj->failReasons = $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}

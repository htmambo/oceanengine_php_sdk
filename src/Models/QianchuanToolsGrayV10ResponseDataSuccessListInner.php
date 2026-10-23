<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsGrayV10ResponseDataSuccessListInner implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $awemeIds = null;

    /**
     * @var string
     */
    protected ?string $grayKey = null;

    /**
     * @var bool
     */
    protected ?bool $inGray = null;

    /**
     * @var bool
     */
    protected ?bool $inWhitelist = null;

    /**
     * @return int[]
     */
    public function getAwemeIds(): ?array
    {
        return $this->awemeIds;
    }

    /**
     * @param int[] $awemeIds
     * @return self
     */
    public function setAwemeIds(?array $awemeIds): self
    {
        $this->awemeIds = $awemeIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrayKey(): ?string
    {
        return $this->grayKey;
    }

    /**
     * @param string $grayKey
     * @return self
     */
    public function setGrayKey(?string $grayKey): self
    {
        $this->grayKey = $grayKey;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInGray(): ?bool
    {
        return $this->inGray;
    }

    /**
     * @param bool $inGray
     * @return self
     */
    public function setInGray(?bool $inGray): self
    {
        $this->inGray = $inGray;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInWhitelist(): ?bool
    {
        return $this->inWhitelist;
    }

    /**
     * @param bool $inWhitelist
     * @return self
     */
    public function setInWhitelist(?bool $inWhitelist): self
    {
        $this->inWhitelist = $inWhitelist;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeIds !== null) {
            $result['aweme_ids'] = $this->awemeIds;
        }
        if ($this->grayKey !== null) {
            $result['gray_key'] = $this->grayKey;
        }
        if ($this->inGray !== null) {
            $result['in_gray'] = $this->inGray;
        }
        if ($this->inWhitelist !== null) {
            $result['in_whitelist'] = $this->inWhitelist;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeIds = $v;
        }
        if (($v = $data['gray_key'] ?? null) !== null) {
            $obj->grayKey = (string) $v;
        }
        if (($v = $data['in_gray'] ?? null) !== null) {
            $obj->inGray = (bool) $v;
        }
        if (($v = $data['in_whitelist'] ?? null) !== null) {
            $obj->inWhitelist = (bool) $v;
        }
        return $obj;
    }
}

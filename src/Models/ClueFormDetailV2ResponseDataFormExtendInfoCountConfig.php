<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormDetailV2ResponseDataFormExtendInfoCountConfig implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueFormDetailV2DataFormExtendInfoCountConfigCountType
     */
    protected ?string $countType = null;

    /**
     * @var string
     */
    protected ?string $prefix = null;

    /**
     * @var int
     */
    protected ?int $startNum = null;

    /**
     * @var string
     */
    protected ?string $suffix = null;

    /**
     * @return \Oceanengine\Models\ClueFormDetailV2DataFormExtendInfoCountConfigCountType
     */
    public function getCountType(): ?string
    {
        return $this->countType;
    }

    /**
     * @param \Oceanengine\Models\ClueFormDetailV2DataFormExtendInfoCountConfigCountType $countType
     * @return self
     */
    public function setCountType(?string $countType): self
    {
        $this->countType = $countType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return self
     */
    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartNum(): ?int
    {
        return $this->startNum;
    }

    /**
     * @param int $startNum
     * @return self
     */
    public function setStartNum(?int $startNum): self
    {
        $this->startNum = $startNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     * @return self
     */
    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->countType !== null) {
            $result['count_type'] = $this->countType;
        }
        if ($this->prefix !== null) {
            $result['prefix'] = $this->prefix;
        }
        if ($this->startNum !== null) {
            $result['start_num'] = $this->startNum;
        }
        if ($this->suffix !== null) {
            $result['suffix'] = $this->suffix;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['count_type'] ?? null) !== null) {
            $obj->countType = (string) $v;
        }
        if (($v = $data['prefix'] ?? null) !== null) {
            $obj->prefix = (string) $v;
        }
        if (($v = $data['start_num'] ?? null) !== null) {
            $obj->startNum = (int) $v;
        }
        if (($v = $data['suffix'] ?? null) !== null) {
            $obj->suffix = (string) $v;
        }
        return $obj;
    }
}

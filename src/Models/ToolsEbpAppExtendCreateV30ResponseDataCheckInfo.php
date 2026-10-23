<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppExtendCreateV30ResponseDataCheckInfo implements \JsonSerializable
{
    /**
     * 检查传入的渠道信息 正确的渠道信息
     * @var string[]
     */
    protected ?array $correctList = null;

    /**
     * 非法（不正确）的渠道信息
     * @var string[]
     */
    protected ?array $invalidList = null;

    /**
     * 重复的渠道信息
     * @var string[]
     */
    protected ?array $repeatList = null;

    /**
     * 检查传入的渠道信息 正确的渠道信息
     * @return string[]
     */
    public function getCorrectList(): ?array
    {
        return $this->correctList;
    }

    /**
     * 检查传入的渠道信息 正确的渠道信息
     * @param string[] $correctList
     * @return self
     */
    public function setCorrectList(?array $correctList): self
    {
        $this->correctList = $correctList;
        return $this;
    }

    /**
     * 非法（不正确）的渠道信息
     * @return string[]
     */
    public function getInvalidList(): ?array
    {
        return $this->invalidList;
    }

    /**
     * 非法（不正确）的渠道信息
     * @param string[] $invalidList
     * @return self
     */
    public function setInvalidList(?array $invalidList): self
    {
        $this->invalidList = $invalidList;
        return $this;
    }

    /**
     * 重复的渠道信息
     * @return string[]
     */
    public function getRepeatList(): ?array
    {
        return $this->repeatList;
    }

    /**
     * 重复的渠道信息
     * @param string[] $repeatList
     * @return self
     */
    public function setRepeatList(?array $repeatList): self
    {
        $this->repeatList = $repeatList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->correctList !== null) {
            $result['correct_list'] = $this->correctList;
        }
        if ($this->invalidList !== null) {
            $result['invalid_list'] = $this->invalidList;
        }
        if ($this->repeatList !== null) {
            $result['repeat_list'] = $this->repeatList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['correct_list'] ?? null) !== null && is_array($v)) {
            $obj->correctList = $v;
        }
        if (($v = $data['invalid_list'] ?? null) !== null && is_array($v)) {
            $obj->invalidList = $v;
        }
        if (($v = $data['repeat_list'] ?? null) !== null && is_array($v)) {
            $obj->repeatList = $v;
        }
        return $obj;
    }
}

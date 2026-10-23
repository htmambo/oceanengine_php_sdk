<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpWechatGameUpdateV30RequestSubject implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpWechatGameUpdateV30RequestSubjectSubject
     */
    protected ?\Oceanengine\Models\ToolsEbpWechatGameUpdateV30RequestSubjectSubject $subject = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatGameUpdateV30RequestSubjectSubject
     */
    public function getSubject(): ?\Oceanengine\Models\ToolsEbpWechatGameUpdateV30RequestSubjectSubject
    {
        return $this->subject;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatGameUpdateV30RequestSubjectSubject $subject
     * @return self
     */
    public function setSubject(?\Oceanengine\Models\ToolsEbpWechatGameUpdateV30RequestSubjectSubject $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['subject'] ?? null) !== null && is_array($v)) {
            $obj->subject = \Oceanengine\Models\ToolsEbpWechatGameUpdateV30RequestSubjectSubject::fromArray($v);
        }
        return $obj;
    }
}

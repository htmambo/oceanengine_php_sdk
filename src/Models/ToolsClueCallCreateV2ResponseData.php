<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueCallCreateV2ResponseData implements \JsonSerializable
{
    /**
     * 呼叫结果返回码。[详见“呼叫结果返回码 & 呼叫结果返回信息”](https://bytedance.feishu.cn/wiki/wikcneKh4vQDeYrIN33joWdlZCd#)
     * @var int
     */
    protected ?int $callResultCode = null;

    /**
     * 呼叫结果返回信息。[详见“呼叫结果返回码 & 呼叫结果返回信息”](https://bytedance.feishu.cn/wiki/wikcneKh4vQDeYrIN33joWdlZCd#)
     * @var string
     */
    protected ?string $callResultMessage = null;

    /**
     * 呼叫记录id, 用来标识一次外呼行为
     * @var string
     */
    protected ?string $contactId = null;

    /**
     * 中间号。当呼叫方式为axb时该字段有值。
     * @var string
     */
    protected ?string $virtualNumber = null;

    /**
     * 呼叫结果返回码。[详见“呼叫结果返回码 & 呼叫结果返回信息”](https://bytedance.feishu.cn/wiki/wikcneKh4vQDeYrIN33joWdlZCd#)
     * @return int
     */
    public function getCallResultCode(): ?int
    {
        return $this->callResultCode;
    }

    /**
     * 呼叫结果返回码。[详见“呼叫结果返回码 & 呼叫结果返回信息”](https://bytedance.feishu.cn/wiki/wikcneKh4vQDeYrIN33joWdlZCd#)
     * @param int $callResultCode
     * @return self
     */
    public function setCallResultCode(?int $callResultCode): self
    {
        $this->callResultCode = $callResultCode;
        return $this;
    }

    /**
     * 呼叫结果返回信息。[详见“呼叫结果返回码 & 呼叫结果返回信息”](https://bytedance.feishu.cn/wiki/wikcneKh4vQDeYrIN33joWdlZCd#)
     * @return string
     */
    public function getCallResultMessage(): ?string
    {
        return $this->callResultMessage;
    }

    /**
     * 呼叫结果返回信息。[详见“呼叫结果返回码 & 呼叫结果返回信息”](https://bytedance.feishu.cn/wiki/wikcneKh4vQDeYrIN33joWdlZCd#)
     * @param string $callResultMessage
     * @return self
     */
    public function setCallResultMessage(?string $callResultMessage): self
    {
        $this->callResultMessage = $callResultMessage;
        return $this;
    }

    /**
     * 呼叫记录id, 用来标识一次外呼行为
     * @return string
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * 呼叫记录id, 用来标识一次外呼行为
     * @param string $contactId
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * 中间号。当呼叫方式为axb时该字段有值。
     * @return string
     */
    public function getVirtualNumber(): ?string
    {
        return $this->virtualNumber;
    }

    /**
     * 中间号。当呼叫方式为axb时该字段有值。
     * @param string $virtualNumber
     * @return self
     */
    public function setVirtualNumber(?string $virtualNumber): self
    {
        $this->virtualNumber = $virtualNumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->callResultCode !== null) {
            $result['call_result_code'] = $this->callResultCode;
        }
        if ($this->callResultMessage !== null) {
            $result['call_result_message'] = $this->callResultMessage;
        }
        if ($this->contactId !== null) {
            $result['contact_id'] = $this->contactId;
        }
        if ($this->virtualNumber !== null) {
            $result['virtual_number'] = $this->virtualNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['call_result_code'] ?? null) !== null) {
            $obj->callResultCode = (int) $v;
        }
        if (($v = $data['call_result_message'] ?? null) !== null) {
            $obj->callResultMessage = (string) $v;
        }
        if (($v = $data['contact_id'] ?? null) !== null) {
            $obj->contactId = (string) $v;
        }
        if (($v = $data['virtual_number'] ?? null) !== null) {
            $obj->virtualNumber = (string) $v;
        }
        return $obj;
    }
}

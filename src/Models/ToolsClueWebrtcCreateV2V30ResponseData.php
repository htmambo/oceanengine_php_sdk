<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueWebrtcCreateV2V30ResponseData implements \JsonSerializable
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
     * 呼叫所需的号码
     * @var string
     */
    protected ?string $calleeNumber = null;

    /**
     * 呼叫所需的城市编码
     * @var string
     */
    protected ?string $cityCode = null;

    /**
     * 呼叫记录id, 用来标识一次外呼行为
     * @var string
     */
    protected ?string $contactId = null;

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
     * 呼叫所需的号码
     * @return string
     */
    public function getCalleeNumber(): ?string
    {
        return $this->calleeNumber;
    }

    /**
     * 呼叫所需的号码
     * @param string $calleeNumber
     * @return self
     */
    public function setCalleeNumber(?string $calleeNumber): self
    {
        $this->calleeNumber = $calleeNumber;
        return $this;
    }

    /**
     * 呼叫所需的城市编码
     * @return string
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * 呼叫所需的城市编码
     * @param string $cityCode
     * @return self
     */
    public function setCityCode(?string $cityCode): self
    {
        $this->cityCode = $cityCode;
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
        if ($this->calleeNumber !== null) {
            $result['callee_number'] = $this->calleeNumber;
        }
        if ($this->cityCode !== null) {
            $result['city_code'] = $this->cityCode;
        }
        if ($this->contactId !== null) {
            $result['contact_id'] = $this->contactId;
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
        if (($v = $data['callee_number'] ?? null) !== null) {
            $obj->calleeNumber = (string) $v;
        }
        if (($v = $data['city_code'] ?? null) !== null) {
            $obj->cityCode = (string) $v;
        }
        if (($v = $data['contact_id'] ?? null) !== null) {
            $obj->contactId = (string) $v;
        }
        return $obj;
    }
}

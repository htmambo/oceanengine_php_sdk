<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatInstanceUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * 修改失败的微信列表
     * @var \Oceanengine\Models\ClueWechatInstanceUpdateV2ResponseDataFailWechatListInner[]
     */
    protected ?array $failWechatList = null;

    /**
     * 修改成功的微信列表
     * @var string[]
     */
    protected ?array $successWechatList = null;

    /**
     * 修改失败的微信列表
     * @return \Oceanengine\Models\ClueWechatInstanceUpdateV2ResponseDataFailWechatListInner[]
     */
    public function getFailWechatList(): ?array
    {
        return $this->failWechatList;
    }

    /**
     * 修改失败的微信列表
     * @param \Oceanengine\Models\ClueWechatInstanceUpdateV2ResponseDataFailWechatListInner[] $failWechatList
     * @return self
     */
    public function setFailWechatList(?array $failWechatList): self
    {
        $this->failWechatList = $failWechatList;
        return $this;
    }

    /**
     * 修改成功的微信列表
     * @return string[]
     */
    public function getSuccessWechatList(): ?array
    {
        return $this->successWechatList;
    }

    /**
     * 修改成功的微信列表
     * @param string[] $successWechatList
     * @return self
     */
    public function setSuccessWechatList(?array $successWechatList): self
    {
        $this->successWechatList = $successWechatList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failWechatList !== null) {
            $result['fail_wechat_list'] = $this->failWechatList;
        }
        if ($this->successWechatList !== null) {
            $result['success_wechat_list'] = $this->successWechatList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_wechat_list'] ?? null) !== null && is_array($v)) {
            $obj->failWechatList = array_map(fn ($vv) => \Oceanengine\Models\ClueWechatInstanceUpdateV2ResponseDataFailWechatListInner::fromArray($vv), $v);
        }
        if (($v = $data['success_wechat_list'] ?? null) !== null && is_array($v)) {
            $obj->successWechatList = $v;
        }
        return $obj;
    }
}

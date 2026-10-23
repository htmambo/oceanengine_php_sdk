<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpWechatAppletListV30ResponseDataAppletsInnerExtra implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $ageRemindToskey = null;

    /**
     * 适龄提醒截图
     * @var string
     */
    protected ?string $ageRemindUri = null;

    /**
     * 适龄提醒截图 链接
     * @var string
     */
    protected ?string $ageRemindUrl = null;

    /**
     * @var string
     */
    protected ?string $antiAddictionToskey = null;

    /**
     * 防沉迷截图
     * @var string
     */
    protected ?string $antiAddictionUri = null;

    /**
     * 防沉迷截图 链接
     * @var string
     */
    protected ?string $antiAddictionUrl = null;

    /**
     * @var string
     */
    protected ?string $realNameToskey = null;

    /**
     * 实名认证截图，对应上传图片返回的uri
     * @var string
     */
    protected ?string $realNameUri = null;

    /**
     * 实名认证截图，对应上传图片返回的链接
     * @var string
     */
    protected ?string $realNameUrl = null;

    /**
     * @var string
     */
    protected ?string $screenRecordToskey = null;

    /**
     * 游戏内容视频
     * @var string
     */
    protected ?string $screenRecordUri = null;

    /**
     * 游戏内容视频 链接
     * @var string
     */
    protected ?string $screenRecordUrl = null;

    /**
     * 游戏内容视频 vid
     * @var string
     */
    protected ?string $screenRecordVid = null;

    /**
     * 游戏内容视频 vid 链接
     * @var string
     */
    protected ?string $screenRecordVidUrl = null;

    /**
     * @return string
     */
    public function getAgeRemindToskey(): ?string
    {
        return $this->ageRemindToskey;
    }

    /**
     * @param string $ageRemindToskey
     * @return self
     */
    public function setAgeRemindToskey(?string $ageRemindToskey): self
    {
        $this->ageRemindToskey = $ageRemindToskey;
        return $this;
    }

    /**
     * 适龄提醒截图
     * @return string
     */
    public function getAgeRemindUri(): ?string
    {
        return $this->ageRemindUri;
    }

    /**
     * 适龄提醒截图
     * @param string $ageRemindUri
     * @return self
     */
    public function setAgeRemindUri(?string $ageRemindUri): self
    {
        $this->ageRemindUri = $ageRemindUri;
        return $this;
    }

    /**
     * 适龄提醒截图 链接
     * @return string
     */
    public function getAgeRemindUrl(): ?string
    {
        return $this->ageRemindUrl;
    }

    /**
     * 适龄提醒截图 链接
     * @param string $ageRemindUrl
     * @return self
     */
    public function setAgeRemindUrl(?string $ageRemindUrl): self
    {
        $this->ageRemindUrl = $ageRemindUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getAntiAddictionToskey(): ?string
    {
        return $this->antiAddictionToskey;
    }

    /**
     * @param string $antiAddictionToskey
     * @return self
     */
    public function setAntiAddictionToskey(?string $antiAddictionToskey): self
    {
        $this->antiAddictionToskey = $antiAddictionToskey;
        return $this;
    }

    /**
     * 防沉迷截图
     * @return string
     */
    public function getAntiAddictionUri(): ?string
    {
        return $this->antiAddictionUri;
    }

    /**
     * 防沉迷截图
     * @param string $antiAddictionUri
     * @return self
     */
    public function setAntiAddictionUri(?string $antiAddictionUri): self
    {
        $this->antiAddictionUri = $antiAddictionUri;
        return $this;
    }

    /**
     * 防沉迷截图 链接
     * @return string
     */
    public function getAntiAddictionUrl(): ?string
    {
        return $this->antiAddictionUrl;
    }

    /**
     * 防沉迷截图 链接
     * @param string $antiAddictionUrl
     * @return self
     */
    public function setAntiAddictionUrl(?string $antiAddictionUrl): self
    {
        $this->antiAddictionUrl = $antiAddictionUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getRealNameToskey(): ?string
    {
        return $this->realNameToskey;
    }

    /**
     * @param string $realNameToskey
     * @return self
     */
    public function setRealNameToskey(?string $realNameToskey): self
    {
        $this->realNameToskey = $realNameToskey;
        return $this;
    }

    /**
     * 实名认证截图，对应上传图片返回的uri
     * @return string
     */
    public function getRealNameUri(): ?string
    {
        return $this->realNameUri;
    }

    /**
     * 实名认证截图，对应上传图片返回的uri
     * @param string $realNameUri
     * @return self
     */
    public function setRealNameUri(?string $realNameUri): self
    {
        $this->realNameUri = $realNameUri;
        return $this;
    }

    /**
     * 实名认证截图，对应上传图片返回的链接
     * @return string
     */
    public function getRealNameUrl(): ?string
    {
        return $this->realNameUrl;
    }

    /**
     * 实名认证截图，对应上传图片返回的链接
     * @param string $realNameUrl
     * @return self
     */
    public function setRealNameUrl(?string $realNameUrl): self
    {
        $this->realNameUrl = $realNameUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getScreenRecordToskey(): ?string
    {
        return $this->screenRecordToskey;
    }

    /**
     * @param string $screenRecordToskey
     * @return self
     */
    public function setScreenRecordToskey(?string $screenRecordToskey): self
    {
        $this->screenRecordToskey = $screenRecordToskey;
        return $this;
    }

    /**
     * 游戏内容视频
     * @return string
     */
    public function getScreenRecordUri(): ?string
    {
        return $this->screenRecordUri;
    }

    /**
     * 游戏内容视频
     * @param string $screenRecordUri
     * @return self
     */
    public function setScreenRecordUri(?string $screenRecordUri): self
    {
        $this->screenRecordUri = $screenRecordUri;
        return $this;
    }

    /**
     * 游戏内容视频 链接
     * @return string
     */
    public function getScreenRecordUrl(): ?string
    {
        return $this->screenRecordUrl;
    }

    /**
     * 游戏内容视频 链接
     * @param string $screenRecordUrl
     * @return self
     */
    public function setScreenRecordUrl(?string $screenRecordUrl): self
    {
        $this->screenRecordUrl = $screenRecordUrl;
        return $this;
    }

    /**
     * 游戏内容视频 vid
     * @return string
     */
    public function getScreenRecordVid(): ?string
    {
        return $this->screenRecordVid;
    }

    /**
     * 游戏内容视频 vid
     * @param string $screenRecordVid
     * @return self
     */
    public function setScreenRecordVid(?string $screenRecordVid): self
    {
        $this->screenRecordVid = $screenRecordVid;
        return $this;
    }

    /**
     * 游戏内容视频 vid 链接
     * @return string
     */
    public function getScreenRecordVidUrl(): ?string
    {
        return $this->screenRecordVidUrl;
    }

    /**
     * 游戏内容视频 vid 链接
     * @param string $screenRecordVidUrl
     * @return self
     */
    public function setScreenRecordVidUrl(?string $screenRecordVidUrl): self
    {
        $this->screenRecordVidUrl = $screenRecordVidUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ageRemindToskey !== null) {
            $result['age_remind_toskey'] = $this->ageRemindToskey;
        }
        if ($this->ageRemindUri !== null) {
            $result['age_remind_uri'] = $this->ageRemindUri;
        }
        if ($this->ageRemindUrl !== null) {
            $result['age_remind_url'] = $this->ageRemindUrl;
        }
        if ($this->antiAddictionToskey !== null) {
            $result['anti_addiction_toskey'] = $this->antiAddictionToskey;
        }
        if ($this->antiAddictionUri !== null) {
            $result['anti_addiction_uri'] = $this->antiAddictionUri;
        }
        if ($this->antiAddictionUrl !== null) {
            $result['anti_addiction_url'] = $this->antiAddictionUrl;
        }
        if ($this->realNameToskey !== null) {
            $result['real_name_toskey'] = $this->realNameToskey;
        }
        if ($this->realNameUri !== null) {
            $result['real_name_uri'] = $this->realNameUri;
        }
        if ($this->realNameUrl !== null) {
            $result['real_name_url'] = $this->realNameUrl;
        }
        if ($this->screenRecordToskey !== null) {
            $result['screen_record_toskey'] = $this->screenRecordToskey;
        }
        if ($this->screenRecordUri !== null) {
            $result['screen_record_uri'] = $this->screenRecordUri;
        }
        if ($this->screenRecordUrl !== null) {
            $result['screen_record_url'] = $this->screenRecordUrl;
        }
        if ($this->screenRecordVid !== null) {
            $result['screen_record_vid'] = $this->screenRecordVid;
        }
        if ($this->screenRecordVidUrl !== null) {
            $result['screen_record_vid_url'] = $this->screenRecordVidUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age_remind_toskey'] ?? null) !== null) {
            $obj->ageRemindToskey = (string) $v;
        }
        if (($v = $data['age_remind_uri'] ?? null) !== null) {
            $obj->ageRemindUri = (string) $v;
        }
        if (($v = $data['age_remind_url'] ?? null) !== null) {
            $obj->ageRemindUrl = (string) $v;
        }
        if (($v = $data['anti_addiction_toskey'] ?? null) !== null) {
            $obj->antiAddictionToskey = (string) $v;
        }
        if (($v = $data['anti_addiction_uri'] ?? null) !== null) {
            $obj->antiAddictionUri = (string) $v;
        }
        if (($v = $data['anti_addiction_url'] ?? null) !== null) {
            $obj->antiAddictionUrl = (string) $v;
        }
        if (($v = $data['real_name_toskey'] ?? null) !== null) {
            $obj->realNameToskey = (string) $v;
        }
        if (($v = $data['real_name_uri'] ?? null) !== null) {
            $obj->realNameUri = (string) $v;
        }
        if (($v = $data['real_name_url'] ?? null) !== null) {
            $obj->realNameUrl = (string) $v;
        }
        if (($v = $data['screen_record_toskey'] ?? null) !== null) {
            $obj->screenRecordToskey = (string) $v;
        }
        if (($v = $data['screen_record_uri'] ?? null) !== null) {
            $obj->screenRecordUri = (string) $v;
        }
        if (($v = $data['screen_record_url'] ?? null) !== null) {
            $obj->screenRecordUrl = (string) $v;
        }
        if (($v = $data['screen_record_vid'] ?? null) !== null) {
            $obj->screenRecordVid = (string) $v;
        }
        if (($v = $data['screen_record_vid_url'] ?? null) !== null) {
            $obj->screenRecordVidUrl = (string) $v;
        }
        return $obj;
    }
}

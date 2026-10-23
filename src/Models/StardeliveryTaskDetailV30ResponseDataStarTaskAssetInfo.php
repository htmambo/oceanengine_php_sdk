<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskDetailV30ResponseDataStarTaskAssetInfo implements \JsonSerializable
{
    /**
     * 有效触点监测链接，此处监测链接仅用于达人流量，有效触点仅包括点击，任务创建后不支持修改，因此请在下单前确保监测链接准确性 本监测链接仅用于星广联投任务使用，对应宏参和广告投放的监测链接宏参有差异（如支持DEMANDID等），请参考文档配置点击查看
     * @var string
     */
    protected ?string $actionTrackUrl = null;

    /**
     * 任务使用的安卓应用点击监测链接，返回的是新建任务时选择的监测链接组ID下的点击监测链接
     * @var string
     */
    protected ?string $androidActionTrackUrl = null;

    /**
     * 安卓应用资产id
     * @var int
     */
    protected ?int $androidAssetId = null;

    /**
     * 资产id，仅当投放字节小程序/字节小游戏时返回该字段资产id
     * @var int
     */
    protected ?int $assetId = null;

    /**
     * 任务使用的iOS应用点击监测链接，返回的是新建任务时选择的监测链接组ID下的点击监测链接
     * @var string
     */
    protected ?string $iosActionTrackUrl = null;

    /**
     * iOS应用资产id
     * @var int
     */
    protected ?int $iosAssetId = null;

    /**
     * 有效触点监测链接，此处监测链接仅用于达人流量，有效触点仅包括点击，任务创建后不支持修改，因此请在下单前确保监测链接准确性 本监测链接仅用于星广联投任务使用，对应宏参和广告投放的监测链接宏参有差异（如支持DEMANDID等），请参考文档配置点击查看
     * @return string
     */
    public function getActionTrackUrl(): ?string
    {
        return $this->actionTrackUrl;
    }

    /**
     * 有效触点监测链接，此处监测链接仅用于达人流量，有效触点仅包括点击，任务创建后不支持修改，因此请在下单前确保监测链接准确性 本监测链接仅用于星广联投任务使用，对应宏参和广告投放的监测链接宏参有差异（如支持DEMANDID等），请参考文档配置点击查看
     * @param string $actionTrackUrl
     * @return self
     */
    public function setActionTrackUrl(?string $actionTrackUrl): self
    {
        $this->actionTrackUrl = $actionTrackUrl;
        return $this;
    }

    /**
     * 任务使用的安卓应用点击监测链接，返回的是新建任务时选择的监测链接组ID下的点击监测链接
     * @return string
     */
    public function getAndroidActionTrackUrl(): ?string
    {
        return $this->androidActionTrackUrl;
    }

    /**
     * 任务使用的安卓应用点击监测链接，返回的是新建任务时选择的监测链接组ID下的点击监测链接
     * @param string $androidActionTrackUrl
     * @return self
     */
    public function setAndroidActionTrackUrl(?string $androidActionTrackUrl): self
    {
        $this->androidActionTrackUrl = $androidActionTrackUrl;
        return $this;
    }

    /**
     * 安卓应用资产id
     * @return int
     */
    public function getAndroidAssetId(): ?int
    {
        return $this->androidAssetId;
    }

    /**
     * 安卓应用资产id
     * @param int $androidAssetId
     * @return self
     */
    public function setAndroidAssetId(?int $androidAssetId): self
    {
        $this->androidAssetId = $androidAssetId;
        return $this;
    }

    /**
     * 资产id，仅当投放字节小程序/字节小游戏时返回该字段资产id
     * @return int
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 资产id，仅当投放字节小程序/字节小游戏时返回该字段资产id
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 任务使用的iOS应用点击监测链接，返回的是新建任务时选择的监测链接组ID下的点击监测链接
     * @return string
     */
    public function getIosActionTrackUrl(): ?string
    {
        return $this->iosActionTrackUrl;
    }

    /**
     * 任务使用的iOS应用点击监测链接，返回的是新建任务时选择的监测链接组ID下的点击监测链接
     * @param string $iosActionTrackUrl
     * @return self
     */
    public function setIosActionTrackUrl(?string $iosActionTrackUrl): self
    {
        $this->iosActionTrackUrl = $iosActionTrackUrl;
        return $this;
    }

    /**
     * iOS应用资产id
     * @return int
     */
    public function getIosAssetId(): ?int
    {
        return $this->iosAssetId;
    }

    /**
     * iOS应用资产id
     * @param int $iosAssetId
     * @return self
     */
    public function setIosAssetId(?int $iosAssetId): self
    {
        $this->iosAssetId = $iosAssetId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionTrackUrl !== null) {
            $result['action_track_url'] = $this->actionTrackUrl;
        }
        if ($this->androidActionTrackUrl !== null) {
            $result['android_action_track_url'] = $this->androidActionTrackUrl;
        }
        if ($this->androidAssetId !== null) {
            $result['android_asset_id'] = $this->androidAssetId;
        }
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->iosActionTrackUrl !== null) {
            $result['ios_action_track_url'] = $this->iosActionTrackUrl;
        }
        if ($this->iosAssetId !== null) {
            $result['ios_asset_id'] = $this->iosAssetId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_track_url'] ?? null) !== null) {
            $obj->actionTrackUrl = (string) $v;
        }
        if (($v = $data['android_action_track_url'] ?? null) !== null) {
            $obj->androidActionTrackUrl = (string) $v;
        }
        if (($v = $data['android_asset_id'] ?? null) !== null) {
            $obj->androidAssetId = (int) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['ios_action_track_url'] ?? null) !== null) {
            $obj->iosActionTrackUrl = (string) $v;
        }
        if (($v = $data['ios_asset_id'] ?? null) !== null) {
            $obj->iosAssetId = (int) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdConvertSignalV2Request implements \JsonSerializable
{
    /**
     * 包含对应应用资产权限的BP账户id列表
     * @var int[]
     */
    protected ?array $accountIds = null;

    /**
     * 激活生效时长。多久后算作新激活，默认30天。（事件是激活时必传，单位天）
     * @var string
     */
    protected ?string $activeTtl = null;

    /**
     * 安卓用户标识符
     * @var string
     */
    protected ?string $androidId = null;

    /**
     * 包名/ 预期生效策略的包名
     * @var string
     */
    protected ?string $appPackage = null;

    /**
     * app版本
     * @var string
     */
    protected ?string $appVersion = null;

    /**
     * 蓝牙的系统开关
     * @var bool
     */
    protected ?bool $bluetoothEnabled = null;

    /**
     * 系统启动时间戳（秒级）
     * @var string
     */
    protected ?string $bootTimeSec = null;

    /**
     * 设备品牌
     * @var string
     */
    protected ?string $deviceBrand = null;

    /**
     * 设备初始化时间戳
     * @var string
     */
    protected ?string $deviceInitTime = null;

    /**
     * 设备机型
     * @var string
     */
    protected ?string $deviceModel = null;

    /**
     * 硬盘大小
     * @var string
     */
    protected ?string $disk = null;

    /**
     * 抖音app的安装和更新时间（json数组格式）
     * @var string
     */
    protected ?string $douyinAppTime = null;

    /**
     * 事件名称： 启动：launch_app 激活：active 付费：purchase 关键行为：game_addiction 注册：register 登录：log_in
     * @var string
     */
    protected ?string $eventName = null;

    /**
     * 事件发生时间戳（秒级）
     * @var string
     */
    protected ?string $eventTime = null;

    /**
     * ios硬件model
     * @var string
     */
    protected ?string $hardwareModel = null;

    /**
     * IOS设备标识符
     * @var string
     */
    protected ?string $idfa = null;

    /**
     * IOS用户标识符
     * @var string
     */
    protected ?string $idfv = null;

    /**
     * 客户端wlan0网口地址
     * @var string
     */
    protected ?string $ipid = null;

    /**
     * 客户端事件上报ipv4
     * @var string
     */
    protected ?string $ipv4 = null;

    /**
     * 客户端事件上报ipv6
     * @var string
     */
    protected ?string $ipv6 = null;

    /**
     * 转化标记“是否需要跳过归因”
     * @var string
     */
    protected ?string $isSkipAttribution = null;

    /**
     * 小程序当前登录状态下的启动参数，多层json map，需要dump成字符串
     * @var string
     */
    protected ?string $launchOption = null;

    /**
     * 地理位置的系统开关
     * @var bool
     */
    protected ?bool $locationEnabled = null;

    /**
     * true 表示模糊定位，false 表示精确定位，仅 iOS 支持
     * @var bool
     */
    protected ?bool $locationReducedAccuracy = null;

    /**
     * 物理内存大小
     * @var string
     */
    protected ?string $memory = null;

    /**
     * 微信小程序id（gh开头的格式）
     * @var string
     */
    protected ?string $microAppId = null;

    /**
     * 硬盘挂载id
     * @var string
     */
    protected ?string $mntId = null;

    /**
     * 安卓/鸿蒙oaid设备标识符
     * @var string
     */
    protected ?string $oaid = null;

    /**
     * 鸿蒙用户标识符
     * @var string
     */
    protected ?string $odid = null;

    /**
     * 系统类型：  IOS：ios  安卓：android  鸿蒙：open_harmony
     * @var string
     */
    protected ?string $os = null;

    /**
     * 系统版本
     * @var string
     */
    protected ?string $osVersion = null;

    /**
     * 事件属性，单层json map，需要dump成字符串
     * @var string
     */
    protected ?string $params = null;

    /**
     * 设备像素比
     * @var int
     */
    protected ?int $pixelRatio = null;

    /**
     * 屏幕高度，单位px
     * @var int
     */
    protected ?int $screenHeight = null;

    /**
     * 屏幕宽度，单位px
     * @var int
     */
    protected ?int $screenWidth = null;

    /**
     * 生效的策略类型   0：全部生效，默认   1:  仅生效去重   2:  仅生效助攻
     * @var string
     */
    protected ?string $strategyType = null;

    /**
     * 系统更新时间
     * @var string
     */
    protected ?string $sysFileTime = null;

    /**
     * 操作系统及版本
     * @var string
     */
    protected ?string $system = null;

    /**
     * 系统当前主题，取值为light或dark，全局配置\"darkmode\":true时才能获取，否则为 undefined （不支持小游戏）
     * @var string
     */
    protected ?string $theme = null;

    /**
     * 系统webview user agent
     * @var string
     */
    protected ?string $userAgent = null;

    /**
     * 广告主自定义用户唯一标识符
     * @var string
     */
    protected ?string $userUniqueId = null;

    /**
     * Wi-Fi 的系统开关
     * @var bool
     */
    protected ?bool $wifiEnabled = null;

    /**
     * 包含对应应用资产权限的BP账户id列表
     * @return int[]
     */
    public function getAccountIds(): ?array
    {
        return $this->accountIds;
    }

    /**
     * 包含对应应用资产权限的BP账户id列表
     * @param int[] $accountIds
     * @return self
     */
    public function setAccountIds(?array $accountIds): self
    {
        $this->accountIds = $accountIds;
        return $this;
    }

    /**
     * 激活生效时长。多久后算作新激活，默认30天。（事件是激活时必传，单位天）
     * @return string
     */
    public function getActiveTtl(): ?string
    {
        return $this->activeTtl;
    }

    /**
     * 激活生效时长。多久后算作新激活，默认30天。（事件是激活时必传，单位天）
     * @param string $activeTtl
     * @return self
     */
    public function setActiveTtl(?string $activeTtl): self
    {
        $this->activeTtl = $activeTtl;
        return $this;
    }

    /**
     * 安卓用户标识符
     * @return string
     */
    public function getAndroidId(): ?string
    {
        return $this->androidId;
    }

    /**
     * 安卓用户标识符
     * @param string $androidId
     * @return self
     */
    public function setAndroidId(?string $androidId): self
    {
        $this->androidId = $androidId;
        return $this;
    }

    /**
     * 包名/ 预期生效策略的包名
     * @return string
     */
    public function getAppPackage(): ?string
    {
        return $this->appPackage;
    }

    /**
     * 包名/ 预期生效策略的包名
     * @param string $appPackage
     * @return self
     */
    public function setAppPackage(?string $appPackage): self
    {
        $this->appPackage = $appPackage;
        return $this;
    }

    /**
     * app版本
     * @return string
     */
    public function getAppVersion(): ?string
    {
        return $this->appVersion;
    }

    /**
     * app版本
     * @param string $appVersion
     * @return self
     */
    public function setAppVersion(?string $appVersion): self
    {
        $this->appVersion = $appVersion;
        return $this;
    }

    /**
     * 蓝牙的系统开关
     * @return bool
     */
    public function getBluetoothEnabled(): ?bool
    {
        return $this->bluetoothEnabled;
    }

    /**
     * 蓝牙的系统开关
     * @param bool $bluetoothEnabled
     * @return self
     */
    public function setBluetoothEnabled(?bool $bluetoothEnabled): self
    {
        $this->bluetoothEnabled = $bluetoothEnabled;
        return $this;
    }

    /**
     * 系统启动时间戳（秒级）
     * @return string
     */
    public function getBootTimeSec(): ?string
    {
        return $this->bootTimeSec;
    }

    /**
     * 系统启动时间戳（秒级）
     * @param string $bootTimeSec
     * @return self
     */
    public function setBootTimeSec(?string $bootTimeSec): self
    {
        $this->bootTimeSec = $bootTimeSec;
        return $this;
    }

    /**
     * 设备品牌
     * @return string
     */
    public function getDeviceBrand(): ?string
    {
        return $this->deviceBrand;
    }

    /**
     * 设备品牌
     * @param string $deviceBrand
     * @return self
     */
    public function setDeviceBrand(?string $deviceBrand): self
    {
        $this->deviceBrand = $deviceBrand;
        return $this;
    }

    /**
     * 设备初始化时间戳
     * @return string
     */
    public function getDeviceInitTime(): ?string
    {
        return $this->deviceInitTime;
    }

    /**
     * 设备初始化时间戳
     * @param string $deviceInitTime
     * @return self
     */
    public function setDeviceInitTime(?string $deviceInitTime): self
    {
        $this->deviceInitTime = $deviceInitTime;
        return $this;
    }

    /**
     * 设备机型
     * @return string
     */
    public function getDeviceModel(): ?string
    {
        return $this->deviceModel;
    }

    /**
     * 设备机型
     * @param string $deviceModel
     * @return self
     */
    public function setDeviceModel(?string $deviceModel): self
    {
        $this->deviceModel = $deviceModel;
        return $this;
    }

    /**
     * 硬盘大小
     * @return string
     */
    public function getDisk(): ?string
    {
        return $this->disk;
    }

    /**
     * 硬盘大小
     * @param string $disk
     * @return self
     */
    public function setDisk(?string $disk): self
    {
        $this->disk = $disk;
        return $this;
    }

    /**
     * 抖音app的安装和更新时间（json数组格式）
     * @return string
     */
    public function getDouyinAppTime(): ?string
    {
        return $this->douyinAppTime;
    }

    /**
     * 抖音app的安装和更新时间（json数组格式）
     * @param string $douyinAppTime
     * @return self
     */
    public function setDouyinAppTime(?string $douyinAppTime): self
    {
        $this->douyinAppTime = $douyinAppTime;
        return $this;
    }

    /**
     * 事件名称： 启动：launch_app 激活：active 付费：purchase 关键行为：game_addiction 注册：register 登录：log_in
     * @return string
     */
    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    /**
     * 事件名称： 启动：launch_app 激活：active 付费：purchase 关键行为：game_addiction 注册：register 登录：log_in
     * @param string $eventName
     * @return self
     */
    public function setEventName(?string $eventName): self
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * 事件发生时间戳（秒级）
     * @return string
     */
    public function getEventTime(): ?string
    {
        return $this->eventTime;
    }

    /**
     * 事件发生时间戳（秒级）
     * @param string $eventTime
     * @return self
     */
    public function setEventTime(?string $eventTime): self
    {
        $this->eventTime = $eventTime;
        return $this;
    }

    /**
     * ios硬件model
     * @return string
     */
    public function getHardwareModel(): ?string
    {
        return $this->hardwareModel;
    }

    /**
     * ios硬件model
     * @param string $hardwareModel
     * @return self
     */
    public function setHardwareModel(?string $hardwareModel): self
    {
        $this->hardwareModel = $hardwareModel;
        return $this;
    }

    /**
     * IOS设备标识符
     * @return string
     */
    public function getIdfa(): ?string
    {
        return $this->idfa;
    }

    /**
     * IOS设备标识符
     * @param string $idfa
     * @return self
     */
    public function setIdfa(?string $idfa): self
    {
        $this->idfa = $idfa;
        return $this;
    }

    /**
     * IOS用户标识符
     * @return string
     */
    public function getIdfv(): ?string
    {
        return $this->idfv;
    }

    /**
     * IOS用户标识符
     * @param string $idfv
     * @return self
     */
    public function setIdfv(?string $idfv): self
    {
        $this->idfv = $idfv;
        return $this;
    }

    /**
     * 客户端wlan0网口地址
     * @return string
     */
    public function getIpid(): ?string
    {
        return $this->ipid;
    }

    /**
     * 客户端wlan0网口地址
     * @param string $ipid
     * @return self
     */
    public function setIpid(?string $ipid): self
    {
        $this->ipid = $ipid;
        return $this;
    }

    /**
     * 客户端事件上报ipv4
     * @return string
     */
    public function getIpv4(): ?string
    {
        return $this->ipv4;
    }

    /**
     * 客户端事件上报ipv4
     * @param string $ipv4
     * @return self
     */
    public function setIpv4(?string $ipv4): self
    {
        $this->ipv4 = $ipv4;
        return $this;
    }

    /**
     * 客户端事件上报ipv6
     * @return string
     */
    public function getIpv6(): ?string
    {
        return $this->ipv6;
    }

    /**
     * 客户端事件上报ipv6
     * @param string $ipv6
     * @return self
     */
    public function setIpv6(?string $ipv6): self
    {
        $this->ipv6 = $ipv6;
        return $this;
    }

    /**
     * 转化标记“是否需要跳过归因”
     * @return string
     */
    public function getIsSkipAttribution(): ?string
    {
        return $this->isSkipAttribution;
    }

    /**
     * 转化标记“是否需要跳过归因”
     * @param string $isSkipAttribution
     * @return self
     */
    public function setIsSkipAttribution(?string $isSkipAttribution): self
    {
        $this->isSkipAttribution = $isSkipAttribution;
        return $this;
    }

    /**
     * 小程序当前登录状态下的启动参数，多层json map，需要dump成字符串
     * @return string
     */
    public function getLaunchOption(): ?string
    {
        return $this->launchOption;
    }

    /**
     * 小程序当前登录状态下的启动参数，多层json map，需要dump成字符串
     * @param string $launchOption
     * @return self
     */
    public function setLaunchOption(?string $launchOption): self
    {
        $this->launchOption = $launchOption;
        return $this;
    }

    /**
     * 地理位置的系统开关
     * @return bool
     */
    public function getLocationEnabled(): ?bool
    {
        return $this->locationEnabled;
    }

    /**
     * 地理位置的系统开关
     * @param bool $locationEnabled
     * @return self
     */
    public function setLocationEnabled(?bool $locationEnabled): self
    {
        $this->locationEnabled = $locationEnabled;
        return $this;
    }

    /**
     * true 表示模糊定位，false 表示精确定位，仅 iOS 支持
     * @return bool
     */
    public function getLocationReducedAccuracy(): ?bool
    {
        return $this->locationReducedAccuracy;
    }

    /**
     * true 表示模糊定位，false 表示精确定位，仅 iOS 支持
     * @param bool $locationReducedAccuracy
     * @return self
     */
    public function setLocationReducedAccuracy(?bool $locationReducedAccuracy): self
    {
        $this->locationReducedAccuracy = $locationReducedAccuracy;
        return $this;
    }

    /**
     * 物理内存大小
     * @return string
     */
    public function getMemory(): ?string
    {
        return $this->memory;
    }

    /**
     * 物理内存大小
     * @param string $memory
     * @return self
     */
    public function setMemory(?string $memory): self
    {
        $this->memory = $memory;
        return $this;
    }

    /**
     * 微信小程序id（gh开头的格式）
     * @return string
     */
    public function getMicroAppId(): ?string
    {
        return $this->microAppId;
    }

    /**
     * 微信小程序id（gh开头的格式）
     * @param string $microAppId
     * @return self
     */
    public function setMicroAppId(?string $microAppId): self
    {
        $this->microAppId = $microAppId;
        return $this;
    }

    /**
     * 硬盘挂载id
     * @return string
     */
    public function getMntId(): ?string
    {
        return $this->mntId;
    }

    /**
     * 硬盘挂载id
     * @param string $mntId
     * @return self
     */
    public function setMntId(?string $mntId): self
    {
        $this->mntId = $mntId;
        return $this;
    }

    /**
     * 安卓/鸿蒙oaid设备标识符
     * @return string
     */
    public function getOaid(): ?string
    {
        return $this->oaid;
    }

    /**
     * 安卓/鸿蒙oaid设备标识符
     * @param string $oaid
     * @return self
     */
    public function setOaid(?string $oaid): self
    {
        $this->oaid = $oaid;
        return $this;
    }

    /**
     * 鸿蒙用户标识符
     * @return string
     */
    public function getOdid(): ?string
    {
        return $this->odid;
    }

    /**
     * 鸿蒙用户标识符
     * @param string $odid
     * @return self
     */
    public function setOdid(?string $odid): self
    {
        $this->odid = $odid;
        return $this;
    }

    /**
     * 系统类型：  IOS：ios  安卓：android  鸿蒙：open_harmony
     * @return string
     */
    public function getOs(): ?string
    {
        return $this->os;
    }

    /**
     * 系统类型：  IOS：ios  安卓：android  鸿蒙：open_harmony
     * @param string $os
     * @return self
     */
    public function setOs(?string $os): self
    {
        $this->os = $os;
        return $this;
    }

    /**
     * 系统版本
     * @return string
     */
    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    /**
     * 系统版本
     * @param string $osVersion
     * @return self
     */
    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;
        return $this;
    }

    /**
     * 事件属性，单层json map，需要dump成字符串
     * @return string
     */
    public function getParams(): ?string
    {
        return $this->params;
    }

    /**
     * 事件属性，单层json map，需要dump成字符串
     * @param string $params
     * @return self
     */
    public function setParams(?string $params): self
    {
        $this->params = $params;
        return $this;
    }

    /**
     * 设备像素比
     * @return int
     */
    public function getPixelRatio(): ?int
    {
        return $this->pixelRatio;
    }

    /**
     * 设备像素比
     * @param int $pixelRatio
     * @return self
     */
    public function setPixelRatio(?int $pixelRatio): self
    {
        $this->pixelRatio = $pixelRatio;
        return $this;
    }

    /**
     * 屏幕高度，单位px
     * @return int
     */
    public function getScreenHeight(): ?int
    {
        return $this->screenHeight;
    }

    /**
     * 屏幕高度，单位px
     * @param int $screenHeight
     * @return self
     */
    public function setScreenHeight(?int $screenHeight): self
    {
        $this->screenHeight = $screenHeight;
        return $this;
    }

    /**
     * 屏幕宽度，单位px
     * @return int
     */
    public function getScreenWidth(): ?int
    {
        return $this->screenWidth;
    }

    /**
     * 屏幕宽度，单位px
     * @param int $screenWidth
     * @return self
     */
    public function setScreenWidth(?int $screenWidth): self
    {
        $this->screenWidth = $screenWidth;
        return $this;
    }

    /**
     * 生效的策略类型   0：全部生效，默认   1:  仅生效去重   2:  仅生效助攻
     * @return string
     */
    public function getStrategyType(): ?string
    {
        return $this->strategyType;
    }

    /**
     * 生效的策略类型   0：全部生效，默认   1:  仅生效去重   2:  仅生效助攻
     * @param string $strategyType
     * @return self
     */
    public function setStrategyType(?string $strategyType): self
    {
        $this->strategyType = $strategyType;
        return $this;
    }

    /**
     * 系统更新时间
     * @return string
     */
    public function getSysFileTime(): ?string
    {
        return $this->sysFileTime;
    }

    /**
     * 系统更新时间
     * @param string $sysFileTime
     * @return self
     */
    public function setSysFileTime(?string $sysFileTime): self
    {
        $this->sysFileTime = $sysFileTime;
        return $this;
    }

    /**
     * 操作系统及版本
     * @return string
     */
    public function getSystem(): ?string
    {
        return $this->system;
    }

    /**
     * 操作系统及版本
     * @param string $system
     * @return self
     */
    public function setSystem(?string $system): self
    {
        $this->system = $system;
        return $this;
    }

    /**
     * 系统当前主题，取值为light或dark，全局配置\"darkmode\":true时才能获取，否则为 undefined （不支持小游戏）
     * @return string
     */
    public function getTheme(): ?string
    {
        return $this->theme;
    }

    /**
     * 系统当前主题，取值为light或dark，全局配置\"darkmode\":true时才能获取，否则为 undefined （不支持小游戏）
     * @param string $theme
     * @return self
     */
    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * 系统webview user agent
     * @return string
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    /**
     * 系统webview user agent
     * @param string $userAgent
     * @return self
     */
    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * 广告主自定义用户唯一标识符
     * @return string
     */
    public function getUserUniqueId(): ?string
    {
        return $this->userUniqueId;
    }

    /**
     * 广告主自定义用户唯一标识符
     * @param string $userUniqueId
     * @return self
     */
    public function setUserUniqueId(?string $userUniqueId): self
    {
        $this->userUniqueId = $userUniqueId;
        return $this;
    }

    /**
     * Wi-Fi 的系统开关
     * @return bool
     */
    public function getWifiEnabled(): ?bool
    {
        return $this->wifiEnabled;
    }

    /**
     * Wi-Fi 的系统开关
     * @param bool $wifiEnabled
     * @return self
     */
    public function setWifiEnabled(?bool $wifiEnabled): self
    {
        $this->wifiEnabled = $wifiEnabled;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountIds !== null) {
            $result['account_ids'] = $this->accountIds;
        }
        if ($this->activeTtl !== null) {
            $result['active_ttl'] = $this->activeTtl;
        }
        if ($this->androidId !== null) {
            $result['android_id'] = $this->androidId;
        }
        if ($this->appPackage !== null) {
            $result['app_package'] = $this->appPackage;
        }
        if ($this->appVersion !== null) {
            $result['app_version'] = $this->appVersion;
        }
        if ($this->bluetoothEnabled !== null) {
            $result['bluetooth_enabled'] = $this->bluetoothEnabled;
        }
        if ($this->bootTimeSec !== null) {
            $result['boot_time_sec'] = $this->bootTimeSec;
        }
        if ($this->deviceBrand !== null) {
            $result['device_brand'] = $this->deviceBrand;
        }
        if ($this->deviceInitTime !== null) {
            $result['device_init_time'] = $this->deviceInitTime;
        }
        if ($this->deviceModel !== null) {
            $result['device_model'] = $this->deviceModel;
        }
        if ($this->disk !== null) {
            $result['disk'] = $this->disk;
        }
        if ($this->douyinAppTime !== null) {
            $result['douyin_app_time'] = $this->douyinAppTime;
        }
        if ($this->eventName !== null) {
            $result['event_name'] = $this->eventName;
        }
        if ($this->eventTime !== null) {
            $result['event_time'] = $this->eventTime;
        }
        if ($this->hardwareModel !== null) {
            $result['hardware_model'] = $this->hardwareModel;
        }
        if ($this->idfa !== null) {
            $result['idfa'] = $this->idfa;
        }
        if ($this->idfv !== null) {
            $result['idfv'] = $this->idfv;
        }
        if ($this->ipid !== null) {
            $result['ipid'] = $this->ipid;
        }
        if ($this->ipv4 !== null) {
            $result['ipv4'] = $this->ipv4;
        }
        if ($this->ipv6 !== null) {
            $result['ipv6'] = $this->ipv6;
        }
        if ($this->isSkipAttribution !== null) {
            $result['is_skip_attribution'] = $this->isSkipAttribution;
        }
        if ($this->launchOption !== null) {
            $result['launch_option'] = $this->launchOption;
        }
        if ($this->locationEnabled !== null) {
            $result['location_enabled'] = $this->locationEnabled;
        }
        if ($this->locationReducedAccuracy !== null) {
            $result['location_reduced_accuracy'] = $this->locationReducedAccuracy;
        }
        if ($this->memory !== null) {
            $result['memory'] = $this->memory;
        }
        if ($this->microAppId !== null) {
            $result['micro_app_id'] = $this->microAppId;
        }
        if ($this->mntId !== null) {
            $result['mnt_id'] = $this->mntId;
        }
        if ($this->oaid !== null) {
            $result['oaid'] = $this->oaid;
        }
        if ($this->odid !== null) {
            $result['odid'] = $this->odid;
        }
        if ($this->os !== null) {
            $result['os'] = $this->os;
        }
        if ($this->osVersion !== null) {
            $result['os_version'] = $this->osVersion;
        }
        if ($this->params !== null) {
            $result['params'] = $this->params;
        }
        if ($this->pixelRatio !== null) {
            $result['pixel_ratio'] = $this->pixelRatio;
        }
        if ($this->screenHeight !== null) {
            $result['screen_height'] = $this->screenHeight;
        }
        if ($this->screenWidth !== null) {
            $result['screen_width'] = $this->screenWidth;
        }
        if ($this->strategyType !== null) {
            $result['strategy_type'] = $this->strategyType;
        }
        if ($this->sysFileTime !== null) {
            $result['sys_file_time'] = $this->sysFileTime;
        }
        if ($this->system !== null) {
            $result['system'] = $this->system;
        }
        if ($this->theme !== null) {
            $result['theme'] = $this->theme;
        }
        if ($this->userAgent !== null) {
            $result['user_agent'] = $this->userAgent;
        }
        if ($this->userUniqueId !== null) {
            $result['user_unique_id'] = $this->userUniqueId;
        }
        if ($this->wifiEnabled !== null) {
            $result['wifi_enabled'] = $this->wifiEnabled;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_ids'] ?? null) !== null && is_array($v)) {
            $obj->accountIds = $v;
        }
        if (($v = $data['active_ttl'] ?? null) !== null) {
            $obj->activeTtl = (string) $v;
        }
        if (($v = $data['android_id'] ?? null) !== null) {
            $obj->androidId = (string) $v;
        }
        if (($v = $data['app_package'] ?? null) !== null) {
            $obj->appPackage = (string) $v;
        }
        if (($v = $data['app_version'] ?? null) !== null) {
            $obj->appVersion = (string) $v;
        }
        if (($v = $data['bluetooth_enabled'] ?? null) !== null) {
            $obj->bluetoothEnabled = (bool) $v;
        }
        if (($v = $data['boot_time_sec'] ?? null) !== null) {
            $obj->bootTimeSec = (string) $v;
        }
        if (($v = $data['device_brand'] ?? null) !== null) {
            $obj->deviceBrand = (string) $v;
        }
        if (($v = $data['device_init_time'] ?? null) !== null) {
            $obj->deviceInitTime = (string) $v;
        }
        if (($v = $data['device_model'] ?? null) !== null) {
            $obj->deviceModel = (string) $v;
        }
        if (($v = $data['disk'] ?? null) !== null) {
            $obj->disk = (string) $v;
        }
        if (($v = $data['douyin_app_time'] ?? null) !== null) {
            $obj->douyinAppTime = (string) $v;
        }
        if (($v = $data['event_name'] ?? null) !== null) {
            $obj->eventName = (string) $v;
        }
        if (($v = $data['event_time'] ?? null) !== null) {
            $obj->eventTime = (string) $v;
        }
        if (($v = $data['hardware_model'] ?? null) !== null) {
            $obj->hardwareModel = (string) $v;
        }
        if (($v = $data['idfa'] ?? null) !== null) {
            $obj->idfa = (string) $v;
        }
        if (($v = $data['idfv'] ?? null) !== null) {
            $obj->idfv = (string) $v;
        }
        if (($v = $data['ipid'] ?? null) !== null) {
            $obj->ipid = (string) $v;
        }
        if (($v = $data['ipv4'] ?? null) !== null) {
            $obj->ipv4 = (string) $v;
        }
        if (($v = $data['ipv6'] ?? null) !== null) {
            $obj->ipv6 = (string) $v;
        }
        if (($v = $data['is_skip_attribution'] ?? null) !== null) {
            $obj->isSkipAttribution = (string) $v;
        }
        if (($v = $data['launch_option'] ?? null) !== null) {
            $obj->launchOption = (string) $v;
        }
        if (($v = $data['location_enabled'] ?? null) !== null) {
            $obj->locationEnabled = (bool) $v;
        }
        if (($v = $data['location_reduced_accuracy'] ?? null) !== null) {
            $obj->locationReducedAccuracy = (bool) $v;
        }
        if (($v = $data['memory'] ?? null) !== null) {
            $obj->memory = (string) $v;
        }
        if (($v = $data['micro_app_id'] ?? null) !== null) {
            $obj->microAppId = (string) $v;
        }
        if (($v = $data['mnt_id'] ?? null) !== null) {
            $obj->mntId = (string) $v;
        }
        if (($v = $data['oaid'] ?? null) !== null) {
            $obj->oaid = (string) $v;
        }
        if (($v = $data['odid'] ?? null) !== null) {
            $obj->odid = (string) $v;
        }
        if (($v = $data['os'] ?? null) !== null) {
            $obj->os = (string) $v;
        }
        if (($v = $data['os_version'] ?? null) !== null) {
            $obj->osVersion = (string) $v;
        }
        if (($v = $data['params'] ?? null) !== null) {
            $obj->params = (string) $v;
        }
        if (($v = $data['pixel_ratio'] ?? null) !== null) {
            $obj->pixelRatio = (int) $v;
        }
        if (($v = $data['screen_height'] ?? null) !== null) {
            $obj->screenHeight = (int) $v;
        }
        if (($v = $data['screen_width'] ?? null) !== null) {
            $obj->screenWidth = (int) $v;
        }
        if (($v = $data['strategy_type'] ?? null) !== null) {
            $obj->strategyType = (string) $v;
        }
        if (($v = $data['sys_file_time'] ?? null) !== null) {
            $obj->sysFileTime = (string) $v;
        }
        if (($v = $data['system'] ?? null) !== null) {
            $obj->system = (string) $v;
        }
        if (($v = $data['theme'] ?? null) !== null) {
            $obj->theme = (string) $v;
        }
        if (($v = $data['user_agent'] ?? null) !== null) {
            $obj->userAgent = (string) $v;
        }
        if (($v = $data['user_unique_id'] ?? null) !== null) {
            $obj->userUniqueId = (string) $v;
        }
        if (($v = $data['wifi_enabled'] ?? null) !== null) {
            $obj->wifiEnabled = (bool) $v;
        }
        return $obj;
    }
}

<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDbtGetV30ExternalAction
{
    public const AD_CONVERT_ADD_TO_CART_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_ADD_TO_CART';
    public const AD_CONVERT_PAGE_VIEW_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_PAGE_VIEW';
    public const AD_CONVERT_PHONE_CONNECT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_PHONE_CONNECT';
    public const AD_CONVERT_TYPE_ACTIVE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';
    public const AD_CONVERT_TYPE_ANCHOR_CLICK_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_ANCHOR_CLICK';
    public const AD_CONVERT_TYPE_APPLET_CLICK_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_APPLET_CLICK';
    public const AD_CONVERT_TYPE_APP_CART_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_APP_CART';
    public const AD_CONVERT_TYPE_APP_DETAIL_UV_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_APP_DETAIL_UV';
    public const AD_CONVERT_TYPE_APP_ORDER_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_APP_ORDER';
    public const AD_CONVERT_TYPE_APP_PAY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_APP_PAY';
    public const AD_CONVERT_TYPE_APP_UV_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_APP_UV';
    public const AD_CONVERT_TYPE_ARPU0_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_ARPU0';
    public const AD_CONVERT_TYPE_AUTHORIZATION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_AUTHORIZATION';
    public const AD_CONVERT_TYPE_BANKCARD_INFORMATION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_BANKCARD_INFORMATION';
    public const AD_CONVERT_TYPE_BOOST_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_BOOST';
    public const AD_CONVERT_TYPE_BUTTON_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_BUTTON';
    public const AD_CONVERT_TYPE_CERTIFICATION_INFORMATION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CERTIFICATION_INFORMATION';
    public const AD_CONVERT_TYPE_CLASS_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLASS';
    public const AD_CONVERT_TYPE_CLICK_CALL_DY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLICK_CALL_DY';
    public const AD_CONVERT_TYPE_CLICK_DOWNLOAD_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLICK_DOWNLOAD';
    public const AD_CONVERT_TYPE_CLICK_LANDING_PAGE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLICK_LANDING_PAGE';
    public const AD_CONVERT_TYPE_CLICK_NUM_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLICK_NUM';
    public const AD_CONVERT_TYPE_CLICK_SHOPWINDOW_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLICK_SHOPWINDOW';
    public const AD_CONVERT_TYPE_CLICK_WEBSITE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLICK_WEBSITE';
    public const AD_CONVERT_TYPE_CLUE_CONFIRM_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLUE_CONFIRM';
    public const AD_CONVERT_TYPE_CLUE_HIGH_INTENTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLUE_HIGH_INTENTION';
    public const AD_CONVERT_TYPE_CLUE_INTERFLOW_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLUE_INTERFLOW';
    public const AD_CONVERT_TYPE_CLUE_PAY_SUCCEED_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CLUE_PAY_SUCCEED';
    public const AD_CONVERT_TYPE_COMMENT_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_COMMENT_ACTION';
    public const AD_CONVERT_TYPE_COMMODITY_CLICK_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_COMMODITY_CLICK';
    public const AD_CONVERT_TYPE_CONSULT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CONSULT';
    public const AD_CONVERT_TYPE_CONSULT_CLUE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CONSULT_CLUE';
    public const AD_CONVERT_TYPE_CONSULT_EFFECTIVE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CONSULT_EFFECTIVE';
    public const AD_CONVERT_TYPE_COUPON_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_COUPON';
    public const AD_CONVERT_TYPE_CREATE_GAMEROLE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CREATE_GAMEROLE';
    public const AD_CONVERT_TYPE_CUSTOMER_EFFECTIVE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_CUSTOMER_EFFECTIVE';
    public const AD_CONVERT_TYPE_DEEP_PURCHASE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_DEEP_PURCHASE';
    public const AD_CONVERT_TYPE_DIALBACK_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_DIALBACK';
    public const AD_CONVERT_TYPE_DIALBACK_CONFIRM_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_DIALBACK_CONFIRM';
    public const AD_CONVERT_TYPE_DIALBACK_CONNECT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_DIALBACK_CONNECT';
    public const AD_CONVERT_TYPE_DOWNLOAD_FINISH_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_DOWNLOAD_FINISH';
    public const AD_CONVERT_TYPE_DOWNLOAD_START_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_DOWNLOAD_START';
    public const AD_CONVERT_TYPE_EFFECTIVE_ACTIVE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_EFFECTIVE_ACTIVE';
    public const AD_CONVERT_TYPE_EFFECTIVE_COPY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_EFFECTIVE_COPY';
    public const AD_CONVERT_TYPE_EFFECTIVE_PLAY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_EFFECTIVE_PLAY';
    public const AD_CONVERT_TYPE_ENTER_HOMEPAGE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_ENTER_HOMEPAGE';
    public const AD_CONVERT_TYPE_FEED_LIVE_HOMEPAGE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FEED_LIVE_HOMEPAGE';
    public const AD_CONVERT_TYPE_FIRST_CLASS_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FIRST_CLASS';
    public const AD_CONVERT_TYPE_FIRST_RENTAL_ORDER_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FIRST_RENTAL_ORDER';
    public const AD_CONVERT_TYPE_FOLLOW_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_FOLLOW_CLICK_PRODUCT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FOLLOW_CLICK_PRODUCT';
    public const AD_CONVERT_TYPE_FOLLOW_LIVE_ENTER_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FOLLOW_LIVE_ENTER';
    public const AD_CONVERT_TYPE_FOLLOW_VIDEO_PLAY_FINISH_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FOLLOW_VIDEO_PLAY_FINISH';
    public const AD_CONVERT_TYPE_FORM_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FORM';
    public const AD_CONVERT_TYPE_FORM_ANSWER_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FORM_ANSWER';
    public const AD_CONVERT_TYPE_FORM_CONNECT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FORM_CONNECT';
    public const AD_CONVERT_TYPE_FORM_DEEP_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FORM_DEEP';
    public const AD_CONVERT_TYPE_FORTUNE_SMALL_DEAL_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_FORTUNE_SMALL_DEAL';
    public const AD_CONVERT_TYPE_GAME_ADDICTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_GAME_ADDICTION';
    public const AD_CONVERT_TYPE_GET_INTENTION_CLUE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_GET_INTENTION_CLUE';
    public const AD_CONVERT_TYPE_HIGH_VALUE_CLUE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_HIGH_VALUE_CLUE';
    public const AD_CONVERT_TYPE_IAAP_ROI_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_IAAP_ROI';
    public const AD_CONVERT_TYPE_IDCARD_INFORMATION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_IDCARD_INFORMATION';
    public const AD_CONVERT_TYPE_INAPP_NEXT_DAY_OPEN_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_INAPP_NEXT_DAY_OPEN';
    public const AD_CONVERT_TYPE_INAPP_ROI_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_INAPP_ROI';
    public const AD_CONVERT_TYPE_INSTALL_FINISH_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_INSTALL_FINISH';
    public const AD_CONVERT_TYPE_INTELLIGENT_SERVICE_OPEN_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_INTELLIGENT_SERVICE_OPEN';
    public const AD_CONVERT_TYPE_INTENTION_CLUE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_INTENTION_CLUE';
    public const AD_CONVERT_TYPE_INTENTION_FORM_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_INTENTION_FORM';
    public const AD_CONVERT_TYPE_INTERACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_INTERACTION';
    public const AD_CONVERT_TYPE_INVALID_CLUE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_INVALID_CLUE';
    public const AD_CONVERT_TYPE_IPU_QUALIFY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_IPU_QUALIFY';
    public const AD_CONVERT_TYPE_LIKE_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIKE_ACTION';
    public const AD_CONVERT_TYPE_LINK_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LINK_ACTION';
    public const AD_CONVERT_TYPE_LIVE_APPOINTMENT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_APPOINTMENT';
    public const AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_COMMENT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_COMPONENT_CLICK_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_COMPONENT_CLICK';
    public const AD_CONVERT_TYPE_LIVE_ENTER_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_ENTER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_FANS_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_FANS_ACTION';
    public const AD_CONVERT_TYPE_LIVE_FOLLOW_ACITON_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_FOLLOW_ACITON';
    public const AD_CONVERT_TYPE_LIVE_GIFT_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_GIFT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_HOMEPAGE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_HOMEPAGE';
    public const AD_CONVERT_TYPE_LIVE_JOIN_GROUP_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_JOIN_GROUP';
    public const AD_CONVERT_TYPE_LIVE_NATIVE_ACITON_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_NATIVE_ACITON';
    public const AD_CONVERT_TYPE_LIVE_OTO_CLICK_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_OTO_CLICK';
    public const AD_CONVERT_TYPE_LIVE_OTO_PAY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_OTO_PAY';
    public const AD_CONVERT_TYPE_LIVE_OTO_PAY_CLICK_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_OTO_PAY_CLICK';
    public const AD_CONVERT_TYPE_LIVE_SLIDECART_CLICK_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_SLIDECART_CLICK_ACTION';
    public const AD_CONVERT_TYPE_LIVE_STAY_TIME_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_STAY_TIME';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';
    public const AD_CONVERT_TYPE_LOAN_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LOAN';
    public const AD_CONVERT_TYPE_LOAN_COMPLETION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LOAN_COMPLETION';
    public const AD_CONVERT_TYPE_LOAN_CREDIT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LOAN_CREDIT';
    public const AD_CONVERT_TYPE_LOCATION_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LOCATION_ACTION';
    public const AD_CONVERT_TYPE_LOTTERY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LOTTERY';
    public const AD_CONVERT_TYPE_LTV_ROI_SEVEN_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LTV_ROI_SEVEN';
    public const AD_CONVERT_TYPE_LTV_ROI_THIRTY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LTV_ROI_THIRTY';
    public const AD_CONVERT_TYPE_LT_ROI_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_LT_ROI';
    public const AD_CONVERT_TYPE_MAP_SEARCH_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MAP_SEARCH';
    public const AD_CONVERT_TYPE_MESSAGE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE';
    public const AD_CONVERT_TYPE_MESSAGE_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_ACTION';
    public const AD_CONVERT_TYPE_MESSAGE_CLICK_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_CLICK';
    public const AD_CONVERT_TYPE_MESSAGE_CLUE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_CLUE';
    public const AD_CONVERT_TYPE_MESSAGE_INTENTION_CLUE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_INTENTION_CLUE';
    public const AD_CONVERT_TYPE_MESSAGE_INTERACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_INTERACTION';
    public const AD_CONVERT_TYPE_MESSAGE_JOIN_GROUP_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_JOIN_GROUP';
    public const AD_CONVERT_TYPE_MESSAGE_ORDER_SUCCESS_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_ORDER_SUCCESS';
    public const AD_CONVERT_TYPE_MESSAGE_SERVICE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_SERVICE';
    public const AD_CONVERT_TYPE_MULTIPLE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_MULTIPLE';
    public const AD_CONVERT_TYPE_NATIVE_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_NATIVE_ACTION';
    public const AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_NEW_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_NEXT_DAY_OPEN_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_NEXT_DAY_OPEN';
    public const AD_CONVERT_TYPE_NOTIFY_DOWNLOAD_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_NOTIFY_DOWNLOAD';
    public const AD_CONVERT_TYPE_NOTIFY_FORM_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_NOTIFY_FORM';
    public const AD_CONVERT_TYPE_OTHER_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_OTHER';
    public const AD_CONVERT_TYPE_OTO_PAY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_OTO_PAY';
    public const AD_CONVERT_TYPE_OTO_STAY_TIME_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_OTO_STAY_TIME';
    public const AD_CONVERT_TYPE_PAID_CLUE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PAID_CLUE';
    public const AD_CONVERT_TYPE_PAY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PAY';
    public const AD_CONVERT_TYPE_PERSONAL_INFORMATION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PERSONAL_INFORMATION';
    public const AD_CONVERT_TYPE_PHONE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PHONE';
    public const AD_CONVERT_TYPE_PHONE_CONFIRM_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PHONE_CONFIRM';
    public const AD_CONVERT_TYPE_PHONE_CONNECT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PHONE_CONNECT';
    public const AD_CONVERT_TYPE_PHONE_EFFECTIVE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PHONE_EFFECTIVE';
    public const AD_CONVERT_TYPE_PLANTING_GRASS_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PLANTING_GRASS';
    public const AD_CONVERT_TYPE_POI_ADDRESS_CLICK_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_POI_ADDRESS_CLICK';
    public const AD_CONVERT_TYPE_POI_COLLECT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_POI_COLLECT';
    public const AD_CONVERT_TYPE_POI_MULTIPLE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_POI_MULTIPLE';
    public const AD_CONVERT_TYPE_PREMIUM_PAYMENT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PREMIUM_PAYMENT';
    public const AD_CONVERT_TYPE_PREMIUM_ROI_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PREMIUM_ROI';
    public const AD_CONVERT_TYPE_PREMIUM_UPGEADE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PREMIUM_UPGEADE';
    public const AD_CONVERT_TYPE_PRE_LOAN_CREDIT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PRE_LOAN_CREDIT';
    public const AD_CONVERT_TYPE_PURCHASE_OF_GOODS_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PURCHASE_OF_GOODS';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_2_D_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI_2D';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_7_D_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI_7D';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_THIRTY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI_THIRTY';
    public const AD_CONVERT_TYPE_QC_FOLLOW_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_QC_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_MUST_BUY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_QC_MUST_BUY';
    public const AD_CONVERT_TYPE_QQ_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_QQ';
    public const AD_CONVERT_TYPE_REDIRECT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_REDIRECT';
    public const AD_CONVERT_TYPE_REDIRECT_TO_SHOP_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_REDIRECT_TO_SHOP';
    public const AD_CONVERT_TYPE_REDIRECT_TO_STORE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_REDIRECT_TO_STORE';
    public const AD_CONVERT_TYPE_RESERVATION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_RESERVATION';
    public const AD_CONVERT_TYPE_RETENTION_7_D_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_RETENTION_7D';
    public const AD_CONVERT_TYPE_RETENTION_DAYS_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_RETENTION_DAYS';
    public const AD_CONVERT_TYPE_RSS_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_RSS';
    public const AD_CONVERT_TYPE_SALES_LEAD_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_SALES_LEAD';
    public const AD_CONVERT_TYPE_SERVICE_WITHDRAW_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_SERVICE_WITHDRAW';
    public const AD_CONVERT_TYPE_SHARE_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_SHARE_ACTION';
    public const AD_CONVERT_TYPE_SHOPPING_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_SHOPPING';
    public const AD_CONVERT_TYPE_SHOPPING_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_SHOPPING_ACTION';
    public const AD_CONVERT_TYPE_SHOPPING_CART_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_SHOPPING_CART';
    public const AD_CONVERT_TYPE_SHOW_OFF_NUM_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_SHOW_OFF_NUM';
    public const AD_CONVERT_TYPE_STAY_TIME_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_STAY_TIME';
    public const AD_CONVERT_TYPE_SUBMIT_CERTIFICATION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_SUBMIT_CERTIFICATION';
    public const AD_CONVERT_TYPE_SUCCESSORDER_ACTION_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_UG_ROI_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_UG_ROI';
    public const AD_CONVERT_TYPE_UPDATE_LEVEL_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_UPDATE_LEVEL';
    public const AD_CONVERT_TYPE_VIEW_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_VIEW';
    public const AD_CONVERT_TYPE_VOTE_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_VOTE';
    public const AD_CONVERT_TYPE_WECHAT_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_WECHAT';
    public const AD_CONVERT_TYPE_WECHAT_FIRST_MSG_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_WECHAT_FIRST_MSG';
    public const AD_CONVERT_TYPE_WECHAT_PAY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_WECHAT_PAY';
    public const AD_CONVERT_TYPE_WECHAT_QRCODE_SHOW_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_WECHAT_QRCODE_SHOW';
    public const AD_CONVERT_TYPE_WECHAT_QRCODE_TRY_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_WECHAT_QRCODE_TRY';
    public const AD_CONVERT_TYPE_WECHAT_REGISTER_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_WECHAT_REGISTER';
    public const AD_CONVERT_TYPE_WECHAT_WECOM_ADD_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_WECHAT_WECOM_ADD';
    public const AD_CONVERT_TYPE_XPATH_EventManagerDbtGetV30ExternalAction = 'AD_CONVERT_TYPE_XPATH';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_ADD_TO_CART_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_PAGE_VIEW_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_PHONE_CONNECT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_ACTIVE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_ANCHOR_CLICK_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_APPLET_CLICK_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_APP_CART_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_APP_DETAIL_UV_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_APP_ORDER_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_APP_PAY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_APP_UV_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_ARPU0_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_AUTHORIZATION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_BANKCARD_INFORMATION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_BOOST_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_BUTTON_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CERTIFICATION_INFORMATION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLASS_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLICK_CALL_DY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLICK_DOWNLOAD_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLICK_LANDING_PAGE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLICK_NUM_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLICK_SHOPWINDOW_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLICK_WEBSITE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLUE_CONFIRM_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLUE_HIGH_INTENTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLUE_INTERFLOW_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CLUE_PAY_SUCCEED_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_COMMENT_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_COMMODITY_CLICK_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CONSULT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CONSULT_CLUE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CONSULT_EFFECTIVE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_COUPON_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CREATE_GAMEROLE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_CUSTOMER_EFFECTIVE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_DEEP_PURCHASE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_DIALBACK_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_DIALBACK_CONFIRM_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_DIALBACK_CONNECT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_DOWNLOAD_FINISH_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_DOWNLOAD_START_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_EFFECTIVE_ACTIVE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_EFFECTIVE_COPY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_EFFECTIVE_PLAY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_ENTER_HOMEPAGE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FEED_LIVE_HOMEPAGE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FIRST_CLASS_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FIRST_RENTAL_ORDER_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_CLICK_PRODUCT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_LIVE_ENTER_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_VIDEO_PLAY_FINISH_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FORM_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FORM_ANSWER_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FORM_CONNECT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FORM_DEEP_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_FORTUNE_SMALL_DEAL_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_GAME_ADDICTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_GET_INTENTION_CLUE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_HIGH_VALUE_CLUE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_IAAP_ROI_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_IDCARD_INFORMATION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_INAPP_NEXT_DAY_OPEN_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_INAPP_ROI_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_INSTALL_FINISH_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_INTELLIGENT_SERVICE_OPEN_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_INTENTION_CLUE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_INTENTION_FORM_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_INTERACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_INVALID_CLUE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_IPU_QUALIFY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIKE_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LINK_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_APPOINTMENT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_COMPONENT_CLICK_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_ENTER_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_FANS_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_FOLLOW_ACITON_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_GIFT_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_HOMEPAGE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_JOIN_GROUP_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_NATIVE_ACITON_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_OTO_CLICK_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_OTO_PAY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_OTO_PAY_CLICK_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SLIDECART_CLICK_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_STAY_TIME_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LOAN_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LOAN_COMPLETION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LOAN_CREDIT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LOCATION_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LOTTERY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LTV_ROI_SEVEN_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LTV_ROI_THIRTY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_LT_ROI_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MAP_SEARCH_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_CLICK_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_CLUE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_INTENTION_CLUE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_INTERACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_JOIN_GROUP_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_ORDER_SUCCESS_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_SERVICE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_MULTIPLE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_NATIVE_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_NEXT_DAY_OPEN_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_NOTIFY_DOWNLOAD_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_NOTIFY_FORM_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_OTHER_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_OTO_PAY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_OTO_STAY_TIME_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PAID_CLUE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PAY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PERSONAL_INFORMATION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PHONE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PHONE_CONFIRM_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PHONE_CONNECT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PHONE_EFFECTIVE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PLANTING_GRASS_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_POI_ADDRESS_CLICK_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_POI_COLLECT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_POI_MULTIPLE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PREMIUM_PAYMENT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PREMIUM_ROI_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PREMIUM_UPGEADE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PRE_LOAN_CREDIT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_OF_GOODS_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_2_D_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_7_D_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_THIRTY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_QC_FOLLOW_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_QC_MUST_BUY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_QQ_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_REDIRECT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_REDIRECT_TO_SHOP_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_REDIRECT_TO_STORE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_RESERVATION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_RETENTION_7_D_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_RETENTION_DAYS_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_RSS_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_SALES_LEAD_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_SERVICE_WITHDRAW_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_SHARE_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_CART_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_SHOW_OFF_NUM_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_STAY_TIME_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_SUBMIT_CERTIFICATION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_SUCCESSORDER_ACTION_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_UG_ROI_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_UPDATE_LEVEL_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_VIEW_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_VOTE_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_FIRST_MSG_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_PAY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_QRCODE_SHOW_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_QRCODE_TRY_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_REGISTER_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_WECOM_ADD_EventManagerDbtGetV30ExternalAction,
        self::AD_CONVERT_TYPE_XPATH_EventManagerDbtGetV30ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDbtGetV30ExternalAction', $value));
        }
        return (string) $value;
    }
}

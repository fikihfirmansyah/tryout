<?php
/**
 * File name: translations.php
 * Last modified: 25/01/21, 1:41 PM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

if (!function_exists('translations')) {
    /**
     * return translation if translation file exists
     *
     * @param $json
     * @return array|mixed
     */
    function translations($json)
    {
        if(!file_exists($json)) {
            return [];
        }
        return json_decode(file_get_contents($json), true);
    }
}

if (!function_exists('isoLocaleIdentifiers')) {
    /**
     * return list of iso locale identifiers
     *
     * @return array|mixed
     */
    function isoLocaleIdentifiers()
    {
        return [
            [
                "id" => "af",
                "name" => "af - Afrikaans"
            ],
            [
                "id" => "af_NA",
                "name" => "af_NA - Afrikaans (Namibia)"
            ],
            [
                "id" => "af_ZA",
                "name" => "af_ZA - Afrikaans (South Africa)"
            ],
            [
                "id" => "ak",
                "name" => "ak - Akan"
            ],
            [
                "id" => "ak_GH",
                "name" => "ak_GH - Akan (Ghana)"
            ],
            [
                "id" => "sq",
                "name" => "sq - Albanian"
            ],
            [
                "id" => "sq_AL",
                "name" => "sq_AL - Albanian (Albania)"
            ],
            [
                "id" => "am",
                "name" => "am - Amharic"
            ],
            [
                "id" => "am_ET",
                "name" => "am_ET - Amharic (Ethiopia)"
            ],
            [
                "id" => "ar",
                "name" => "ar - Arabic"
            ],
            [
                "id" => "ar_DZ",
                "name" => "ar_DZ - Arabic (Algeria)"
            ],
            [
                "id" => "ar_BH",
                "name" => "ar_BH - Arabic (Bahrain)"
            ],
            [
                "id" => "ar_EG",
                "name" => "ar_EG - Arabic (Egypt)"
            ],
            [
                "id" => "ar_IQ",
                "name" => "ar_IQ - Arabic (Iraq)"
            ],
            [
                "id" => "ar_JO",
                "name" => "ar_JO - Arabic (Jordan)"
            ],
            [
                "id" => "ar_KW",
                "name" => "ar_KW - Arabic (Kuwait)"
            ],
            [
                "id" => "ar_LB",
                "name" => "ar_LB - Arabic (Lebanon)"
            ],
            [
                "id" => "ar_LY",
                "name" => "ar_LY - Arabic (Libya)"
            ],
            [
                "id" => "ar_MA",
                "name" => "ar_MA - Arabic (Morocco)"
            ],
            [
                "id" => "ar_OM",
                "name" => "ar_OM - Arabic (Oman)"
            ],
            [
                "id" => "ar_QA",
                "name" => "ar_QA - Arabic (Qatar)"
            ],
            [
                "id" => "ar_SA",
                "name" => "ar_SA - Arabic (Saudi Arabia)"
            ],
            [
                "id" => "ar_SD",
                "name" => "ar_SD - Arabic (Sudan)"
            ],
            [
                "id" => "ar_SY",
                "name" => "ar_SY - Arabic (Syria)"
            ],
            [
                "id" => "ar_TN",
                "name" => "ar_TN - Arabic (Tunisia)"
            ],
            [
                "id" => "ar_AE",
                "name" => "ar_AE - Arabic (United Arab Emirates)"
            ],
            [
                "id" => "ar_YE",
                "name" => "ar_YE - Arabic (Yemen)"
            ],
            [
                "id" => "hy",
                "name" => "hy - Armenian"
            ],
            [
                "id" => "hy_AM",
                "name" => "hy_AM - Armenian (Armenia)"
            ],
            [
                "id" => "as",
                "name" => "as - Assamese"
            ],
            [
                "id" => "as_IN",
                "name" => "as_IN - Assamese (India)"
            ],
            [
                "id" => "asa",
                "name" => "asa - Asu"
            ],
            [
                "id" => "asa_TZ",
                "name" => "asa_TZ - Asu (Tanzania)"
            ],
            [
                "id" => "az",
                "name" => "az - Azerbaijani"
            ],
            [
                "id" => "az_Cyrl",
                "name" => "az_Cyrl - Azerbaijani (Cyrillic)"
            ],
            [
                "id" => "az_Cyrl_AZ",
                "name" => "az_Cyrl_AZ - Azerbaijani (Cyrillic, Azerbaijan)"
            ],
            [
                "id" => "az_Latn",
                "name" => "az_Latn - Azerbaijani (Latin)"
            ],
            [
                "id" => "az_Latn_AZ",
                "name" => "az_Latn_AZ - Azerbaijani (Latin, Azerbaijan)"
            ],
            [
                "id" => "bm",
                "name" => "bm - Bambara"
            ],
            [
                "id" => "bm_ML",
                "name" => "bm_ML - Bambara (Mali)"
            ],
            [
                "id" => "eu",
                "name" => "eu - Basque"
            ],
            [
                "id" => "eu_ES",
                "name" => "eu_ES - Basque (Spain)"
            ],
            [
                "id" => "be",
                "name" => "be - Belarusian"
            ],
            [
                "id" => "be_BY",
                "name" => "be_BY - Belarusian (Belarus)"
            ],
            [
                "id" => "bem",
                "name" => "bem - Bemba"
            ],
            [
                "id" => "bem_ZM",
                "name" => "bem_ZM - Bemba (Zambia)"
            ],
            [
                "id" => "bez",
                "name" => "bez - Bena"
            ],
            [
                "id" => "bez_TZ",
                "name" => "bez_TZ - Bena (Tanzania)"
            ],
            [
                "id" => "bn",
                "name" => "bn - Bengali"
            ],
            [
                "id" => "bn_BD",
                "name" => "bn_BD - Bengali (Bangladesh)"
            ],
            [
                "id" => "bn_IN",
                "name" => "bn_IN - Bengali (India)"
            ],
            [
                "id" => "bs",
                "name" => "bs - Bosnian"
            ],
            [
                "id" => "bs_BA",
                "name" => "bs_BA - Bosnian (Bosnia and Herzegovina)"
            ],
            [
                "id" => "bg",
                "name" => "bg - Bulgarian"
            ],
            [
                "id" => "bg_BG",
                "name" => "bg_BG - Bulgarian (Bulgaria)"
            ],
            [
                "id" => "my",
                "name" => "my - Burmese"
            ],
            [
                "id" => "my_MM",
                "name" => "my_MM - Burmese (Myanmar [Burma])"
            ],
            [
                "id" => "ca",
                "name" => "ca - Catalan"
            ],
            [
                "id" => "ca_ES",
                "name" => "ca_ES - Catalan (Spain)"
            ],
            [
                "id" => "tzm",
                "name" => "tzm - Central Morocco Tamazight"
            ],
            [
                "id" => "tzm_Latn",
                "name" => "tzm_Latn - Central Morocco Tamazight (Latin)"
            ],
            [
                "id" => "tzm_Latn_MA",
                "name" => "tzm_Latn_MA - Central Morocco Tamazight (Latin, Morocco)"
            ],
            [
                "id" => "chr",
                "name" => "chr - Cherokee"
            ],
            [
                "id" => "chr_US",
                "name" => "chr_US - Cherokee (United States)"
            ],
            [
                "id" => "cgg",
                "name" => "cgg - Chiga"
            ],
            [
                "id" => "cgg_UG",
                "name" => "cgg_UG - Chiga (Uganda)"
            ],
            [
                "id" => "zh",
                "name" => "zh - Chinese"
            ],
            [
                "id" => "zh_Hans",
                "name" => "zh_Hans - Chinese (Simplified Han)"
            ],
            [
                "id" => "zh_Hans_CN",
                "name" => "zh_Hans_CN - Chinese (Simplified Han, China)"
            ],
            [
                "id" => "zh_Hans_HK",
                "name" => "zh_Hans_HK - Chinese (Simplified Han, Hong Kong SAR China)"
            ],
            [
                "id" => "zh_Hans_MO",
                "name" => "zh_Hans_MO - Chinese (Simplified Han, Macau SAR China)"
            ],
            [
                "id" => "zh_Hans_SG",
                "name" => "zh_Hans_SG - Chinese (Simplified Han, Singapore)"
            ],
            [
                "id" => "zh_Hant",
                "name" => "zh_Hant - Chinese (Traditional Han)"
            ],
            [
                "id" => "zh_Hant_HK",
                "name" => "zh_Hant_HK - Chinese (Traditional Han, Hong Kong SAR China)"
            ],
            [
                "id" => "zh_Hant_MO",
                "name" => "zh_Hant_MO - Chinese (Traditional Han, Macau SAR China)"
            ],
            [
                "id" => "zh_Hant_TW",
                "name" => "zh_Hant_TW - Chinese (Traditional Han, Taiwan)"
            ],
            [
                "id" => "kw",
                "name" => "kw - Cornish"
            ],
            [
                "id" => "kw_GB",
                "name" => "kw_GB - Cornish (United Kingdom)"
            ],
            [
                "id" => "hr",
                "name" => "hr - Croatian"
            ],
            [
                "id" => "hr_HR",
                "name" => "hr_HR - Croatian (Croatia)"
            ],
            [
                "id" => "cs",
                "name" => "cs - Czech"
            ],
            [
                "id" => "cs_CZ",
                "name" => "cs_CZ - Czech (Czech Republic)"
            ],
            [
                "id" => "da",
                "name" => "da - Danish"
            ],
            [
                "id" => "da_DK",
                "name" => "da_DK - Danish (Denmark)"
            ],
            [
                "id" => "nl",
                "name" => "nl - Dutch"
            ],
            [
                "id" => "nl_BE",
                "name" => "nl_BE - Dutch (Belgium)"
            ],
            [
                "id" => "nl_NL",
                "name" => "nl_NL - Dutch (Netherlands)"
            ],
            [
                "id" => "ebu",
                "name" => "ebu - Embu"
            ],
            [
                "id" => "ebu_KE",
                "name" => "ebu_KE - Embu (Kenya)"
            ],
            [
                "id" => "en",
                "name" => "en - English"
            ],
            [
                "id" => "en_AS",
                "name" => "en_AS - English (American Samoa)"
            ],
            [
                "id" => "en_AU",
                "name" => "en_AU - English (Australia)"
            ],
            [
                "id" => "en_BE",
                "name" => "en_BE - English (Belgium)"
            ],
            [
                "id" => "en_BZ",
                "name" => "en_BZ - English (Belize)"
            ],
            [
                "id" => "en_BW",
                "name" => "en_BW - English (Botswana)"
            ],
            [
                "id" => "en_CA",
                "name" => "en_CA - English (Canada)"
            ],
            [
                "id" => "en_GU",
                "name" => "en_GU - English (Guam)"
            ],
            [
                "id" => "en_HK",
                "name" => "en_HK - English (Hong Kong SAR China)"
            ],
            [
                "id" => "en_IN",
                "name" => "en_IN - English (India)"
            ],
            [
                "id" => "en_IE",
                "name" => "en_IE - English (Ireland)"
            ],
            [
                "id" => "en_JM",
                "name" => "en_JM - English (Jamaica)"
            ],
            [
                "id" => "en_MT",
                "name" => "en_MT - English (Malta)"
            ],
            [
                "id" => "en_MH",
                "name" => "en_MH - English (Marshall Islands)"
            ],
            [
                "id" => "en_MU",
                "name" => "en_MU - English (Mauritius)"
            ],
            [
                "id" => "en_NA",
                "name" => "en_NA - English (Namibia)"
            ],
            [
                "id" => "en_NZ",
                "name" => "en_NZ - English (New Zealand)"
            ],
            [
                "id" => "en_MP",
                "name" => "en_MP - English (Northern Mariana Islands)"
            ],
            [
                "id" => "en_PK",
                "name" => "en_PK - English (Pakistan)"
            ],
            [
                "id" => "en_PH",
                "name" => "en_PH - English (Philippines)"
            ],
            [
                "id" => "en_SG",
                "name" => "en_SG - English (Singapore)"
            ],
            [
                "id" => "en_ZA",
                "name" => "en_ZA - English (South Africa)"
            ],
            [
                "id" => "en_TT",
                "name" => "en_TT - English (Trinidad and Tobago)"
            ],
            [
                "id" => "en_UM",
                "name" => "en_UM - English (U.S. Minor Outlying Islands)"
            ],
            [
                "id" => "en_VI",
                "name" => "en_VI - English (U.S. Virgin Islands)"
            ],
            [
                "id" => "en_GB",
                "name" => "en_GB - English (United Kingdom)"
            ],
            [
                "id" => "en_US",
                "name" => "en_US - English (United States)"
            ],
            [
                "id" => "en_US_POSIX",
                "name" => "en_US_POSIX - English (United States, Computer)"
            ],
            [
                "id" => "en_ZW",
                "name" => "en_ZW - English (Zimbabwe)"
            ],
            [
                "id" => "eo",
                "name" => "eo - Esperanto"
            ],
            [
                "id" => "et",
                "name" => "et - Estonian"
            ],
            [
                "id" => "et_EE",
                "name" => "et_EE - Estonian (Estonia)"
            ],
            [
                "id" => "ee",
                "name" => "ee - Ewe"
            ],
            [
                "id" => "ee_GH",
                "name" => "ee_GH - Ewe (Ghana)"
            ],
            [
                "id" => "ee_TG",
                "name" => "ee_TG - Ewe (Togo)"
            ],
            [
                "id" => "fo",
                "name" => "fo - Faroese"
            ],
            [
                "id" => "fo_FO",
                "name" => "fo_FO - Faroese (Faroe Islands)"
            ],
            [
                "id" => "fil",
                "name" => "fil - Filipino"
            ],
            [
                "id" => "fil_PH",
                "name" => "fil_PH - Filipino (Philippines)"
            ],
            [
                "id" => "fi",
                "name" => "fi - Finnish"
            ],
            [
                "id" => "fi_FI",
                "name" => "fi_FI - Finnish (Finland)"
            ],
            [
                "id" => "fr",
                "name" => "fr - French"
            ],
            [
                "id" => "fr_BE",
                "name" => "fr_BE - French (Belgium)"
            ],
            [
                "id" => "fr_BJ",
                "name" => "fr_BJ - French (Benin)"
            ],
            [
                "id" => "fr_BF",
                "name" => "fr_BF - French (Burkina Faso)"
            ],
            [
                "id" => "fr_BI",
                "name" => "fr_BI - French (Burundi)"
            ],
            [
                "id" => "fr_CM",
                "name" => "fr_CM - French (Cameroon)"
            ],
            [
                "id" => "fr_CA",
                "name" => "fr_CA - French (Canada)"
            ],
            [
                "id" => "fr_CF",
                "name" => "fr_CF - French (Central African Republic)"
            ],
            [
                "id" => "fr_TD",
                "name" => "fr_TD - French (Chad)"
            ],
            [
                "id" => "fr_KM",
                "name" => "fr_KM - French (Comoros)"
            ],
            [
                "id" => "fr_CG",
                "name" => "fr_CG - French (Congo - Brazzaville)"
            ],
            [
                "id" => "fr_CD",
                "name" => "fr_CD - French (Congo - Kinshasa)"
            ],
            [
                "id" => "fr_CI",
                "name" => "fr_CI - French (Cote d'Ivoire)"
            ],
            [
                "id" => "fr_DJ",
                "name" => "fr_DJ - French (Djibouti)"
            ],
            [
                "id" => "fr_GQ",
                "name" => "fr_GQ - French (Equatorial Guinea)"
            ],
            [
                "id" => "fr_FR",
                "name" => "fr_FR - French (France)"
            ],
            [
                "id" => "fr_GA",
                "name" => "fr_GA - French (Gabon)"
            ],
            [
                "id" => "fr_GP",
                "name" => "fr_GP - French (Guadeloupe)"
            ],
            [
                "id" => "fr_GN",
                "name" => "fr_GN - French (Guinea)"
            ],
            [
                "id" => "fr_LU",
                "name" => "fr_LU - French (Luxembourg)"
            ],
            [
                "id" => "fr_MG",
                "name" => "fr_MG - French (Madagascar)"
            ],
            [
                "id" => "fr_ML",
                "name" => "fr_ML - French (Mali)"
            ],
            [
                "id" => "fr_MQ",
                "name" => "fr_MQ - French (Martinique)"
            ],
            [
                "id" => "fr_MC",
                "name" => "fr_MC - French (Monaco)"
            ],
            [
                "id" => "fr_NE",
                "name" => "fr_NE - French (Niger)"
            ],
            [
                "id" => "fr_RE",
                "name" => "fr_RE - French (Reunion)"
            ],
            [
                "id" => "fr_RW",
                "name" => "fr_RW - French (Rwanda)"
            ],
            [
                "id" => "fr_BL",
                "name" => "fr_BL - French (Saint Barthélemy)"
            ],
            [
                "id" => "fr_MF",
                "name" => "fr_MF - French (Saint Martin)"
            ],
            [
                "id" => "fr_SN",
                "name" => "fr_SN - French (Senegal)"
            ],
            [
                "id" => "fr_CH",
                "name" => "fr_CH - French (Switzerland)"
            ],
            [
                "id" => "fr_TG",
                "name" => "fr_TG - French (Togo)"
            ],
            [
                "id" => "ff",
                "name" => "ff - Fulah"
            ],
            [
                "id" => "ff_SN",
                "name" => "ff_SN - Fulah (Senegal)"
            ],
            [
                "id" => "gl",
                "name" => "gl - Galician"
            ],
            [
                "id" => "gl_ES",
                "name" => "gl_ES - Galician (Spain)"
            ],
            [
                "id" => "lg",
                "name" => "lg - Ganda"
            ],
            [
                "id" => "lg_UG",
                "name" => "lg_UG - Ganda (Uganda)"
            ],
            [
                "id" => "ka",
                "name" => "ka - Georgian"
            ],
            [
                "id" => "ka_GE",
                "name" => "ka_GE - Georgian (Georgia)"
            ],
            [
                "id" => "de",
                "name" => "de - German"
            ],
            [
                "id" => "de_AT",
                "name" => "de_AT - German (Austria)"
            ],
            [
                "id" => "de_BE",
                "name" => "de_BE - German (Belgium)"
            ],
            [
                "id" => "de_DE",
                "name" => "de_DE - German (Germany)"
            ],
            [
                "id" => "de_LI",
                "name" => "de_LI - German (Liechtenstein)"
            ],
            [
                "id" => "de_LU",
                "name" => "de_LU - German (Luxembourg)"
            ],
            [
                "id" => "de_CH",
                "name" => "de_CH - German (Switzerland)"
            ],
            [
                "id" => "el",
                "name" => "el - Greek"
            ],
            [
                "id" => "el_CY",
                "name" => "el_CY - Greek (Cyprus)"
            ],
            [
                "id" => "el_GR",
                "name" => "el_GR - Greek (Greece)"
            ],
            [
                "id" => "gu",
                "name" => "gu - Gujarati"
            ],
            [
                "id" => "gu_IN",
                "name" => "gu_IN - Gujarati (India)"
            ],
            [
                "id" => "guz",
                "name" => "guz - Gusii"
            ],
            [
                "id" => "guz_KE",
                "name" => "guz_KE - Gusii (Kenya)"
            ],
            [
                "id" => "ha",
                "name" => "ha - Hausa"
            ],
            [
                "id" => "ha_Latn",
                "name" => "ha_Latn - Hausa (Latin)"
            ],
            [
                "id" => "ha_Latn_GH",
                "name" => "ha_Latn_GH - Hausa (Latin, Ghana)"
            ],
            [
                "id" => "ha_Latn_NE",
                "name" => "ha_Latn_NE - Hausa (Latin, Niger)"
            ],
            [
                "id" => "ha_Latn_NG",
                "name" => "ha_Latn_NG - Hausa (Latin, Nigeria)"
            ],
            [
                "id" => "haw",
                "name" => "haw - Hawaiian"
            ],
            [
                "id" => "haw_US",
                "name" => "haw_US - Hawaiian (United States)"
            ],
            [
                "id" => "he",
                "name" => "he - Hebrew"
            ],
            [
                "id" => "he_IL",
                "name" => "he_IL - Hebrew (Israel)"
            ],
            [
                "id" => "hi",
                "name" => "hi - Hindi"
            ],
            [
                "id" => "hi_IN",
                "name" => "hi_IN - Hindi (India)"
            ],
            [
                "id" => "hu",
                "name" => "hu - Hungarian"
            ],
            [
                "id" => "hu_HU",
                "name" => "hu_HU - Hungarian (Hungary)"
            ],
            [
                "id" => "is",
                "name" => "is - Icelandic"
            ],
            [
                "id" => "is_IS",
                "name" => "is_IS - Icelandic (Iceland)"
            ],
            [
                "id" => "ig",
                "name" => "ig - Igbo"
            ],
            [
                "id" => "ig_NG",
                "name" => "ig_NG - Igbo (Nigeria)"
            ],
            [
                "id" => "id",
                "name" => "id - Indonesian"
            ],
            [
                "id" => "id_ID",
                "name" => "id_ID - Indonesian (Indonesia)"
            ],
            [
                "id" => "ga",
                "name" => "ga - Irish"
            ],
            [
                "id" => "ga_IE",
                "name" => "ga_IE - Irish (Ireland)"
            ],
            [
                "id" => "it",
                "name" => "it - Italian"
            ],
            [
                "id" => "it_IT",
                "name" => "it_IT - Italian (Italy)"
            ],
            [
                "id" => "it_CH",
                "name" => "it_CH - Italian (Switzerland)"
            ],
            [
                "id" => "ja",
                "name" => "ja - Japanese"
            ],
            [
                "id" => "ja_JP",
                "name" => "ja_JP - Japanese (Japan)"
            ],
            [
                "id" => "kea",
                "name" => "kea - Kabuverdianu"
            ],
            [
                "id" => "kea_CV",
                "name" => "kea_CV - Kabuverdianu (Cape Verde)"
            ],
            [
                "id" => "kab",
                "name" => "kab - Kabyle"
            ],
            [
                "id" => "kab_DZ",
                "name" => "kab_DZ - Kabyle (Algeria)"
            ],
            [
                "id" => "kl",
                "name" => "kl - Kalaallisut"
            ],
            [
                "id" => "kl_GL",
                "name" => "kl_GL - Kalaallisut (Greenland)"
            ],
            [
                "id" => "kln",
                "name" => "kln - Kalenjin"
            ],
            [
                "id" => "kln_KE",
                "name" => "kln_KE - Kalenjin (Kenya)"
            ],
            [
                "id" => "kam",
                "name" => "kam - Kamba"
            ],
            [
                "id" => "kam_KE",
                "name" => "kam_KE - Kamba (Kenya)"
            ],
            [
                "id" => "kn",
                "name" => "kn - Kannada"
            ],
            [
                "id" => "kn_IN",
                "name" => "kn_IN - Kannada (India)"
            ],
            [
                "id" => "kk",
                "name" => "kk - Kazakh"
            ],
            [
                "id" => "kk_Cyrl",
                "name" => "kk_Cyrl - Kazakh (Cyrillic)"
            ],
            [
                "id" => "kk_Cyrl_KZ",
                "name" => "kk_Cyrl_KZ - Kazakh (Cyrillic, Kazakhstan)"
            ],
            [
                "id" => "km",
                "name" => "km - Khmer"
            ],
            [
                "id" => "km_KH",
                "name" => "km_KH - Khmer (Cambodia)"
            ],
            [
                "id" => "ki",
                "name" => "ki - Kikuyu"
            ],
            [
                "id" => "ki_KE",
                "name" => "ki_KE - Kikuyu (Kenya)"
            ],
            [
                "id" => "rw",
                "name" => "rw - Kinyarwanda"
            ],
            [
                "id" => "rw_RW",
                "name" => "rw_RW - Kinyarwanda (Rwanda)"
            ],
            [
                "id" => "kok",
                "name" => "kok - Konkani"
            ],
            [
                "id" => "kok_IN",
                "name" => "kok_IN - Konkani (India)"
            ],
            [
                "id" => "ko",
                "name" => "ko - Korean"
            ],
            [
                "id" => "ko_KR",
                "name" => "ko_KR - Korean (South Korea)"
            ],
            [
                "id" => "khq",
                "name" => "khq - Koyra Chiini"
            ],
            [
                "id" => "khq_ML",
                "name" => "khq_ML - Koyra Chiini (Mali)"
            ],
            [
                "id" => "ses",
                "name" => "ses - Koyraboro Senni"
            ],
            [
                "id" => "ses_ML",
                "name" => "ses_ML - Koyraboro Senni (Mali)"
            ],
            [
                "id" => "lag",
                "name" => "lag - Langi"
            ],
            [
                "id" => "lag_TZ",
                "name" => "lag_TZ - Langi (Tanzania)"
            ],
            [
                "id" => "lv",
                "name" => "lv - Latvian"
            ],
            [
                "id" => "lv_LV",
                "name" => "lv_LV - Latvian (Latvia)"
            ],
            [
                "id" => "lt",
                "name" => "lt - Lithuanian"
            ],
            [
                "id" => "lt_LT",
                "name" => "lt_LT - Lithuanian (Lithuania)"
            ],
            [
                "id" => "luo",
                "name" => "luo - Luo"
            ],
            [
                "id" => "luo_KE",
                "name" => "luo_KE - Luo (Kenya)"
            ],
            [
                "id" => "luy",
                "name" => "luy - Luyia"
            ],
            [
                "id" => "luy_KE",
                "name" => "luy_KE - Luyia (Kenya)"
            ],
            [
                "id" => "mk",
                "name" => "mk - Macedonian"
            ],
            [
                "id" => "mk_MK",
                "name" => "mk_MK - Macedonian (Macedonia)"
            ],
            [
                "id" => "jmc",
                "name" => "jmc - Machame"
            ],
            [
                "id" => "jmc_TZ",
                "name" => "jmc_TZ - Machame (Tanzania)"
            ],
            [
                "id" => "kde",
                "name" => "kde - Makonde"
            ],
            [
                "id" => "kde_TZ",
                "name" => "kde_TZ - Makonde (Tanzania)"
            ],
            [
                "id" => "mg",
                "name" => "mg - Malagasy"
            ],
            [
                "id" => "mg_MG",
                "name" => "mg_MG - Malagasy (Madagascar)"
            ],
            [
                "id" => "ms",
                "name" => "ms - Malay"
            ],
            [
                "id" => "ms_BN",
                "name" => "ms_BN - Malay (Brunei)"
            ],
            [
                "id" => "ms_MY",
                "name" => "ms_MY - Malay (Malaysia)"
            ],
            [
                "id" => "ml",
                "name" => "ml - Malayalam"
            ],
            [
                "id" => "ml_IN",
                "name" => "ml_IN - Malayalam (India)"
            ],
            [
                "id" => "mt",
                "name" => "mt - Maltese"
            ],
            [
                "id" => "mt_MT",
                "name" => "mt_MT - Maltese (Malta)"
            ],
            [
                "id" => "gv",
                "name" => "gv - Manx"
            ],
            [
                "id" => "gv_GB",
                "name" => "gv_GB - Manx (United Kingdom)"
            ],
            [
                "id" => "mr",
                "name" => "mr - Marathi"
            ],
            [
                "id" => "mr_IN",
                "name" => "mr_IN - Marathi (India)"
            ],
            [
                "id" => "mas",
                "name" => "mas - Masai"
            ],
            [
                "id" => "mas_KE",
                "name" => "mas_KE - Masai (Kenya)"
            ],
            [
                "id" => "mas_TZ",
                "name" => "mas_TZ - Masai (Tanzania)"
            ],
            [
                "id" => "mer",
                "name" => "mer - Meru"
            ],
            [
                "id" => "mer_KE",
                "name" => "mer_KE - Meru (Kenya)"
            ],
            [
                "id" => "mfe",
                "name" => "mfe - Morisyen"
            ],
            [
                "id" => "mfe_MU",
                "name" => "mfe_MU - Morisyen (Mauritius)"
            ],
            [
                "id" => "naq",
                "name" => "naq - Nama"
            ],
            [
                "id" => "naq_NA",
                "name" => "naq_NA - Nama (Namibia)"
            ],
            [
                "id" => "ne",
                "name" => "ne - Nepali"
            ],
            [
                "id" => "ne_IN",
                "name" => "ne_IN - Nepali (India)"
            ],
            [
                "id" => "ne_NP",
                "name" => "ne_NP - Nepali (Nepal)"
            ],
            [
                "id" => "nd",
                "name" => "nd - North Ndebele"
            ],
            [
                "id" => "nd_ZW",
                "name" => "nd_ZW - North Ndebele (Zimbabwe)"
            ],
            [
                "id" => "nb",
                "name" => "nb - Norwegian Bokmål"
            ],
            [
                "id" => "nb_NO",
                "name" => "nb_NO - Norwegian Bokmal (Norway)"
            ],
            [
                "id" => "nn",
                "name" => "nn - Norwegian Nynorsk"
            ],
            [
                "id" => "nn_NO",
                "name" => "nn_NO - Norwegian Nynorsk (Norway)"
            ],
            [
                "id" => "nyn",
                "name" => "nyn - Nyankole"
            ],
            [
                "id" => "nyn_UG",
                "name" => "nyn_UG - Nyankole (Uganda)"
            ],
            [
                "id" => "or",
                "name" => "or - Oriya"
            ],
            [
                "id" => "or_IN",
                "name" => "or_IN - Oriya (India)"
            ],
            [
                "id" => "om",
                "name" => "om - Oromo"
            ],
            [
                "id" => "om_ET",
                "name" => "om_ET - Oromo (Ethiopia)"
            ],
            [
                "id" => "om_KE",
                "name" => "om_KE - Oromo (Kenya)"
            ],
            [
                "id" => "ps",
                "name" => "ps - Pashto"
            ],
            [
                "id" => "ps_AF",
                "name" => "ps_AF - Pashto (Afghanistan)"
            ],
            [
                "id" => "fa",
                "name" => "fa - Persian"
            ],
            [
                "id" => "fa_AF",
                "name" => "fa_AF - Persian (Afghanistan)"
            ],
            [
                "id" => "fa_IR",
                "name" => "fa_IR - Persian (Iran)"
            ],
            [
                "id" => "pl",
                "name" => "pl - Polish"
            ],
            [
                "id" => "pl_PL",
                "name" => "pl_PL - Polish (Poland)"
            ],
            [
                "id" => "pt",
                "name" => "pt - Portuguese"
            ],
            [
                "id" => "pt_BR",
                "name" => "pt_BR - Portuguese (Brazil)"
            ],
            [
                "id" => "pt_GW",
                "name" => "pt_GW - Portuguese (Guinea-Bissau)"
            ],
            [
                "id" => "pt_MZ",
                "name" => "pt_MZ - Portuguese (Mozambique)"
            ],
            [
                "id" => "pt_PT",
                "name" => "pt_PT - Portuguese (Portugal)"
            ],
            [
                "id" => "pa",
                "name" => "pa - Punjabi"
            ],
            [
                "id" => "pa_Arab",
                "name" => "pa_Arab - Punjabi (Arabic)"
            ],
            [
                "id" => "pa_Arab_PK",
                "name" => "pa_Arab_PK - Punjabi (Arabic, Pakistan)"
            ],
            [
                "id" => "pa_Guru",
                "name" => "pa_Guru - Punjabi (Gurmukhi)"
            ],
            [
                "id" => "pa_Guru_IN",
                "name" => "pa_Guru_IN - Punjabi (Gurmukhi, India)"
            ],
            [
                "id" => "ro",
                "name" => "ro - Romanian"
            ],
            [
                "id" => "ro_MD",
                "name" => "ro_MD - Romanian (Moldova)"
            ],
            [
                "id" => "ro_RO",
                "name" => "ro_RO - Romanian (Romania)"
            ],
            [
                "id" => "rm",
                "name" => "rm - Romansh"
            ],
            [
                "id" => "rm_CH",
                "name" => "rm_CH - Romansh (Switzerland)"
            ],
            [
                "id" => "rof",
                "name" => "rof - Rombo"
            ],
            [
                "id" => "rof_TZ",
                "name" => "rof_TZ - Rombo (Tanzania)"
            ],
            [
                "id" => "ru",
                "name" => "ru - Russian"
            ],
            [
                "id" => "ru_MD",
                "name" => "ru_MD - Russian (Moldova)"
            ],
            [
                "id" => "ru_RU",
                "name" => "ru_RU - Russian (Russia)"
            ],
            [
                "id" => "ru_UA",
                "name" => "ru_UA - Russian (Ukraine)"
            ],
            [
                "id" => "rwk",
                "name" => "rwk - Rwa"
            ],
            [
                "id" => "rwk_TZ",
                "name" => "rwk_TZ - Rwa (Tanzania)"
            ],
            [
                "id" => "saq",
                "name" => "saq - Samburu"
            ],
            [
                "id" => "saq_KE",
                "name" => "saq_KE - Samburu (Kenya)"
            ],
            [
                "id" => "sg",
                "name" => "sg - Sango"
            ],
            [
                "id" => "sg_CF",
                "name" => "sg_CF - Sango (Central African Republic)"
            ],
            [
                "id" => "seh",
                "name" => "seh - Sena"
            ],
            [
                "id" => "seh_MZ",
                "name" => "seh_MZ - Sena (Mozambique)"
            ],
            [
                "id" => "sr",
                "name" => "sr - Serbian"
            ],
            [
                "id" => "sr_Cyrl",
                "name" => "sr_Cyrl - Serbian (Cyrillic)"
            ],
            [
                "id" => "sr_Cyrl_BA",
                "name" => "sr_Cyrl_BA - Serbian (Cyrillic, Bosnia and Herzegovina)"
            ],
            [
                "id" => "sr_Cyrl_ME",
                "name" => "sr_Cyrl_ME - Serbian (Cyrillic, Montenegro)"
            ],
            [
                "id" => "sr_Cyrl_RS",
                "name" => "sr_Cyrl_RS - Serbian (Cyrillic, Serbia)"
            ],
            [
                "id" => "sr_Latn",
                "name" => "sr_Latn - Serbian (Latin)"
            ],
            [
                "id" => "sr_Latn_BA",
                "name" => "sr_Latn_BA - Serbian (Latin, Bosnia and Herzegovina)"
            ],
            [
                "id" => "sr_Latn_ME",
                "name" => "sr_Latn_ME - Serbian (Latin, Montenegro)"
            ],
            [
                "id" => "sr_Latn_RS",
                "name" => "sr_Latn_RS - Serbian (Latin, Serbia)"
            ],
            [
                "id" => "sn",
                "name" => "sn - Shona"
            ],
            [
                "id" => "sn_ZW",
                "name" => "sn_ZW - Shona (Zimbabwe)"
            ],
            [
                "id" => "ii",
                "name" => "ii - Sichuan Yi"
            ],
            [
                "id" => "ii_CN",
                "name" => "ii_CN - Sichuan Yi (China)"
            ],
            [
                "id" => "si",
                "name" => "si - Sinhala"
            ],
            [
                "id" => "si_LK",
                "name" => "si_LK - Sinhala (Sri Lanka)"
            ],
            [
                "id" => "sk",
                "name" => "sk - Slovak"
            ],
            [
                "id" => "sk_SK",
                "name" => "sk_SK - Slovak (Slovakia)"
            ],
            [
                "id" => "sl",
                "name" => "sl - Slovenian"
            ],
            [
                "id" => "sl_SI",
                "name" => "sl_SI - Slovenian (Slovenia)"
            ],
            [
                "id" => "xog",
                "name" => "xog - Soga"
            ],
            [
                "id" => "xog_UG",
                "name" => "xog_UG - Soga (Uganda)"
            ],
            [
                "id" => "so",
                "name" => "so - Somali"
            ],
            [
                "id" => "so_DJ",
                "name" => "so_DJ - Somali (Djibouti)"
            ],
            [
                "id" => "so_ET",
                "name" => "so_ET - Somali (Ethiopia)"
            ],
            [
                "id" => "so_KE",
                "name" => "so_KE - Somali (Kenya)"
            ],
            [
                "id" => "so_SO",
                "name" => "so_SO - Somali (Somalia)"
            ],
            [
                "id" => "es",
                "name" => "es - Spanish"
            ],
            [
                "id" => "es_AR",
                "name" => "es_AR - Spanish (Argentina)"
            ],
            [
                "id" => "es_BO",
                "name" => "es_BO - Spanish (Bolivia)"
            ],
            [
                "id" => "es_CL",
                "name" => "es_CL - Spanish (Chile)"
            ],
            [
                "id" => "es_CO",
                "name" => "es_CO - Spanish (Colombia)"
            ],
            [
                "id" => "es_CR",
                "name" => "es_CR - Spanish (Costa Rica)"
            ],
            [
                "id" => "es_DO",
                "name" => "es_DO - Spanish (Dominican Republic)"
            ],
            [
                "id" => "es_EC",
                "name" => "es_EC - Spanish (Ecuador)"
            ],
            [
                "id" => "es_SV",
                "name" => "es_SV - Spanish (El Salvador)"
            ],
            [
                "id" => "es_GQ",
                "name" => "es_GQ - Spanish (Equatorial Guinea)"
            ],
            [
                "id" => "es_GT",
                "name" => "es_GT - Spanish (Guatemala)"
            ],
            [
                "id" => "es_HN",
                "name" => "es_HN - Spanish (Honduras)"
            ],
            [
                "id" => "es_419",
                "name" => "es_419 - Spanish (Latin America)"
            ],
            [
                "id" => "es_MX",
                "name" => "es_MX - Spanish (Mexico)"
            ],
            [
                "id" => "es_NI",
                "name" => "es_NI - Spanish (Nicaragua)"
            ],
            [
                "id" => "es_PA",
                "name" => "es_PA - Spanish (Panama)"
            ],
            [
                "id" => "es_PY",
                "name" => "es_PY - Spanish (Paraguay)"
            ],
            [
                "id" => "es_PE",
                "name" => "es_PE - Spanish (Peru)"
            ],
            [
                "id" => "es_PR",
                "name" => "es_PR - Spanish (Puerto Rico)"
            ],
            [
                "id" => "es_ES",
                "name" => "es_ES - Spanish (Spain)"
            ],
            [
                "id" => "es_US",
                "name" => "es_US - Spanish (United States)"
            ],
            [
                "id" => "es_UY",
                "name" => "es_UY - Spanish (Uruguay)"
            ],
            [
                "id" => "es_VE",
                "name" => "es_VE - Spanish (Venezuela)"
            ],
            [
                "id" => "sw",
                "name" => "sw - Swahili"
            ],
            [
                "id" => "sw_KE",
                "name" => "sw_KE - Swahili (Kenya)"
            ],
            [
                "id" => "sw_TZ",
                "name" => "sw_TZ - Swahili (Tanzania)"
            ],
            [
                "id" => "sv",
                "name" => "sv - Swedish"
            ],
            [
                "id" => "sv_FI",
                "name" => "sv_FI - Swedish (Finland)"
            ],
            [
                "id" => "sv_SE",
                "name" => "sv_SE - Swedish (Sweden)"
            ],
            [
                "id" => "gsw",
                "name" => "gsw - Swiss German"
            ],
            [
                "id" => "gsw_CH",
                "name" => "gsw_CH - Swiss German (Switzerland)"
            ],
            [
                "id" => "shi",
                "name" => "shi - Tachelhit"
            ],
            [
                "id" => "shi_Latn",
                "name" => "shi_Latn - Tachelhit (Latin)"
            ],
            [
                "id" => "shi_Latn_MA",
                "name" => "shi_Latn_MA - Tachelhit (Latin, Morocco)"
            ],
            [
                "id" => "shi_Tfng",
                "name" => "shi_Tfng - Tachelhit (Tifinagh)"
            ],
            [
                "id" => "shi_Tfng_MA",
                "name" => "shi_Tfng_MA - Tachelhit (Tifinagh, Morocco)"
            ],
            [
                "id" => "dav",
                "name" => "dav - Taita"
            ],
            [
                "id" => "dav_KE",
                "name" => "dav_KE - Taita (Kenya)"
            ],
            [
                "id" => "ta",
                "name" => "ta - Tamil"
            ],
            [
                "id" => "ta_IN",
                "name" => "ta_IN - Tamil (India)"
            ],
            [
                "id" => "ta_LK",
                "name" => "ta_LK - Tamil (Sri Lanka)"
            ],
            [
                "id" => "te",
                "name" => "te - Telugu"
            ],
            [
                "id" => "te_IN",
                "name" => "te_IN - Telugu (India)"
            ],
            [
                "id" => "teo",
                "name" => "teo - Teso"
            ],
            [
                "id" => "teo_KE",
                "name" => "teo_KE - Teso (Kenya)"
            ],
            [
                "id" => "teo_UG",
                "name" => "teo_UG - Teso (Uganda)"
            ],
            [
                "id" => "th",
                "name" => "th - Thai"
            ],
            [
                "id" => "th_TH",
                "name" => "th_TH - Thai (Thailand)"
            ],
            [
                "id" => "bo",
                "name" => "bo - Tibetan"
            ],
            [
                "id" => "bo_CN",
                "name" => "bo_CN - Tibetan (China)"
            ],
            [
                "id" => "bo_IN",
                "name" => "bo_IN - Tibetan (India)"
            ],
            [
                "id" => "ti",
                "name" => "ti - Tigrinya"
            ],
            [
                "id" => "ti_ER",
                "name" => "ti_ER - Tigrinya (Eritrea)"
            ],
            [
                "id" => "ti_ET",
                "name" => "ti_ET - Tigrinya (Ethiopia)"
            ],
            [
                "id" => "to",
                "name" => "to - Tonga"
            ],
            [
                "id" => "to_TO",
                "name" => "to_TO - Tonga (Tonga)"
            ],
            [
                "id" => "tr",
                "name" => "tr - Turkish"
            ],
            [
                "id" => "tr_TR",
                "name" => "tr_TR - Turkish (Turkey)"
            ],
            [
                "id" => "uk",
                "name" => "uk - Ukrainian"
            ],
            [
                "id" => "uk_UA",
                "name" => "uk_UA - Ukrainian (Ukraine)"
            ],
            [
                "id" => "ur",
                "name" => "ur - Urdu"
            ],
            [
                "id" => "ur_IN",
                "name" => "ur_IN - Urdu (India)"
            ],
            [
                "id" => "ur_PK",
                "name" => "ur_PK - Urdu (Pakistan)"
            ],
            [
                "id" => "uz",
                "name" => "uz - Uzbek"
            ],
            [
                "id" => "uz_Arab",
                "name" => "uz_Arab - Uzbek (Arabic)"
            ],
            [
                "id" => "uz_Arab_AF",
                "name" => "uz_Arab_AF - Uzbek (Arabic, Afghanistan)"
            ],
            [
                "id" => "uz_Cyrl",
                "name" => "uz_Cyrl - Uzbek (Cyrillic)"
            ],
            [
                "id" => "uz_Cyrl_UZ",
                "name" => "uz_Cyrl_UZ - Uzbek (Cyrillic, Uzbekistan)"
            ],
            [
                "id" => "uz_Latn",
                "name" => "uz_Latn - Uzbek (Latin)"
            ],
            [
                "id" => "uz_Latn_UZ",
                "name" => "uz_Latn_UZ - Uzbek (Latin, Uzbekistan)"
            ],
            [
                "id" => "vi",
                "name" => "vi - Vietnamese"
            ],
            [
                "id" => "vi_VN",
                "name" => "vi_VN - Vietnamese (Vietnam)"
            ],
            [
                "id" => "vun",
                "name" => "vun - Vunjo"
            ],
            [
                "id" => "vun_TZ",
                "name" => "vun_TZ - Vunjo (Tanzania)"
            ],
            [
                "id" => "cy",
                "name" => "cy - Welsh"
            ],
            [
                "id" => "cy_GB",
                "name" => "cy_GB - Welsh (United Kingdom)"
            ],
            [
                "id" => "yo",
                "name" => "yo - Yoruba"
            ],
            [
                "id" => "yo_NG",
                "name" => "yo_NG - Yoruba (Nigeria)"
            ],
            [
                "id" => "zu",
                "name" => "zu - Zulu"
            ],
            [
                "id" => "zu_ZA",
                "name" => "zu_ZA - Zulu (South Africa)"
            ]
        ];
    }
}

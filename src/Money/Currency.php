<?php declare(strict_types = 1);

namespace Dms\Common\Structure\Money;

use Dms\Core\Model\Object\Enum;
use Dms\Core\Model\Object\PropertyTypeDefiner;

/**
 * The currency enum.
 *
 * @see    https://raw.githubusercontent.com/sebastianbergmann/money/master/src/Currency.php
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class Currency extends Enum
{
    //region Options
    const AED = 'AED';
    const AFN = 'AFN';
    const ALL = 'ALL';
    const AMD = 'AMD';
    const ANG = 'ANG';
    const AOA = 'AOA';
    const ARS = 'ARS';
    const AUD = 'AUD';
    const AWG = 'AWG';
    const AZN = 'AZN';
    const BAM = 'BAM';
    const BBD = 'BBD';
    const BDT = 'BDT';
    const BGN = 'BGN';
    const BHD = 'BHD';
    const BIF = 'BIF';
    const BMD = 'BMD';
    const BND = 'BND';
    const BOB = 'BOB';
    const BOV = 'BOV';
    const BRL = 'BRL';
    const BSD = 'BSD';
    const BTN = 'BTN';
    const BWP = 'BWP';
    const BYR = 'BYR';
    const BZD = 'BZD';
    const CAD = 'CAD';
    const CDF = 'CDF';
    const CHE = 'CHE';
    const CHF = 'CHF';
    const CHW = 'CHW';
    const CLF = 'CLF';
    const CLP = 'CLP';
    const CNY = 'CNY';
    const COP = 'COP';
    const COU = 'COU';
    const CRC = 'CRC';
    const CUC = 'CUC';
    const CUP = 'CUP';
    const CVE = 'CVE';
    const CZK = 'CZK';
    const DJF = 'DJF';
    const DKK = 'DKK';
    const DOP = 'DOP';
    const DZD = 'DZD';
    const EGP = 'EGP';
    const ERN = 'ERN';
    const ETB = 'ETB';
    const EUR = 'EUR';
    const FJD = 'FJD';
    const FKP = 'FKP';
    const GBP = 'GBP';
    const GEL = 'GEL';
    const GHS = 'GHS';
    const GIP = 'GIP';
    const GMD = 'GMD';
    const GNF = 'GNF';
    const GTQ = 'GTQ';
    const GYD = 'GYD';
    const HKD = 'HKD';
    const HNL = 'HNL';
    const HRK = 'HRK';
    const HTG = 'HTG';
    const HUF = 'HUF';
    const IDR = 'IDR';
    const ILS = 'ILS';
    const INR = 'INR';
    const IQD = 'IQD';
    const IRR = 'IRR';
    const ISK = 'ISK';
    const JMD = 'JMD';
    const JOD = 'JOD';
    const JPY = 'JPY';
    const KES = 'KES';
    const KGS = 'KGS';
    const KHR = 'KHR';
    const KMF = 'KMF';
    const KPW = 'KPW';
    const KRW = 'KRW';
    const KWD = 'KWD';
    const KYD = 'KYD';
    const KZT = 'KZT';
    const LAK = 'LAK';
    const LBP = 'LBP';
    const LKR = 'LKR';
    const LRD = 'LRD';
    const LSL = 'LSL';
    const LTL = 'LTL';
    const LVL = 'LVL';
    const LYD = 'LYD';
    const MAD = 'MAD';
    const MDL = 'MDL';
    const MGA = 'MGA';
    const MKD = 'MKD';
    const MMK = 'MMK';
    const MNT = 'MNT';
    const MOP = 'MOP';
    const MRO = 'MRO';
    const MUR = 'MUR';
    const MVR = 'MVR';
    const MWK = 'MWK';
    const MXN = 'MXN';
    const MXV = 'MXV';
    const MYR = 'MYR';
    const MZN = 'MZN';
    const NAD = 'NAD';
    const NGN = 'NGN';
    const NIO = 'NIO';
    const NOK = 'NOK';
    const NPR = 'NPR';
    const NZD = 'NZD';
    const OMR = 'OMR';
    const PAB = 'PAB';
    const PEN = 'PEN';
    const PGK = 'PGK';
    const PHP = 'PHP';
    const PKR = 'PKR';
    const PLN = 'PLN';
    const PYG = 'PYG';
    const QAR = 'QAR';
    const RON = 'RON';
    const RSD = 'RSD';
    const RUB = 'RUB';
    const RWF = 'RWF';
    const SAR = 'SAR';
    const SBD = 'SBD';
    const SCR = 'SCR';
    const SDG = 'SDG';
    const SEK = 'SEK';
    const SGD = 'SGD';
    const SHP = 'SHP';
    const SLL = 'SLL';
    const SOS = 'SOS';
    const SRD = 'SRD';
    const SSP = 'SSP';
    const STD = 'STD';
    const SVC = 'SVC';
    const SYP = 'SYP';
    const SZL = 'SZL';
    const THB = 'THB';
    const TJS = 'TJS';
    const TMT = 'TMT';
    const TND = 'TND';
    const TOP = 'TOP';
    const TRY = 'TRY';
    const TTD = 'TTD';
    const TWD = 'TWD';
    const TZS = 'TZS';
    const UAH = 'UAH';
    const UGX = 'UGX';
    const USD = 'USD';
    const USN = 'USN';
    const USS = 'USS';
    const UYI = 'UYI';
    const UYU = 'UYU';
    const UZS = 'UZS';
    const VEF = 'VEF';
    const VND = 'VND';
    const VUV = 'VUV';
    const WST = 'WST';
    const XAF = 'XAF';
    const XAG = 'XAG';
    const XAU = 'XAU';
    const XBA = 'XBA';
    const XBB = 'XBB';
    const XBC = 'XBC';
    const XBD = 'XBD';
    const XCD = 'XCD';
    const XDR = 'XDR';
    const XFU = 'XFU';
    const XOF = 'XOF';
    const XPD = 'XPD';
    const XPF = 'XPF';
    const XPT = 'XPT';
    const XSU = 'XSU';
    const XTS = 'XTS';
    const XUA = 'XUA';
    const XXX = 'XXX';
    const YER = 'YER';
    const ZAR = 'ZAR';
    const ZMW = 'ZMW';
    const ZWL = 'ZWL';

    /**
     * @var array
     */
    private static $currencies = [
        'AED' => [
            'display_name'            => 'UAE Dirham',
            'numeric_code'            => 784,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'AFN' => [
            'display_name'            => 'Afghani',
            'numeric_code'            => 971,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ALL' => [
            'display_name'            => 'Lek',
            'numeric_code'            => 8,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'AMD' => [
            'display_name'            => 'Armenian Dram',
            'numeric_code'            => 51,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ANG' => [
            'display_name'            => 'Netherlands Antillean Guilder',
            'numeric_code'            => 532,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'AOA' => [
            'display_name'            => 'Kwanza',
            'numeric_code'            => 973,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ARS' => [
            'display_name'            => 'Argentine Peso',
            'numeric_code'            => 32,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'AUD' => [
            'display_name'            => 'Australian Dollar',
            'numeric_code'            => 36,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'AWG' => [
            'display_name'            => 'Aruban Florin',
            'numeric_code'            => 533,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'AZN' => [
            'display_name'            => 'Azerbaijanian Manat',
            'numeric_code'            => 944,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BAM' => [
            'display_name'            => 'Convertible Mark',
            'numeric_code'            => 977,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BBD' => [
            'display_name'            => 'Barbados Dollar',
            'numeric_code'            => 52,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BDT' => [
            'display_name'            => 'Taka',
            'numeric_code'            => 50,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BGN' => [
            'display_name'            => 'Bulgarian Lev',
            'numeric_code'            => 975,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BHD' => [
            'display_name'            => 'Bahraini Dinar',
            'numeric_code'            => 48,
            'default_fraction_digits' => 3,
            'sub_unit'                => 1000,
        ],
        'BIF' => [
            'display_name'            => 'Burundi Franc',
            'numeric_code'            => 108,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'BMD' => [
            'display_name'            => 'Bermudian Dollar',
            'numeric_code'            => 60,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BND' => [
            'display_name'            => 'Brunei Dollar',
            'numeric_code'            => 96,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BOB' => [
            'display_name'            => 'Boliviano',
            'numeric_code'            => 68,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BOV' => [
            'display_name'            => 'Mvdol',
            'numeric_code'            => 984,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BRL' => [
            'display_name'            => 'Brazilian Real',
            'numeric_code'            => 986,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BSD' => [
            'display_name'            => 'Bahamian Dollar',
            'numeric_code'            => 44,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BTN' => [
            'display_name'            => 'Ngultrum',
            'numeric_code'            => 64,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BWP' => [
            'display_name'            => 'Pula',
            'numeric_code'            => 72,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'BYR' => [
            'display_name'            => 'Belarussian Ruble',
            'numeric_code'            => 974,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'BZD' => [
            'display_name'            => 'Belize Dollar',
            'numeric_code'            => 84,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CAD' => [
            'display_name'            => 'Canadian Dollar',
            'numeric_code'            => 124,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CDF' => [
            'display_name'            => 'Congolese Franc',
            'numeric_code'            => 976,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CHE' => [
            'display_name'            => 'WIR Euro',
            'numeric_code'            => 947,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CHF' => [
            'display_name'            => 'Swiss Franc',
            'numeric_code'            => 756,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CHW' => [
            'display_name'            => 'WIR Franc',
            'numeric_code'            => 948,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CLF' => [
            'display_name'            => 'Unidades de fomento',
            'numeric_code'            => 990,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'CLP' => [
            'display_name'            => 'Chilean Peso',
            'numeric_code'            => 152,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'CNY' => [
            'display_name'            => 'Yuan Renminbi',
            'numeric_code'            => 156,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'COP' => [
            'display_name'            => 'Colombian Peso',
            'numeric_code'            => 170,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'COU' => [
            'display_name'            => 'Unidad de Valor Real',
            'numeric_code'            => 970,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CRC' => [
            'display_name'            => 'Costa Rican Colon',
            'numeric_code'            => 188,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CUC' => [
            'display_name'            => 'Peso Convertible',
            'numeric_code'            => 931,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CUP' => [
            'display_name'            => 'Cuban Peso',
            'numeric_code'            => 192,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CVE' => [
            'display_name'            => 'Cape Verde Escudo',
            'numeric_code'            => 132,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'CZK' => [
            'display_name'            => 'Czech Koruna',
            'numeric_code'            => 203,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'DJF' => [
            'display_name'            => 'Djibouti Franc',
            'numeric_code'            => 262,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'DKK' => [
            'display_name'            => 'Danish Krone',
            'numeric_code'            => 208,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'DOP' => [
            'display_name'            => 'Dominican Peso',
            'numeric_code'            => 214,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'DZD' => [
            'display_name'            => 'Algerian Dinar',
            'numeric_code'            => 12,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'EGP' => [
            'display_name'            => 'Egyptian Pound',
            'numeric_code'            => 818,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ERN' => [
            'display_name'            => 'Nakfa',
            'numeric_code'            => 232,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ETB' => [
            'display_name'            => 'Ethiopian Birr',
            'numeric_code'            => 230,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'EUR' => [
            'display_name'            => 'Euro',
            'numeric_code'            => 978,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'FJD' => [
            'display_name'            => 'Fiji Dollar',
            'numeric_code'            => 242,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'FKP' => [
            'display_name'            => 'Falkland Islands Pound',
            'numeric_code'            => 238,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'GBP' => [
            'display_name'            => 'Pound Sterling',
            'numeric_code'            => 826,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'GEL' => [
            'display_name'            => 'Lari',
            'numeric_code'            => 981,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'GHS' => [
            'display_name'            => 'Ghana Cedi',
            'numeric_code'            => 936,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'GIP' => [
            'display_name'            => 'Gibraltar Pound',
            'numeric_code'            => 292,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'GMD' => [
            'display_name'            => 'Dalasi',
            'numeric_code'            => 270,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'GNF' => [
            'display_name'            => 'Guinea Franc',
            'numeric_code'            => 324,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'GTQ' => [
            'display_name'            => 'Quetzal',
            'numeric_code'            => 320,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'GYD' => [
            'display_name'            => 'Guyana Dollar',
            'numeric_code'            => 328,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'HKD' => [
            'display_name'            => 'Hong Kong Dollar',
            'numeric_code'            => 344,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'HNL' => [
            'display_name'            => 'Lempira',
            'numeric_code'            => 340,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'HRK' => [
            'display_name'            => 'Croatian Kuna',
            'numeric_code'            => 191,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'HTG' => [
            'display_name'            => 'Gourde',
            'numeric_code'            => 332,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'HUF' => [
            'display_name'            => 'Forint',
            'numeric_code'            => 348,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'IDR' => [
            'display_name'            => 'Rupiah',
            'numeric_code'            => 360,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ILS' => [
            'display_name'            => 'New Israeli Sheqel',
            'numeric_code'            => 376,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'INR' => [
            'display_name'            => 'Indian Rupee',
            'numeric_code'            => 356,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'IQD' => [
            'display_name'            => 'Iraqi Dinar',
            'numeric_code'            => 368,
            'default_fraction_digits' => 3,
            'sub_unit'                => 1000,
        ],
        'IRR' => [
            'display_name'            => 'Iranian Rial',
            'numeric_code'            => 364,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ISK' => [
            'display_name'            => 'Iceland Krona',
            'numeric_code'            => 352,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'JMD' => [
            'display_name'            => 'Jamaican Dollar',
            'numeric_code'            => 388,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'JOD' => [
            'display_name'            => 'Jordanian Dinar',
            'numeric_code'            => 400,
            'default_fraction_digits' => 3,
            'sub_unit'                => 100,
        ],
        'JPY' => [
            'display_name'            => 'Yen',
            'numeric_code'            => 392,
            'default_fraction_digits' => 0,
            'sub_unit'                => 1,
        ],
        'KES' => [
            'display_name'            => 'Kenyan Shilling',
            'numeric_code'            => 404,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'KGS' => [
            'display_name'            => 'Som',
            'numeric_code'            => 417,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'KHR' => [
            'display_name'            => 'Riel',
            'numeric_code'            => 116,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'KMF' => [
            'display_name'            => 'Comoro Franc',
            'numeric_code'            => 174,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'KPW' => [
            'display_name'            => 'North Korean Won',
            'numeric_code'            => 408,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'KRW' => [
            'display_name'            => 'Won',
            'numeric_code'            => 410,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'KWD' => [
            'display_name'            => 'Kuwaiti Dinar',
            'numeric_code'            => 414,
            'default_fraction_digits' => 3,
            'sub_unit'                => 1000,
        ],
        'KYD' => [
            'display_name'            => 'Cayman Islands Dollar',
            'numeric_code'            => 136,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'KZT' => [
            'display_name'            => 'Tenge',
            'numeric_code'            => 398,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'LAK' => [
            'display_name'            => 'Kip',
            'numeric_code'            => 418,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'LBP' => [
            'display_name'            => 'Lebanese Pound',
            'numeric_code'            => 422,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'LKR' => [
            'display_name'            => 'Sri Lanka Rupee',
            'numeric_code'            => 144,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'LRD' => [
            'display_name'            => 'Liberian Dollar',
            'numeric_code'            => 430,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'LSL' => [
            'display_name'            => 'Loti',
            'numeric_code'            => 426,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'LTL' => [
            'display_name'            => 'Lithuanian Litas',
            'numeric_code'            => 440,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'LVL' => [
            'display_name'            => 'Latvian Lats',
            'numeric_code'            => 428,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'LYD' => [
            'display_name'            => 'Libyan Dinar',
            'numeric_code'            => 434,
            'default_fraction_digits' => 3,
            'sub_unit'                => 1000,
        ],
        'MAD' => [
            'display_name'            => 'Moroccan Dirham',
            'numeric_code'            => 504,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MDL' => [
            'display_name'            => 'Moldovan Leu',
            'numeric_code'            => 498,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MGA' => [
            'display_name'            => 'Malagasy Ariary',
            'numeric_code'            => 969,
            'default_fraction_digits' => 2,
            'sub_unit'                => 5,
        ],
        'MKD' => [
            'display_name'            => 'Denar',
            'numeric_code'            => 807,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MMK' => [
            'display_name'            => 'Kyat',
            'numeric_code'            => 104,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MNT' => [
            'display_name'            => 'Tugrik',
            'numeric_code'            => 496,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MOP' => [
            'display_name'            => 'Pataca',
            'numeric_code'            => 446,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MRO' => [
            'display_name'            => 'Ouguiya',
            'numeric_code'            => 478,
            'default_fraction_digits' => 2,
            'sub_unit'                => 5,
        ],
        'MUR' => [
            'display_name'            => 'Mauritius Rupee',
            'numeric_code'            => 480,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MVR' => [
            'display_name'            => 'Rufiyaa',
            'numeric_code'            => 462,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MWK' => [
            'display_name'            => 'Kwacha',
            'numeric_code'            => 454,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MXN' => [
            'display_name'            => 'Mexican Peso',
            'numeric_code'            => 484,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MXV' => [
            'display_name'            => 'Mexican Unidad de Inversion (UDI)',
            'numeric_code'            => 979,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MYR' => [
            'display_name'            => 'Malaysian Ringgit',
            'numeric_code'            => 458,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'MZN' => [
            'display_name'            => 'Mozambique Metical',
            'numeric_code'            => 943,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'NAD' => [
            'display_name'            => 'Namibia Dollar',
            'numeric_code'            => 516,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'NGN' => [
            'display_name'            => 'Naira',
            'numeric_code'            => 566,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'NIO' => [
            'display_name'            => 'Cordoba Oro',
            'numeric_code'            => 558,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'NOK' => [
            'display_name'            => 'Norwegian Krone',
            'numeric_code'            => 578,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'NPR' => [
            'display_name'            => 'Nepalese Rupee',
            'numeric_code'            => 524,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'NZD' => [
            'display_name'            => 'New Zealand Dollar',
            'numeric_code'            => 554,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'OMR' => [
            'display_name'            => 'Rial Omani',
            'numeric_code'            => 512,
            'default_fraction_digits' => 3,
            'sub_unit'                => 1000,
        ],
        'PAB' => [
            'display_name'            => 'Balboa',
            'numeric_code'            => 590,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'PEN' => [
            'display_name'            => 'Nuevo Sol',
            'numeric_code'            => 604,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'PGK' => [
            'display_name'            => 'Kina',
            'numeric_code'            => 598,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'PHP' => [
            'display_name'            => 'Philippine Peso',
            'numeric_code'            => 608,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'PKR' => [
            'display_name'            => 'Pakistan Rupee',
            'numeric_code'            => 586,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'PLN' => [
            'display_name'            => 'Zloty',
            'numeric_code'            => 985,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'PYG' => [
            'display_name'            => 'Guarani',
            'numeric_code'            => 600,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'QAR' => [
            'display_name'            => 'Qatari Rial',
            'numeric_code'            => 634,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'RON' => [
            'display_name'            => 'New Romanian Leu',
            'numeric_code'            => 946,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'RSD' => [
            'display_name'            => 'Serbian Dinar',
            'numeric_code'            => 941,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'RUB' => [
            'display_name'            => 'Russian Ruble',
            'numeric_code'            => 643,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'RWF' => [
            'display_name'            => 'Rwanda Franc',
            'numeric_code'            => 646,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'SAR' => [
            'display_name'            => 'Saudi Riyal',
            'numeric_code'            => 682,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SBD' => [
            'display_name'            => 'Solomon Islands Dollar',
            'numeric_code'            => 90,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SCR' => [
            'display_name'            => 'Seychelles Rupee',
            'numeric_code'            => 690,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SDG' => [
            'display_name'            => 'Sudanese Pound',
            'numeric_code'            => 938,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SEK' => [
            'display_name'            => 'Swedish Krona',
            'numeric_code'            => 752,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SGD' => [
            'display_name'            => 'Singapore Dollar',
            'numeric_code'            => 702,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SHP' => [
            'display_name'            => 'Saint Helena Pound',
            'numeric_code'            => 654,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SLL' => [
            'display_name'            => 'Leone',
            'numeric_code'            => 694,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SOS' => [
            'display_name'            => 'Somali Shilling',
            'numeric_code'            => 706,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SRD' => [
            'display_name'            => 'Surinam Dollar',
            'numeric_code'            => 968,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SSP' => [
            'display_name'            => 'South Sudanese Pound',
            'numeric_code'            => 728,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'STD' => [
            'display_name'            => 'Dobra',
            'numeric_code'            => 678,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SVC' => [
            'display_name'            => 'El Salvador Colon',
            'numeric_code'            => 222,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SYP' => [
            'display_name'            => 'Syrian Pound',
            'numeric_code'            => 760,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'SZL' => [
            'display_name'            => 'Lilangeni',
            'numeric_code'            => 748,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'THB' => [
            'display_name'            => 'Baht',
            'numeric_code'            => 764,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'TJS' => [
            'display_name'            => 'Somoni',
            'numeric_code'            => 972,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'TMT' => [
            'display_name'            => 'Turkmenistan New Manat',
            'numeric_code'            => 934,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'TND' => [
            'display_name'            => 'Tunisian Dinar',
            'numeric_code'            => 788,
            'default_fraction_digits' => 3,
            'sub_unit'                => 1000,
        ],
        'TOP' => [
            'display_name'            => 'Pa’anga',
            'numeric_code'            => 776,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'TRY' => [
            'display_name'            => 'Turkish Lira',
            'numeric_code'            => 949,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'TTD' => [
            'display_name'            => 'Trinidad and Tobago Dollar',
            'numeric_code'            => 780,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'TWD' => [
            'display_name'            => 'New Taiwan Dollar',
            'numeric_code'            => 901,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'TZS' => [
            'display_name'            => 'Tanzanian Shilling',
            'numeric_code'            => 834,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'UAH' => [
            'display_name'            => 'Hryvnia',
            'numeric_code'            => 980,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'UGX' => [
            'display_name'            => 'Uganda Shilling',
            'numeric_code'            => 800,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'USD' => [
            'display_name'            => 'US Dollar',
            'numeric_code'            => 840,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'USN' => [
            'display_name'            => 'US Dollar (Next day)',
            'numeric_code'            => 997,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'USS' => [
            'display_name'            => 'US Dollar (Same day)',
            'numeric_code'            => 998,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'UYI' => [
            'display_name'            => 'Uruguay Peso en Unidades Indexadas (URUIURUI)',
            'numeric_code'            => 940,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'UYU' => [
            'display_name'            => 'Peso Uruguayo',
            'numeric_code'            => 858,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'UZS' => [
            'display_name'            => 'Uzbekistan Sum',
            'numeric_code'            => 860,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'VEF' => [
            'display_name'            => 'Bolivar',
            'numeric_code'            => 937,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'VND' => [
            'display_name'            => 'Dong',
            'numeric_code'            => 704,
            'default_fraction_digits' => 0,
            'sub_unit'                => 10,
        ],
        'VUV' => [
            'display_name'            => 'Vatu',
            'numeric_code'            => 548,
            'default_fraction_digits' => 0,
            'sub_unit'                => 1,
        ],
        'WST' => [
            'display_name'            => 'Tala',
            'numeric_code'            => 882,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'XAF' => [
            'display_name'            => 'CFA Franc BEAC',
            'numeric_code'            => 950,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XAG' => [
            'display_name'            => 'Silver',
            'numeric_code'            => 961,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XAU' => [
            'display_name'            => 'Gold',
            'numeric_code'            => 959,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XBA' => [
            'display_name'            => 'Bond Markets Unit European Composite Unit (EURCO)',
            'numeric_code'            => 955,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XBB' => [
            'display_name'            => 'Bond Markets Unit European Monetary Unit (E.M.U.-6)',
            'numeric_code'            => 956,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XBC' => [
            'display_name'            => 'Bond Markets Unit European Unit of Account 9 (E.U.A.-9)',
            'numeric_code'            => 957,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XBD' => [
            'display_name'            => 'Bond Markets Unit European Unit of Account 17 (E.U.A.-17)',
            'numeric_code'            => 958,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XCD' => [
            'display_name'            => 'East Caribbean Dollar',
            'numeric_code'            => 951,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'XDR' => [
            'display_name'            => 'SDR (Special Drawing Right)',
            'numeric_code'            => 960,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XFU' => [
            'display_name'            => 'UIC-Franc',
            'numeric_code'            => 958,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XOF' => [
            'display_name'            => 'CFA Franc BCEAO',
            'numeric_code'            => 952,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XPD' => [
            'display_name'            => 'Palladium',
            'numeric_code'            => 964,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XPF' => [
            'display_name'            => 'CFP Franc',
            'numeric_code'            => 953,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XPT' => [
            'display_name'            => 'Platinum',
            'numeric_code'            => 962,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XSU' => [
            'display_name'            => 'Sucre',
            'numeric_code'            => 994,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XTS' => [
            'display_name'            => 'Codes specifically reserved for testing purposes',
            'numeric_code'            => 963,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XUA' => [
            'display_name'            => 'ADB Unit of Account',
            'numeric_code'            => 965,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'XXX' => [
            'display_name'            => 'The codes assigned for transactions where no currency is involved',
            'numeric_code'            => 999,
            'default_fraction_digits' => 0,
            'sub_unit'                => 100,
        ],
        'YER' => [
            'display_name'            => 'Yemeni Rial',
            'numeric_code'            => 886,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ZAR' => [
            'display_name'            => 'Rand',
            'numeric_code'            => 710,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ZMW' => [
            'display_name'            => 'Zambian Kwacha',
            'numeric_code'            => 967,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
        'ZWL' => [
            'display_name'            => 'Zimbabwe Dollar',
            'numeric_code'            => 932,
            'default_fraction_digits' => 2,
            'sub_unit'                => 100,
        ],
    ];
    //endregion

    /**
     * @return array
     */
    public static function getCurrencies() : array
    {
        return self::$currencies;
    }

    /**
     * @return array
     */
    public static function getNameMap() : array
    {
        $map = [];

        foreach (self::$currencies as $code => $data) {
            $map[$code] = $code . ' (' . $data['display_name'] . ')';
        }

        ksort($map, SORT_STRING);

        return $map;
    }

    /**
     * Returns the ISO 4217 currency code of this currency.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->getValue();
    }

    /**
     * Returns the default number of fraction digits used with this
     * currency.
     *
     * @return int
     */
    public function getDefaultFractionDigits() : int
    {
        return self::$currencies[$this->getValue()]['default_fraction_digits'];
    }

    /**
     * Returns the name that is suitable for displaying this currency.
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return self::$currencies[$this->getValue()]['display_name'];
    }

    /**
     * Returns the ISO 4217 numeric code of this currency.
     *
     * @return int
     */
    public function getNumericCode() : int
    {
        return self::$currencies[$this->getValue()]['numeric_code'];
    }

    /**
     * Returns the ISO 4217 numeric code of this currency.
     *
     * @return int
     */
    public function getSubUnit() : int
    {
        return self::$currencies[$this->getValue()]['sub_unit'];
    }

    /**
     * Defines the type of the options contained within the enum.
     *
     * @param PropertyTypeDefiner $values
     *
     * @return void
     */
    protected function defineEnumValues(PropertyTypeDefiner $values)
    {
        $values->asString();
    }
}
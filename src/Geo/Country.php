<?php declare(strict_types=1);

namespace Dms\Common\Structure\Geo;

use Dms\Core\Exception\InvalidArgumentException;
use Dms\Core\Model\Object\Enum;
use Dms\Core\Model\Object\PropertyTypeDefiner;
use League\ISO3166\ISO3166;

/**
 * The country enum.
 *
 * The values of the this enum are options from
 * the ISO 3166-1 alpha-2 country codes.
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class Country extends Enum
{
    const AF = 'AF';
    const AX = 'AX';
    const AL = 'AL';
    const DZ = 'DZ';
    const AS = 'AS';
    const AD = 'AD';
    const AO = 'AO';
    const AI = 'AI';
    const AQ = 'AQ';
    const AG = 'AG';
    const AR = 'AR';
    const AM = 'AM';
    const AW = 'AW';
    const AU = 'AU';
    const AT = 'AT';
    const AZ = 'AZ';
    const BS = 'BS';
    const BH = 'BH';
    const BD = 'BD';
    const BB = 'BB';
    const BY = 'BY';
    const BE = 'BE';
    const BZ = 'BZ';
    const BJ = 'BJ';
    const BM = 'BM';
    const BT = 'BT';
    const BO = 'BO';
    const BQ = 'BQ';
    const BA = 'BA';
    const BW = 'BW';
    const BV = 'BV';
    const BR = 'BR';
    const IO = 'IO';
    const BN = 'BN';
    const BG = 'BG';
    const BF = 'BF';
    const BI = 'BI';
    const CV = 'CV';
    const KH = 'KH';
    const CM = 'CM';
    const CA = 'CA';
    const KY = 'KY';
    const CF = 'CF';
    const TD = 'TD';
    const CL = 'CL';
    const CN = 'CN';
    const CX = 'CX';
    const CC = 'CC';
    const CO = 'CO';
    const KM = 'KM';
    const CG = 'CG';
    const CD = 'CD';
    const CK = 'CK';
    const CR = 'CR';
    const CI = 'CI';
    const HR = 'HR';
    const CU = 'CU';
    const CW = 'CW';
    const CY = 'CY';
    const CZ = 'CZ';
    const DK = 'DK';
    const DJ = 'DJ';
    const DM = 'DM';
    const DO = 'DO';
    const EC = 'EC';
    const EG = 'EG';
    const SV = 'SV';
    const GQ = 'GQ';
    const ER = 'ER';
    const EE = 'EE';
    const ET = 'ET';
    const FK = 'FK';
    const FO = 'FO';
    const FJ = 'FJ';
    const FI = 'FI';
    const FR = 'FR';
    const GF = 'GF';
    const PF = 'PF';
    const TF = 'TF';
    const GA = 'GA';
    const GM = 'GM';
    const GE = 'GE';
    const DE = 'DE';
    const GH = 'GH';
    const GI = 'GI';
    const GR = 'GR';
    const GL = 'GL';
    const GD = 'GD';
    const GP = 'GP';
    const GU = 'GU';
    const GT = 'GT';
    const GG = 'GG';
    const GN = 'GN';
    const GW = 'GW';
    const GY = 'GY';
    const HT = 'HT';
    const HM = 'HM';
    const VA = 'VA';
    const HN = 'HN';
    const HK = 'HK';
    const HU = 'HU';
    const IS = 'IS';
    const IN = 'IN';
    const ID = 'ID';
    const IR = 'IR';
    const IQ = 'IQ';
    const IE = 'IE';
    const IM = 'IM';
    const IL = 'IL';
    const IT = 'IT';
    const JM = 'JM';
    const JP = 'JP';
    const JE = 'JE';
    const JO = 'JO';
    const KZ = 'KZ';
    const KE = 'KE';
    const KI = 'KI';
    const KP = 'KP';
    const KR = 'KR';
    const KW = 'KW';
    const KG = 'KG';
    const LA = 'LA';
    const LV = 'LV';
    const LB = 'LB';
    const LS = 'LS';
    const LR = 'LR';
    const LY = 'LY';
    const LI = 'LI';
    const LT = 'LT';
    const LU = 'LU';
    const MO = 'MO';
    const MK = 'MK';
    const MG = 'MG';
    const MW = 'MW';
    const MY = 'MY';
    const MV = 'MV';
    const ML = 'ML';
    const MT = 'MT';
    const MH = 'MH';
    const MQ = 'MQ';
    const MR = 'MR';
    const MU = 'MU';
    const YT = 'YT';
    const MX = 'MX';
    const FM = 'FM';
    const MD = 'MD';
    const MC = 'MC';
    const MN = 'MN';
    const ME = 'ME';
    const MS = 'MS';
    const MA = 'MA';
    const MZ = 'MZ';
    const MM = 'MM';
    const NA = 'NA';
    const NR = 'NR';
    const NP = 'NP';
    const NL = 'NL';
    const NC = 'NC';
    const NZ = 'NZ';
    const NI = 'NI';
    const NE = 'NE';
    const NG = 'NG';
    const NU = 'NU';
    const NF = 'NF';
    const MP = 'MP';
    const NO = 'NO';
    const OM = 'OM';
    const PK = 'PK';
    const PW = 'PW';
    const PS = 'PS';
    const PA = 'PA';
    const PG = 'PG';
    const PY = 'PY';
    const PE = 'PE';
    const PH = 'PH';
    const PN = 'PN';
    const PL = 'PL';
    const PT = 'PT';
    const PR = 'PR';
    const QA = 'QA';
    const RE = 'RE';
    const RO = 'RO';
    const RU = 'RU';
    const RW = 'RW';
    const BL = 'BL';
    const SH = 'SH';
    const KN = 'KN';
    const LC = 'LC';
    const MF = 'MF';
    const PM = 'PM';
    const VC = 'VC';
    const WS = 'WS';
    const SM = 'SM';
    const ST = 'ST';
    const SA = 'SA';
    const SN = 'SN';
    const RS = 'RS';
    const SC = 'SC';
    const SL = 'SL';
    const SG = 'SG';
    const SX = 'SX';
    const SK = 'SK';
    const SI = 'SI';
    const SB = 'SB';
    const SO = 'SO';
    const ZA = 'ZA';
    const GS = 'GS';
    const SS = 'SS';
    const ES = 'ES';
    const LK = 'LK';
    const SD = 'SD';
    const SR = 'SR';
    const SJ = 'SJ';
    const SZ = 'SZ';
    const SE = 'SE';
    const CH = 'CH';
    const SY = 'SY';
    const TW = 'TW';
    const TJ = 'TJ';
    const TZ = 'TZ';
    const TH = 'TH';
    const TL = 'TL';
    const TG = 'TG';
    const TK = 'TK';
    const TO = 'TO';
    const TT = 'TT';
    const TN = 'TN';
    const TR = 'TR';
    const TM = 'TM';
    const TC = 'TC';
    const TV = 'TV';
    const UG = 'UG';
    const UA = 'UA';
    const AE = 'AE';
    const GB = 'GB';
    const US = 'US';
    const UM = 'UM';
    const UY = 'UY';
    const UZ = 'UZ';
    const VU = 'VU';
    const VE = 'VE';
    const VN = 'VN';
    const VG = 'VG';
    const VI = 'VI';
    const WF = 'WF';
    const EH = 'EH';
    const YE = 'YE';
    const ZM = 'ZM';
    const ZW = 'ZW';

    /**
     * @var ISO3166|null
     */
    protected static $loader;

    /**
     * @var string[]|null
     */
    protected static $nameMap;

    /**
     * @var string[]|null
     */
    protected static $alpha2CodeMap;

    /**
     * @var array[]
     */
    protected static $countries = [];

    /**
     * @return ISO3166
     */
    protected static function getLoader(): ISO3166
    {
        if (!self::$loader) {
            self::$loader = new ISO3166();
        }

        return self::$loader;
    }

    /**
     * Builds a country enum from the supplied country short name.
     *
     * @param string $countryName
     *
     * @return Country
     * @throws InvalidArgumentException
     */
    public static function fromName(string $countryName): Country
    {
        self::getNameMap();

        if (!isset(self::$alpha2CodeMap[$countryName])) {
            throw InvalidArgumentException::format(
                'Invalid country short name supplied to %s: country \'%s\' is not a valid option',
                __METHOD__, $countryName
            );
        }

        return new self(self::$alpha2CodeMap[$countryName]);
    }

    /**
     * Builds a country enum from the supplied country short name.
     *
     * @param string $countryShortName
     *
     * @return Country
     * @throws InvalidArgumentException
     * @deprecated use fromName()
     */
    public static function fromShortName(string $countryShortName): Country
    {
        return self::fromName($countryShortName);
    }

    /**
     * Returns an array the country short names indexed by
     * their respective ISO 3166-1 alpha-2 country code.
     *
     * @return string[]
     */
    public static function getNameMap(): array
    {
        if (self::$nameMap === null) {
            self::$nameMap = [];
            $countries     = self::getLoader()->all();

            foreach ($countries as $country) {
                self::$nameMap[$country['alpha2']] = $country['name'];
            }

            self::$alpha2CodeMap = array_flip(self::$nameMap);
        }

        return self::$nameMap;
    }

    /**
     * @return array
     */
    protected function getCountryData(): array
    {
        $countryCode = $this->getValue();

        if (!isset(self::$countries[$countryCode])) {
            self::$countries[$countryCode] = self::getLoader()->alpha2($countryCode);
        }

        return self::$countries[$countryCode];
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

    /**
     * Returns the ISO 3166-1 alpha-2 code.
     *
     * @return string The alpha-2 code.
     */
    public function getAlpha2Code(): string
    {
        return $this->getCountryData()['alpha2'];
    }

    /**
     * Returns the ISO 3166-1 alpha-3 code.
     *
     * @return string The alpha-3 code.
     */
    public function getAlpha3Code(): string
    {
        return $this->getCountryData()['alpha3'];
    }

    /**
     * Returns the ISO 3166-1 English name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getCountryData()['name'];
    }

    /**
     * Returns the ISO 3166-1 numeric code.
     *
     * @return integer The numeric code.
     */
    public function getNumericCode(): int
    {
        return (int)$this->getCountryData()['numeric'];
    }

    /**
     * Returns the ISO 3166-1 English long name or falls back to the short name
     * if it is null.
     *
     * @return string
     * @deprecated Use getName()
     */
    public function getLongNameWithFallback(): string
    {
        return $this->getLongName() ?? $this->getShortName();
    }

    /**
     * Returns the ISO 3166-1 English long name.
     *
     * @return string|null If the long name is available, it is returned. If the
     *                long name is not available, nothing (`null`) is returned.
     * @deprecated Use getName()
     */
    public function getLongName()
    {
        return $this->getCountryData()['name'];
    }

    /**
     * Returns the ISO 3166-1 English short name.
     *
     * @return string The short name.
     * @deprecated Use getName
     */
    public function getShortName(): string
    {
        return $this->getCountryData()['name'];
    }
}
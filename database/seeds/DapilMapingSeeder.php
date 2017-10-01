<?php

use App\Models\DapilMapping;
use App\Models\District;
use App\Models\Village;
use Illuminate\Database\Seeder;

class DapilMapingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DapilMapping::truncate();

        $rawDapils = array(
			array('nama_desa' => 'PUSPASARI','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'CITEUREUP','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'LEUWINUTUG','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'TAJUR','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'SANJA','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'KR. ASEM TIMUR','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'TARIKOLOT','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'GUNUNGSARI','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'TANGKIL','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'SUKAHATI','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'HAMBALANG','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'PASIRMUKTI','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'KARANG ASEM BARAT','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'PUSPANEGARA','id_dapil' => '1','nama_kecamatan' => 'CITEUREUP'),
			array('nama_desa' => 'CIRIMEKAR','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'CIBINONG','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'CIRIUNG','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'PABUARAN','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'HARAPAN JAYA','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'PONDOK RAJEG','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'KARADENAN','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'SUKAHATI','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'NANGGEWER','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'NANGGEWER MEKAR','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'PAKANSARI','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'TENGAH','id_dapil' => '1','nama_kecamatan' => 'CIBINONG'),
			array('nama_desa' => 'GUNUNG GEULIS','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'CILEBUT TIMUR','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'CILEBUT BARAT','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'CIBANON','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'NAGRAK','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'SUKATANI','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'SUKARAJA','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'CIKEAS','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'PASIR JAMBU','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'CIMANDALA','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'CIUJUNG','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'CADAS NGAMPAR','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'PASIRLAJA DEJA','id_dapil' => '1','nama_kecamatan' => 'SUKARAJA'),
			array('nama_desa' => 'CIJAYANTI','id_dapil' => '1','nama_kecamatan' => 'BABAKAN MADANG'),
			array('nama_desa' => 'SUMUR BATU','id_dapil' => '1','nama_kecamatan' => 'BABAKAN MADANG'),
			array('nama_desa' => 'SENTUL','id_dapil' => '1','nama_kecamatan' => 'BABAKAN MADANG'),
			array('nama_desa' => 'KARANG TENGAH','id_dapil' => '1','nama_kecamatan' => 'BABAKAN MADANG'),
			array('nama_desa' => 'CIPAMBUAN','id_dapil' => '1','nama_kecamatan' => 'BABAKAN MADANG'),
			array('nama_desa' => 'KADU MANGGU','id_dapil' => '1','nama_kecamatan' => 'BABAKAN MADANG'),
			array('nama_desa' => 'CITARINGGUL
			','id_dapil' => '1','nama_kecamatan' => 'BABAKAN MADANG'),
			array('nama_desa' => 'BABAKAN MADANG
			','id_dapil' => '1','nama_kecamatan' => 'BABAKAN MADANG'),
			array('nama_desa' => 'BOJONG KONENG
			','id_dapil' => '1','nama_kecamatan' => 'BABAKAN MADANG'),
			array('nama_desa' => 'KLAPANUNGGAL
			','id_dapil' => '1','nama_kecamatan' => 'KLAPA NUNGGAL (KELAPA NUNGGAL)'),
			array('nama_desa' => 'BOJONG
			','id_dapil' => '1','nama_kecamatan' => 'KLAPA NUNGGAL (KELAPA NUNGGAL)'),
			array('nama_desa' => 'NAMBO
			','id_dapil' => '1','nama_kecamatan' => 'KLAPA NUNGGAL (KELAPA NUNGGAL)'),
			array('nama_desa' => 'LULUT
			','id_dapil' => '1','nama_kecamatan' => 'KLAPA NUNGGAL (KELAPA NUNGGAL)'),
			array('nama_desa' => 'CIKAHURIPAN
			','id_dapil' => '1','nama_kecamatan' => 'KLAPA NUNGGAL (KELAPA NUNGGAL)'),
			array('nama_desa' => 'KEMBANG KUNING','id_dapil' => '1','nama_kecamatan' => 'KLAPA NUNGGAL (KELAPA NUNGGAL)'),
			array('nama_desa' => 'BANTARJATI','id_dapil' => '1','nama_kecamatan' => 'KLAPA NUNGGAL (KELAPA NUNGGAL)'),
			array('nama_desa' => 'LEUWI KARET','id_dapil' => '1','nama_kecamatan' => 'KLAPA NUNGGAL (KELAPA NUNGGAL)'),
			array('nama_desa' => 'LIGAR MUKTI','id_dapil' => '1','nama_kecamatan' => 'KLAPA NUNGGAL (KELAPA NUNGGAL)'),
			array('nama_desa' => 'WANAHERANG','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'BOJONGKULUR     ','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'CIANGSANA','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'GUNUNG PUTRI','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'BOJONGNANGKA','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'TLAJUNGUDIK','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'CICADAS','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'CIKEAS UDIK','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'NAGRAK','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'KRANGGAN','id_dapil' => '2','nama_kecamatan' => 'GUNUNG PUTRI'),
			array('nama_desa' => 'SUKAMAJU','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'SIRNAGALIH','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'SINGAJAYA','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'SUKASIRNA','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'SUKANEGARA','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'SUKAMANAH','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'WENINGGALIH','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'CIBODAS','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'JONGGOL','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'BENDUNGAN','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'SINGASARI','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'BALEKAMBANG','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'SUKAJAYA','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'SUKAGALIH','id_dapil' => '2','nama_kecamatan' => 'JONGGOL'),
			array('nama_desa' => 'PASIR ANGIN','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'MEKAR SARI','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'MAMPIR','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'DAYEUH','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'GANDOANG','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'JATISARI','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'CILEUNGSI KIDUL','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'CIPEUCANG','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'SITUSARI','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'CIPENJO','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'LIMUSNUNGGAL','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'CILEUNGSI','id_dapil' => '2','nama_kecamatan' => 'CILEUNGSI'),
			array('nama_desa' => 'KARYA MEKAR','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'BABAKAN RADEN','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'CIKUTAMAHI','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'KUTA MEKAR','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'MEKAR WANGI','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'CARIU','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'BANTAR KUNING','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'SUKAJADI','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'TEGAL PANJANG','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'CIBATU TIGA','id_dapil' => '2','nama_kecamatan' => 'CARIU'),
			array('nama_desa' => 'WARGAJAYA','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'PABUARAN','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'SUKADAMAI','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'SUKAWANGI','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'CIBADAK','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'SUKARESMI','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'SUKAMULYA','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'SUKAHARJA','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'SIRNAJAYA','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'SUKAMAKMUR','id_dapil' => '2','nama_kecamatan' => 'SUKAMAKMUR'),
			array('nama_desa' => 'TANJUNG SARI','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'SELAWANGI','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'TANJUNG RASA','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'ANTAJAYA','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'PASIR TANJUNG','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'CIBADAK','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'SUKARASA','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'SIRNA SARI','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'BUANA JAYA','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'SIRNA RASA','id_dapil' => '2','nama_kecamatan' => 'TANJUNGSARI'),
			array('nama_desa' => 'PASIR MUNCANG','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'CIMANDE HILIR','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'CIDERUM','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'CARINGIN','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'CIHERANG PONDOK','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'CINAGARA','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'CIMANDE','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'PANCAWATI','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'MUARAJAYA','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'PASIR BUNCIR','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'LEMAH DUHUR','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'TANGKIL','id_dapil' => '3','nama_kecamatan' => 'CARINGIN'),
			array('nama_desa' => 'CILEUNGSI','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'CITAPEN','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'CIBEDUG','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'JAMBULUWUK','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'BANJARSARI','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'TELUKPINANG','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'BANJARWARU','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'BENDUNGAN','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'PANDANSARI','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'BOJONG MURNI','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'BANJAR WANGI','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'CIAWI','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'BITUNGSARI','id_dapil' => '3','nama_kecamatan' => 'CIAWI'),
			array('nama_desa' => 'CIGOMBONG','id_dapil' => '3','nama_kecamatan' => 'CIGOMBONG'),
			array('nama_desa' => 'WATESJAYA','id_dapil' => '3','nama_kecamatan' => 'CIGOMBONG'),
			array('nama_desa' => 'CIBURUY','id_dapil' => '3','nama_kecamatan' => 'CIGOMBONG'),
			array('nama_desa' => 'SROGOL','id_dapil' => '3','nama_kecamatan' => 'CIGOMBONG'),
			array('nama_desa' => 'CISALADA','id_dapil' => '3','nama_kecamatan' => 'CIGOMBONG'),
			array('nama_desa' => 'TUGU JAYA','id_dapil' => '3','nama_kecamatan' => 'CIGOMBONG'),
			array('nama_desa' => 'PASIR JAYA','id_dapil' => '3','nama_kecamatan' => 'CIGOMBONG'),
			array('nama_desa' => 'CIBURAYUT','id_dapil' => '3','nama_kecamatan' => 'CIGOMBONG'),
			array('nama_desa' => 'CIADEG','id_dapil' => '3','nama_kecamatan' => 'CIGOMBONG'),
			array('nama_desa' => 'CIJERUK','id_dapil' => '3','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'CIPELANG','id_dapil' => '3','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'WARUNG MENTENG','id_dapil' => '3','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'TAJUR HALANG','id_dapil' => '3','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'CIPICUNG','id_dapil' => '3','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'CIBALUNG','id_dapil' => '3','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'SUKAHARJA','id_dapil' => '3','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'PALASARI','id_dapil' => '3','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'TANJUNGSARI','id_dapil' => '3','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'BATULAYANG','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'JOGJOGAN','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'CIBEUREUM','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'CILEMBER ','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'TUGU UTARA','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'KOPO','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'LEUWIMALANG','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'TUGU SELATAN','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'CITEKO','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'CISARUA','id_dapil' => '3','nama_kecamatan' => 'CISARUA'),
			array('nama_desa' => 'SUKAMAJU','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'KUTA','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'GADOG','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'SUKAKARYA','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'MEGAMENDUNG','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'CIPAYUNG','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'SUKAMANAH','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'SUKAGALIH','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'CIPAYUNG GIRANG
			','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'SUKAMAHI','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'SUKARESMI','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'PASIR ANGIN','id_dapil' => '3','nama_kecamatan' => 'MEGAMENDUNG'),
			array('nama_desa' => 'SUKAMANTRI','id_dapil' => '3','nama_kecamatan' => 'TAMAN SARI'),
			array('nama_desa' => 'SIRNAGALIH','id_dapil' => '3','nama_kecamatan' => 'TAMAN SARI'),
			array('nama_desa' => 'PASIREURIH','id_dapil' => '3','nama_kecamatan' => 'TAMAN SARI'),
			array('nama_desa' => 'TAMANSARI','id_dapil' => '3','nama_kecamatan' => 'TAMAN SARI'),
			array('nama_desa' => 'SUKALUYU','id_dapil' => '3','nama_kecamatan' => 'TAMAN SARI'),
			array('nama_desa' => 'SUKARESMI','id_dapil' => '3','nama_kecamatan' => 'TAMAN SARI'),
			array('nama_desa' => 'SUKAJAYA','id_dapil' => '3','nama_kecamatan' => 'TAMAN SARI'),
			array('nama_desa' => 'SUKAJADI','id_dapil' => '3','nama_kecamatan' => 'TAMAN SARI'),
			array('nama_desa' => 'CIAMPEA','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'CINANGKA','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'CIHIDEUNG UDIK','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'BOJONG JENGKOL','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'TEGAL WARU','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'CIBUNTU','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'CICADAS','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'CIBADAK','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'BOJONG RANGKAS','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'CIHIDEUNG ILIR','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'CIBANTENG','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'BENTENG
			','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'CIAMPEA UDIK','id_dapil' => '4','nama_kecamatan' => 'CIAMPEA'),
			array('nama_desa' => 'SITU UDIK','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'SITU ILIR','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'CEMPLANG','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'CIBATOK I ','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'CIARUTEN UDIK','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'LUWEUNG KOLOT','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'CIMANGGU I ','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'CIMANGGU II','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'DUKUH','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'CIJUJUNG','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'CIARUTEN ILIR','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'CIBATOK II','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'SUKAMAJU','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'GALUGA','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'GIRIMULYA','id_dapil' => '4','nama_kecamatan' => 'CIBUNGBULANG'),
			array('nama_desa' => 'MEKARJAYA','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'SUKAHARJA','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'PARAKAN','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'CIOMAS','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'PAGELARAN','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'SUKAMAKMUR','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'CIAPUS','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'KOTABATU','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'LALADON','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'CIOMAS RAHAYU','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'PADASUKA','id_dapil' => '4','nama_kecamatan' => 'CIOMAS'),
			array('nama_desa' => 'SUKADAMAI','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'CIHERANG','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'SINARSARI','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'SUKAWENING','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'PETIR','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'PURWASARI','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'CIKARAWANG','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'BABAKAN','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'DRAMAGA','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'NEGLASARI','id_dapil' => '4','nama_kecamatan' => 'DRAMAGA'),
			array('nama_desa' => 'PURWABAKTI','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'CIBUNIAN','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'CIBITUNG WETAN','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'GUNUNG MENYAN','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'GUNUNG BUNDER II','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'PASAREAN','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'CIMAYANG','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'PAMIJAHAN','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'CIBENING','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'GUNUNG BUNDER I','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'CIBITUNG KULON','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'GUNUNG PICUNG','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'CIASIHAN','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'GUNUNG SARI','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'CIASMARA','id_dapil' => '4','nama_kecamatan' => 'PAMIJAHAN'),
			array('nama_desa' => 'TAPOS I
			','id_dapil' => '4','nama_kecamatan' => 'TENJOLAYA'),
			array('nama_desa' => 'TAPOS II','id_dapil' => '4','nama_kecamatan' => 'TENJOLAYA'),
			array('nama_desa' => 'CIBITUNG TENGAH','id_dapil' => '4','nama_kecamatan' => 'TENJOLAYA'),
			array('nama_desa' => 'SETU DAUN
			','id_dapil' => '4','nama_kecamatan' => 'TENJOLAYA'),
			array('nama_desa' => 'CINANGNENG
			','id_dapil' => '4','nama_kecamatan' => 'TENJOLAYA'),
			array('nama_desa' => 'GUNUNG MALANG','id_dapil' => '4','nama_kecamatan' => 'TENJOLAYA'),
			array('nama_desa' => 'GUNUNG MULYA','id_dapil' => '4','nama_kecamatan' => 'TENJOLAYA'),
			array('nama_desa' => 'SUKAMAJU','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'CIGUDEG','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'BUNAR','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'BANYURESMI','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'CINTAMANIK','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'ARGAPURA','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'BANGUNJAYA','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'RENGASJAJAR','id_dapil' => '5','nama_kecamatan' => 'CIJERUK'),
			array('nama_desa' => 'BATUJAJAR','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'WARGAJAYA','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'SUKARAKSA','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'BANYUWANGI','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'BANYUASIH','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'MEKARJAYA','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'TEGAL LEGA','id_dapil' => '5','nama_kecamatan' => 'CIGUDEG'),
			array('nama_desa' => 'CURUG','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'PANGRADIN','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'KALONG SAWAH','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'SIPAK','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'JASINGA','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'KOLEANG','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'CIKOPO MAYAK','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'SETU','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'BARENGKOK','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'BAGOANG','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'PANGAUR','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'PAMAGERSARI','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'JUGALAJAYA','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'TEGAL WANGI','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'NEGALASARI','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'WIRAJAYA','id_dapil' => '5','nama_kecamatan' => 'JASINGA'),
			array('nama_desa' => 'LEUWILIANG','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'PURASARI','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'KARYA SARI','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'PABANGBON','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'KARACAK','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'BARENGKOK','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'LEUWIMEKAR','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'PURASEDA','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'CIBEBER I','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'CIBEBER II','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'KAREHKEL','id_dapil' => '5','nama_kecamatan' => 'LEUWILIANG'),
			array('nama_desa' => 'LEUWISADENG','id_dapil' => '5','nama_kecamatan' => 'LEUWISADENG'),
			array('nama_desa' => 'BABAKAN SADENG','id_dapil' => '5','nama_kecamatan' => 'LEUWISADENG'),
			array('nama_desa' => 'SADENG KOLOT','id_dapil' => '5','nama_kecamatan' => 'LEUWISADENG'),
			array('nama_desa' => 'WANGUN JAYA','id_dapil' => '5','nama_kecamatan' => 'LEUWISADENG'),
			array('nama_desa' => 'KALONG I','id_dapil' => '5','nama_kecamatan' => 'LEUWISADENG'),
			array('nama_desa' => 'KALONG II
			','id_dapil' => '5','nama_kecamatan' => 'LEUWISADENG'),
			array('nama_desa' => 'SADENG','id_dapil' => '5','nama_kecamatan' => 'LEUWISADENG'),
			array('nama_desa' => 'SIBANTENG','id_dapil' => '5','nama_kecamatan' => 'LEUWISADENG'),
			array('nama_desa' => 'MALASARI','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'CURUGBITUNG
			','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'CISARUA','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'BANTARKARET','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'HAMBARO','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'KALONG LIUD','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'NANGGUNG','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'PARAKAN MUNCANG','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'PANGKAL JAYA','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'SUKALUYU','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'BATU TULIS','id_dapil' => '5','nama_kecamatan' => 'NANGGUNG'),
			array('nama_desa' => 'JAGABAYA','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'GOROWONG','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'DAGO','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'PINGKU','id_dapil' => '4','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'CIKUDA','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'PARUNG PANJANG','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'LUMPANG','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'CIBUNAR','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'JAGABITA','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'GINTUNG CILEJET','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'KABASIRAN','id_dapil' => '5','nama_kecamatan' => 'PARUNG PANJANG'),
			array('nama_desa' => 'RUMPIN','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'LEUWIBATU','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'CIDOKOM','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'GOBANG','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'CIBODAS','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'RABAK','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'KAMPUNG SAWAH','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'CIPINANG','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'SUKASARI','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'TAMANSARI','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'KERTA JAYA','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'SUKA MULYA
			','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'MEKAR SARI','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'MEKAR JAYA','id_dapil' => '5','nama_kecamatan' => 'RUMPIN'),
			array('nama_desa' => 'CISARUA','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'KIARASARI
			','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'SUKAJAYA','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'SIPAYUNG','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'CILEUKSA','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'KIARA PANDAK','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'HARKATJAYA','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'SUKAMULIH','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'PASIR MADANG','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'URUG','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'JAYARAHARJA
			','id_dapil' => '5','nama_kecamatan' => 'SUKAJAYA'),
			array('nama_desa' => 'TAPOS
			','id_dapil' => '5','nama_kecamatan' => 'TENJO'),
			array('nama_desa' => 'CIOMAS','id_dapil' => '5','nama_kecamatan' => 'TENJO'),
			array('nama_desa' => 'BATOK','id_dapil' => '5','nama_kecamatan' => 'TENJO'),
			array('nama_desa' => 'BABAKAN
			','id_dapil' => '5','nama_kecamatan' => 'TENJO'),
			array('nama_desa' => 'TENJO
			','id_dapil' => '5','nama_kecamatan' => 'TENJO'),
			array('nama_desa' => 'CILAKU
			','id_dapil' => '5','nama_kecamatan' => 'TENJO'),
			array('nama_desa' => 'SINGABRAJA
			','id_dapil' => '5','nama_kecamatan' => 'TENJO'),
			array('nama_desa' => 'SINGABANGSA
			','id_dapil' => '5','nama_kecamatan' => 'TENJO'),
			array('nama_desa' => 'BOJONG','id_dapil' => '5','nama_kecamatan' => 'TENJO'),
			array('nama_desa' => 'BOJONG BARU
			','id_dapil' => '6','nama_kecamatan' => 'BOJONGGEDE'),
			array('nama_desa' => 'CIMANGGIS
			','id_dapil' => '6','nama_kecamatan' => 'BOJONGGEDE'),
			array('nama_desa' => 'SUSUKAN
			','id_dapil' => '6','nama_kecamatan' => 'BOJONGGEDE'),
			array('nama_desa' => 'RAGAJAYA
			','id_dapil' => '6','nama_kecamatan' => 'BOJONGGEDE'),
			array('nama_desa' => 'KEDUNG WARINGIN
			','id_dapil' => '6','nama_kecamatan' => 'BOJONGGEDE'),
			array('nama_desa' => 'WARINGIN JAYA
			','id_dapil' => '6','nama_kecamatan' => 'BOJONGGEDE'),
			array('nama_desa' => 'PABUARAN
			','id_dapil' => '6','nama_kecamatan' => 'BOJONGGEDE'),
			array('nama_desa' => 'RAWAPANJANG
			','id_dapil' => '6','nama_kecamatan' => 'BOJONGGEDE'),
			array('nama_desa' => 'BOJONGGEDE
			','id_dapil' => '6','nama_kecamatan' => 'BOJONGGEDE'),
			array('nama_desa' => 'PUTATNUTUG
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'CISEENG
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'PARIGIMEKAR
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'CIBENTANG
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'CIBEUTEUNG UDIK
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'DESA KARIHKIL
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'BABAKAN
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'CIHOWE
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'CIBEUTEUNG MUARA
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'KURIPAN
			','id_dapil' => '6','nama_kecamatan' => 'CISEENG'),
			array('nama_desa' => 'CIDOKOM
			','id_dapil' => '6','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'PADURENAN
			','id_dapil' => '6','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'PENGASINAN
			','id_dapil' => '6','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'CURUG
			','id_dapil' => '5','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'GUNUNG SINDUR
			','id_dapil' => '6','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'JAMPANG
			','id_dapil' => '6','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'CIBADUNG
			','id_dapil' => '6','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'CIBINONG
			','id_dapil' => '6','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'RAWAKALONG
			','id_dapil' => '6','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'PABUARAN
			','id_dapil' => '6','nama_kecamatan' => 'GUNUNG SINDUR'),
			array('nama_desa' => 'BOJONG
			','id_dapil' => '6','nama_kecamatan' => 'KEMANG'),
			array('nama_desa' => 'PARAKANJAYA
			','id_dapil' => '6','nama_kecamatan' => 'KEMANG'),
			array('nama_desa' => 'KEMANG
			','id_dapil' => '6','nama_kecamatan' => 'KEMANG'),
			array('nama_desa' => 'PABUARAN
			','id_dapil' => '6','nama_kecamatan' => 'KEMANG'),
			array('nama_desa' => 'SEMPLAK BARAT
			','id_dapil' => '6','nama_kecamatan' => 'KEMANG'),
			array('nama_desa' => 'JAMPANG
			','id_dapil' => '6','nama_kecamatan' => 'KEMANG'),
			array('nama_desa' => 'PONDOK UDIK
			','id_dapil' => '6','nama_kecamatan' => 'KEMANG'),
			array('nama_desa' => 'TEGAL
			','id_dapil' => '6','nama_kecamatan' => 'KEMANG'),
			array('nama_desa' => 'ATANG SENJAYA
			','id_dapil' => '6','nama_kecamatan' => 'KEMANG'),
			array('nama_desa' => 'PARUNG
			','id_dapil' => '6','nama_kecamatan' => 'PARUNG'),
			array('nama_desa' => 'IWUL
			','id_dapil' => '6','nama_kecamatan' => 'PARUNG'),
			array('nama_desa' => 'BOJONGSEMPU
			','id_dapil' => '6','nama_kecamatan' => 'PARUNG'),
			array('nama_desa' => 'WARU
			','id_dapil' => '6','nama_kecamatan' => 'PARUNG'),
			array('nama_desa' => 'COGREG
			','id_dapil' => '6','nama_kecamatan' => 'PARUNG'),
			array('nama_desa' => 'PAMEGARSARI
			','id_dapil' => '6','nama_kecamatan' => 'PARUNG'),
			array('nama_desa' => 'WARUJAYA
			','id_dapil' => '6','nama_kecamatan' => 'PARUNG'),
			array('nama_desa' => 'BOJONG INDAH
			','id_dapil' => '6','nama_kecamatan' => 'PARUNG'),
			array('nama_desa' => 'JABON MEKAR
			','id_dapil' => '6','nama_kecamatan' => 'PARUNG'),
			array('nama_desa' => 'BANTARJAYA
			','id_dapil' => '6','nama_kecamatan' => 'RANCA BUNGUR'),
			array('nama_desa' => 'BANTARSARI
			','id_dapil' => '6','nama_kecamatan' => 'RANCA BUNGUR'),
			array('nama_desa' => 'PASIR GAOK
			','id_dapil' => '6','nama_kecamatan' => 'RANCA BUNGUR'),
			array('nama_desa' => 'RANCA BUNGUR
			','id_dapil' => '6','nama_kecamatan' => 'RANCA BUNGUR'),
			array('nama_desa' => 'MEKARSARI
			','id_dapil' => '6','nama_kecamatan' => 'RANCA BUNGUR'),
			array('nama_desa' => 'CANDALI
			','id_dapil' => '6','nama_kecamatan' => 'RANCA BUNGUR'),
			array('nama_desa' => 'CIMULANG
			','id_dapil' => '6','nama_kecamatan' => 'RANCA BUNGUR'),
			array('nama_desa' => 'TAJURHALANG
			','id_dapil' => '6','nama_kecamatan' => 'TAJURHALANG'),
			array('nama_desa' => 'CITAYAM
			','id_dapil' => '6','nama_kecamatan' => 'TAJURHALANG'),
			array('nama_desa' => 'SASAK PANJANG
			','id_dapil' => '6','nama_kecamatan' => 'TAJURHALANG'),
			array('nama_desa' => 'NANGGERANG
			','id_dapil' => '6','nama_kecamatan' => 'TAJURHALANG'),
			array('nama_desa' => 'SUKMAJAYA
			','id_dapil' => '6','nama_kecamatan' => 'TAJURHALANG'),
			array('nama_desa' => 'TONJONG
			','id_dapil' => '6','nama_kecamatan' => 'TAJURHALANG'),
			array('nama_desa' => 'KALI SUREN
			','id_dapil' => '6','nama_kecamatan' => 'TAJURHALANG')
		);
	
		foreach ($rawDapils as $key => $desa) {
			$villageName = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($desa['nama_desa']))))));
			
			$findVillage = Village::where('name', 'LIKE', $villageName.'%')
				->whereHas('district', function($district) {
					$district->whereHas('city', function($city) {
						$city->whereId(64); //this project only use Bogor city (64)
					});
				})->first();
			
			if ($findVillage) {
				$dapilMap = new DapilMapping;
				$dapilMap->dapil_id = $desa['id_dapil'];
				$dapilMap->village_id = $findVillage->id;
				$dapilMap->save();
			} else {
				$findDistrict = District::where('name', 'LIKE', $desa['nama_kecamatan'].'%')
					->whereHas('city', function($city) {
						$city->whereId(64);
					})->first();

				if ($findDistrict) {
					$isExist = Village::whereName($villageName)
						->whereHas('district', function($district) {
							$district->whereHas('city', function($city) {
								$city->whereId(64); // this project only use Bogor city (64)
							});
						})->first();

					if (!$isExist) {
						$selectedVillage = new Village;
						$selectedVillage->district_id = $findDistrict->id;
						$selectedVillage->name = $villageName;
						$selectedVillage->save();
					} else {
						$selectedVillage = $isExist;
					}
					

					$dapilMap = new DapilMapping;
					$dapilMap->dapil_id = $desa['id_dapil'];
					$dapilMap->village_id = $selectedVillage->id;
					$dapilMap->save();
				} else {
					dump($desa['nama_kecamatan']);
				}
			}
		}
    }
}

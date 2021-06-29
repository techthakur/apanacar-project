window.googletag = window.googletag || {};
window.googletag.cmd = window.googletag.cmd || [];
(function (W, D, N) {
W[N]=W[N]||{};W[N].cmd=W[N].cmd||[];
function getDbg(){var dbg=0,m;try{m = W.location.href.match(/pbjs_debug=(\S*)/) || (D.cookie+';').match(/pbjs_debug=(\S*)\;/);dbg=m && 'true'===(m[1]||'')}catch(e){}D.cookie='pbjs_debug='+dbg+'; path=/; secure';return dbg}
W.G_options=W.G_options||{};
W.G_options.debug=getDbg();
var G_debug=G_options.debug;
function loadScript(url){var o='script',s=document,a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=url;m.parentNode.insertBefore(a,m);};

if(W[N]['affmp2_cardekho.com']){return}W[N]['affmp2_cardekho.com']=1;
loadScript('https://cdn4-hbs.affinitymatrix.com/hvrlib/cardekho.com/1614856474/v2.js');
W[N].cmd.push(function(){
if(!W[N].chkDomain('cardekho.com')){return}
var cfg = {"aff":{"def":{"maxCall":1,"minVisblePerc":50,"delaySec":30,"kw":{"domain":"cardekho.com"},"gads":{"enabled":false}},"aus":[{"au":"/42115163/IP_cardekho.com_ALL_Multisize_RON_HVR_Both","sz":["300x100","300x250","320x100","320x50","336x280","728x90","970x90"],"def":1},{"au":"/21930596546/IP_cardekho.com_ALL_Multisize_RON_HVR_Both_MC","sz":["300x100","300x250","320x100","320x50","336x280","728x90","970x90"],"def":1}],"pbjs":{"enabled":true,"nm":"affpbjs","hbsite":"hvr_man_cardekho.com"}},"pub":{"def":{"maxCall":5,"delaySec":10,"minVisblePerc":60,"reprf":1,"visSec":5,"mszIgnore":["/1089059/CDWEB_CarNews_728x90_MTF"],"kw":{"domain":"cardekho.com"},"excludePatrn":{"enable":1,"patrn":"NO_REFRESH"},"section":{"enable":0,"whitelist":[],"blacklist":[]},"restoreOrgAttr":[{"name":"data-google-query-id"},{"name":"data-load-initially","value":"affhvr"}],"dfpids":{"enable":1,"excIds":{"advId":[36789889,4986391417,4609046330,4996303186,69830569,36789889,2846824740,2847580479,2848985201]}},"ignoreEmptyAds":false,"ignireImpForPubAu":0},"rule":[{"tp":"exc","au":["*"],"sz":["1x1"],"lbl":"Ignr 1x1"},{"tp":"inc","au":["*"],"sz":["300x100","300x250","320x100","320x50","336x280","728x90","970x90"],"lbl":"All Au"}],"adspots":[]}};
if(cfg.aff.pbjs && cfg.aff.pbjs.enabled){
    var hbsite = cfg.aff.pbjs.hbsite || ('hvr_' + cfg.aff.def.kw.domain),d=new Date();
    W[N].U.loadScript('https://hbs.ph.affinity.com/v5/' + hbsite + '/affhb.data.js.php?t=' + d.getDate() + d.getMonth() + d.getHours() );
}
if( cfg.aff.def.dfpenblsrv){W[N].U.loadScript("https://securepubads.g.doubleclick.net/tag/js/gpt.js");}
googletag.cmd.push(function() {
    W[N].AffRefresh(cfg)
});
});
})(window, document, '__afflib');
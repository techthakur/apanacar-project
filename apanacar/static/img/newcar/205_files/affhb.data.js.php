(function(W,D,N) {
  W[N]=W[N]||{};
  function chkDomain(srchMnDmn, curDmn) {
        var arDomains=srchMnDmn;
        if( !Array.isArray(arDomains) ){
            arDomains=[arDomains];
        }
        for(var i=0, l=arDomains.length; i<l; i++){
            if( chkDomainImpl( arDomains[i], curDmn ) ){
                return 1;
            }
        }
        return 0;
  }  
  function chkDomainImpl( srchMnDmn , curDmn ){    
    curDmn = curDmn || window.location.hostname || '' ;
        if( curDmn == srchMnDmn ) { return 1; }
    var artmp = curDmn.split( '.' +  srchMnDmn );
    if( (2 == artmp.length) && (""== artmp[1]) ) {
                return 1;         
    }
    return 0;
  }

  
if(W[N]['affhb2_affpbjs_hvr_cardekho.com']){return}W[N]['affhb2_affpbjs_hvr_cardekho.com']=1;
  var pbjsName='affpbjs';
  
  if( -1 === location.href.indexOf('hb_disable') && (chkDomain( ["cardekho.com"] ))) {
    (function() {
    "use strict";
    //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    window.googletag = window.googletag || {};
    window.googletag.cmd = window.googletag.cmd || [];   
    var pbjsNM='affpbjs';
    window[pbjsNM] = window[pbjsNM] || {};
    window[pbjsNM].que = window[pbjsNM].que || [];
    var pbjs=window[pbjsNM], Logger={}, G={refreshInViewBySlot:function(){}}; 

    //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

      function loadScript(url) {
        var o = 'script', s = document, a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = url;
        m.parentNode.insertBefore(a,m);
      }
      
        if(!googletag.apiReady) {
          loadScript('//securepubads.g.doubleclick.net/tag/js/gpt.js')
        }
         

      window._aff_pob = window._aff_pob || [];
      if( 2 == 0) {
        loadScript('//lgq.ph.affinity.com/affpobq.js');
      }

      loadScript('https://cdn4-hbs.affinitymatrix.com/app/pbjs/prebid4.21.0-pub-sov-adt-con-con.js');
      
      
      var G_adUnits = [
  {
    "aff":{
      "code":"/21930596546/IP_cardekho.com_ALL_Multisize_RON_HVR_Both_MC",
      "id":"div-gpt-ad-hvr-cardekho-001",
      "dynamicId":true,
      "lgcode":22136326434,
      "refsh":{
        "enable":false,
        "delaySec":90,
        "maxCall":5
      }
    },
    "mediaTypes":{
      "banner":{
        "sizes":[
          [
            728,
            90
          ],
          [
            300,
            250
          ],
          [
            320,
            50
          ],
          [
            320,
            100
          ],
          [
            336,
            280
          ],
          [
            970,
            90
          ]
        ]
      }
    },
    "bids":[
      {
        "bidder":"pubmatic",
        "params":{
          "publisherId":"32987",
          "adSlot":"IP_cardekho.com_ALL_Multisize_RON_HVR_Both_1"
        },
        "aff":{
          "bsizes":[
            [
              300,
              100
            ],
            [
              300,
              250
            ],
            [
              320,
              100
            ],
            [
              320,
              50
            ],
            [
              336,
              280
            ]
          ]
        }
      },
      {
        "bidder":"pubmatic",
        "params":{
          "publisherId":"32987",
          "adSlot":"IP_cardekho.com_ALL_Multisize_RON_HVR_Both_2"
        },
        "aff":{
          "bsizes":[
            [
              728,
              90
            ],
            [
              970,
              90
            ]
          ]
        }
      },
      {
        "bidder":"sovrn",
        "params":{
          "tagid":"881888"
        },
        "aff":{
          "bsizes":[
            [
              300,
              250
            ]
          ]
        }
      },
      {
        "bidder":"sovrn",
        "params":{
          "tagid":"881889"
        },
        "aff":{
          "bsizes":[
            [
              320,
              100
            ]
          ]
        }
      },
      {
        "bidder":"sovrn",
        "params":{
          "tagid":"881891"
        },
        "aff":{
          "bsizes":[
            [
              320,
              50
            ]
          ]
        }
      },
      {
        "bidder":"sovrn",
        "params":{
          "tagid":"881892"
        },
        "aff":{
          "bsizes":[
            [
              336,
              280
            ]
          ]
        }
      },
      {
        "bidder":"sovrn",
        "params":{
          "tagid":"881893"
        },
        "aff":{
          "bsizes":[
            [
              728,
              90
            ]
          ]
        }
      },
      {
        "bidder":"sovrn",
        "params":{
          "tagid":"881894"
        },
        "aff":{
          "bsizes":[
            [
              970,
              90
            ]
          ]
        }
      },
      {
        "bidder":"adtelligent",
        "params":{
          "aid":622742
        }
      }
    ]
  },
  {
    "aff":{
      "code":"/42115163/IP_cardekho.com_ALL_Multisize_RON_HVR_Both",
      "id":"div-gpt-ad-hvr-cardekho-002",
      "dynamicId":true,
      "lgcode":22133893353,
      "refsh":{
        "enable":false,
        "delaySec":90,
        "maxCall":5
      }
    },
    "mediaTypes":{
      "banner":{
        "sizes":[
          [
            728,
            90
          ],
          [
            300,
            250
          ],
          [
            320,
            50
          ],
          [
            320,
            100
          ],
          [
            336,
            280
          ],
          [
            970,
            90
          ]
        ]
      }
    },
    "bids":[
      {
        "bidder":"hvr_copy_config",
        "params":{
          "dfp_au":"/21930596546/IP_cardekho.com_ALL_Multisize_RON_HVR_Both_MC"
        }
      }
    ]
  }
],
      G_options = {
  "pbjsconf":{
    "priceGranularity":{
      "buckets":[
        {
          "precision":2,
          "min":0,
          "max":2,
          "increment":0.01
        },
        {
          "precision":2,
          "min":2,
          "max":5,
          "increment":0.05
        },
        {
          "precision":2,
          "min":5,
          "max":20,
          "increment":0.5
        }
      ]
    },
    "currency":{
      "adServerCurrency":"USD"
    },
    "bidderTimeout":1800,
    "timeoutBuffer":500,
    "userSync":{
      "filterSettings":{
        "iframe":{
          "bidders":"*",
          "filter":"include"
        }
      }
    },
    "enableSendAllBids":false
  },
  "aff":{
    "collapse_empty_div":false,
    "trgt_use_div_id":1,
    "rfrall":{
      "conf":{
        "delaySec":90,
        "maxCall":5
      },
      "enabled":false
    },
    "log":{
      "url":"//hb.ph.affinity.com/lg?vp=afp2.1&hst=ph-pbjs-web-mumbai-insgrp-v2-mh7c",
      "enabled":false,
      "timeout":2000,
      "lgbrsp":0,
      "afelog":0,
      "pubid":"hvr_cardekho.com"
    },
    "geo_filter":{
      "enabled":false,
      "data_center":"in"
    },
    "pbExEnabled":false
  },
  "bidderconf":{
    "bidders":[
      "appnexus",
      "pulsepoint",
      "pubmatic",
      "sovrn",
      "ix",
      "ucfunnel",
      "adtelligent",
      "valueimpression",
      "connectad",
      "adkernel",
      "yieldmo",
      "bizzclick"
    ],
    "config":{
      "schain":{
        "validation":"off",
        "config":{
          "ver":"1.0",
          "complete":1,
          "nodes":[
            {
              "asi":"cardekho.com",
              "sid":"2",
              "hp":1
            }
          ]
        }
      }
    }
  }
},
      siteid = '149',
      dc = 'in';
      var bidderIdMapping = {
  "appnexus": "placementId",
  "pubmatic": "adSlot",
  "aol": "placement",
  "sovrn": "tagid",
  "ucfunnel": "adid",
  "adsolut": "zoneId",
  "pulsepoint": "cp",
  "ix": "siteId",
  "adtelligent": "aid",
  "valueimpression": "siteId",
  "connectad": "siteId"
};
      var console=window.console||{},Logger={};["log","warn","error","debug"].forEach(function(n){console[n]?Logger[n]=function(){var e,t;G_options.debug&&(e=[].slice.call(arguments),t=new Date,e.unshift([t.getHours(),t.getMinutes(),t.getSeconds()].join(":")),e.unshift("background: #1e5f24; color: #FFFFFF"),e.unshift("%c AffinityPrebid "),console[n].apply(console,e))}:Logger[n]=function(){}}),function(e,t){"use strict";var n,u,g,p,i;e[t]=e[t]||{},e[t].tcfv2||(e[t].tcfv2=e[t].tcfv2||{},u=(n=function(){return{google:755,pubmatic:76,sovrn:13,xander:32,appnexus:32,adtelligent:410}})().google,(p={eventStatus:"stub",gdprApplies:!(g=[u]),vendor:{consents:{}}}).vendor.consents[u]=!0,i=function(t,n,e){var i,o,a,d,r,s,f,c,l;"function"!=typeof window.__tcfapi?t(p):(e=e||{},i=Array.isArray(e.vendorIds)&&e.vendorIds.length?e.vendorIds:g,a=function(e){o&&(o=0,t(e))},r=function(e){d&&(d=0,n(e))},s=function(e,t){var n;Logger.log({tcData:e,success:t}),t?"stub"===(n=e.cmpStatus||"")?l():"loaded"===n&&(!1===e.gdprApplies?a(p):!0===e.gdprApplies?"useractioncomplete"===e.eventStatus||"tcloaded"===e.eventStatus?(p.vendor.consents=e.vendor.consents,u in p.vendor.consents||(p.vendor.consents[u]=!1),p.eventStatus=e.eventStatus,p.gdprApplies=!0,a(p)):l():r(4)):r(2)},f=function(){__tcfapi("getTCData",2,s,i)},c=d=o=1,(l=function(){c&&(c=0,__tcfapi("removeEventListener",2,f),__tcfapi("addEventListener",2,f))})(),f())},e[t].tcfv2.getConcents=function(e,t,n){new i(e,t,n)},e[t].tcfv2.getCachedConcents=function(){return p},e[t].tcfv2.getGvlCode=n)}(window,(document,"__afflib"));var addGeoSectionLabels=function(){var t="";try{var e=G_options.aff.geo_filter;e.data_center=e.data_center.trim().toLowerCase(),e.enabled&&e.data_center&&(t=e.data_center)}catch(e){}return function(e){return e=e||[],t&&e.push(t),"function"==typeof G.get_section_labels&&(e=G.get_section_labels(e)),e}}();function express(){"use strict";var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:[],t=0<arguments.length&&void 0!==arguments[1]?arguments[1]:{},i=window.console||{},g=t.tcfv2&&t.tcfv2.enable,b=t.ignbIniLoadDIsable||!1,S={};function p(e){if(e.length)for(var t=0,n=e.length;t<n;t++)e[t].bids=function(e,t){for(var n=[],i=0,o=e.length;i<o;i++){var a=e[i];(!a.aff||!a.aff.bsizes||A(t,a.aff.bsizes))&&n.push(a)}return n}(e[t].bids,e[t].sizes);return e}function I(e,t){try{if(t=t||0,e.adUnits[0].mediaTypes.banner.sizes&&e.adUnits[0].mediaTypes.banner.sizes.length){var n=addGeoSectionLabels(e.labels||[]);if(n.length&&(e.labels=n),t||(e.adUnits=p(e.adUnits)),g){var i=W[N].tcfv2.getCachedConcents();if(i.gdprApplies)for(var o=W[N].tcfv2.getGvlCode(),a=i.vendor.consents,d=0,r=e.adUnits.length;d<r;d++){for(var s=[],f=e.adUnits[d],c=0,l=f.bids.length;c<l;c++){var u=f.bids[c];o[u.bidder]&&!0===a[o[u.bidder]]?s.push(u):S.log(["tcfv2-exclude ",u.bidder,f.code])}e.adUnits[d].bids=s}}return void pbjs.requestBids(e)}}catch(e){}e.bidsBackHandler()}function a(n,i,o){o=o||"",n&&n.setTargeting&&(o=o+" for ["+n.getSlotElementId()+" : "+n.getAdUnitPath()+"]",Object.keys(i).map(function(e,t){n.setTargeting(e,i[e]),S.log("set key value using "+o+" ["+e+" = "+i[e]+"]")}))}function h(e){e?Array.isArray(e)||(e=[e]):e=pbjs.adUnits;var t,i,o=pbjs.getAdserverTargeting(e.map(function(e,t){return e.code}));o&&(t=googletag.pubads().getSlots(),i={},Object.keys(o).map(function(n,e){o[n]&&t.map(function(e,t){n===e.getSlotElementId()&&document.getElementById(n)&&(e.getAdUnitPath(),a(e,o[n],"div-id"))})}),Object.keys(o).map(function(n,e){o[n]&&t.map(function(e,t){i[e.getAdUnitPath()]||n===e.getAdUnitPath()&&a(e,o[n],"adUnit-Path")})}))}["log","warn","error","debug","table"].forEach(function(n){i[n]?S[n]=function(){var e,t;G_options.debug&&(e=[].slice.call(arguments),t=new Date,"table"==n?e[0]=Object.assign({"Prebid Express":[t.getHours(),t.getMinutes(),t.getSeconds()].join(":")},e[0]):(e.unshift([t.getHours(),t.getMinutes(),t.getSeconds()].join(":")),e.unshift("background: #8B0000; color: #FFFFFF"),e.unshift("%c Prebid Express ")),i[n].apply(i,e))}:S[n]=function(){}}),S.log("loading express"),S.log(e),0===e.length&&S.log("no valid adUnits found, not loading express");var n,o,m={},v=[];function C(t){for(var e=[],n=0;n<t.length;n++)try{e.push([t[n].getWidth(),t[n].getHeight()])}catch(e){S.log("slot size "+t[n].toString()+" not supported by express")}return e}function A(e,t){try{for(var n=[],i=0,o=e.length,a=0,d=t.length,i=0;i<o;i++)for(a=0;a<d;a++)e[i][0]==t[a][0]&&e[i][1]==t[a][1]&&n.push([e[i][0],e[i][1]]);return 0==n.length&&(n=0),n}catch(e){return 0}}G_options.aff.pbExEnabled&&(v=e.reduce(function(e,t){return t.code&&t.bids?e[t.code]=t:S.log("misconfigured adUnit",null,t),e},{})),G_options.aff.pbExEnabled&&(n=function(){var a,e,d,t,n,f,r,s,c,l=window.googletag,u=l.pubads;function g(e){return Array.isArray(e)?e.slice():googletag.pubads().getSlots().slice()}function p(e){for(var t=[],n=e.length-1;-1<n;n--){var i=e[n],o=i.getSlotElementId(),a=(i.getAdUnitPath(),v[o]);a&&(m[o]=i,a.sizes=a.sizes||C(i.getSizes()),t.push(a),e.splice(n,1))}return t}l.display&&l.enableServices&&"function"==typeof u&&u().refresh&&u().disableInitialLoad&&u().getSlots&&u().enableSingleRequest?(S.log("running"),a=l.display,e=l.enableServices,d=u().refresh,t=u().disableInitialLoad,n=u().enableSingleRequest,f=l.defineSlot,l.defineSlot=function(e,t,n){var i,o,a,d,r;"/"!=e.substr(0,1)&&(e="/"+e),S.log("defineslot:",e,":",n),i=e,o=n,r=d=a=0,G_adUnits.map(function(e,t){e.aff&&e.aff.dynamicId&&i===e.aff.code&&(a=1,o===(r=e).aff.id&&(d=1))}),1===a&&0===d&&((r=JSON.parse(JSON.stringify(r))).aff.id=o,r.code=o,pbjs.addAdUnits&&pbjs.addAdUnits(r),v[o]=r);var s=f.apply(l,arguments);return G.refreshInViewBySlot(s),s},l.enableServices=function(){return r||t.apply(u()),e.apply(l,arguments)},l.display=function(t){S.log("display:",t);var e,n,i=googletag.pubads().getSlots().filter(function(e){return e.getSlotElementId()===t});JSON.stringify(i)!==JSON.stringify([])||(e=function(e){for(var t in v)if(v.hasOwnProperty(t)&&v[t].aff.id===e)return v[t]}(t))&&e.aff&&e.aff.code&&e.aff.id&&(l.defineSlot(e.aff.code,e.mediaTypes.banner.sizes,e.aff.id).addService(l.pubads()),s||(s=!0,l.enableServices())),a.apply(l,arguments),c||(n=googletag.pubads().getSlots().filter(function(e){return e.getSlotElementId()===t})),n=g(n).filter(function(e){var t=document.getElementById(e.getSlotElementId());return t&&(t.querySelector("div>iframe")||(e._displayed=!1)),!e._displayed}),(n=g(n).filter(function(e){return!e._displayed})).forEach(function(e){e._displayed=!0});var o=0,o=1==n.length&&n[0].ignExp?[]:p(n);!b&&r||(googletag.pubads().isInitialLoadDisabled()&&n.length&&d.apply(u(),[n]),o.length&&pbjs.que.push(function(){var e=0;I({adUnits:o,bidsBackHandler:function(){e||(e=1,h(o),googletag.pubads().isInitialLoadDisabled()&&d.apply(u(),[o.map(function(e){return m[e.code]})]))}})}))},r=!(u().refresh=function(e,t){e&&e.length||(e=googletag.pubads().getSlots()),e.forEach(function(e){S.log(["refresh() args ",e.getAdUnitPath(),e.getSlotElementId()])});var n=p(e=g(e)).filter(function(e){return m[e.code]._displayed});e.length&&(e.forEach(function(e){S.log(["refresh() call ",e.getAdUnitPath(),e.getSlotElementId()])}),d.apply(u(),[e,t])),n.length&&pbjs.que.push(function(){I({adUnits:n,bidsBackHandler:function(){h(n),d.apply(u(),[n.map(function(e){return m[e.code]}),t])}})})}),s=!1,c=!(u().disableInitialLoad=function(){return r=!0,t.apply(window.googletag.pubads(),arguments)}),u().enableSingleRequest=function(){return c=!0,n.apply(window.googletag.pubads(),arguments)}):S.log("could not bind to gpt googletag api")},o=0,Array.isArray(window.googletag.cmd)&&0<window.googletag.cmd.length&&(o=window.googletag.cmd[0]),o?window.googletag.cmd[0]=function(){n(),o()}:window.googletag.cmd.push(n)),pbjs.que.push(function(){pbjs.HBReq=function(t){var n=0;googletag.pubads().getSlots().find(function(e){t==e.getSlotElementId()&&(n=e)}),n&&pbjs.hvrHbReq(n,function(){googletag.display(t),googletag.pubads().isInitialLoadDisabled()&&googletag.pubads().refresh([n])})},pbjs.hvrHbReq=function(i,e,t){var n,o,a=i.getAdUnitPath(),d=i.getSlotElementId(),r="",s=[],f="",c=0,l=0,u=G_adUnits.length,g="",p={"120x600":"168","120x601":"6321","120x602":"6322","160x600":"154","160x601":"2759","160x602":"2758","250x250":"165","300x50":"711","300x100":"457","300x250":"170","300x251":"1103","300x252":"1104","300x600":"529","320x50":"3055","320x75":"4564","320x100":"2988","336x280":"171","468x60":"1","468x61":"6323","468x62":"6324","728x90":"225","728x91":"6317","728x92":"6318","728x96":"3058","728x100":"4037","970x90":"2473","970x250":"2466","360x300":"10001","1100x400":"10002","1100x250":"10003"};for((s=d.split("_")).shift(),r=document.getElementById(s.join("_"))||"",l=0;l<u;l++)if(a==G_adUnits[l].aff.code){c=G_adUnits[l];break}if(c){"string"==typeof(t=t||C(i.getSizes()))&&((t=t.split(x))[0]=0|t[0],t[1]=0|t[1],t=[t]),r&&(f=r.getElementsByTagName("iframe"))&&f[0]&&(n=f[0].getAttribute("width").replace("px","")||"",o=f[0].getAttribute("height").replace("px","")||"",n&&o&&(g=n+"x"+o)),S.log("AOL_aolSizeKey",g,p[g]||0),g=parseInt(p[g]||0);var b=A(t,c.mediaTypes.banner.sizes);if(b&&b.length){for(var h,m,v=[],l=0,u=c.bids.length;l<u;l++){var y,_=function(t){try{return JSON.parse(JSON.stringify(t))}catch(e){return S.error(["Fail to clone "+e,t]),t}}(c.bids[l]);if(_)if(_.aff&&_.aff.bsizes){A(b,_.aff.bsizes)&&(-1<_.bidder.indexOf("aol")&&(y=_.aff.bsizes[0][0]+"x"+_.aff.bsizes[0][1],g=parseInt(p[y]||0),_.params.sizeId=g),v.push(_))}else{if(-1<_.bidder.indexOf("aol")){if(!g){_=0;continue}_.params.sizeId=g}v.push(_)}}0!=v.length?(h=[{code:d,bids:v,mediaTypes:{banner:{sizes:b}}}],m=0,updateLogId(d,a),c.labelAny&&(h.labelAny=c.labelAny),c.labelAll&&(h.labelAll=c.labelAll),i.ignExp=1,I({adUnits:h,bidsBackHandler:w,timeout:G_options.pbjsconf.bidderTimeout},1),setTimeout(w,G_options.pbjsconf.bidderTimeout+100)):e()}else e()}else e();function w(){var n;m||(m=1,(n=(n=pbjs.getAdserverTargeting([d]))[d]||0)&&Object.keys(n).map(function(e,t){i.setTargeting(e,n[e]),S.log("set key value "+d+" ["+e+" = "+n[e]+"]")}),e())}}})}"use strict";var updateLogId=function(){},getDivIdToAuCode=function(){},ImpressionLog=function(o,a){function d(){}var r=!0,s=2e3,f=o.navigator.sendBeacon?function(e,t,n){return!!o.navigator.sendBeacon(e+"&tt=bcn",t)&&(n(),!0)}:d,c=o.XMLHttpRequest&&"withCredentials"in new o.XMLHttpRequest?function(e,t,n){try{var i=new o.XMLHttpRequest;i.withCredentials=!0,i.timeout=s,i.open("POST",e+"&tt=xhr",r),i.setRequestHeader("Content-Type","text/plain"),i.onreadystatechange=function(){4==i.readyState&&(n(),i=null)},i.send(t)}catch(e){return!1}return!0}:d;var t=new function(){var i={},e=0,o=this;this.add=function(e,t){var n=this._getKey();return i[n]={url:e,data:t,fnDone:function(){o._done(n)}},i[n].f},this._getKey=function(){return e++},this._done=function(e){i[e]&&i[e].url&&(i[e].url=0,setTimeout(function(){try{delete i[e]}catch(e){}},2))},this.sendAll=function(e){for(var t in e=e||"",i){var n;i.hasOwnProperty(t)&&((n=i[t]).url&&(f(n.url+e,n.data,n.fnDone)||c(n.url+e,n.data,n.fnDone)||function(e,t){var n=a.createElement("img");n.width=n.height=1,n.src=e+"&tt=img",n.onload=n.onerror=function(){t(),t=d,n.onload=null,n.onerror=null,n=null}}(n.url+e,(n.data,n.fnDone))))}}};return window.addEventListener("beforeunload",function(){r=!1,s=500,t.sendAll("&ex=bu")}),function(e){t.add(e,""),t.sendAll()}}(window,document),version="v3-20200908.1",initlog=!0,flags={pbi:0,strp:0,sndfp:0,sndfptp:0},proto="https:"===location.protocol?"https://":"http://",D={},O={pbatmo:G_options.aff.log.timeout,lgbrsp:G_options.aff.log.lgbrsp,afelog:0|G_options.aff.log.afelog,afulog:G_options.aff.log.url,afuuid:"",pub:G_options.aff.log.pubid,dispIdTm:{}},logUrl=proto+O.afulog+"&vj="+version+"&pub="+O.pub+"&",_logBuf={d:[],st:0,mx:4},_logBufIndex=0,tmoLogged={},winLogged={},log=function(e){if(O.afelog)if(1===O.afelog)ImpressionLog(logUrl+e+"&cb="+timeStamp());else if(2===O.afelog)try{window._aff_pob.push(function(){ImpressionLog(logUrl+e+"&cb="+timeStamp())})}catch(e){}},paramStr=function(e,t,n){var i=[];return isArr(e)&&(e=en(e.join(""))),isObj(e)?each(e,n?function(e,t){i.push(n+"["+e+"]="+en(t))}:function(e,t){i.push(e+"="+en(t))}):i.push(en(e)),t&&each(flags,function(e,t){i.push(e+"="+en(t))}),i.join("&")},isArr=function(e){return isA(e,"Array")},isObj=function(e){return isA(e,"Object")},en=function(e){try{return encodeURIComponent(e)}catch(e){return e.message}},_shortNames={bidderCode:"bdcd",requestTimestamp:"reqt",responseTimestamp:"rest",timeToRespond:"trsp",statusMessage:"sms",adUnitCode:"au"},resetFlags=function(){D={},flags.sndfp=0,flags.pg=(flags.pg||0)+1,flags.afuuid=flags.afuuid+"_"+flags.pg,flags.init=timeStamp()};function timeStamp(){return(new Date).getTime()}function isA(e,t){return Object.prototype.toString.call(e)==="[object "+t+"]"}function isFun(e){return isA(e,"Function")}function each(e,t){for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&!isFun(e[n])&&t.call(e[n],n,e[n])}G_options.aff.afflog2&&(G_options.aff.afflog2=log),flags.afuuid=Math.random()+"_"+timeStamp(),flags.init=timeStamp(),_logBuf.mx=+(O.lbmx||4);var defSizeMapping=[{labels:["desktop"],mediaQuery:"(min-width: 1200px)"},{labels:["tablet"],mediaQuery:"(min-width: 768px) and (max-width: 1199px)"},{labels:["phone"],mediaQuery:"(min-width: 0px) and (max-width: 767px)"}];function getDeviceDetails(e){var t=e.getConfig().sizeConfig||0,n="pub",i="desktop";return t||(t=defSizeMapping,n="sys"),t.forEach(function(e,t){window.matchMedia(e.mediaQuery).matches&&(i=e.labels)}),{dv:i,dvtp:n}}function affLogging(m){var v=function(e,t,n,i){if(D[e]=D[e]||{},D[e][t]=D[e][t]||{},D[e][t][n])for(var o in i)i.hasOwnProperty(o)&&(D[e][t][n][o]=i[o]);else D[e][t][n]=i;D[e].n=D[e].n||{},D[e].n[t]=(D[e].n[t]||0)+1},y=function(e){var t=e.bidderCode||e.bidder,n=(e.originalCpm||"")+"-"+(e.originalCurrency||""),i=G_options.pbjsconf.priceGranularity,o="";if("object"==typeof i)o=e.pbCg;else switch(i){case"auto":o=e.pbAg;break;case"low":o=e.pbLg;break;case"med":o=e.pbMg;break;case"high":o=e.pbHg;break;case"dense":o=e.pbDg}var a={ocpm:e.cpm,acpm:o||e.cpm,tmo:e.timeToRespond,pbcd:"",bocpm:n};v(e.adUnitCode,"afPBName",t,a)},_=function(e,t,n,i){var o,a=!1;return D[e]&&D[e][t]&&D[e][t][n]&&(o=D[e][t][n],i?o.hasOwnProperty(i)&&(a=o[i]):a=o),a},w=function(e){return e.cpm||0},S=function(t,e,n){return t&&("*"===e?each(t,function(e,t){n[e]=t}):e.map(function(e){n[e]=t[e]||""})),n},I=function(e,t){return(flags.sndfp?1:0)|(_(e,"afPBName",t,"dly")?2:0)|(O.dispIdTm[e]?4:0)},r={},i={};updateLogId=function(e,t){i[e]=t;var n=x(t);n&&(r[e]=n)},getDivIdToAuCode=function(e){return i[e]||!1};var x=function(t){var e=t;try{if(r[t])return r[t];var n=t,i=t;googletag.pubads().getSlots().forEach(function(e){t!=e.getSlotElementId()&&t!=e.getAdUnitPath()||(n=e.getSlotElementId(),"/"!=(i=e.getAdUnitPath()).substr(0,1)&&(i="/"+i))});for(var o=0,a=G_adUnits.length;o<a;o++){var d=G_adUnits[o];if((d.aff.id==n||d.aff.code==i)&&d.aff.lgcode)return r[t]=d.aff.lgcode,d.aff.lgcode}}catch(e){}return e||(r[e=t]=e),e},C=function(e){var t=e.bidder||e.bidderCode,n=bidderIdMapping[t]||"";return G[e.requestId]?G[e.requestId].params[n]:function(e,t){var n=e.bidder||e.bidderCode,i=bidderIdMapping[n]||"",o=0;if(G_adUnits.forEach(function(e){e.aff.id==t&&e.bids.forEach(function(e){n==e.bidder&&(o=e.params[i])})}),!o){for(var a=t,d=googletag.pubads().getSlots(),r=0,s=d.length||0,r=0;r<s;r++)if(t==d[r].getSlotElementId()){a=d[r].getAdUnitPath();break}G_adUnits.forEach(function(e){e.aff.code==a&&e.bids.forEach(function(e){n==e.bidder&&(o=e.params[i])})})}return o}(e,e.adUnitCode)},A=function(e){var n={};each(e,function(e,t){n[_shortNames[e]||e]=t}),_logBufIndex++,n.i=_logBufIndex,void 0!==e.aucid&&(n.aucid=e.aucid),_logBuf.d.push(n),0===_logBuf.st&&(_logBuf.st=1,setTimeout(function(){var e=_logBuf.d,t=[];for(_logBuf.d=[],_logBuf.st=0;e.length;)t.push(e.shift()),_logBuf.mx!==t.length&&0!==e.length||(log(paramStr({t:"mix",tmo:O.pbatmo,d:JSON.stringify(t)},1)),t=[])},300))},e=["bidRequested","bidResponse","bidTimeout","bidWon","auctionInit"],U=1;var s,j=(s={},function(e,t,n){if(s[e])return s[e];n=n||G_adUnits;for(var i=0,o=G_adUnits.length;i<o;i++)if(e===n[i].aff.id)return s[e]=n[i].aff.lgcode,s[e];if(!t)for(var a=googletag.pubads().getSlots(),d=0,r=a.length||0,d=0;d<r;d++)if(e==a[d].getSlotElementId()){t=a[d].getAdUnitPath();break}for(i=0,o=G_adUnits.length;i<o;i++)if(t===n[i].aff.code)return s[e]=n[i].aff.lgcode,s[e]}),E={};function L(e,t,n){return t in e?e[t]:n}var G={};function n(a,e){switch(a){case"auctionInit":G={};break;case"bidRequested":var n="",i={},o="",d={},r=[];each(e.bids,function(e,t){n=t.adUnitCode,i={},o=t.bidder,i.requestTimestamp=timeStamp()-flags.pbi,i.bidderCode=o,v(n,n,o,i),G[t.bidId]={bidder:t.bidder,params:t.params||{}},0===L(d,n,0)&&(d[n]=1,r.push({aff:{lgcode:n}}))}),0===L(E,e.auctionId,0)&&(E[e.auctionId]=1,function(e,t,n,i){t=t||0;var o=[];((e=e||[])||G_adUnits).forEach(function(e,t){o.push(j(e.aff.lgcode))});var a=getDeviceDetails(m),d="pub"==a.dvtp?[a.dv]:[];U&&(U=0,logUrl+=["lbl="+encodeURIComponent(addGeoSectionLabels(d).join(",")),"dc="+n,"dv="+a.dv,"dvtp="+a.dvtp,"siteid="+t].join("&")+"&"),log(paramStr({t:"init",aucid:i||"",aus:o.join(","),tmo:O.pbatmo,r:"",h:""},1))}(r,siteid,dc,e.auctionId)),v(n,n,o,{aucid:e.auctionId});break;case"bidResponse":var n=e.adUnitCode,t=e.bidderCode,s=w(e);(i=S(e,["bidderCode","cpm","acpm","timeToRespond","statusMessage"],{},1)).bocpm=(e.originalCpm||"")+"-"+(e.originalCurrency||"");var f=G_options.pbjsconf.priceGranularity,c="";if("object"==typeof f)c=e.pbCg;else switch(f){case"auto":c=e.pbAg;break;case"low":c=e.pbLg;break;case"med":c=e.pbMg;break;case"high":c=e.pbHg;break;case"dense":c=e.pbDg}v(n,"afPBName",t,{ocpm:e.cpm,acpm:c||e.cpm,tmo:e.timeToRespond,pbcd:"",bocpm:i.bocpm}),e.cpm||(s=0);var l=I(n,t);l&&(i.dly=1,i.dlyc=l,v(n,"afPBName",t,{dly:1,dlyc:l})),v(n,"bidResponse",t,i),O.lgbrsp&&(i.t="bdres",i.au=x(n),i.acpm=c||s,i.cpm=s,i.pbcd=_(n,"afPBName",t,"pbcd"),i.aucid=e.auctionId,i.pubplcid=C(e),i.bidderCode=window[pbjsName].bidderAlias[i.bidderCode]||i.bidderCode,A(i));break;case"bidWon":try{var u=e.adId+":"+e.auctionId;if(winLogged[u])return;winLogged[u]=1;var n=e.adUnitCode,g={t:"bdwon"};g.au=x(n),g.won=window[pbjsName].bidderAlias[e.bidder]||e.bidder,g.wc=e.cpm,g.tmo=O.pbatmo,g.winId=u,g.reqn=_(n,"n","bidRequested"),g.rspn=_(n,"n","bidResponse"),g.pubplcid=C(e),g.aucid=e.auctionId,y(e),g.d=function(e){var t={};for(var n in e)e.hasOwnProperty(n)&&(t[window[pbjsName].bidderAlias[n]||n]=e[n]);return JSON.stringify(t)}(D[n].afPBName),log(paramStr(g,1))}catch(e){}break;case"noBid":case"bidTimeout":var p=[],b="",h="";if(each(Array.isArray(e)?e:[e],function(e,t){var n,i,o=t.auctionId+":"+t.bidder+t.adUnitCode;tmoLogged[o]||(tmoLogged[o]=1,p.push(t.bidder+":"+x(t.adUnitCode)+":"+C(t)),"bidTimeout"==a&&(h=t.auctionId,n=t.adUnitCode,i=t.bidder,v(n,"afPBName",i,{dly:1}),D[n].afPBName[i].dlyc=I(n,i)))}),0==p.length)return;"bidTimeout"==a?b="bdtmo":(b="nobid",h=e.auctionId),A({t:b,tmo:O.pbatmo,aucid:h,d:p.join()})}}for(var t=0,o=e.length;t<o;t++)!function(t){m.onEvent(t,function(e){n(t,e)})}(e[t])}function getUTCSec(){return(new Date).getTime()/1e3}function onReady(e){var t=document,n="readyState",i="attachEvent";"interactive"===t[n]||"complete"===t[n]?e():t[i]?t[i]("onreadystatechange",e):t.addEventListener("readystatechange",e)}var initAfInterval=function(){var g=new function(){function e(){o.forEach(function(e,t){e(document[i])})}var t,n,i="",o=[];this.isVisible=function(){return!document[i]},this.addOnChange=function(n){var i=0;o.forEach(function(e,t){e===n&&(i=1)}),0===i&&o.push(n)},n="",void 0!==document.hidden?(t="hidden",n="visibilitychange"):void 0!==document.msHidden?(t="msHidden",n="msvisibilitychange"):void 0!==document.webkitHidden&&(t="webkitHidden",n="webkitvisibilitychange"),document.addEventListener(n,e,!1),i=t};function p(s){var f,c;this.getVisPerc=function(){var e,t,n,i=s.getBoundingClientRect(),o=document.documentElement,a=[i.left,i.top,i.bottom,document.documentElement.clientHeight].join(),d=window.innerHeight||o.clientHeight,r=window.innerWidth||o.clientWidth;return f!=a&&(f=a,c=0<i.left&&0<i.top&&i.bottom<=d&&i.right<=r?100:((e={l:0,t:0,b:0,r:0}).l=0<i.left?i.left:0,e.t=0<i.top?i.top:0,e.b=d<i.bottom?d:i.bottom,e.r=r<i.right?r:i.right,t=i.height*i.width,0<(n=100*((e.b-e.t)*(e.r-e.l))/t)?n:-1)),c}}function t(e){Logger.log("Refresh: new AfInterval("+e.id+")");var n=e.fn||!1,i=e.id||"",o=e.delaySec||60,a=[],d=e.maxCall||5,r=0,s=e.minVisblePerc||60,f=1,c=getUTCSec(),l=document.getElementById(i),u=l?new p(l):null,o=(a=Array.isArray(o)?o:[0+o])[0];i?(m++,this.isDone=function(){return d<=r},this.stop=function(){f=0},this.start=function(){f=1},this.checkNRefresh=function(e){if(!l){if(!(l=document.getElementById(i)))return;u=new p(l)}var t;e=e||getUTCSec(),f&&l&&r<=d&&g.isVisible()&&c+o<=e&&(t=u.getVisPerc(),s<t&&(c=getUTCSec(),r<d?(r++,Logger.log("Refresh: chkNRef",i,r,"/",d),n({curCall:r,totCall:d,visPerc:t,delaySec:o}),o=a[r%a.length],r==d&&(delete h[i],m--)):(delete h[i],m--)))},h[i]=this,v=v||setInterval(b,500)):f=0}function b(){if(m<=0)return Logger.log("Refresh: All done[1]"),void clearInterval(v);if(0<m&&g.isVisible()){var e,t=getUTCSec();for(e in h)h.hasOwnProperty(e)&&h[e].checkNRefresh(t)}}function e(){var t;e.called||(e.called=1,document.body.onscroll=(t=(new Date).getTime(),function(){var e=(new Date).getTime();t+700<e&&(b(),t=e)}))}g.addOnChange(b),onReady(e);var h={},m=0,v=0,n={};return function(e){if(e.id=e.id||"",""!==e.id)return n[e.id]||(n[e.id]=new t(e)),n[e.id]}}();function isMobile(){return!(900<(screen.width<screen.height?screen.width:screen.height))&&("ontouchstart"in window||window.navigator.msMaxTouchPoints)}function aff_hb_init(b,e,h,m,v,y,_){function w(t){try{return JSON.parse(JSON.stringify(t))}catch(e){return Logger.error(["Fail to clone "+e,t]),t}}b[h]=b[h]||{},b[h].que=b[h].que||[],b[h].bidderAlias=b[h].bidderAlias||{},(_=_||{}).gpt_mode=_.gpt_mode||0,_.ignbIniLoadDIsable=_.ignbIniLoadDIsable||!1,function(){Logger.log("Main"),y.pbjs=y.pbjs||{},y.aff=y.aff||{},y.aff.trgt_use_div_id=y.aff.trgt_use_div_id||!1,c={},l=[],(f=v).forEach(function(e,t){var n,i=e.aff.code;"hvr_copy_config"===e.bids[0].bidder?(n=e.bids[0].params.dfp_au,c[n]?f[t].bids=w(c[n]):(f[t].bids=[],l.push({idx:t,dfp_au:n}))):c[i]=e.bids}),l.forEach(function(e,t){c[e.dfp_au]?f[e.idx].bids=w(c[e.dfp_au]):f[e.idx].bids=[]});var n=v=f,i={};n.forEach(function(e,t){n[t].code=y.aff.trgt_use_div_id?n[t].aff.id:n[t].aff.code});var o,a,d,r,s,f,c,l,u=[],g=_.tcfv2&&_.tcfv2.enable;function t(e){Logger.log("loadGpt ",e),2==_.gpt_mode&&(m.apiReady||loadScript("//securepubads.g.doubleclick.net/tag/js/gpt.js"))}return g&&(o=W[N].tcfv2.getGvlCode(),u=[o.google],a={},n.forEach(function(e,t){n[t].bids.forEach(function(e,t){var n=e.bidder;a[n]||(a[n]=1,o[n]&&u.push(o[n]))})}),a=o=void 0),pbjs.que.push(function(){for(var e in i){var t;i.hasOwnProperty(e)&&(t=e.split("@"),pbjs.aliasBidder(t[0],t[1]),b[h].bidderAlias[t[1]]=t[0])}var n,l;g&&"function"==typeof W.__tcfapi&&(y.pbjsconf.consentManagement={gdpr:{cmpApi:"iab",timeout:8e3,allowAuctionWithoutConsent:!1,defaultGdprScope:!0},usp:{cmpApi:"iab",timeout:1e3}}),pbjs.setConfig(y.pbjsconf),y.aff.log.afelog&&affLogging(pbjs),(n=y)&&n.aff&&n.aff.bidModifier&&(l=n.aff.bidModifier,pbjs.bidderSettings={standard:{bidCpmAdjustment:function(e,t){var n,i,o,a,d,r,s,f=e,c="none";return l[t.bidderCode]&&(l[t.bidderCode][t.adUnitCode]?c=+l[t.bidderCode][t.adUnitCode]:l[t.bidderCode]["*"]&&(c=+l[t.bidderCode]["*"])),"none"==c&&l.fixed_range&&(n=l.fixed_range,i=getDivIdToAuCode(t.adUnitCode)||t.adUnitCode,o=n.au||["-"],a=n.bdr||["-"],d=n.min||0,r=n.max||0,s=n.cpm||0,("*"==o[0]||-1<o.indexOf(i))&&("*"==a[0]||-1<a.indexOf(t.bidderCode))&&d<=f&&f<=r&&(f=s+f/100)),""===c||isNaN(c)||(f=e*c),Logger.log("bidCpmAdjustment( GLOBAL ) ",{bidderCode:t.bidderCode,adUnitCode:t.adUnitCode,bidCpm:e,bidMultiplier:c,newBid:f}),f}}})}),y.bidderconf&&pbjs.que.push(function(){pbjs.setBidderConfig(y.bidderconf)}),express(n,_),g?W[N].tcfv2.getConcents(function(e){(e.gdprApplies?!0===e.vendor.consents[755]:1)&&t("b1")},function(){},{vendorIds:u}):t("a0"),y.pubDfp&&y.pubDfp.callRefresh&&y.pubDfp.callRefresh.enable&&(d=0|y.pubDfp.callRefresh.max,r=0|y.pubDfp.callRefresh.dly,s={},d=d||10,r=r||200,n.forEach(function(e,t){s[e.aff.code||""]=0}),m.cmd.push(function(){pbjs.que.push(function(){p()})}));function p(){var e=m.pubads().getSlots();if(e.length)for(var t=0,n=e.length;t<n;t++){var i=e[t],o=i.getAdUnitPath(),a=i.getSlotElementId();-1==o.indexOf("_HVR_")&&o in s&&(s[a]||(s[a]=1,pbjs.HBReq(a)))}0<d--?setTimeout(p,r):s=0}}()}G.refreshInViewBySlot=function(){var e=!1;return G_options.rfrall&&("object"!=typeof G_options.rfrall&&(G_options.rfrall={enabled:!0}),G_options.rfrall.enabled&&((e={}).ignore=G_options.rfrall.ignore||[],e.conf=G_options.rfrall.conf||{delaySec:90,maxCall:5})),function(t){var n=t.getSlotElementId(),i=t.getAdUnitPath(),o=0,a=0;if(G_adUnits.forEach(function(e,t){(n===e.aff.id||i===e.aff.code&&e.aff.dynamicId)&&e.aff.refsh&&(e.aff.refsh.enable?(o=e.aff.refsh).id=n:a=1)}),!a){if(!o&&e){if(-1<e.ignore.indexOf(n))return;(o=e.conf).id=n}o&&(o.fn=function(e){t.setTargeting("afrf",e.curCall),googletag.cmd.push(function(){googletag.pubads().refresh([t])})},initAfInterval(o))}}}();G_options.aff.afflog2=function(){
  
};
G_options.debug=false;
      
      aff_hb_init(window,window.document, 'affpbjs', window.googletag, G_adUnits, G_options, {gpt_mode:0, tcfv2:{"enabled":false}, ignbIniLoadDIsable: false });

          })();
  }
})(window,document,'__afflib');

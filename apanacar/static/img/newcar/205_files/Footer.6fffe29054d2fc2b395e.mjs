(window.webpackJsonp=window.webpackJsonp||[]).push([[63],{"./girnarsoft-react-common/widgets/Footer.js":function(e,a,t){"use strict";t.r(a),t.d(a,"default",(function(){return g}));var l=t("./cd/configs/configs.js"),c=t.n(l),s=t("./cd/data/menus.js"),r=t("./girnarsoft-react-common/elements/CLink.js"),i=t("./girnarsoft-react-common/elements/HtmlTag.js"),n=t("./girnarsoft-react-common/elements/LazyLoad.js"),o=t("react"),m=t.n(o),u=(t("./girnarsoft-react-common/utils/detect.js"),t("./girnarsoft-react-common/utils/ReactLazy.js"));function g(e){let a="";Object(o.useEffect)(()=>{var e=a.querySelectorAll("img");if(e)for(let a=0;a<e.length;a++)Object(u.a)({element:e[a],type:"content"},(function(e){e&&e.getAttribute("data-gsll-src")&&(e.src=e.getAttribute("data-gsll-src"))}))},[]);let t=e.footerSiteLogos,l=(e,t,c)=>m.a.createElement("ul",{className:t,ref:e=>a=e},e.map((e,a)=>m.a.createElement("li",{key:a,className:`${e.class} ${e.isGooglePlay?"hidegpbtn":""}`},e.link?m.a.createElement(r.a,{urlKey:"urlWithoutBackslash",title:e.title,default:!(null!=e.defaultKey&&!e.defaultKey),prefix:e.prefix,className:e.aCls?e.aCls:"",target:e.target?e.target:"",rel:e.rel?e.rel:"",datapopup:e.datapopup?e.datapopup:"",popup:e.popup?e.popup:"",slug:e.link?e.link:"",linkViaClick:e.linkViaClick,tag:e.tag,dangerouslySetInnerHTML:{__html:e.text}}):m.a.createElement(i.a,{tag:"span",dangerouslySetInnerHTML:{__html:e.text}}),e.child&&l(e.child,e.cls,e.datapopup))));return m.a.createElement("footer",{className:"footer footerSiteLogos",id:"FooterWraper",itemScope:!0,itemType:"http://schema.org/WPFooter","data-track-component":"Footer"},m.a.createElement("div",{className:"gsc_container footer_Trafic"},m.a.createElement("div",{className:"gsc_row"},s.e&&s.e.map((e,a)=>m.a.createElement("div",{key:a,className:"gsc_col-sm-3"},m.a.createElement("span",{className:e.class}),m.a.createElement("div",{className:"trafic_col"},m.a.createElement(i.a,{tag:"div",className:"title"},e.title),m.a.createElement(i.a,{tag:"p"},e.description)))))),m.a.createElement("nav",{className:"footer_Nav"},m.a.createElement("div",{className:"gsc_container"},m.a.createElement("div",{className:"gsc_row"},s.d.map((e,a)=>m.a.createElement("div",{key:a,className:"gsc_col-sm-3"},m.a.createElement(i.a,{tag:"div",className:"title"},e.text),e.child&&l(e.child,e.cls,e.datapopup))),m.a.createElement("div",{className:"SocialIcons gsc_col-sm-3"},m.a.createElement(i.a,{tag:"div",className:"title"},"Follow us"),m.a.createElement("ul",null,m.a.createElement("li",null,m.a.createElement(r.a,{target:"_blank",urlKey:"urlWithoutBackslash",default:!0,prefix:!1,slug:"https://www.facebook.com/CarDekho/",title:"Facebook"},m.a.createElement("span",{className:"icon-cd-fb-icon"}))),m.a.createElement("li",null,m.a.createElement(r.a,{target:"_blank",urlKey:"urlWithoutBackslash",default:!0,prefix:!1,slug:"https://twitter.com/CarDekho",title:"Twitter"},m.a.createElement("span",{className:"icon-cd_twitter"}))),m.a.createElement("li",null,m.a.createElement(r.a,{target:"_blank",urlKey:"urlWithoutBackslash",default:!0,prefix:!1,slug:"https://www.youtube.com/channel/UCMSjsvDuobchFSw5U1SDaqg",title:"Youtube"},m.a.createElement("span",{className:"icon-youtube"}))),m.a.createElement("li",null,m.a.createElement(r.a,{target:"_blank",urlKey:"urlWithoutBackslash",default:!0,prefix:!1,slug:"https://www.instagram.com/cardekhoindia/",title:"Instagram"},m.a.createElement("span",{className:"icon-instagram"})))))))),m.a.createElement("div",{className:"footerbottom"},m.a.createElement("div",{className:"gsc_container"},m.a.createElement("div",{className:"gsc_row"},m.a.createElement("div",{className:"gsc_col-xs-4"},m.a.createElement("p",{className:"copyRight"},"© ",(new Date).getFullYear()," Girnar Software Pvt. Ltd.")),m.a.createElement("div",{className:"gsc_col-xs-8"},t&&m.a.createElement("div",{className:"innternal_Domain"},m.a.createElement(r.a,{target:"_blank",urlKey:"urlWithoutBackslash",default:!0,prefix:!1,slug:"https://www.gaadi.com/?utm_source=cardekho&utm_medium=internal&utm_campaign=Footer",title:"Gaadi"},m.a.createElement(n.a,{src:c.a.imgPath+"/gaadi-new-logo.svg",webp:c.a.imgPath+"/zigwheels.webp",title:"Gaadi",alt:"Gaadi","data-lazy":!0,type:"image"})),m.a.createElement(r.a,{target:"_blank",urlKey:"urlWithoutBackslash",default:!0,prefix:!1,slug:"https://www.zigwheels.com/",title:"Zigwheels"},m.a.createElement(n.a,{shimmer:!1,src:c.a.imgPath+"/zigwheels.png",webp:c.a.imgPath+"/zigwheels.webp",title:"ZigWheels",alt:"ZigWheels","data-lazy":!0,type:"image"})),m.a.createElement(r.a,{target:"_blank",urlKey:"urlWithoutBackslash",default:!0,prefix:!1,slug:"https://www.bikedekho.com/",title:"Bikedekho"},m.a.createElement(n.a,{shimmer:!1,src:c.a.imgPath+"/bikedekho.png",webp:c.a.imgPath+"/bikedekho.webp",title:"BikeDekho",alt:"BikeDekho","data-lazy":!0,type:"image"})),m.a.createElement(r.a,{target:"_blank",urlKey:"urlWithoutBackslash",default:!0,prefix:!1,slug:"https://www.insurancedekho.com/?utm_source=cardekho&utm_medium=internal&utm_campaign=Footer",title:"Car Insurance"},m.a.createElement(n.a,{shimmer:!1,src:c.a.imgPath+"/logo/id-main-logo.svg",webp:c.a.imgPath+"/logo/id-main-logo.svg",title:"Car Insurance",alt:"Car Insurance","data-lazy":!0,type:"image"}))))))))}}}]);
(window.webpackJsonp=window.webpackJsonp||[]).push([[198],{"./cd/utils/globalLazy.js":function(e,r,a){"use strict";a.r(r);var t=a("./node_modules/react-router/es/index.js"),o=a("./cd/configs/configs.js"),n=a.n(o),i=Object.assign||function(e){for(var r=1;r<arguments.length;r++){var a=arguments[r];for(var t in a)Object.prototype.hasOwnProperty.call(a,t)&&(e[t]=a[t])}return e};r.default={updateCentralMMVToGaadiMMV:function(e,r,a){void 0!==e&&e.period&&e.variant_id||a();let t=this.getLocalStorageItem("GaadiData")||{};this.API.getAPI("CentralMMVtoGaadiMMV",e,!0,!1).then(e=>{e&&e.data||a(),e.data&&e.data.year_id&&(t=i({},t,r,e.data),this.setLocalStorageItem("GaadiData",t),a())})},GTMTrackingSubmitLeadForSelectAllCases(e){let r={},a=e.defaultSelected;r.event="pwaClick",r.pwaComponentName="leadformselectall",r.pwaSectionName=e.modelName?e.modelName:"",r.pwaLinkLabel="selectalldealer",r.pwaAction=a?"selectallskip":"selectallclick",this.setDataLayer(null,null,!0,!1,r)},thirdPartytrackingHit(e){if(void 0!==e){var r="<img src='"+e+"' class='hide' id='sponsoredCompareTempImg'>";$("body").append(r),$("#sponsoredCompareTempImg").detach()}},getLazyComponent(e,r){"function"==typeof r&&r(s(e))},getRoutePopup(e,r){const a=p(e);if(this.isEmptyObject(a))r({popupComponent:[],params:{},paramsRequired:!1,close:!0});else{switch(e){case"#myaccount":let e=this.getLoyaltyCookie().ts,n=window&&window._issubscribe;var o=localStorage&&localStorage.getItem("logout");let i=!!o&&JSON.parse(o);if(void 0!==e&&e.length>1&&1!=n&&!i)return window.__doNotScroll=!0,window.__openHashPopup=!1,setTimeout((function(){t.e.push("/my-account.htm"),this.closeHashPopup()}),10),void r({popupComponent:[],params:{},paramsRequired:!1,close:!0});break;case"#city":return void r(a)}s(e).then(({default:e})=>{r({popupComponent:[{component:e,propAttr:a.propAttr||{},children:a.children||""}],paramsRequired:a.paramsRequired||!1})})}},getGaadiStoreCity(e){let r=sessionStorage.getItem("gaadiStoreCity")&&"undefined"!=sessionStorage.getItem("gaadiStoreCity")?JSON.parse(sessionStorage.getItem("gaadiStoreCity")):"";if(r)"function"==typeof e&&e(r);else{this.API.getAPI("MMVCityData",{},!0).then(e=>{null!=e&&(r=e.gaadiStoreCities,sessionStorage.setItem("gaadiStoreCity",JSON.stringify(e.gaadiStoreCities)))}).catch(a=>{console.error("error",a),"function"==typeof e&&e(r)}),this.API.getAPI("GaadiStoreCityList",{},!0).then(r=>{if(null!=r){let a=r.cities;sessionStorage.setItem("gaadiCities",JSON.stringify(a)),"function"==typeof e&&e(a)}}).catch(e=>{console.error("error",e)})}},customGAPageViews(){try{"object"==typeof window.dataLayer&&window.dataLayer.length&&window.dataLayer[0].originalLocation&&ga("myTracker.set","location",window.dataLayer[0].originalLocation),ga("myTracker.set","dimension1",window.dataLayerObj.template_name_new),ga("myTracker.set","dimension2",window.dataLayerObj.brand_new),ga("myTracker.set","dimension3",window.dataLayerObj.model_new),ga("myTracker.set","dimension4",window.dataLayerObj.variant_new),ga("myTracker.set","dimension5",window.dataLayerObj.body_type_new),ga("myTracker.set","contentGroup4",window.dataLayerObj.template_name_new),ga("myTracker.set","page",document.location.pathname),ga("myTracker.send","pageview")}catch(e){}},postRating(e,r){this.API.POSTAPI("SubmitUserRating",{modelId:r,rating:e,usrid:this.getCookie("CUID")?this.getCookie("CUID"):""},!0)},setWidgetsPageTracking(e,r,a){const t=e=>void 0!==e&&["used","Used","Second","second","USED"].some(r=>e.includes(r)),o=e=>void 0===e||!["Valuation","valuation","Dealer","dealer","Search Used Cars","New"].some(r=>e.includes(r));try{let i=sessionStorage&&sessionStorage.getItem("leadOriginWidget");if(this.isEmptyObject(i)&&(t(e)||t(r)||t(a))&&o(e)&&o(r)&&o(a))for(var n=dataLayer.length-1;n>=0;n--){let t=dataLayer[n];if(void 0!==t.page_type){sessionStorage.setItem("leadOriginPage",t.page_type),sessionStorage.setItem("leadOriginWidget",e+" | "+r+" | "+a);break}}}catch(e){console.log(e)}},APIDBCount(e,r,a){let t=e.replace(n.a.baseUrl+"/","");this.API.postWithJson("postShareApi",{url:t,shareCount:r.toString(),fbCommentCount:a.toString()},!1).then(e=>{})},changeCityUrlOnPageReload(e,r,a,t,o){if(e.includes("/used-car-dealers")||e.includes("/used-car-valuation.htm"))o(e);else{if(e.includes("car-on-road-price-in-"))e=e.replace(/car-on-road-price-in-(.*).htm/g,"car-on-road-price-in-"+r.toLowerCase().replace(a,"-")+".htm");else if(e.includes("car-deals-discount-offers-in-"))e=e.replace(/car-deals-discount-offers-in-(.*).htm/g,"car-deals-discount-offers-in-"+r.toLowerCase().replace(a,"-")+".htm");else if(e.includes("cardealers")&&3===t.length)e=n.a.baseUrl+"/"+t[0]+"/"+r.replace(a,"_")+"/"+t[2];else if(e.includes("car-service-center.htm")&&3===t.length)e=n.a.baseUrl+"/"+t[0]+"/"+r.replace(a,"_")+"/"+t[2];else if(e.includes("car-driving-school")&&2===t.length)e=n.a.baseUrl+"/"+t[0]+"/"+r.replace(a,"_");else if(e.includes("car-price-in-"))e=e.replace(/car-price-in-(.*).htm/g,"car-price-in-"+r.toLowerCase().replace(a,"-")+".htm");else if(e.includes("/price-in-"))e=e.replace(/price-in-(.*)/g,"price-in-"+r.toLowerCase().replace(a,"-"));else if(e.includes("/offers-in-"))e=e.replace(/offers-in-(.*)/g,"offers-in-"+r.toLowerCase().replace(a,"-"));else if(e.includes("/used-car-dealers/"))e=e.replace(/used-car-dealers(.*)/g,"used-car-dealers/"+r.toLowerCase().replace(a,"-"));else if(e.includes("/new-car-deals-in-"))e=e.replace(/new-car-deals-in-(.*)/g,"new-car-deals-in-"+r.toLowerCase().replace(a,"-")+".htm");else if(e.includes("/used-"))if(e.includes("india"))e=e.replace("india",r.toLowerCase().replace(a,"-"));else if(e.indexOf("in+")){if(e.includes("in+")){let t=e.split("+in+");e=t[0]+"+in+"+r.toLowerCase().replace(a,"-")}}else e=e+"+in+"+r.toLowerCase().replace(a,"-");else e.includes("/discounts-in-")?e=e.replace(/discounts-in-(.*).htm/g,"discounts-in-"+r.replace(a,"_")+".htm"):e.includes("electric-charging-station")&&3===t.length&&(e="/"+t[0]+"/"+r.toLowerCase().replace(a,"-")+"/"+t[2]);if("undefined"!=typeof urlstring&&"undefined"!=typeof urlcontaincity){var i="";i=null==sessioncity||""==sessioncity||"india"==sessioncity||urlstring.indexOf(r.toLowerCase().replace(/ /g,"-"))<0?"new-"+urlstring.replace(/ /g,"+")+"+in+"+r.toLowerCase().replace(/ /g,"-"):"new-"+urlstring.replace(/ /g,"+").replace(sessioncity.toLowerCase().replace(/ /g,"-"),r.toLowerCase().replace(/ /g,"-")),e=n.a.baseUrl+"/"+i}o(e)}},CallUpdateCounterApi(e,r){"function"==typeof r&&r(this.API.getAPI("UpdateReviewCounter",e,!0))}};const s=e=>{switch(e){case"CarComparisons":return a.e(28).then(a.bind(null,"./girnarsoft-react-common/widgets/CarComparisons.js"));case"CompareCarPopup":return a.e(45).then(a.bind(null,"./girnarsoft-react-common/widgets/CompareCarPopup.js"));case"DCBDealers":return a.e(51).then(a.bind(null,"./girnarsoft-react-common/widgets/DCBDealers.js"));case"EmiCalculate":return a.e(59).then(a.bind(null,"./girnarsoft-react-common/widgets/model/EmiCalculate.js"));case"ThankyouScreen":return a.e(152).then(a.bind(null,"./girnarsoft-react-common/widgets/ThankyouScreen.js"));case"BookTestDrive":return a.e(12).then(a.bind(null,"./girnarsoft-react-common/widgets/BookTestDrive.js"));case"ModelScreen":return a.e(90).then(a.bind(null,"./girnarsoft-react-common/widgets/ModelScreen.js"));case"AddCompareCarCard":return a.e(5).then(a.bind(null,"./girnarsoft-react-common/widgets/card/AddCompareCarCard.js"));case"CrossSellCarousal":return a.e(49).then(a.bind(null,"./girnarsoft-react-common/widgets/CrossSellCarousal.js"));case"OfferWidget":return a.e(116).then(a.bind(null,"./girnarsoft-react-common/widgets/OfferWidget.js"));case"SpareParts":return a.e(145).then(a.bind(null,"./girnarsoft-react-common/widgets/SpareParts.js"));case"MileageTable":return a.e(83).then(a.bind(null,"./girnarsoft-react-common/widgets/model/MileageTable.js"));case"MonthlyFuelCost":return a.e(94).then(a.bind(null,"./girnarsoft-react-common/widgets/model/monthlyFuelCost.js"));case"RecommendedTabbinCarousel":return a.e(131).then(a.bind(null,"./girnarsoft-react-common/widgets/home/RecommendedTabbinCarousel.js"));case"MoreReviewTag":return a.e(96).then(a.bind(null,"./girnarsoft-react-common/widgets/MoreReviewTag.js"));case"SellCarWidget":return a.e(163).then(a.bind(null,"./girnarsoft-react-common/widgets/SellCarWidget.js"));case"ThankyouPopup":return a.e(165).then(a.bind(null,"./girnarsoft-react-common/widgets/ThankyouPopup.js"));case"RecommendedUsedCar":return a.e(162).then(a.bind(null,"./girnarsoft-react-common/widgets/RecommendedUsedCar.js"));case"WhatsappEntryWidget":return a.e(166).then(a.bind(null,"./girnarsoft-react-common/widgets/WhatsappEntryWidget.js"));case"UsedCarRefinance":return a.e(177).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCarDetails/UsedCarRefinance.js"));case"SelllerLocation":return a.e(164).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCarDetails/SelllerLocation.js"));case"Leadcomponent":return a.e(160).then(a.bind(null,"./girnarsoft-react-common/widgets/Leadcomponent.js"));case"UsedCarLeadPopup":return a.e(174).then(a.bind(null,"./girnarsoft-react-common/widgets/UsedCarLeadPopup.js"));case"LanguageChange":return Promise.resolve().then(a.bind(null,"./girnarsoft-react-common/widgets/LanguageChange.js"));case"CityTypeahead":return Promise.resolve().then(a.bind(null,"./girnarsoft-react-common/widgets/CityTypeahead.js"));case"NotificationPopUp":return a.e(110).then(a.bind(null,"./girnarsoft-react-common/widgets/NotificationPopUp.js"));case"Footer":return a.e(63).then(a.bind(null,"./girnarsoft-react-common/widgets/Footer.js"));case"FooterMobi":return a.e(64).then(a.bind(null,"./girnarsoft-react-common/widgets/FooterMobi.js"));case"QuestionAndAnswers":return a.e(129).then(a.bind(null,"./girnarsoft-react-common/widgets/model/QuestionAndAnswers.js"));case"offerSidebar":return a.e(209).then(a.bind(null,"./girnarsoft-react-common/widgets/model/offerSidebar.js"));case"CommonTabbinCarousel":return a.e(44).then(a.bind(null,"./girnarsoft-react-common/widgets/CommonTabbinCarousel.js"));case"AddToHomeScreen":return Promise.resolve().then(a.bind(null,"./girnarsoft-react-common/widgets/AddToHomeScreen.js"));case"RecommendedNextStep":return a.e(130).then(a.bind(null,"./girnarsoft-react-common/widgets/RecommendedNextStep.js"));case"HomeNewsTab":return a.e(70).then(a.bind(null,"./girnarsoft-react-common/widgets/home/HomeNewsTab.js"));case"View360":return a.e(186).then(a.bind(null,"./girnarsoft-react-common/widgets/model/View360.js"));case"emiStart":return a.e(197).then(a.bind(null,"./girnarsoft-react-common/widgets/model/emiStart.js"));case"costOfOwnerShip":return a.e(196).then(a.bind(null,"./girnarsoft-react-common/widgets/model/costOfOwnerShip.js"));case"UsedCarsByCity":return a.e(178).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCarDetails/UsedCarsByCity.js"));case"FeedBackForm":return a.e(0).then(a.bind(null,"./girnarsoft-react-common/widgets/FeedBackForm.js"));case"BookTestDriveForm":return a.e(2).then(a.bind(null,"./girnarsoft-react-common/widgets/BookTestDriveForm.js"));case"ColorsExplore":return a.e(42).then(a.bind(null,"./girnarsoft-react-common/widgets/animationMG/ColorsExplore.js"));case"Comments":return a.e(43).then(a.bind(null,"./girnarsoft-react-common/widgets/model/Comments.js"));case"MoreBelow":return a.e(95).then(a.bind(null,"./girnarsoft-react-common/widgets/MoreBelow.js"));case"WhatsappUsedCar":return a.e(43).then(a.bind(null,"./girnarsoft-react-common/widgets/WhatsappUsedCar.js"));case"OfferStrip":return a.e(43).then(a.bind(null,"./girnarsoft-react-common/widgets/model/OfferStrip.js"));case"loginPopup":return a.e(205).then(a.bind(null,"./girnarsoft-react-common/widgets/loginPopup.js"));case"ThankYouScreenNewDesign":return a.e(150).then(a.bind(null,"./girnarsoft-react-common/widgets/ThankYouScreenNewDesign.js"));case"CarCollectionsPanel":return a.e(27).then(a.bind(null,"./girnarsoft-react-common/widgets/model/CarCollectionsPanel.js"));case"GarageForm":return a.e(68).then(a.bind(null,"./girnarsoft-react-common/widgets/GarageForm.js"));case"Speech":return a.e(147).then(a.bind(null,"./girnarsoft-react-common/widgets/SpeechNew.js"));case"OCBBanner":return a.e(111).then(a.bind(null,"./girnarsoft-react-common/widgets/OCBBanner.js"));case"InventoryNew":return a.e(75).then(a.bind(null,"./girnarsoft-react-common/widgets/InventoryNew.js"));case"BookingEmiCalculate":return a.e(13).then(a.bind(null,"./girnarsoft-react-common/widgets/model/BookingEmiCalculate.js"));case"DealerWidget":return a.e(56).then(a.bind(null,"./girnarsoft-react-common/widgets/DealerWidget.js"));case"SellCarBestPrice":return a.e(139).then(a.bind(null,"./girnarsoft-react-common/widgets/SellCarBestPrice.js"));case"InventoryBanner":return a.e(73).then(a.bind(null,"./girnarsoft-react-common/widgets/InventoryBanner.js"));case"OcbStrip":return a.e(114).then(a.bind(null,"./girnarsoft-react-common/widgets/OcbStrip.js"));case"DetectLocation":return a.e(57).then(a.bind(null,"./girnarsoft-react-common/widgets/DetectLocation.js"));case"UsedCarGeolocationSearch":return a.e(172).then(a.bind(null,"./girnarsoft-react-common/widgets/UsedCarGeolocationSearch.js"));case"BuyUsedCarGeolocationSearch":return a.e(22).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/BuyUsedCarGeolocationSearch.js"));case"MastHeadYouTube":return a.e(82).then(a.bind(null,"./girnarsoft-react-common/widgets/home/MastHeadYouTube.js"));case"ShimmerType":return a.e(143).then(a.bind(null,"./girnarsoft-react-common/elements/ShimmerType.js"));case"UcbookingentrypointSrpHomePage":return a.e(167).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/UcbookingentrypointSrpHomePage.js"));case"BuyRecommendedUsedCar":return a.e(19).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/BuyRecommendedUsedCar.js"));case"UCBookingEntry":return a.e(154).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/ucBookingEntry.js"));case"#advertise":return a.e(190).then(a.bind(null,"./girnarsoft-react-common/widgets/AdvertiseWithUs.js"));case"#feedback":return a.e(122).then(a.bind(null,"./girnarsoft-react-common/widgets/PopUpFeedback.js"));case"#leadForm":return a.e(204).then(a.bind(null,"./girnarsoft-react-common/widgets/NewLeadForm.js"));case"#usedCarCity":return a.e(176).then(a.bind(null,"./girnarsoft-react-common/widgets/UsedCarPopUpCity.js"));case"#BuyUsedCarPopUpCity":return a.e(24).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/BuyUsedCarPopUpCity.js"));case"#ucLeadForm":return a.e(174).then(a.bind(null,"./girnarsoft-react-common/widgets/UsedCarLeadPopup.js"));case"#ucthankyou":return a.e(165).then(a.bind(null,"./girnarsoft-react-common/widgets/ThankyouPopup.js"));case"#thankyou":return a.e(151).then(a.bind(null,"./girnarsoft-react-common/widgets/ThankyouPopupUsedCarDealer.js"));case"#dealerconnect":return a.e(55).then(a.bind(null,"./girnarsoft-react-common/widgets/DealerConnectPopup.js"));case"#ucBookingCancel":return a.e(213).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/ucBookingCancel.js"));case"#ucBookingUpload":return a.e(215).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/ucBookingUpload.js"));case"#ucBookingReturn":return a.e(214).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/ucBookingReturn.js"));case"#pictureNewgallery":return a.e(1).then(a.bind(null,"./girnarsoft-react-common/widgets/model/PopUpNewPictureGallery.js"));case"#pictureUsedgallery":return a.e(120).then(a.bind(null,"./girnarsoft-react-common/widgets/model/PopUpUsedPictureGallery.js"));case"#pictureUsedCarBookinggallery":return a.e(123).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/PopUpUsedCarBookingPictureGallery.js"));case"#searchbrand":return a.e(137).then(a.bind(null,"./girnarsoft-react-common/widgets/SearchBrand.js"));case"#morelink":return a.e(208).then(a.bind(null,"./girnarsoft-react-common/widgets/home/moreLinkPopup.js"));case"#loginPopup":return a.e(205).then(a.bind(null,"./girnarsoft-react-common/widgets/loginPopup.js"));case"#testdriveform":return a.e(2).then(a.bind(null,"./girnarsoft-react-common/widgets/BookTestDriveForm.js"));case"#comments":return a.e(194).then(a.bind(null,"./girnarsoft-react-common/widgets/UserCommentsForm.js"));case"#ucFeedBack":return a.e(0).then(a.bind(null,"./girnarsoft-react-common/widgets/FeedBackForm.js"));case"#reportPrice":return a.e(210).then(a.bind(null,"./girnarsoft-react-common/widgets/PopupReportPrice.js"));case"#reportSpecs":return a.e(211).then(a.bind(null,"./girnarsoft-react-common/widgets/PopupReportSpecs.js"));case"#gaadi-store":return a.e(66).then(a.bind(null,"./girnarsoft-react-common/widgets/gaadi/GaadiLeadformPopup.js"));case"#online-booking":return a.e(52).then(a.bind(null,"./girnarsoft-react-common/widgets/model/DealBookingForm.js"));case"#myaccount":case"#uploaddocs":return a.e(98).then(a.bind(null,"./girnarsoft-react-common/widgets/MyAccountPop.js"));case"#service-booking":return a.e(142).then(a.bind(null,"./girnarsoft-react-common/widgets/ServiceForm.js"));case"#insurance":return a.e(72).then(a.bind(null,"./girnarsoft-react-common/widgets/InsuranceForm.js"));case"#inventory-booking":return a.e(112).then(a.bind(null,"./girnarsoft-react-common/widgets/model/OCBInventoryForm.js"));case"#deal-booking":return a.e(74).then(a.bind(null,"./girnarsoft-react-common/widgets/model/InventoryBookingForm.js"));case"#alert":return a.e(121).then(a.bind(null,"./girnarsoft-react-common/widgets/PopUpAlert.js"));case"#testdrive-booking":return a.e(149).then(a.bind(null,"./girnarsoft-react-common/widgets/model/TestDriveForm.js"));case"#bookyourcar":return a.e(168).then(a.bind(null,"./girnarsoft-react-common/widgets/usedCar/UcobUserInfo.js"));case"#pincode":return a.e(41).then(a.bind(null,"./girnarsoft-react-common/widgets/CityPincodePopup.js"));case"#nctBook":return a.e(14).then(a.bind(null,"./girnarsoft-react-common/widgets/dealConfigure/BookingFlow.js"))}},p=e=>({"#advertise":{paramsRequired:!1},"#ucBookingCancel":{propAttr:{settings:[{prop:"item",apiKey:"params.item"},{prop:"bookingRefCode",apiKey:"params.bookingRefCode"},{prop:"cancelReasons",apiKey:"params.cancelReasons"},{prop:"isThankupageType",apiKey:"params.isThankupageType"}],id:"ucBookingCancel",popup:!0},paramsRequired:!1},"#ucBookingUpload":{propAttr:{settings:[{prop:"bookingRefCode",apiKey:"params.bookingRefCode"}],id:"ucBookingUpload",popup:!0},paramsRequired:!1},"#ucBookingReturn":{propAttr:{settings:[{prop:"item",apiKey:"params.item"},{prop:"bookingRefCode",apiKey:"params.bookingRefCode"},{prop:"cancelReasons",apiKey:"params.cancelReasons"},{prop:"isThankupageType",apiKey:"params.isThankupageType"}],id:"ucBookingCancel",popup:!0},paramsRequired:!1},"#feedback":{propAttr:{id:"feedpopup",popup:!0},paramsRequired:!1},"#leadForm":{propAttr:{popup:!0,settings:[{prop:"LFObj",apiKey:"params"}]},paramsRequired:!0},"#city":{cityCls:"show",routepopup:!0},"#usedCarCity":{propAttr:{settings:[{prop:"cities",apiKey:"params.cities"},{prop:"popularcitieslist",apiKey:"params.popularcitieslist"},{prop:"popularLocations",apiKey:"params.popularLocations"},{prop:"editMode",apiKey:"params.editMode"},{prop:"pinSearched",apiKey:"params.pinSearched"},{prop:"cbPinSearch",apiKey:"params.cbPinSearch"},{prop:"cbDetect",apiKey:"params.cbDetect"},{prop:"cbCancelCityPopup",apiKey:"params.cbcloseCityPopup"}]},paramsRequired:!0},"#BuyUsedCarPopUpCity":{propAttr:{settings:[{prop:"cities",apiKey:"params.cities"},{prop:"popularcitieslist",apiKey:"params.popularcitieslist"},{prop:"popularLocations",apiKey:"params.popularLocations"},{prop:"editMode",apiKey:"params.editMode"},{prop:"pinSearched",apiKey:"params.pinSearched"},{prop:"cbPinSearch",apiKey:"params.cbPinSearch"},{prop:"cbDetect",apiKey:"params.cbDetect"},{prop:"cbCancelCityPopup",apiKey:"params.cbcloseCityPopup"},{prop:"loocationTrigger",apiKey:"params.loocationTrigger"},{prop:"total_count",apiKey:"params.total_count"}]},paramsRequired:!0},"#ucLeadForm":{propAttr:{settings:[{prop:"leadData",apiKey:"params.leadData"},{prop:"heading",apiKey:"params.heading"},{prop:"subHead",apiKey:"params.subHead"},{prop:"leadLocation",apiKey:"params.leadLocation"},{prop:"cbWhatsAppOtpIn",apiKey:"params.cbWhatsAppOtpIn"},{prop:"cbUcDCB",apiKey:"params.cbUcDCB"},{prop:"isFeatured",apiKey:"params.isFeatured"}]},paramsRequired:!0},"#ucthankyou":{propAttr:{settings:[{prop:"leadResult",apiKey:"params.leadData"},{prop:"leadLocation",apiKey:"params.leadLocation"}]},paramsRequired:!0},"#thankyou":{propAttr:{settings:[{prop:"leadResult",apiKey:"params.leadData"}]},paramsRequired:!0},"#dealerconnect":{propAttr:{settings:[{prop:"dcbDto",apiKey:"params"}]},paramsRequired:!0},"#pictureNewgallery":{propAttr:{id:"gallerypopup",popup:!0,settings:[{prop:"galleryObj",apiKey:"params"},{prop:"usedcar",apiKey:"params.usedCar"},{prop:"cta",apiKey:"params.cta"}]},paramsRequired:!0},"#pictureUsedgallery":{propAttr:{id:"gallerypopup",popup:!0,settings:[{prop:"galleryObj",apiKey:"params"},{prop:"usedcar",apiKey:"params.usedCar"},{prop:"cta",apiKey:"params.cta"},{prop:"isOnlineBooking",apiKey:"params.isOnlineBooking"}]},paramsRequired:!0},"#pictureUsedCarBookinggallery":{propAttr:{id:"gallerypopup",popup:!0,settings:[{prop:"galleryObj",apiKey:"params"},{prop:"usedcar",apiKey:"params.usedCar"},{prop:"cta",apiKey:"params.cta"},{prop:"isOnlineBooking",apiKey:"params.isOnlineBooking"}]},paramsRequired:!0},"#searchbrand":{propAttr:{settings:[{prop:"searchObj",apiKey:"params"},{prop:"handleOEMSearch",funcName:"handleOEMSearch"}]},paramsRequired:!0},"#morelink":{propAttr:{settings:[{prop:"moreLinkObj",apiKey:"params"}]},paramsRequired:!0},"#loginPopup":{propAttr:{popup:!0,settings:[{prop:"popupParams",apiKey:"params"}]},paramsRequired:!0},"#testdriveform":{propAttr:{popup:!0,settings:[{prop:"popupParams",apiKey:"params"}]},paramsRequired:!0},"#comments":{propAttr:{settings:[{prop:"params",apiKey:"params"}]},paramsRequired:!0},"#ucFeedBack":{propAttr:{settings:[{prop:"usedCarId",apiKey:"params.usedCarId"}],popup:!0,id:"ucFeedBack"},paramsRequired:!0},"#reportPrice":{propAttr:{settings:[{prop:"popupType",apiKey:"params"}]},paramsRequired:!0},"#reportSpecs":{propAttr:{settings:[{prop:"params",apiKey:"params"}]},paramsRequired:!0},"#gaadi-store":{propAttr:{settings:[{prop:"domain",apiKey:"domain"},{prop:"baseUrl",apiKey:"baseUrl"},{prop:"logoUrl",apiKey:"logoUrl"},{prop:"page_location",apiKey:"page_location"},{prop:"skipRegNu",apiKey:"skipRegNu"}]},paramsRequired:!1},"#online-booking":{propAttr:{settings:[{prop:"modelId",apiKey:"modelId"},{prop:"carVariantId",apiKey:"carVariantId"},{prop:"carVariantCentralId",apiKey:"carVariantCentralId"}]},paramsRequired:!1},"#myaccount":{propAttr:{id:"myaccountpopup",popup:!0,settings:[{prop:"leadData",apiKey:"params.leadData"}]},paramsRequired:!1},"#uploaddocs":{propAttr:{id:"myaccountpopup",popup:!0,settings:[{prop:"leadData",apiKey:"params.leadData"}]},paramsRequired:!0},"#service-booking":{propAttr:{id:"ServiceForm",popup:!0,settings:[{prop:"params",apiKey:"params"}]},paramsRequired:!0},"#insurance":{propAttr:{id:"InsuranceForm",popup:!0,settings:[{prop:"params",apiKey:"params"}]},paramsRequired:!0},"#inventory-booking":{propAttr:{},paramsRequired:!1},"#deal-booking":{propAttr:{settings:[{prop:"carVariantId",apiKey:"carVariantId"},{prop:"modelId",apiKey:"modelId"}]},paramsRequired:!1},"#alert":{propAttr:{settings:[{prop:"message",apiKey:"params"}]},paramsRequired:!0},"#testdrive-booking":{propAttr:{},paramsRequired:!1},"#bookyourcar":{propAttr:{id:"bookyourcar",popup:!0,settings:[{prop:"params",apiKey:"params"}]},paramsRequired:!0},"#pincode":{propAttr:{settings:[{prop:"params",apiKey:"params"}],paramsRequired:!0}},"#nctBook":{propAttr:{settings:[{prop:"params",apiKey:"params"}],paramsRequired:!0}}}[e]||{})},"./girnarsoft-react-common/utils/globalLazy.js":function(e,r,a){"use strict";a.r(r),r.default={openAlertPopup(e){this.openHashPopup("alert");let r=document.getElementsByClassName("hashPopup");if(r.length){this.getReactElement(r[0]).setState({params:e})}},fetchCount(e){let r=configs.PiUrl+e,a=configs.FbUrl+e;this.APIPiCount(r,a,e)},APIPiCount(e,r,a){let t=this;this.API.getShares(e,"PI").then(e=>{t.APIFBCount(r,e,a)})},APIFBCount(e,r,a){let t=this;this.API.getShares(e,"FB").then(e=>{let o=e.share_count+r;t.APIDBCount(a,o,e.comment_count)})},updateLeadForm:function(e){let r=this.getCookie("leadForm");""!=r&&void 0!==r?(void 0===r.choices&&(r.choices={}),void 0===r.formData&&(r.formData={})):r={choices:{},formData:{}},r.formData=((e,r)=>(e.cityName=this.getCurrentCity()?this.getCurrentCity():"",e.cityId=this.getCookie("CityId")?this.getCookie("CityId"):"",e.userId=r.userId,e.emailId=r.emailId,e.mobileNo=r.mobileNo,e.isVerify=null!=r.isVerify?r.isVerify:1,e.carName=r.carName,e.leadType=r.leadType,e.oemName=r.oemName,e.carVariantId=r.carVariantId,e.carDetailUrl=r.carDetailUrl,e.latitude=r.latitude,e.longitude=r.longitude,e))(r.formData,e),this.setCookie("leadForm",r,30),this.updateUserNameInHeader()},afterPageView(){let e=this;setTimeout((function(){document.getElementById("main-css")&&(document.getElementById("main-css").onload=()=>{$("#deferred-styles").detach()}),$("#criticalcss,[data-temp-styles]").detach();try{if(void 0!==window.backComponent&&(window.history.state&&window.history.state.key==window.backStateKey||null==window.history.state||""==window.history.state)){let e=$('[data-backid="'+window.backComponent+'"]');0==e.length&&(e=$('[data-track-component="'+window.backComponent+'"]')),window.scrollTo(0,e.offset().top),delete window.backComponent}}catch(e){}e.loadAdOnScroll(),e.removeClsOnScroll()}),10),setTimeout((function(){try{e.callConnecto()}catch(e){console.log("connecto error",e)}}),500),e.customGAPageViews()},sendDataToGa(e,r,a,t,o){try{t=t||0,ga("set","page",document.location.pathname),o?ga("send","event",e,r,a,0,!0):ga("send","event",e,r,a,t,!1)}catch(e){}},setMetaTags(e){$("title").html(e.title),$('meta[property="og:title"]').attr("content",e.title),$('meta[property="og:image"]').attr("content",e.ogImage?e.ogImage:""),$('meta[property="og:description"], meta[name="description"]').attr("content",e.metaDescription),$('meta[property="og:url"]').attr("content",window.location.href)},clearAndSetTargetsForAd(){var e=$('div[data-type="pixelTracking"]');e.length>0&&e.attr("data-slot-def",e.data("sdef"));try{googletag.cmd.push((function(){googletag.destroySlots(),googletag.pubads().clear(),googletag.pubads().clearTargeting(),connectoSegments.setAdTargetFromSegments((function(e){if(e.length>0)for(var r=0;r<e.length;r++)googletag.pubads().setTargeting(e[r].key,e[r].value)}))}))}catch(e){console.log(e)}},getPincodeLocality(e,r,a){let t=this;this.API.getAPI("NewLocality",r,!0).then(r=>{let o=r.data;if(!t.isEmptyObject(o))for(var n in o)o[n].regionId&&e.push({text:o[n].displayName,value:o[n].regionName,"group-child":!0,"group-parent":o[n].city,id:`${o[n].cityId}#${o[n].regionId}`,RID:o[n].regionId,pincode:o[n].pincode});a(e)})}}}}]);
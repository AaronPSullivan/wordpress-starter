!function(e){function t(t){for(var n,i,u=t[0],a=t[1],f=t[2],p=0,l=[];p<u.length;p++)i=u[p],Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&l.push(o[i][0]),o[i]=0;for(n in a)Object.prototype.hasOwnProperty.call(a,n)&&(e[n]=a[n]);for(s&&s(t);l.length;)l.shift()();return c.push.apply(c,f||[]),r()}function r(){for(var e,t=0;t<c.length;t++){for(var r=c[t],n=!0,i=1;i<r.length;i++){var u=r[i];0!==o[u]&&(n=!1)}n&&(c.splice(t--,1),e=__webpack_require__(__webpack_require__.s=r[0]))}return e}var n={},o={16:0},c=[];function __webpack_require__(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,__webpack_require__),r.l=!0,r.exports}__webpack_require__.m=e,__webpack_require__.c=n,__webpack_require__.d=function(e,t,r){__webpack_require__.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},__webpack_require__.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},__webpack_require__.t=function(e,t){if(1&t&&(e=__webpack_require__(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(__webpack_require__.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)__webpack_require__.d(r,n,function(t){return e[t]}.bind(null,n));return r},__webpack_require__.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return __webpack_require__.d(t,"a",t),t},__webpack_require__.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},__webpack_require__.p="";var i=window.webpackJsonp=window.webpackJsonp||[],u=i.push.bind(i);i.push=t,i=i.slice();for(var a=0;a<i.length;a++)t(i[a]);var s=u;c.push([346,0]),r()}({122:function(e,t,r){"use strict";r.d(t,"a",(function(){return l})),r.d(t,"b",(function(){return y})),r.d(t,"l",(function(){return _})),r.d(t,"c",(function(){return E})),r.d(t,"d",(function(){return g})),r.d(t,"f",(function(){return b})),r.d(t,"g",(function(){return v})),r.d(t,"h",(function(){return O})),r.d(t,"i",(function(){return I})),r.d(t,"e",(function(){return R})),r.d(t,"j",(function(){return h})),r.d(t,"k",(function(){return T}));var n=r(111),o=r.n(n),c=r(20),i=r.n(c),u=r(74),a=r.n(u),s=r(180);function f(e,t){var r=Object.keys(e);return Object.getOwnPropertySymbols&&r.push.apply(r,Object.getOwnPropertySymbols(e)),t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r}function p(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?f(r,!0).forEach((function(t){i()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):f(r).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var l=function(e){return d(e,{initialize:_})},y=function(e,t){return b(e,t,(function(t,r){switch(r.type){case"INITIALIZE":return p({},e);default:return p({},t)}}))},d=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];var n=t.reduce((function(e,t){return p({},e,{},t)}),{}),c=t.reduce((function(e,t){return[].concat(o()(e),o()(Object.keys(t)))}),[]),i=w(c);return a()(0===i.length,"collect() cannot accept collections with duplicate keys. Your call to collect() contains the following duplicated functions: ".concat(i.join(", "),". Check your data stores for duplicates.")),n},_=function(){return{payload:{},type:"INITIALIZE"}},E=d,g=d,b=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];var n,o=[].concat(t);return"function"!=typeof o[0]&&(n=o.shift()),function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:n,t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return o.reduce((function(e,r){return r(e,t)}),e)}},v=d,O=d,I=d,R=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];var n=[].concat(t),o=w(n);return a()(o.length===n.length-1,"collectName() must not receive different names."),n.shift()},h={getRegistry:function(){return{type:"GET_REGISTRY"}}},T=i()({},"GET_REGISTRY",Object(s.d)((function(e){return function(){return e}}))),w=function(e){for(var t=[],r={},n=0;n<e.length;n++){var o=e[n];r[o]=r[o]>=1?r[o]+1:1,r[o]>1&&t.push(o)}return t}},182:function(e,t,r){"use strict";r.d(t,"a",(function(){return P}));var n=r(63),o=r.n(n),c=r(11),i=r.n(c),u=r(20),a=r.n(u),s=r(74),f=r.n(s),p=r(188),l=r.n(p);function y(e,t){var r=Object.keys(e);return Object.getOwnPropertySymbols&&r.push.apply(r,Object.getOwnPropertySymbols(e)),t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r}function d(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?y(r,!0).forEach((function(t){a()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):y(r).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var _=o.a.createRegistrySelector,E={connection:void 0,isFetchingConnection:!1},g={fetchConnection:function(){return{payload:{},type:"FETCH_CONNECTION"}},receiveConnection:function(e){return f()(e,"connection is required."),{payload:{connection:e},type:"RECEIVE_CONNECTION"}},receiveConnectionFailed:function(){return{payload:{},type:"RECEIVE_CONNECTION_FAILED"}}},b=a()({},"FETCH_CONNECTION",(function(){return l.a.get("core","site","connection")})),v={getConnection:i.a.mark((function e(){var t,r;return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,o.a.commonActions.getRegistry();case 3:if(t=e.sent,!t.select(P).getConnection()){e.next=7;break}return e.abrupt("return");case 7:return e.next=9,g.fetchConnection();case 9:return r=e.sent,e.abrupt("return",g.receiveConnection(r));case 13:return e.prev=13,e.t0=e.catch(0),e.abrupt("return",g.receiveConnectionFailed());case 16:case"end":return e.stop()}}),e,null,[[0,13]])}))},O={getConnection:function(e){return e.connection},isConnected:_((function(e){return function(){var t=e(P).getConnection();return void 0!==t?t.connected:t}})),isResettable:_((function(e){return function(){var t=e(P).getConnection();return void 0!==t?t.resettable:t}})),isSetupCompleted:_((function(e){return function(){var t=e(P).getConnection();return void 0!==t?t.setupCompleted:t}}))},I={INITIAL_STATE:E,actions:g,controls:b,reducer:function(e,t){var r=t.type,n=t.payload;switch(r){case"FETCH_CONNECTION":return d({},e,{isFetchingConnection:!0});case"RECEIVE_CONNECTION":return d({},e,{isFetchingConnection:!1,connection:n.connection});case"RECEIVE_CONNECTION_FAILED":return d({},e,{isFetchingConnection:!1});default:return d({},e)}},resolvers:v,selectors:O},R=r(215),h=r(122);function T(e,t){var r=Object.keys(e);return Object.getOwnPropertySymbols&&r.push.apply(r,Object.getOwnPropertySymbols(e)),t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r}function w(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?T(r,!0).forEach((function(t){a()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):T(r).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var m={isFetchingReset:!1},C={fetchReset:function(){return{payload:{},type:"FETCH_RESET"}},receiveReset:function(){return{payload:{},type:"RECEIVE_RESET"}},receiveResetFailed:function(){return{payload:{},type:"RECEIVE_RESET_FAILURE"}},reset:i.a.mark((function e(){return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,C.fetchReset();case 3:return e.next=5,C.receiveReset();case 5:return e.abrupt("return",Object(h.l)());case 8:return e.prev=8,e.t0=e.catch(0),e.abrupt("return",C.receiveResetFailed());case 11:case"end":return e.stop()}}),e,null,[[0,8]])}))},S=a()({},"FETCH_RESET",(function(){return l.a.set("core","site","reset")})),j={INITIAL_STATE:m,actions:C,controls:S,reducer:function(e,t){switch(t.type){case"FETCH_RESET":return w({},e,{isFetchingReset:!0});case"RECEIVE_RESET_FAILURE":return w({},e,{isFetchingReset:!1});case"RECEIVE_RESET":return w({},m);default:return w({},e)}},resolvers:{},selectors:{isDoingReset:function(e){return e.isFetchingReset}}},L=o.a.collectState(I.INITIAL_STATE,R.a.INITIAL_STATE,j.INITIAL_STATE),P="core/site",k={actions:o.a.addInitializeAction(o.a.collectActions(o.a.commonActions,I.actions,R.a.actions,j.actions)),controls:o.a.collectControls(o.a.commonControls,I.controls,R.a.controls,j.controls),reducer:o.a.addInitializeReducer(L,o.a.collectReducers(I.reducer,R.a.reducer,j.reducer)),resolvers:o.a.collectResolvers(I.resolvers,R.a.resolvers,j.resolvers),selectors:o.a.collectSelectors(I.selectors,R.a.selectors,j.selectors)};o.a.registerStore(P,k)},188:function(e,t){e.exports=googlesitekit.api},215:function(e,t,r){"use strict";(function(e){var n=r(11),o=r.n(n),c=r(20),i=r.n(c),u=r(74),a=r.n(u),s=r(63),f=r.n(s),p=r(182);function l(e,t){var r=Object.keys(e);return Object.getOwnPropertySymbols&&r.push.apply(r,Object.getOwnPropertySymbols(e)),t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r}function y(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?l(r,!0).forEach((function(t){i()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):l(r).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var d=f.a.createRegistrySelector,_={siteInfo:{adminURL:void 0,ampMode:void 0,currentEntityURL:void 0,currentEntityID:void 0,currentEntityTitle:void 0,currentEntityType:void 0,homeURL:void 0,referenceSiteURL:void 0}},E={receiveSiteInfo:function(e){return a()(e,"siteInfo is required."),{payload:{siteInfo:e},type:"RECEIVE_SITE_INFO"}}},g={getSiteInfo:o.a.mark((function t(){var r,n,c,i,u,a,s,f,p,l;return o.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(e._googlesitekitBaseData&&e._googlesitekitEntityData){t.next=3;break}return e.console.error("Could not load core/site info."),t.abrupt("return");case 3:return r=e._googlesitekitBaseData,n=r.adminURL,c=r.ampMode,i=r.homeURL,u=r.referenceSiteURL,a=e._googlesitekitEntityData,s=a.currentEntityURL,f=a.currentEntityID,p=a.currentEntityTitle,l=a.currentEntityType,t.next=7,E.receiveSiteInfo({adminURL:n,ampMode:c,currentEntityURL:s,currentEntityID:f,currentEntityTitle:p,currentEntityType:l,homeURL:i,referenceSiteURL:u});case 7:case"end":return t.stop()}}),t)}))},b={getSiteInfo:function(e){var t=e.siteInfo||{};return{adminURL:t.adminURL,ampMode:t.ampMode,currentEntityURL:t.currentEntityURL,currentEntityID:t.currentEntityID,currentEntityTitle:t.currentEntityTitle,currentEntityType:t.currentEntityType,homeURL:t.homeURL,referenceSiteURL:t.referenceSiteURL}},getAdminURL:d((function(e){return function(){return e(p.a).getSiteInfo().adminURL}})),getAMPMode:d((function(e){return function(){return e(p.a).getSiteInfo().ampMode}})),getCurrentEntityID:d((function(e){return function(){return e(p.a).getSiteInfo().currentEntityID}})),getCurrentEntityTitle:d((function(e){return function(){return e(p.a).getSiteInfo().currentEntityTitle}})),getCurrentEntityType:d((function(e){return function(){return e(p.a).getSiteInfo().currentEntityType}})),getCurrentEntityURL:d((function(e){return function(){return e(p.a).getSiteInfo().currentEntityURL}})),getHomeURL:d((function(e){return function(){return e(p.a).getSiteInfo().homeURL}})),getReferenceSiteURL:d((function(e){return function(){return e(p.a).getSiteInfo().referenceSiteURL}})),isAmp:d((function(e){return function(){var t=e(p.a).getAMPMode();return void 0!==t?!!t:t}}))};t.a={INITIAL_STATE:_,actions:E,controls:{},reducer:function(e,t){var r=t.payload;switch(t.type){case"RECEIVE_SITE_INFO":var n=r.siteInfo,o=n.adminURL,c=n.ampMode,i=n.currentEntityURL,u=n.currentEntityID,a=n.currentEntityTitle,s=n.currentEntityType,f=n.homeURL,p=n.referenceSiteURL;return y({},e,{siteInfo:{adminURL:o,ampMode:c,currentEntityURL:i,currentEntityID:parseInt(u,10),currentEntityTitle:a,currentEntityType:s,homeURL:f,referenceSiteURL:p}});default:return y({},e)}},resolvers:g,selectors:b}}).call(this,r(16))},346:function(e,t,r){"use strict";r.r(t);r(182)},63:function(e,t){e.exports=googlesitekit.data}});
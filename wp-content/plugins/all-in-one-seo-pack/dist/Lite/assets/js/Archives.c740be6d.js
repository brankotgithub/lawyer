import{b,u as f,e as v}from"./links.d8ef3c22.js";import{A,T as y}from"./TitleDescription.1c6a1185.js";import{C as S}from"./Card.a96d9a32.js";import{C}from"./Tabs.17b2f5c8.js";import{r as i,c,F as D,h as T,o,b as p,w as s,a as l,n as x,t as $,d as m,D as k,j as w}from"./vue.runtime.esm-bundler.0bc3eabf.js";import{_ as B}from"./_plugin-vue_export-helper.8823f7c1.js";import"./default-i18n.3881921e.js";import"./isArrayLikeObject.10b615a9.js";import"./index.888aa896.js";import"./Caret.11ded1aa.js";/* empty css                                            *//* empty css                                              */import"./constants.d0e2b74f.js";import"./JsonValues.870a4901.js";import"./MaxCounts.12b45bab.js";import"./TruSeoHighlighter.f41d03f0.js";import"./postContent.5b10ed83.js";import"./cleanForSlug.a67f7e84.js";import"./_stringToArray.a4422725.js";import"./Ellipse.e18bc40f.js";import"./toFinite.c2274946.js";/* empty css                                              */import"./RadioToggle.49538c2f.js";import"./ProBadge.57eb3f6b.js";import"./RobotsMeta.edeac3f8.js";import"./Checkbox.ec923721.js";import"./Checkmark.edd0f833.js";import"./Row.7b93a0cf.js";import"./SettingsRow.aa479f88.js";import"./tags.44c472c9.js";import"./Tags.f13c16b2.js";import"./GoogleSearchPreview.fe8a7e3c.js";import"./HtmlTagsEditor.dc966c4a.js";import"./Editor.0314838b.js";import"./UnfilteredHtml.13b74f4e.js";import"./Tooltip.eebec260.js";import"./Slide.c3dfb2b1.js";import"./TruSeoScore.29220195.js";import"./SaveChanges.5260e1c7.js";import"./Information.0dce27f3.js";const O={setup(){return{optionsStore:b(),rootStore:f(),settingsStore:v()}},components:{Advanced:A,CoreCard:S,CoreMainTabs:C,TitleDescription:y},data(){return{internalDebounce:null,tabs:[{slug:"title-description",name:this.$t.__("Title & Description",this.$td),access:"aioseo_search_appearance_settings",pro:!1},{slug:"advanced",name:this.$t.__("Advanced",this.$td),access:"aioseo_search_appearance_settings",pro:!1}],archives:[{label:"Author Archives",name:"author",singular:"Author",icon:"dashicons-admin-users"},{label:"Date Archives",name:"date",singular:"Date",icon:"dashicons-calendar-alt"},{label:"Search Page",name:"search",singular:"Search Page",icon:"dashicons-search"}]}},computed:{getArchives(){return this.archives.concat(this.rootStore.aioseo.postData.archives.map(e=>({label:`${e.label} Archives`,name:`${e.name}Archive`,icon:"dashicons-category",singular:e.singular,dynamic:!0})))}},methods:{processChangeTab(e,n){this.internalDebounce||(this.internalDebounce=!0,this.settingsStore.changeTab({slug:`${e}Archives`,value:n}),setTimeout(()=>{this.internalDebounce=!1},50))},getOptions(e){return e.dynamic?this.optionsStore.dynamicOptions.searchAppearance.archives[e.name.replace("Archive","")]:this.optionsStore.options.searchAppearance.archives[e.name]}}},j={class:"aioseo-search-appearance-archives"};function L(e,n,P,r,u,a){const h=i("core-main-tabs"),d=i("core-card");return o(),c("div",j,[(o(!0),c(D,null,T(a.getArchives,(t,_)=>(o(),p(d,{key:_,slug:`${t.name}Archives`},{header:s(()=>[l("div",{class:x(["icon dashicons",`${t.icon||"dashicons-admin-post"}`])},null,2),l("div",null,$(t.label),1)]),tabs:s(()=>[m(h,{tabs:u.tabs,showSaveButton:!1,active:r.settingsStore.settings.internalTabs[`${t.name}Archives`],internal:"",onChanged:g=>a.processChangeTab(t.name,g)},null,8,["tabs","active","onChanged"])]),default:s(()=>[m(w,{name:"route-fade",mode:"out-in"},{default:s(()=>[(o(),p(k(r.settingsStore.settings.internalTabs[`${t.name}Archives`]),{object:t,separator:r.optionsStore.options.searchAppearance.global.separator,options:a.getOptions(t),type:"archives","show-bulk":!1,"no-meta-box":"","include-keywords":""},null,8,["object","separator","options"]))]),_:2},1024)]),_:2},1032,["slug"]))),128))])}const ye=B(O,[["render",L]]);export{ye as default};

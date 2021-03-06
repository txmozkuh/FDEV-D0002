<meta charset="utf-8"></meta>
<div class="rt-grid-12 rt-alpha rt-omega">

                    
	
	<!--[if IE]><link rel="stylesheet" href="http://cssslider.com/sliders/demo-23/engine1/ie.css"><![endif]-->
	<!--[if lte IE 9]><script type="text/javascript" src="http://cssslider.com/sliders/demo-23/engine1/ie.js"></script><![endif]-->
	<!--script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript" src="http://cssslider.com/sliders/demo-23/engine1/gestures.js"></script-->
	
	<style>
		
	/* ------------- General ------------- */
	
	@font-face {
		font-family: "controls";
		src: url("materialcontrols.eot");
		src: url("materialcontrols.eot#iefix") format("embedded-opentype"),
				url("materialcontrols.woff") format("woff"),
				url("materialcontrols.ttf") format("truetype"),
				url("materialcontrols.svg#basic") format("svg");
		font-weight: normal;
		font-style: normal;
	}

	.csslider1 {
	  display: inline-block;
	  position: relative;
	  max-width: 830px;
	  
	  width: 100%;
	  margin-top: 10px;
	}
	.csslider1 > .cs_anchor {
	  display: none;
	}
	.csslider1 > ul {
	  position: relative;
	  z-index: 1;
	  font-size: 0;
	  line-height: 0;
	  margin: 0 auto;
	  padding: 0;
	  
	  overflow: hidden;
	  white-space: nowrap;
	}
	.csslider1 > ul > .cs_skeleton {
	  width: 100%;
	  visibility: hidden;
	  font-size: 0px;
	  line-height: 0;
	}
	.csslider1 > ul > .slide.img img {
	  width: 100%;
	}
	.csslider1 > ul > .slide.img a {
	  font-size: 0pt;
	  color: transparent;
	}
	.csslider1 > ul > .slide {
	  position: relative;
	  display: inline-block;
	  width: 100%;
	  height: 100%;
	  overflow: hidden;
	  font-size: 15px;
	  font-size: initial;
	  line-height: normal;
	  white-space: normal;
	  vertical-align: top;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;

	  -webkit-transform: translate3d(0,0,0);
	  transform: translate3d(0,0,0);
	}
	.csslider1 .cs_lnk{
	  position: absolute;
	  top: -9999px;
	  left: -9999px;
	  font-size: 0pt;
	  opacity: 0;
	  filter: alpha(opacity=0);
	}

	.csslider1 > ul > li.img,
	.csslider1 > .cs_arrowprev,
	.csslider1 > .cs_arrownext,
	.csslider1 > .cs_bullets,
	.csslider1 > .cs_play_pause {
	  -webkit-touch-callout: none;
	  -webkit-user-select: none;
	  -moz-user-select: none;
	  -ms-user-select: none;
	  user-select: none;
	}
	/* ------------- /General Styles ------------- */

	/* ------------- General Arrows ------------- */
	.csslider1 > .cs_arrowprev,
	.csslider1 > .cs_arrownext {
	  position: absolute;
	  top: 50%;
	  z-index: 5;
	  -webkit-box-sizing: content-box;
	  -moz-box-sizing: content-box;
	  box-sizing: content-box;
	}
	.csslider1 > .cs_arrowprev > label,
	.csslider1 > .cs_arrownext > label {
	  position: absolute;
	  text-decoration: none;
	  cursor: pointer;
	  opacity: 0;
	  z-index: -1;
	}
	.csslider1 > .cs_arrowprev {
	  left: 0;
	}
	.csslider1 > .cs_arrownext {
	  right: 0;
	}

	.csslider1 > .slide:checked ~ .cs_arrowprev > label,
	.csslider1 > .slide:checked ~ .cs_arrownext > label {
	  opacity: 0;
	  z-index: -1;
	}



	.csslider1 > #cs_slide1_0:checked ~ .cs_arrowprev > label.num2,
	.csslider1 > #cs_pause1_0:checked ~ .cs_arrowprev > label.num2,
	.csslider1 > #cs_slide1_0:checked ~ .cs_arrownext > label.num1,
	.csslider1 > #cs_pause1_0:checked ~ .cs_arrownext > label.num1, 
	.csslider1 > #cs_slide1_1:checked ~ .cs_arrowprev > label.num0,
	.csslider1 > #cs_pause1_1:checked ~ .cs_arrowprev > label.num0,
	.csslider1 > #cs_slide1_1:checked ~ .cs_arrownext > label.num2,
	.csslider1 > #cs_pause1_1:checked ~ .cs_arrownext > label.num2, 
	.csslider1 > #cs_slide1_2:checked ~ .cs_arrowprev > label.num1,
	.csslider1 > #cs_pause1_2:checked ~ .cs_arrowprev > label.num1,
	.csslider1 > #cs_slide1_2:checked ~ .cs_arrownext > label.num0,
	.csslider1 > #cs_pause1_2:checked ~ .cs_arrownext > label.num0 {
	  opacity: 1;
	  z-index: 5;
	}


	@-webkit-keyframes arrow {
	  0%, 33.32333333333334% { opacity: 1; z-index: 5; }
	  33.333333333333336%, 100%  { opacity: 0; z-index: -1; }
	}
	@keyframes arrow {
	  0%, 33.32333333333334% { opacity: 1; z-index: 5; }
	  33.333333333333336%, 100%  { opacity: 0; z-index: -1; }
	}


	.csslider1 > #cs_play1:checked ~ .cs_arrowprev > label.num2,
	.csslider1 > #cs_play1:checked ~ .cs_arrownext > label.num1 {
	  -webkit-animation: arrow 13500ms infinite -1900ms;
	  animation: arrow 13500ms infinite -1900ms;
	}
	.csslider1 > #cs_play1:checked ~ .cs_arrowprev > label.num0,
	.csslider1 > #cs_play1:checked ~ .cs_arrownext > label.num2 {
	  -webkit-animation: arrow 13500ms infinite 2600ms;
	  animation: arrow 13500ms infinite 2600ms;
	}
	.csslider1 > #cs_play1:checked ~ .cs_arrowprev > label.num1,
	.csslider1 > #cs_play1:checked ~ .cs_arrownext > label.num0 {
	  -webkit-animation: arrow 13500ms infinite 7100ms;
	  animation: arrow 13500ms infinite 7100ms;
	}


	.csslider1 > .slide:checked ~ .cs_arrowprev > label,
	.csslider1 > .slide:checked ~ .cs_arrownext > label,
	.csslider1 > .pause:checked ~ .cs_arrowprev > label,
	.csslider1 > .pause:checked ~ .cs_arrownext > label {
	  -webkit-animation: none;
	  animation: none;
	}


	/* ------------- /General Arrows ------------- */

	/* ------------- General Bullets ------------- */
	.csslider1 > .cs_bullets {
	  position: absolute;
	  left: 0;
	  width: 100%;
	  z-index: 6;
	  font-size: 0;
	  line-height: 8pt;
	  text-align: center;
	}
	.csslider1 > .cs_bullets > div {
	  margin-left: -50%;
	  width: 100%;
	}
	.csslider1 > .cs_bullets > label {
	  position: relative;
	  display: inline-block;
	  cursor: pointer;
	}
	.csslider1 > .cs_bullets > label > .cs_thumb {
	  visibility: hidden;
	  position: absolute;
	  opacity: 0;
	  z-index: 1;
	  line-height: 0;
	  left: -60px;
	  top: -57px;
	}
	.csslider1 > .cs_bullets > label > .cs_thumb > img {
	  max-width: none;
	}
	/* ------------- /General Bullets ------------- */

	/* ------------- General Description ------------- */
	.csslider1 > .cs_description {
	  z-index: 3;
	}
	.csslider1 > .cs_description a,
	.csslider1 > .cs_description a:visited,
	.csslider1 > .cs_description a:active {
	  color: inherit;
	}
	.csslider1 > .cs_description a:hover {
	  text-decoration: none;
	}
	.csslider1 > .cs_description > label {
	  position: absolute;
	  word-wrap: break-word;
	  white-space: normal;
	  text-align: left;
	  max-width: 50%;
	  left: 0;
	}
	.csslider1 > .cs_description > label > span {
	  vertical-align: top;
	}
	.csslider1 > .cs_description > label span {
	  display: inline-block;
	}
	/* ------------- /General Description ------------- */

	/* ------------- General Gestures ------------- */
	.csslider1.cs_handle {
	  cursor: -webkit-grab;
	  cursor: -moz-grab;
	  cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAQAAADZc7J/AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAABwSURBVEjH7ZJBEsAgCAMT/v/n9NCOSqe2oD2yNx1JggB4BCEFWyFASP2KMQE7ywWhe/tTRGCGogLk02tFctiW/SUgaMyQG4PdPzDn31rQbMb8FiAXgvsEJNax1yVlVGAjA93apP3HFhZTGIqiKH7iADB6HxPlHdNVAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE0LTA3LTA3VDEzOjQ5OjEwKzAyOjAwm7WiFAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxNC0wNy0wN1QxMzo0OToxMCswMjowMOroGqgAAAAASUVORK5CYII="), move;
	}
	.csslider1.cs_handle.cs_grab {
	  cursor: -webkit-grabbing;
	  cursor: -moz-grabbing;
	  cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAQAAADZc7J/AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAABaSURBVEjH7ZMxCkAhDEOT8u9/5TpJ+xWkFse8IYutJgEB8RCHL1qCc90BEFnT6QH7mwgFHBUf8wJyS1TDLuc3vmighx37LZdIth3E5hKj9n6O0HRh+oJCiFcMxRUUDxR1CTMAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTQtMDctMDdUMTM6NDk6MzgrMDI6MDDqf+sOAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE0LTA3LTA3VDEzOjQ5OjM4KzAyOjAwmyJTsgAAAABJRU5ErkJggg=="), move;
	}


	.csslider1 .cs_gestures {
	  visibility: hidden;
	  position: absolute;
	  font-size: 0;
	  top: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  overflow: hidden;
	  z-index: 1;
	  opacity: 0;

	  -webkit-transition: visibility .3s linear, opacity .3s linear;
	  transition: visibility .3s linear, opacity .3s linear;
	}
	.csslider1 .cs_gestures.cs_show {
	  visibility: visible;
	  opacity: 1;
	}
	.csslider1 .cs_gestures.cs_show img {
	  width: 33.333333333333336%;
	}
	.csslider1 .cs_gestures.cs_show .cs_first_img {
	  position: absolute;
	  left: -33.333333333333336%;
	  top: 0;
	}
	.csslider1 .cs_gestures.cs_show .cs_last_img {
	  position: absolute;
	  left: 100%;
	  top: 0;
	}

	.csslider1 .cs_gestures > div {
	  position: absolute;
	  left: 0;
	  top: 0;
	  width: 300%;
	}
	/* ------------- /General Gestures ------------- */

	/* ------------- Effect ------------- */
	.csslider1 > ul > .slide.num0 {
	  top: 0%;
	}
	.csslider1 > ul > .slide.num1 {
	  top: 100%;
	}
	.csslider1 > ul > .slide.num2 {
	  top: 200%;
	}
	 


	.csslider1 > #cs_slide1_0:checked ~ ul > .slide,
	.csslider1 > #cs_pause1_0:checked ~ ul > .slide {
	  -webkit-transform: translateY(0%);
	  transform: translateY(0%);
	}
	.csslider1 > #cs_slide1_1:checked ~ ul > .slide,
	.csslider1 > #cs_pause1_1:checked ~ ul > .slide {
	  -webkit-transform: translateY(-100%);
	  transform: translateY(-100%);
	}
	.csslider1 > #cs_slide1_2:checked ~ ul > .slide,
	.csslider1 > #cs_pause1_2:checked ~ ul > .slide {
	  -webkit-transform: translateY(-200%);
	  transform: translateY(-200%);
	}
	 


	.csslider1 > ul > .slide {
	  position: absolute;
	  top: 0;
	  left: 0;
	  display: inline-block;
	  opacity: 1;

	  -webkit-transition: -webkit-transform 1900ms;
	  transition: -webkit-transform 1900ms, transform 1900ms;

	  
	  -webkit-transform: scale(1);
	  transform: scale(1);
	}



	@-webkit-keyframes slide {
	  0%, 19.25925925925926%  { -webkit-transform: translateY(0%); transform: translateY(0%); }
	  33.333333333333336%, 52.592592592592595%  { -webkit-transform: translateY(-100%); transform: translateY(-100%); }
	  66.66666666666667%, 85.92592592592592%  { -webkit-transform: translateY(-200%); transform: translateY(-200%); }
	  
	}
	@keyframes slide {
	  0%, 19.25925925925926%  { -webkit-transform: translateY(0%); transform: translateY(0%); }
	  33.333333333333336%, 52.592592592592595%  { -webkit-transform: translateY(-100%); transform: translateY(-100%); }
	  66.66666666666667%, 85.92592592592592%  { -webkit-transform: translateY(-200%); transform: translateY(-200%); }
	  
	}

	@keyframes slide-ie {
	  0%, 19.25925925925926%  { margin-top: 0%; }
	  33.333333333333336%, 52.592592592592595%  { margin-top: -48.19277108433735%; }
	  66.66666666666667%, 85.92592592592592%  { margin-top: -96.3855421686747%; }
	  
	}

	.csslider1  > #cs_play1:checked ~ ul > .slide {
	  -webkit-animation: slide 13500ms infinite;
	  animation: slide 13500ms infinite;
	}
	/* IE 10+ hack - cant animate translate :( */
	@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
	  .csslider1  > #cs_play1:checked ~ ul > .slide {
		animation: slide-ie 13500ms infinite;
	  }
	}


	.csslider1 > #cs_play1:checked ~ ul > .slide,
	.csslider1 > .pause:checked ~ ul > li {
	  -webkit-transition: none;
	  transition: none;
	}


	/* ------------- /Effect ------------- */

	.csslider1 {
		box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.26);
		-webkit-transition: box-shadow .5s cubic-bezier(.4,0,.2,1);
		transition: box-shadow .5s cubic-bezier(.4,0,.2,1);
	}
	.csslider1:hover {
		box-shadow: 0px 17px 50px rgba(0, 0, 0, 0.19);
	}



	/* ------------- Template Arrows ------------- */
	.csslider1 > .cs_arrowprev > label,
	.csslider1 > .cs_arrownext > label {
	  height: 50px;
	  width: 50px;
	  margin-top: -25px;
	  margin-left: -25px;
	  border-radius: 50%;

	  background-color: #3F51B5;
	  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
	  
	  -webkit-transition: box-shadow 0.5s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.5s cubic-bezier(0.35, 0, 0.25, 1), -webkit-transform 0.5s cubic-bezier(0.35, 0, 0.25, 1);
	  transition: box-shadow 0.5s cubic-bezier(0.35, 0, 0.25, 1), background-color 0.5s cubic-bezier(0.35, 0, 0.25, 1), transform 0.5s cubic-bezier(0.35, 0, 0.25, 1);
	}
	.csslider1 > .cs_arrowprev {
	  margin-left: 2px;
	  left: 30px;
	}
	.csslider1 > .cs_arrownext {
	  margin-right: 2px;
	  right: 30px;
	}
	.csslider1 > .cs_arrowprev > label span,
	.csslider1 > .cs_arrownext > label span {
	  display: block;
	  color: #fff;
	}
	.csslider1 > .cs_arrowprev > label span:after,
	.csslider1 > .cs_arrownext > label span:after {
	  display: block;
	  font: 30px "controls";
	  line-height: 56px;
	  line-height: 64px\9; /* ie9 hack */
	  text-align: center;
	}
	/* IE10+ hack */
	_:-ms-input-placeholder, :root .csslider1 > .cs_arrowprev > label span:after {
	  line-height: 64px;
	}
	_:-ms-input-placeholder, :root .csslider1 > .cs_arrownext > label span:after {
	  line-height: 64px;
	}

	.csslider1 > .cs_arrowprev > label span:after {
	  content: '\e800';
	}
	.csslider1 > .cs_arrownext > label span:after {
	  content: '\e801';
	}

	.csslider1 > .cs_arrowprev:hover > label,
	.csslider1 > .cs_arrownext:hover > label {
	  background-color: #344294;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
	  -webkit-transform: translate3d(0, -1px, 0);
	  transform: translate3d(0, -1px, 0);
	}
	/* ------------- /Template Arrows ------------- */

	/* ------------- Template Bullets ------------- */
	.csslider1 > .cs_bullets {
	  bottom: 5px;
	  margin-bottom: 5px;
	}
	.csslider1 > .cs_bullets > label {
	  border-radius: 50%;
	  margin: 0 5px;
	  padding: 10px;
	  background: #3F51B5;
	}


	.csslider1 > .cs_bullets > label > .cs_thumb {
	  border: 6px solid #E5E5E5;
	  margin-top: -19px;
	  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);

	  -webkit-transition: margin-top 0.5s cubic-bezier(0.35, 0, 0.25, 1), opacity 0.5s cubic-bezier(0.35, 0, 0.25, 1), visibility 0.5s cubic-bezier(0.35, 0, 0.25, 1), box-shadow 0.5s cubic-bezier(0.35, 0, 0.25, 1);
	  transition: margin-top 0.5s cubic-bezier(0.35, 0, 0.25, 1), opacity 0.5s cubic-bezier(0.35, 0, 0.25, 1), visibility 0.5s cubic-bezier(0.35, 0, 0.25, 1), box-shadow 0.5s cubic-bezier(0.35, 0, 0.25, 1);
	}
	.csslider1 > .cs_bullets > label:hover > .cs_thumb {
	  margin-top: -20px;
	  opacity: 1;
	  visibility: visible;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
	}


	.csslider1 > .cs_bullets > label:hover {
	  background: #344294;
	}

	.csslider1 > #cs_slide1_0:checked ~ .cs_bullets > label.num0,
	.csslider1 > #cs_pause1_0:checked ~ .cs_bullets > label.num0,
	.csslider1 > #cs_slide1_1:checked ~ .cs_bullets > label.num1,
	.csslider1 > #cs_pause1_1:checked ~ .cs_bullets > label.num1,
	.csslider1 > #cs_slide1_2:checked ~ .cs_bullets > label.num2,
	.csslider1 > #cs_pause1_2:checked ~ .cs_bullets > label.num2 {
	  background: #2f3d88;
	}




	@keyframes bullet {
	  0%, 33.32333333333334%  { background: #2f3d88; }
	  33.333333333333336%, 100% { background: #3F51B5; }
	}
	@-webkit-keyframes bullet {
	  0%, 33.32333333333334%  { background: #2f3d88; }
	  33.333333333333336%, 100% { background: #3F51B5; }
	}

	.csslider1 > #cs_play1:checked ~ .cs_bullets > label.num0,
	.csslider1 > #cs_pause1:checked ~ .cs_bullets > label.num0 {
	  -webkit-animation: bullet 13500ms infinite -1900ms;
	  animation: bullet 13500ms infinite -1900ms;
	}
	.csslider1 > #cs_play1:checked ~ .cs_bullets > label.num1,
	.csslider1 > #cs_pause1:checked ~ .cs_bullets > label.num1 {
	  -webkit-animation: bullet 13500ms infinite 2600ms;
	  animation: bullet 13500ms infinite 2600ms;
	}
	.csslider1 > #cs_play1:checked ~ .cs_bullets > label.num2,
	.csslider1 > #cs_pause1:checked ~ .cs_bullets > label.num2 {
	  -webkit-animation: bullet 13500ms infinite 7100ms;
	  animation: bullet 13500ms infinite 7100ms;
	}



	.csslider1 > #cs_play1:checked ~ .cs_bullets > label,
	.csslider1 > .pause:checked ~ .cs_bullets > label {
	  -webkit-transition: none;
	  transition: none;
	}


	.csslider1 > .slide:checked ~ .cs_bullets > label,
	.csslider1 > .pause:checked ~ .cs_bullets > label {
	  -webkit-animation: none;
	  animation: none;
	}


	/* ------------- Template /Bullets ------------- */

	/* ------------- Template Description ------------- */


	.csslider1 > .cs_description > label {
	  font-family: "Roboto",sans-serif;
	  font-size: 20px;
	  line-height: normal;
	  top: 15px;
	  left: 10px;
	}

	.csslider1 > .cs_description > label > span {
	  position: relative;
	  padding: 10px;

	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	}



	.csslider1 > #cs_slide1_0:checked ~ .cs_description > .num0 > .cs_title,
	.csslider1 > #cs_slide1_0:checked ~ .cs_description > .num0 > .cs_descr,
	.csslider1 > #cs_pause1_0:checked ~ .cs_description > .num0 > .cs_title,
	.csslider1 > #cs_pause1_0:checked ~ .cs_description > .num0 > .cs_descr,
	.csslider1 > #cs_slide1_1:checked ~ .cs_description > .num1 > .cs_title,
	.csslider1 > #cs_slide1_1:checked ~ .cs_description > .num1 > .cs_descr,
	.csslider1 > #cs_pause1_1:checked ~ .cs_description > .num1 > .cs_title,
	.csslider1 > #cs_pause1_1:checked ~ .cs_description > .num1 > .cs_descr,
	.csslider1 > #cs_slide1_2:checked ~ .cs_description > .num2 > .cs_title,
	.csslider1 > #cs_slide1_2:checked ~ .cs_description > .num2 > .cs_descr,
	.csslider1 > #cs_pause1_2:checked ~ .cs_description > .num2 > .cs_title,
	.csslider1 > #cs_pause1_2:checked ~ .cs_description > .num2 > .cs_descr {
	  opacity: 1;
	  visibility: visible;
	  -webkit-transform: translateY(0);
	  transform: translateY(0);
	}


	.csslider1 > #cs_slide1_0:checked ~ .cs_description > .num0 .cs_wrapper,
	.csslider1 > #cs_pause1_0:checked ~ .cs_description > .num0 .cs_wrapper,
	.csslider1 > #cs_slide1_1:checked ~ .cs_description > .num1 .cs_wrapper,
	.csslider1 > #cs_pause1_1:checked ~ .cs_description > .num1 .cs_wrapper,
	.csslider1 > #cs_slide1_2:checked ~ .cs_description > .num2 .cs_wrapper,
	.csslider1 > #cs_pause1_2:checked ~ .cs_description > .num2 .cs_wrapper {
	  opacity: 1;
	  -webkit-transform: translateY(0);
	  transform: translateY(0);
	}
	.csslider1 > .cs_description > label > .cs_title {
	  background-color: #3F51B5;
	  color: #fff;
	  margin: 5px 10px;
	  opacity: 0;
	  visibility: hidden;
	  z-index: 2;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);

	  -webkit-transform: translateY(-100px);
	  transform: translateY(-100px);

	  -webkit-transition:
		950ms opacity 570ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms -webkit-transform 570ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms visibility 570ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
	  transition:
		950ms opacity 570ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms -webkit-transform 570ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms transform 570ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms visibility 570ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
	}
	.csslider1 > .cs_description > label > .cs_descr {
	  background-color: #E5E5E5;
	  color:#555;
	  text-align: left;
	  font-size: 0.6em;
	  margin: 5px 10px;
	  opacity: 0;
	  visibility: hidden;
	  z-index: 1;
	  -webkit-transform: translateY(100px);
	  transform: translateY(100px);

	  -webkit-transition:
		950ms opacity 820ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms -webkit-transform 820ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms visibility 820ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
	  transition:
		950ms opacity 820ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms -webkit-transform 820ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms transform 820ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms visibility 820ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
	}


	.csslider1 > .cs_description > label > .cs_title > .cs_wrapper {
	  opacity: 0;
	  -webkit-transform: translateY(-100px);
	  transform: translateY(-100px);

	  -webkit-transition:
		950ms opacity 720ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms -webkit-transform 720ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
	  transition:
		950ms opacity 720ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms -webkit-transform 720ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms transform 720ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
	}
	.csslider1 > .cs_description > label > .cs_descr > .cs_wrapper {
	  opacity: 0;
	  -webkit-transform: translateY(100px);
	  transform: translateY(100px);

	  -webkit-transition:
		950ms opacity 970ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms -webkit-transform 970ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
	  transition:
		950ms opacity 970ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms -webkit-transform 970ms cubic-bezier(0.680, -0.550, 0.265, 1.550),
		950ms transform 970ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
	}




	@-webkit-keyframes cs_title {
	  2.462962962962963%, 30.860370370370372%  {
		opacity: 1;
		z-index: 2;
		visibility: visible;
		-webkit-transform: translateY(10px);
		transform: translateY(10px);
	  }
	  3.5185185185185186%, 29.804814814814815%  {
		opacity: 1;
		z-index: 2;
		visibility: visible;
		-webkit-transform: translateY(0px);
		transform: translateY(0px);
	  }
	  36.851851851851855%  {
		opacity: 0;
		z-index: 2;
		visibility: hidden;
		-webkit-transform: translateY(-100px);
		transform: translateY(-100px);
	  }
	  36.86185185185185%, 100%  { z-index: 0; }
	}
	@keyframes cs_title {
	  2.462962962962963%, 30.860370370370372%  {
		opacity: 1;
		z-index: 2;
		visibility: visible;
		-webkit-transform: translateY(10px);
		transform: translateY(10px);
	  }
	  3.5185185185185186%, 29.804814814814815%  {
		opacity: 1;
		z-index: 2;
		visibility: visible;
		-webkit-transform: translateY(0px);
		transform: translateY(0px);
	  }
	  36.851851851851855%  {
		opacity: 0;
		z-index: 2;
		visibility: hidden;
		-webkit-transform: translateY(-100px);
		transform: translateY(-100px);
	  }
	  36.86185185185185%, 100%  { z-index: 0; }
	}


	@-webkit-keyframes cs_descr {
	  2.462962962962963%, 30.860370370370372%  {
		opacity: 1;
		z-index: 1;
		visibility: visible;
		-webkit-transform: translateY(-10px);
		transform: translateY(-10px);
	  }
	  3.5185185185185186%, 29.804814814814815%  {
		opacity: 1;
		z-index: 1;
		visibility: visible;
		-webkit-transform: translateY(0px);
		transform: translateY(0px);
	  }
	  36.851851851851855%  {
		opacity: 0;
		z-index: 1;
		visibility: hidden;
		-webkit-transform: translateY(100px);
		transform: translateY(100px);
	  }
	  36.86185185185185%, 100%  { z-index: 0; }
	}
	@keyframes cs_descr {
	  2.462962962962963%, 30.860370370370372%  {
		opacity: 1;
		z-index: 1;
		visibility: visible;
		-webkit-transform: translateY(-10px);
		transform: translateY(-10px);
	  }
	  3.5185185185185186%, 29.804814814814815%  {
		opacity: 1;
		z-index: 1;
		visibility: visible;
		-webkit-transform: translateY(0px);
		transform: translateY(0px);
	  }
	  36.851851851851855%  {
		opacity: 0;
		z-index: 1;
		visibility: hidden;
		-webkit-transform: translateY(100px);
		transform: translateY(100px);
	  }
	  36.86185185185185%, 100%  { z-index: 0; }
	}


	.csslider1 > #cs_play1:checked ~ .cs_description > .num0  > .cs_title {
	  -webkit-animation: cs_title 13500ms infinite -1330ms ease;
	  animation: cs_title 13500ms infinite -1330ms ease;
	}
	.csslider1 > #cs_play1:checked ~ .cs_description > .num1  > .cs_title {
	  -webkit-animation: cs_title 13500ms infinite 3170ms ease;
	  animation: cs_title 13500ms infinite 3170ms ease;
	}
	.csslider1 > #cs_play1:checked ~ .cs_description > .num2  > .cs_title {
	  -webkit-animation: cs_title 13500ms infinite 7670ms ease;
	  animation: cs_title 13500ms infinite 7670ms ease;
	}


	.csslider1 > #cs_play1:checked ~ .cs_description > .num0  > .cs_descr {
	  -webkit-animation: cs_descr 13500ms infinite -1080ms ease;
	  animation: cs_descr 13500ms infinite -1080ms ease;
	}
	.csslider1 > #cs_play1:checked ~ .cs_description > .num1  > .cs_descr {
	  -webkit-animation: cs_descr 13500ms infinite 3420ms ease;
	  animation: cs_descr 13500ms infinite 3420ms ease;
	}
	.csslider1 > #cs_play1:checked ~ .cs_description > .num2  > .cs_descr {
	  -webkit-animation: cs_descr 13500ms infinite 7920ms ease;
	  animation: cs_descr 13500ms infinite 7920ms ease;
	}




	@-webkit-keyframes cs_title_text {
	  2.462962962962963%, 30.860370370370372%  {
		opacity: 1;
		-webkit-transform: translateY(10px);
		transform: translateY(10px);
	  }
	  3.5185185185185186%, 29.804814814814815%  {
		opacity: 1;
		-webkit-transform: translateY(0px);
		transform: translateY(0px);
	  }
	  36.851851851851855%  {
		opacity: 0;
		-webkit-transform: translateY(-100px);
		transform: translateY(-100px);
	  }
	}
	@keyframes cs_title_text {
	  2.462962962962963%, 30.860370370370372%  {
		opacity: 1;
		-webkit-transform: translateY(10px);
		transform: translateY(10px);
	  }
	  3.5185185185185186%, 29.804814814814815%  {
		opacity: 1;
		-webkit-transform: translateY(0px);
		transform: translateY(0px);
	  }
	  36.851851851851855%  {
		opacity: 0;
		-webkit-transform: translateY(-100px);
		transform: translateY(-100px);
	  }
	}


	@-webkit-keyframes cs_descr_text {
	  2.462962962962963%, 30.860370370370372%  {
		opacity: 1;
		-webkit-transform: translateY(-10px);
		transform: translateY(-10px);
	  }
	  3.5185185185185186%, 29.804814814814815%  {
		opacity: 1;
		-webkit-transform: translateY(0px);
		transform: translateY(0px);
	  }
	  36.851851851851855%  {
		opacity: 0;
		-webkit-transform: translateY(100px);
		transform: translateY(100px);
	  }
	}
	@keyframes cs_descr_text {
	  2.462962962962963%, 30.860370370370372%  {
		opacity: 1;
		-webkit-transform: translateY(-10px);
		transform: translateY(-10px);
	  }
	  3.5185185185185186%, 29.804814814814815%  {
		opacity: 1;
		-webkit-transform: translateY(0px);
		transform: translateY(0px);
	  }
	  36.851851851851855%  {
		opacity: 0;
		-webkit-transform: translateY(100px);
		transform: translateY(100px);
	  }
	}


	.csslider1 > #cs_play1:checked ~ .cs_description > .num0 .cs_title > .cs_wrapper {
	  -webkit-animation: cs_title_text 13500ms infinite -1180ms ease;
	  animation: cs_title_text 13500ms infinite -1180ms ease;
	}
	.csslider1 > #cs_play1:checked ~ .cs_description > .num1 .cs_title > .cs_wrapper {
	  -webkit-animation: cs_title_text 13500ms infinite 3320ms ease;
	  animation: cs_title_text 13500ms infinite 3320ms ease;
	}
	.csslider1 > #cs_play1:checked ~ .cs_description > .num2 .cs_title > .cs_wrapper {
	  -webkit-animation: cs_title_text 13500ms infinite 7820ms ease;
	  animation: cs_title_text 13500ms infinite 7820ms ease;
	}


	.csslider1 > #cs_play1:checked ~ .cs_description > .num0 .cs_descr > .cs_wrapper {
	  -webkit-animation: cs_descr_text 13500ms infinite -930ms ease;
	  animation: cs_descr_text 13500ms infinite -930ms ease;
	}
	.csslider1 > #cs_play1:checked ~ .cs_description > .num1 .cs_descr > .cs_wrapper {
	  -webkit-animation: cs_descr_text 13500ms infinite 3570ms ease;
	  animation: cs_descr_text 13500ms infinite 3570ms ease;
	}
	.csslider1 > #cs_play1:checked ~ .cs_description > .num2 .cs_descr > .cs_wrapper {
	  -webkit-animation: cs_descr_text 13500ms infinite 8070ms ease;
	  animation: cs_descr_text 13500ms infinite 8070ms ease;
	}




	.csslider1 > #cs_play1:checked ~ .cs_description > label > .cs_title,
	.csslider1 > #cs_play1:checked ~ .cs_description > label > .cs_descr,
	.csslider1 > #cs_play1:checked ~ .cs_description > label > .cs_title > .cs_wrapper,
	.csslider1 > #cs_play1:checked ~ .cs_description > label > .cs_descr > .cs_wrapper,
	.csslider1 > .pause:checked ~ .cs_description > label > .cs_title,
	.csslider1 > .pause:checked ~ .cs_description > label > .cs_descr,
	.csslider1 > .pause:checked ~ .cs_description > label > .cs_title > .cs_wrapper,
	.csslider1 > .pause:checked ~ .cs_description > label > .cs_descr > .cs_wrapper {
	  -webkit-transition: none;
	  transition: none;
	}

	/* ------------- /Template Description ------------- */
	/* hide description & bullets on mobile devices */
	@media
	only screen and (max-width: 480px),
	only screen and (-webkit-max-device-pixel-ratio: 2)      and (max-width: 480px),
	only screen and (   max--moz-device-pixel-ratio: 2)      and (max-width: 480px),
	only screen and (     -o-max-device-pixel-ratio: 2/1)    and (max-width: 480px),
	only screen and (        max-device-pixel-ratio: 2)      and (max-width: 480px),
	only screen and (                max-resolution: 192dpi) and (max-width: 480px),
	only screen and (                max-resolution: 2dppx)  and (max-width: 480px) { 
	  .csslider1 > .cs_description,
	  .csslider1 > .cs_bullets {
		display: none;
	  }
	}
	</style>

	<div class="csslider1 autoplay cs_handle">
		<input name="cs_anchor1" id="cs_slide1_0" type="radio" class="cs_anchor slide">
		<input name="cs_anchor1" id="cs_slide1_1" type="radio" class="cs_anchor slide">
		<input name="cs_anchor1" id="cs_slide1_2" type="radio" class="cs_anchor slide">
		<input name="cs_anchor1" id="cs_play1" type="radio" class="cs_anchor" checked="">
		<input name="cs_anchor1" id="cs_pause1_0" type="radio" class="cs_anchor pause">
		<input name="cs_anchor1" id="cs_pause1_1" type="radio" class="cs_anchor pause">
		<input name="cs_anchor1" id="cs_pause1_2" type="radio" class="cs_anchor pause">
		
		<ul>
			<li class="cs_skeleton">
				<img src="http://cssslider.com/sliders/demo-23/data1/images/carshow581067_1280.jpg" alt="jQuery plugins free download carousel image download tool" style="width: 100%;">
			</li>
			<li class="num0 img slide">
				<img src="http://cssslider.com/sliders/demo-23/data1/images/carshow581067_1280.jpg" alt="HTML comes front menu slider free automatic plugins" title="Retro Car">
			</li>
			<li class="num1 img slide">
				<img src="http://cssslider.com/sliders/demo-23/data1/images/carshow581066_1280.jpg" alt="jQuery multiple fullscreen slider free with templates" title="Car Show">
			</li>
			<li class="num2 img slide">
				<img src="http://cssslider.com/sliders/demo-23/data1/images/oldtimer302178_1280.jpg" alt="Responsive background image script slider flying images" title="Oldtimer">
			</li>
		
		</ul>
		<a class="cs_lnk" href="http://cssslider.com">image slider</a>
		<div class="cs_description">
			<label class="num0">
				<span class="cs_title"><span class="cs_wrapper">Retro Car</span></span>
				
			</label>
			<label class="num1">
				<span class="cs_title"><span class="cs_wrapper">Car Show</span></span>
				
			</label>
			<label class="num2">
				<span class="cs_title"><span class="cs_wrapper">Oldtimer</span></span>
				
			</label>
		</div>
		
		<div class="cs_arrowprev">
			<label class="num0" for="cs_slide1_0"><span><i></i></span></label>
			<label class="num1" for="cs_slide1_1"><span><i></i></span></label>
			<label class="num2" for="cs_slide1_2"><span><i></i></span></label>
		</div>
		<div class="cs_arrownext">
			<label class="num0" for="cs_slide1_0"><span><i></i></span></label>
			<label class="num1" for="cs_slide1_1"><span><i></i></span></label>
			<label class="num2" for="cs_slide1_2"><span><i></i></span></label>
		</div>
		
		<div class="cs_bullets">
			<label class="num0" for="cs_slide1_0">
				<span class="cs_point"></span>
				<span class="cs_thumb"><img src="http://cssslider.com/sliders/demo-23/data1/tooltips/carshow581067_1280.jpg" alt="Bootstrap events slideshow fancy effects" title="Retro Car"></span>
			</label>
			<label class="num1" for="cs_slide1_1">
				<span class="cs_point"></span>
				<span class="cs_thumb"><img src="http://cssslider.com/sliders/demo-23/data1/tooltips/carshow581066_1280.jpg" alt="HTML5 webpage slider download text image" title="Car Show"></span>
			</label>
			<label class="num2" for="cs_slide1_2">
				<span class="cs_point"></span>
				<span class="cs_thumb"><img src="http://cssslider.com/sliders/demo-23/data1/tooltips/oldtimer302178_1280.jpg" alt="CSS3 text horizontal demo carousel navigation number code" title="Oldtimer"></span>
			</label>
		</div>
		
		<div class="cs_gestures"><div style="-webkit-transform: translate3d(0px, 0px, 0px); transform: translate3d(0px, 0px, 0px); -webkit-transition: transform 90ms linear; transition: transform 90ms linear;"><img src="http://cssslider.com/sliders/demo-23/data1/images/oldtimer302178_1280.jpg" alt="Responsive background image script slider flying images" title="Oldtimer" class="cs_first_img"><img src="http://cssslider.com/sliders/demo-23/data1/images/carshow581067_1280.jpg" alt="HTML comes front menu slider free automatic plugins" title="Retro Car"><img src="http://cssslider.com/sliders/demo-23/data1/images/carshow581066_1280.jpg" alt="jQuery multiple fullscreen slider free with templates" title="Car Show"><img src="http://cssslider.com/sliders/demo-23/data1/images/oldtimer302178_1280.jpg" alt="Responsive background image script slider flying images" title="Oldtimer"><img src="http://cssslider.com/sliders/demo-23/data1/images/carshow581067_1280.jpg" alt="HTML comes front menu slider free automatic plugins" title="Retro Car" class="cs_last_img"></div></div></div>
		
                    </div>
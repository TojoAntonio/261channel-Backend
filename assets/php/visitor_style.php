<?php
   header('content-type: text/css');
   $racine = '/siteAES/';
   $image_url = $racine.'assets/images/visitor_image/';
?>





/*============================================= STYLE.CSS ===============================================*/





/* Design by http://www.dreamtemplate.com */
@charset "utf-8";
body {
	margin:0;
	padding:0;
	width:100%;
	color:#929292;
	font:normal 12px/1.5em "Liberation sans", Arial, Helvetica, sans-serif;
	background:#f1f1f1 url(<?php echo $image_url; ?>main_bg.gif) repeat left top;
}
html, .main {
	padding:0;
	margin:0;
}
.main {
	background:url(<?php echo $image_url; ?>header_bg.gif) repeat-x left 103px;
}
.clr {
	clear:both;
	padding:0;
	margin:0;
	width:100%;
	font-size:0;
	line-height:0;
}
h2 {
	margin:8px 0;
	padding:8px 0;
	font-size:30px;
	font-weight:normal;
	color:#353c46;
}

p {
	margin:8px 0;
	padding:0 0 8px 0;
}
a {
	color:#0096da;
	text-decoration:underline;
}
.header, .content, .menu_nav, .fbg, .footer, form, ol, ol li, ul, .content .mainbar, .content .sidebar {
	margin:0;
	padding:0;
}
.header {
}
.header_resize {
	margin:0 auto;
	padding:0;
	width:960px;
}
.logo {
	opacity:1;
	margin:0;
	padding:0;
	float:left;
	width:100%;
	height:150px;
	background-color:black;
	/*background: url(<?php echo $image_url; ?>tete.png) no-repeat;*/
}
h1 {
	margin:0;
	padding:18px 0 0;
	font-size:46px;
	font-weight:normal;
	line-height:1.2em;
	text-transform:uppercase;
	text-align:left;
}
h1 a, h1 a:hover {
	color:#00a3e0;
	text-decoration:none;
}
h1 span {
}
h1 small {
	display:block;
	margin:0;
	padding:0;
	text-align:right;
	font-size:16px;
	line-height:1.2em;
	letter-spacing:normal;
	text-transform:uppercase;
	color:#969696;
}
.slider {
	padding:0 0 24px;
	background:no-repeat center bottom;
}
.rss {
	padding:18px 20px 0 0;
	float:right;
	width:auto;
}
.rss p {
	margin:0;
	padding:0;
	float:right;
	width:auto;
	color:#fff;
	font-size:13px;
	line-height:1.5em;
	font-weight:bold;
}
.rss a {
	color:#fff;
	text-decoration:none;
}
.rss a:hover {
	text-decoration:underline;
}
.rss img {
	margin:-3px 0 -3px 6px;
	border:none;
}
.menu_nav {
	margin:0 0 0 -20;
	padding:0;
	height:70px;
	float:left;
	width:1100px;
}
.menu_nav ul {
	list-style:none;
	padding:0;
	height:70px;
	float:left;
}
.menu_nav ul li {
	margin:0;
	padding:0;
	float:left;
	background:url(<?php echo $image_url; ?>menu_split.gif) no-repeat right center;
}
.menu_nav ul li a {
	display:block;
	margin:0;
	padding:25px 20px 0;
	height:40px;
	font-size:12px;
	line-height:16px;
	font-weight:bold;
	color:#9ae6ff;
	text-decoration:none;
	/*text-transform:uppercase;*/
	text-align:center;
	background:none;
}
.menu_nav ul li.active a{
	color:#fff;
	font-size:1.2em;
	font-weight:bolder;
	background:#0e77e0;
	padding:10 10 10 10;
	margin:15 0 0 -2;
	height:20px;
	box-shadow:8px 8px 12px black;
	border-radius:0px;
}
.menu_nav ul li a:hover {
	color:#e3e2f4;
	font-size:1.2em;
	font-weight:bolder;
	background:#1c53a5;
	padding:10 10 10 10;
	margin:15 0 0 -2;
	height:20px;
	box-shadow:8px 8px 12px black;
	border-radius:0px;
}
.content {
	padding:0;
	border-bottom:1px solid #abb6b6;
}
.content_resize {
	margin:0 auto;
	padding:0 0 24px;
	width:960px;
}
.content .mainbar {
	margin:0;
	padding:0 0 0 20px;
	float:left;
	width:620px;
}
.content .mainbar h2 {
	margin-bottom:0;
	padding-bottom:0;
	font-size:35px;
	line-height:1.2em;
	color:#161616;
}
.content .mainbar div.img {
	padding:12px 0;
	float:left;
}
.content .mainbar img {
}
.content .mainbar img.fl {
	margin:0;
	padding:0;
	background:#fff;
	border:none;
}
.content .mainbar .article {
	margin:0 0 32px;
	padding:0;
	background:repeat-x left bottom;
}
.content .mainbar .post_content {
}
.content .mainbar .post_content strong {
	color:#161616;
}
.content .sidebar {
	padding:0;
	float:right;
	width:260px;
}
.content .sidebar .gadget {
	margin:0 0 12px;
	padding:8px 20px 24px;
	background:#0096da;
}
.content .sidebar h2 {
	color:#fdeb67;
	text-transform:uppercase;
}
.sidebar{opacity:0.9;}
.sidebar:hover{opacity:1;}
ul.sb_menu, ul.ex_menu {
	margin:0;
	padding:0;
	list-style:none;
	color:#fff;
}
ul.sb_menu li, ul.ex_menu li {
	margin:0;
}
ul.sb_menu li {
	padding:8px 0;
	width:220px;
}
ul.ex_menu li {
	padding:4px 0;
}
ul.sb_menu li a {
	color:#fff;
	text-decoration:none;
	margin-left:-16px;
	padding:4px 8px 4px 16px;
}
ul.ex_menu li a {
	font-weight:bold;
	color:#9cffff;
	text-decoration:none;
}
ul.sb_menu li a:hover, ul.ex_menu li a:hover {
	color:#fdeb67;
	font-weight:bold;
	text-decoration:underline;
}
.content .mainbar ul.sb_menu li a {
	color:#929292;
}
.content .mainbar ul.sb_menu li a:hover {
	color:#9cffff;
}
p.spec {
	padding:0 0 16px;
}
p.infopost {
	margin-bottom:0;
	padding:0 0 8px;
	color:#6e6e6e;
}
p.infopost a {
	padding:0 2px;
	color:#3f3f3f;
	text-decoration:underline;
}
.content .mainbar a.com {
	margin:0;
	padding:0;
	float:right;
	font-weight:normal;
	text-decoration:none;
	color:#8b8b8b;
	background:#1b1b1b;
}
.content .mainbar a.com:hover {
	text-decoration:none;
}
.content .mainbar a.com span {
	display:block;
	margin:-38px 0;
	padding:10px 0;
	width:60px;
	font-weight:normal;
	font-size:30px;
	color:#fff;
	text-align:center;
	background:#0096da;
}
.content .mainbar a.rm {
	float:right;
	margin:0 0 16px;
	padding:0;
	font-weight:bold;
	text-transform:lowercase;
	color:#0096da;
	text-decoration:underline;
	text-align:center;
	background:none;
}
.content p.pages {
	margin:0;
	padding:24px 0;
	font-size:11px;
	color:#929292;
	text-align:left;
}
.content p.pages span, .content p.pages a {
	padding:8px 12px;
	text-decoration:none;
	background:none;
}
.content p.pages span, .content p.pages a:hover {
	color:#fff;
	background:#0096da;
}
.content p.pages a {
	color:#929292;
}
.content p.pages small {
	font-size:12px;
	float:right;
}
.content .mainbar .comment {
	margin:0;
	padding:16px 0 0 0;
}
.content .mainbar .comment img.userpic {
	border:1px solid #dedede;
	margin:10px 16px 0 0;
	padding:0;
	float:left;
}
.fbg {
	background:#2b2b2b;
	border-top:1px solid #f1f1f1;
}
.fbg_resize {
	margin:0 auto;
	width:920px;
	padding:16px 20px;
	color:#6e6e6e;
}
.fbg h2 {
	color:#ccc;
	padding-bottom:24px;
	text-transform:uppercase;
}
.fbg img.gal {
	margin:0 8px 8px 0;
	padding:0;
	border:none;
}
.fbg .col {
	margin:0;
	float:left;
}
.fbg .c1 {
	padding:0 16px 0 0;
	width:280px;
}
.fbg .c2 {
	padding:0 36px 0 16px;
	width:280px;
}
.fbg .c3 {
	padding:0 0 0 16px;
	width:274px;
}
.fbg .fbg_ul {
	margin:0;
	padding:0;
	list-style:none;
}
.fbg .fbg_ul li {
	margin:0;
	padding:0;
	list-style:none;
}
.fbg .fbg_ul li a {
	display:block;
	margin:0;
	padding:2px 0 2px 12px;
	color:#6e6e6e;
	text-decoration:none;
	background:url(<?php echo $image_url; ?>li.gif) no-repeat left center;
}
.fbg .fbg_ul li a:hover {
	color:#0096da;
	text-decoration:underline;
}
.fbg p.contact_info {
	line-height:1.8em;
}
.fbg p.contact_info a {
	color:#0096da;
	text-decoration:underline;
}
.fbg p.contact_info span {
	display:block;
	float:left;
	width:74px;
	font-weight:bold;
	color:#ccc;
}
ol {
	list-style:none;
}
ol li {
	display:block;
	clear:both;
}
ol li label {
	display:block;
	margin:0;
	padding:16px 0 0 0;
}
ol li input.text {
	width:480px;
	border:1px solid #c0c0c0;
	margin:0;
	padding:5px 2px;
	height:16px;
	background-color:#fff;
}
ol li textarea {
	width:480px;
	border:1px solid #c0c0c0;
	margin:0;
	padding:2px;
	background-color:#fff;
}
ol li .send {
	margin:16px 0 0 0;
}
.searchform {
	margin:0;
	padding:0;
	float:right;
}
#formsearch {
	margin:0;
	padding:20px 0 0;
	width:auto;
	height:30px;
}
#formsearch span {
	display:block;
	margin:0;
	padding:0;
	float:left;
	background:url(<?php echo $image_url; ?>search_bg.gif) no-repeat left top;
}
#formsearch input.editbox_search {
	margin:0;
	padding:8px 6px;
	float:left;
	width:174px;
	font-size:12px;
	line-height:14px;
	color:#aeaeae;
	background:none;
	outline:none;
	border:none;
}
#formsearch input.button_search {
	margin:0;
	padding:0;
	border:none;
	float:left;
}
.footer {
	background:#2b2b2b;
	border-top:1px solid #404040;
}
.footer_resize {
	margin:0 auto;
	padding:0 20px;
	width:920px;
	line-height:1.5em;
	color:#6e6e6e;
}
.footer_resize p {
	margin:24px 0;
	padding:0;
	line-height:normal;
	white-space:nowrap;
	text-indent:inherit;
}
.footer_resize a {
	color:#0096da;
	font-weight:normal;
	margin:0;
	padding:0;
	border:none;
	text-decoration:underline;
	background-color:transparent;
}
.footer_resize a:hover {
	color:#0096da;
	background-color:transparent;
	text-decoration:none;
}
.footer_resize .lf {
	float:left;
}
.footer_resize .rf {
	float:right;
}
a {
	outline:none;
}





/*================================================= COIN SLIDER.CSS ====================================================*/





/*
	Coin Slider jQuery plugin CSS styles
	http://workshop.rs/projects/coin-slider
*/
.coin-slider {
	padding:0;
	overflow:hidden;
	zoom:1;
	position:relative;
	float:right;
}
.coin-slider a {
	text-decoration:none;
	outline:none;
	border:none;
}
/* buttons for switching */
.cs-buttons {
	margin:8px 0 0;
	padding:0;
	font-size:0;
	float:left;
}
.cs-buttons a {
	margin:0 2px;
	width:20px;
	height:20px;
	float:left;
	color:#fff;
	text-indent:-10000px;
	background:url(<?php echo $image_url; ?>slide_p.png) no-repeat center center;
}
.cs-buttons a.cs-active {
	color:#fff;
	background-image:url(<?php echo $image_url; ?>slide_a.png);
}
/* text in slider */
.cs-title {
	padding:16px 60px 16px 24px;
	width:876px;
	color:#fff;
	font-size:15px;
	line-height:1.5em;
	background:url(<?php echo $image_url; ?>overlay.png) repeat left top;
}
.cs-title big {
	font-size:20px;
}
/* buttons Next and Prew */
.cs-prev, .cs-next {
	background:url(<?php echo $image_url; ?>overlay.png) repeat left top;
	color:#fff;
	padding:0px 10px;
}


/*=============================== DEPUIS VISITEUR =============================*/

.tab1{

	border:solid 1px black;
}

#tabhistor td{
	text-align: center;
	font-size: 0.75em;
}

label{
	text-decoration: underline;
}

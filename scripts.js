$(document).ready(function(){$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var target=$(this.hash);if((target=target.length?target:$("[name="+this.hash.slice(1)+"]")).length)return $("html,body").animate({scrollTop:target.offset().top},600),!1}})})});
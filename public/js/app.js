function LessonPicker(){var t=this;this.init=function(){$("#lesson_select_form").on("change.level","#level_select",function(){var e=parseInt($(this).val(),10);t.loadSubjects(e)})},this.loadSubjects=function(t){$.ajax({url:"/sample-lessons/"+t,dataType:"json",success:function(t){var e,a;if(t.subjects.length){$("#subject_select").empty();for(e in t.subjects)a=$("<option/>").text(t.subjects[e].name).val(t.subjects[e].subject_id),$("#subject_select").append(a)}}})}}function parallaxScroll(){var t=$(window).scrollTop();$(".star_logo").css("top",0-.75*t+"px")}function showScrollButton(){var t=$("body").height()/4;$(document).scrollTop()>=t?$(".scroll-btn").removeClass("hidden"):$(".scroll-btn").addClass("hidden")}function scrollToTop(t){var t=parseInt(t,10);$("html, body").animate({scrollTop:0},t)}var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-44796661-1"]),_gaq.push(["_setDomainName","starlearningsystems.com"]),_gaq.push(["_trackPageview"]),function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}(),$(document).ready(function(){$("#faq .question").bind("show.bs.collapse",function(){$(this).find(".caret").addClass("active")}),$("#faq .question").bind("hide.bs.collapse",function(){$(this).find(".caret").removeClass("active")})});var FormManager=function(t,e){var a=this,e=e||{first_name:"validName",last_name:"validName",email:"validEmail",subject:"validAlphaNum",message:"validInput"},s={"email:validEmail":"The email field must contain a valid email address"};this.init=function(){t.data("validateOnStart")&&a.validateForm(),t.on("change",".form-control",function(){a.validateInput($(this))})},this.validateForm=function(){var e=!0;return t.find(".form-group").each(function(){a.validateInput($(this).find(".form-control"))||(e=!1)}),e},this.validateInput=function(t){var n,i,o,r=t.attr("name");return n=e[r]?e[r]:"validInput",a[n](t.val())?(a.setSuccessStatus(t),i=!0):(s[r+":"+n]&&(o=s[r+":"+n]),a.setErrorStatus(t,o),i=!1),i},this.setSuccessStatus=function(t){t.siblings(".form-control-feedback").removeClass("fa-close hidden").addClass("fa-check"),t.siblings("span.sr-only").removeClass("hidden").text("(success)"),t.closest(".form-group").removeClass("has-error").addClass("has-success").find(".errormsg").empty()},this.setErrorStatus=function(t,e){var a=t.attr("name").replace(/[-_]+/," "),e=e||"The "+a+" field is required";t.siblings(".form-control-feedback").removeClass("fa-check hidden").addClass("fa-close"),t.siblings("span.sr-only").removeClass("hidden").text("(error)"),t.closest(".form-group").removeClass("has-success").addClass("has-error").find(".errormsg").text(e)},this.validInput=function(t){var e=a.trimSpace(t);return""!=e},this.validName=function(t){return!!(a.validInput(t)&&t.length<=255)},this.validAlphaNum=function(t){var e=/^[a-zA-Z0-9\-\_]+$/;return!(!a.validInput(t)||!t.match(e))},this.validEmail=function(t){var e=/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;return!(!a.validInput(t)||!t.match(e))},this.validStateAbbr=function(t){var e=/^[a-zA-Z]{2}$/;return!(!a.validInput(t)||!t.match(e))},this.noValidate=function(t){return!0},this.trimSpace=function(t){return t.replace(/^\s+|\s+$/g,"")}};$(document).ready(function(){var t=new LessonPicker;t.init()}),$(document).ready(function(){$(window).bind("scroll",function(){showScrollButton()}),$("a[href=#top]").bind("click",function(t){t.preventDefault(),scrollToTop(1e3)}),showScrollButton()});
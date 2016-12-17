function TestimonialsManager(a){var t=this,i=a.find("#testimonial_filters"),e=a.find("#testimonial_list");this.init=function(){i.on("click.filter",'a[role="tab"]',t.filterTestimonials),e.on("click.toggle",".activation-toggle",function(){var a=$(this).closest(".testimonial").attr("id"),i=parseInt(a.substring(12),10);t.toggleActiveStatus(i)})},this.toggleActiveStatus=function(a){var t,e;$.ajax({url:"/admin/testimonials/"+a+"/toggle-status",dataType:"json",type:"post",error:function(a,t,i){},success:function(s){s.data&&(t=$("#testimonial-"+a),e=t.find(".activation-toggle"),s.data.flag_active?(t.removeClass("panel-danger").addClass("panel-success"),e.find("i").removeClass("fa-check").addClass("fa-times"),e.find("strong").text("Deactivate")):(t.removeClass("panel-success").addClass("panel-danger"),e.find("i").removeClass("fa-times").addClass("fa-check"),e.find("strong").text("Activate")),i.find("li.active > a").trigger("click.filter"))}})},this.filterTestimonials=function(){var a=$(this).data("status"),t=e.find(".testimonial");1===a?t.each(function(a,t){var i=$(t),e=i.closest(".testimonial-wrapper");i.hasClass("panel-success")?e.removeClass("hidden"):e.addClass("hidden")}):0===a?t.each(function(a,t){var i=$(t),e=i.closest(".testimonial-wrapper");i.hasClass("panel-danger")?e.removeClass("hidden"):e.addClass("hidden")}):t.each(function(a,t){$(t).closest(".testimonial-wrapper").removeClass("hidden")})}}function parallaxScroll(){var a=$(window).scrollTop();$(".star_logo").css("top",0-.75*a+"px")}function showScrollButton(){var a=$("body").height()/4;$(document).scrollTop()>=a?$(".scroll-btn").removeClass("hidden"):$(".scroll-btn").addClass("hidden")}function scrollToTop(a){var a=parseInt(a,10);$("html, body").animate({scrollTop:0},a)}$(document).ready(function(){var a=new TestimonialsManager($("#testimonial_manager"));a.init()});var FormManager=function(a,t){var i=this,t=t||{first_name:"validName",last_name:"validName",email:"validEmail",subject:"validAlphaNum",message:"validInput"},e={"email:validEmail":"The email field must contain a valid email address"},s={};this.init=function(){a.data("validateOnStart")&&i.validateForm(),a.on("change",".form-control",function(){i.validateInput($(this))})},this.validateForm=function(){var t=!0;return a.find(".form-group").each(function(){i.validateInput($(this).find(".form-control"))||(t=!1)}),t},this.validateInput=function(a){var n,r,l,o,c=a.attr("name");return s[c]="",n=t[c]?t[c]:"validInput",i[n](c,a.val())?(i.setSuccessStatus(a),r=!0):(s[c]&&(o=s[c],e[c+":"+o]&&(l=e[c+":"+o])),i.setErrorStatus(a,l),r=!1),r},this.setSuccessStatus=function(a){a.siblings(".form-control-feedback").removeClass("fa-close hidden").addClass("fa-check"),a.siblings("span.sr-only").removeClass("hidden").text("(success)"),a.closest(".form-group").removeClass("has-error").addClass("has-success").find(".errormsg").empty()},this.setErrorStatus=function(a,t){var i=a.attr("name").replace(/[-_]+/," "),t=t||"The "+i+" field is required";a.siblings(".form-control-feedback").removeClass("fa-check hidden").addClass("fa-close"),a.siblings("span.sr-only").removeClass("hidden").text("(error)"),a.closest(".form-group").removeClass("has-success").addClass("has-error").find(".errormsg").text(t)},this.validInput=function(a,t){var e=i.trimSpace(t);return""!=e},this.validName=function(a,t){if(i.validInput(a,t)){if(t.length<=255)return!0;s[a]="validName"}return!1},this.validAlphaNum=function(a,t){var e=/^[a-zA-Z0-9\-\_ ]+$/;if(i.validInput(a,t)){if(t.match(e))return!0;s[a]="validAlphaNum"}return!1},this.validEmail=function(a,t){var e=/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;if(i.validInput(a,t)){if(t.match(e))return!0;s[a]="validEmail"}return!1},this.validStateAbbr=function(a,t){var e=/^[a-zA-Z]{2}$/;if(i.validInput(a,t)){if(t.match(e))return!0;s[a]="validStateAbbr"}return!1},this.noValidate=function(a,t){return!0},this.trimSpace=function(a){return a.replace(/^\s+|\s+$/g,"")}};$(document).ready(function(){$(window).bind("scroll",function(){showScrollButton()}),$("a[href=#top]").bind("click",function(a){a.preventDefault(),scrollToTop(1e3)}),showScrollButton()});
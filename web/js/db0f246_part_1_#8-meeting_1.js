$(function(){$("#sortable").sortable({update:function(a,b){var c=$(".meetingrank").map(function(f,d){return $(d).data("id")});$.post("{{ path('update_rank') }}","data="+$.makeArray(c).join(","))}})});function filter_emeetings(a){if(a=="all-emeetings"){$(".ui-state-default div").fadeIn("slow").removeClass("hidden")}else{$(".ui-state-default div").each(function(){if(!$(this).hasClass(a)){$(this).fadeOut("normal").addClass("hidden")}else{$(this).fadeIn("slow").removeClass("hidden")}})}};
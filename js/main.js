$(document).ready(function (){
    $(".tb-hide").css('display', 'none');
    if ($("#collapsed-btn").is(":visible")) {
        $(".tb-hide").css('display', 'block');
        $(".tb-show").css('display', 'none');
    } else {
        $(".tb-show").css('display', 'block');
        $(".tb-hide").css('display', 'none');
    }
    var w = $( window ).width();

    $("#banner").css("height", $(window).height() * 0.5);

    $("#toptext").css("margin-top", $(window).height() * 0.2);
    $("#toptext2").css("margin-top", $(window).height() * 0.2);

    $("#ani-1").animate({ "left": "25%" }, "slow");
    $("#ani-4").animate({ "left": "50%" }, "slow");
        // Resize

        SetSameHeight("step-desc", "arr", 100);
        SetSameHeight("spoint", "bdy", 100);
        SetSameHeight("spoint", "bdy2", 150);
        SetSameHeight1Class("first-part", 70);
        SetSameHeight1Class("second-part", 70);


        $(window).scroll(function () {
            if ($(this).scrollTop() >= $(window).height() / 2) {
                $(".eduu-navbar").addClass("hasbanner");
            } else {
                $(".eduu-navbar").removeClass("hasbanner");
            }
        });

        $(".border-round").mouseenter(function () {
            $(this).addClass("shadow");
        }).mouseleave(function () {
            $(this).removeClass("shadow");
        });


});

$(window).resize(function () {
    if ($("#collapsed-btn").is(":visible")) {
        $(".tb-hide").css('display', 'block');
        $(".tb-show").css('display', 'none');
    } else {
        $(".tb-show").css('display', 'block');
        $(".tb-hide").css('display', 'none');
    }
});


function SetSameHeight1Class(classname, defaultHeight) {
    $("." + classname).each(function () {
        if ($(this).height() > defaultHeight) {
            defaultHeight = $(this).height();
        }
    });
    $("." + classname).css('height', defaultHeight);
}

function SetSameHeight(fclass, sclass, defaultHeight) {
    $("." + fclass + " > ." + sclass).each(function () {
        if ($(this).height() > defaultHeight) {
            defaultHeight = $(this).height();
        }
    });
    $("." + fclass + " > ." + sclass).css('height', defaultHeight);
}
function HideAction() {
    $("#full-action").hide();
    $("#mini-action").show();
}
function ShowAction() {
    $("#full-action").show();
    $("#mini-action").hide();
}
function SendEmail(page) {
    $.ajax({
        method: "POST",
        url: "/Home/SendMailQC",
        data: {
            name: $("#name").val(),
            phone: $("#phone").val(),
            website: $("#site").val(),
            note: $("#note").val(),
            page: page
        }
    }).success(function (data) {
        
            alert("Chúng tôi sẽ liên lạc trong thời gian sớm nhất");
        
    }).error(function (type) {
        alert("Chúng tôi sẽ liên lạc trong thời gian sớm nhất");
    });
}

function doBounce(element, times, distance, speed) {
    for (var i = 0; i < times; i++) {
        element.animate({ marginTop: '-=' + distance }, speed)
            .animate({ marginTop: '+=' + distance }, speed);
    }
}

function ShowTemplate(id, htmlItem) {
    $(htmlItem).parent().siblings().removeClass('li-active');
    $(htmlItem).parent().addClass('li-active');
    $(".template").hide();
    $(id).show();
}

/*new*/
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79228914-1', 'auto');
      ga('send', 'pageview');


$(document).ready(function () {
        $("#banner2").css("height", $(window).height());
        $("#toptext2").css("margin-top", $(window).height() * 0.4);
    });
/*new*/



    $(document).ready(function () {
        $("#banner2").css("height", $(window).height());
        $("#toptext2").css("margin-top", $(window).height() * 0.4);
    });

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79228914-1', 'auto');
      ga('send', 'pageview');

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79228914-1', 'auto');
      ga('send', 'pageview');
    
    $(document).ready(function () {

        var defh = 100;
        $(".benefit").each(function () {
            if ($(this).parent().height() > defh) {
                defh = $(this).parent().height();
            }
        });
        //$("#parentB").css("height", defh);

        $(".benefit img").mouseover(function () {
            doBounce($(this), 3, '15px', 200);
        });
    });


$(document).ready(function() {
    $(".menu_bar").scrollToFixed();
    var e = $(".summary");
    e.each(function(t) {
        var a = $(e[t]);
        e[t + 1];
        a.scrollToFixed({
            marginTop: $(".menu_bar").outerHeight(!0) + 10,
            zIndex: 999
        })
    }), $("a.page-scroll").bind("click", function(e) {
        var t = $(this);
        $("html, body").stop().animate({
            scrollTop: $(t.attr("href")).offset().top
        }, 1500, "easeInOutExpo"), $("title").html("MyHome Textile | " + t.text()), e.preventDefault()
    }), $(".grid").masonry({
        itemSelector: ".grid-item",
        columnWidth: ".grid-sizer",
        percentPosition: !0
    }), $("#langtr").mouseover(function() {
        $("#langen").filter(":not(:animated)").animate({
            width: 265
        }, {
            duration: 500
        })
    }), $("#langtr").mouseout(function() {
        $("#langen").animate({
            width: 156
        })
    }), $("#langtr").on("click", function() {
        location.href = "http://myhometextile.com/tr/"
    }), $("#langen").mouseover(function() {
        $("#langtr").filter(":not(:animated)").animate({
            width: 265
        }, {
            duration: 500
        })
    }), $("#langen").mouseout(function() {
        $("#langtr").animate({
            width: 156
        })
    }), $("#langen").on("click", function() {
        location.href = "http://myhometextile.com/"
    }), $("#contactform").validate({
        rules: {
            Name: {
                required: !0
            },
            Email: {
                required: !0,
                email: !0
            },
            Message: {
                required: !0,
                minlength: 10
            }
        },
        messages: {
            Name: {
                required: "Please enter your name"
            },
            Email: {
                required: "Please enter your email address",
                email: "Please enter a VALID email address"
            },
            Message: {
                required: "Please enter your message"
            }
        },
        submitHandler: function(form) {
            $('form').on('submit',function(){
                return false;
            })
            var Name = $('#Name').val();
            var Email = $('#Email').val();
            var Subject = $('#Subject').val();
            var Message = $('#Message').val();
            let hi = $.post(
                'mail.php',
                {Name: Name, Email: Email, Subject: Subject, Message: Message},
                function (data){
                    if(data != ""){
                        alert (data);
                    }
                    else{
                        alert ('Что-то пошло не так, попробуйте позже.')
                    }
                }
            );
        },
        errorPlacement: function(e, t) {
            e.insertAfter(t.parent())
        }
    })
});
$(function()
{
    $(".gk").hide()
    $("div#menu").hide()
    $("div.triangle").hide()
    $("a img").on("click",function()
    {
        $(this).fadeToggle("slow")
        $("div#menu").slideToggle("slow")
        $("div.triangle").show()
    })
    $("div.triangle").on("click",function()
    {
        $(this).hide()
        $("div#menu").slideToggle("slow")
        $("a img").fadeToggle("slow")
    })
    $("ul li a").eq(1).on("click",function()
    {
        $(".gk").fadeToggle()
        
    })
    $(".gk").on("focus",function()
    {
        $(this).css("box-shadow","0px 0px 15px #f2f")
    })
    $(".gk").on("blur",function()
    {
        $(this).css("box-shadow","0px 0px 0px")
    })
})
$(function()
{$(".gk").hide();$("div#menu").hide();$("div.triangle").hide();$("a img").on("click",function(){$(this).fadeToggle("slow");$("div#menu").slideToggle("slow");$("div.triangle").show()});$("div.triangle").on("click",function(){$(this).hide();$("div#menu").slideToggle("slow");$("a img").fadeToggle("slow")});$("ul li a").eq(1).on("click",function(){$(".gk").fadeToggle()});$(".gk").on("focus",function(){$(this).css("box-shadow","0px 0px 15px #f2f")});$(".gk").on("blur",function(){$(this).css("box-shadow","0px 0px 0px")});$(".info").hide()
$(".gk").hide()
$(".gkj").hide()
$("div#menu").hide()
$("div.triangle").hide()
$("a img").on("click",function()
{$(this).fadeToggle("slow")
$("div#menu").slideToggle("slow")
$("div.triangle").show()})
$("div.triangle").on("click",function()
{$(this).hide()
$("div#menu").slideToggle("slow")
$("a img").fadeToggle("slow")})
$("ul li a").eq(1).on("click",function()
{$(".gk").fadeToggle("slow")
$(".gkj").fadeToggle("slow")
$(".info").fadeToggle("slow")})
$(".gk").on("focus",function()
{$(this).css("box-shadow","0px 0px 15px #f2f")})
$(".gk").on("blur",function()
{$(this).css("box-shadow","0px 0px 0px")})
$(".gkj").on("click",function(e)
{e.preventDefault()
$(".gkj").fadeToggle("slow")
$(".gk").fadeToggle("slow")
$l=$(".gk").val()
$.ajax({type:"get",url:"api.php",data:$("form").serialize(),success:function(z){var fuck=/<img([^>]*[^/])>/g
var your=/nome: (.*)<\/h2>/g
var ass=/nivel: (.*)<\/h2>/g
var eat=/Tipo: Solo Duo Elo:(.*) (.*)<\/h2>/g
var eatu=/Tipo: Flex_5x5 Elo:(.*) (.*)<\/h2>/g
var eatui=/Tipo: Flex_3x3 Elo:(.*) (.*)<\/h2>/g
nome=your.exec(z)[1]
nivel=ass.exec(z)[1]
elo=eat.exec(z)
if(elo!=null)
{elo=elo[0].replace("</h2>","")}
else{elo="Unranked"}
elo1=eatu.exec(z)
if(elo1!=null)
{elo1=elo1[0].replace("</h2>","")}
else{elo1="Unranked"}
elo2=eatui.exec(z)
if(elo2!=null)
{elo2=elo2[0].replace("</h2>","")}
else{elo2="Unranked"}
$(".info").append(fuck.exec(z)[0])
$(".info").append(`<h1 class="ui">Nome do usuario:${nome}</h1>`)
$(".info").append(`<h1 class="nv">Nivel:${nivel}</h1>`)
$(".info").append(`<h1 class="el">${elo}</h1>`)
$(".info").append(`<h1 class="el1">${elo1}</h1>`)
$(".info").append(`<h1 class="el2">${elo2}</h1>`)
$(".el").css("font-size","30px")
$(".el").css("position","absolute")
$(".el").css("top","25px")
$(".el").css("left","150px")
$(".el1").css("font-size","30px")
$(".el1").css("position","absolute")
$(".el1").css("top","70px")
$(".el1").css("left","150px")
$(".el2").css("font-size","30px")
$(".el2").css("position","absolute")
$(".el2").css("top","110px")
$(".el2").css("left","150px")
$("img#joao").css("widht","250px")
$("img#joao").css("height","150px")
$("img#joao").css("padding","-5px")}});})
$(".info").mouseover(function(){$(this).css("box-shadow","0px 0px 15px #f2f")})
$(".info").mouseout(function(){$(this).css("box-shadow","0px 0px")})})})

var idCmt = 0;
var idReply = 0;
function getComment(){
    var id = idCmt;
    var cmt = document.getElementById("add_comment").value;
    var allCommnet = document.getElementById('cmt1');
    allCommnet.innerHTML = "<div id='" + String(idCmt) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply_cmt()\">Reply</h6></div></div></div>" + allCommnet.innerHTML ;
    idCmt ++;
    return id;
}

function reply_cmt(){
    var idR = idReply;
    var id = getComment();
    var repCmt = document.getElementById(String(id));
    repCmt.innerHTML = repCmt.innerHTML + "<div id='" + String(idReply) +"' class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply'" + String(idReply) + " style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply()\">Comment</button></div>";
    idReply++;
    return idR;
}

function getReply(){
    var id = reply_cmt();
    var cmt = document.getElementById("add_reply" + String(id)).value;
    var allCommnet = document.getElementById(String(id));
    allCommnet.innerHTML = "<div class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\">Reply</h6></div></div></div>" + allCommnet.innerHTML ;
    idCmt ++;
    return id;
}
// function is test
function getReply1(){
    var cmt = document.getElementById("add_reply1").value;
    var allCommnet = document.getElementById('cmt1');
    allCommnet.innerHTML = allCommnet.innerHTML + "<div id='" + String(idReply) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>";
    idReply ++;
}

function getReply2(){
    var cmt = document.getElementById("add_reply2").value;
    var allCommnet = document.getElementById('cmt2');
    allCommnet.innerHTML = allCommnet.innerHTML + "<div id='" + String(idReply) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>";
    idReply ++;
}

function getReply3(){
    var cmt = document.getElementById("add_reply3").value;
    var allCommnet = document.getElementById('cmt3');
    allCommnet.innerHTML = allCommnet.innerHTML + "<div id='" + String(idReply) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>";
    idReply ++;
}
function reply_cmt1(){
    var repCmt = document.getElementById('cmt1');
    repCmt.innerHTML = repCmt.innerHTML + "<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply1' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply1()\">Comment</button></div>";
}

function reply_cmt2(){
    var repCmt = document.getElementById('cmt2');
    repCmt.innerHTML = repCmt.innerHTML + "<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply2' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply2()\">Comment</button></div>";
}

function reply_cmt3(){
    var repCmt = document.getElementById('cmt3');
    repCmt.innerHTML = repCmt.innerHTML + "<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply3' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply3()\">Comment</button></div>";
}


function myFunction(x) 
{
    x.classList.toggle("fa-thumbs-down");
}
  
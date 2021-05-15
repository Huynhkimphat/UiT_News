var idCmt = 0;
function getComment(){
    var cmt = document.getElementById("add_comment").value;
    var allCommnet = document.getElementById('cmt1');
    allCommnet.innerHTML = "<div id='" + String(idCmt) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>" + allCommnet.innerHTML ;
    idCmt ++;
}

function reply_cmt1(){
    var repCmt = document.getElementById('cmt1');
    repCmt.innerHTML = repCmt.innerHTML + "<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_comment' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getComment()\">Comment</button></div>";
}

function reply_cmt2(){
    var repCmt = document.getElementById('cmt2');
    repCmt.innerHTML = repCmt.innerHTML + "<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_comment' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getComment()\">Comment</button></div>";
}

function reply_cmt3(){
    var repCmt = document.getElementById('cmt3');
    repCmt.innerHTML = repCmt.innerHTML + "<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_comment' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getComment()\">Comment</button></div>";
}


function myFunction(x) 
{
    x.classList.toggle("fa-thumbs-down");
}
  
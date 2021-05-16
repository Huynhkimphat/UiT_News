// var idCmt = 0;
// var idReply = 0;
// function getComment(){
//     var id = idCmt;
//     var cmt = document.getElementById("add_comment").value;
//     var allCommnet = document.getElementById('cmt1');
//     allCommnet.innerHTML = "<div id='" + String(idCmt) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply_cmt()\">Reply</h6></div></div></div>" + allCommnet.innerHTML ;
//     idCmt ++;
//     return id;
// }

// function reply_cmt(){
//     var idR = idReply;
//     var id = getComment();
//     var repCmt = document.getElementById(String(id));
//     repCmt.innerHTML = repCmt.innerHTML + "<div id='" + String(idReply) +"' class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply'" + String(idReply) + " style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply()\">Comment</button></div>";
//     idReply++;
//     return idR;
// }

// function getReply(){
//     var id = reply_cmt();
//     var cmt = document.getElementById("add_reply" + String(id)).value;
//     var allCommnet = document.getElementById(String(id));
//     allCommnet.innerHTML = "<div class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\">Reply</h6></div></div></div>" + allCommnet.innerHTML ;
//     idCmt ++;
//     return id;
// }
// // function is test
// // function getReply1(){
// //     var cmt = document.getElementById("add_reply1").value;
// //     var allCommnet = document.getElementById('cmt1');
// //     allCommnet.innerHTML = allCommnet.innerHTML + "<div id='" + String(idReply) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>";
// //     idReply ++;
// // }

// // function getReply2(){
// //     var cmt = document.getElementById("add_reply2").value;
// //     var allCommnet = document.getElementById('cmt2');
// //     allCommnet.innerHTML = allCommnet.innerHTML + "<div id='" + String(idReply) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>";
// //     idReply ++;
// // }

// // function getReply3(){
// //     var cmt = document.getElementById("add_reply3").value;
// //     var allCommnet = document.getElementById('cmt3');
// //     allCommnet.innerHTML = allCommnet.innerHTML + "<div id='" + String(idReply) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>";
// //     idReply ++;
// // }
// // function reply_cmt1(){
// //     var repCmt = document.getElementById('cmt1');
// //     repCmt.innerHTML = repCmt.innerHTML + "<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply1' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply1()\">Comment</button></div>";
// // }

// // function reply_cmt2(){
// //     var repCmt = document.getElementById('cmt2');
// //     repCmt.innerHTML = repCmt.innerHTML + "<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply2' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply2()\">Comment</button></div>";
// // }

// // function reply_cmt3(){
// //     var repCmt = document.getElementById('cmt3');
// //     repCmt.innerHTML = repCmt.innerHTML + "<div class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply3' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply3()\">Comment</button></div>";
// // }


// // function myFunction(x) 
// // {
// //     x.classList.toggle("fa-thumbs-down");
// // }

// // function getComment(){
// //     var id = idCmt;
// //     var cmt = document.getElementById("add_comment").value;
// //     var allCommnet = document.getElementById('cmt1');
// //     allCommnet.innerHTML = "<div id='" + String(idCmt) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply_cmt()\">Reply</h6></div></div></div>" + allCommnet.innerHTML ;
// //     idCmt ++;
// //     return id;
// // }

// // function reply_cmt(){
// //     var idR = idReply;
// //     var id = getComment();
// //     var repCmt = document.getElementById(String(id));
// //     repCmt.innerHTML = repCmt.innerHTML + "<div id='" + String(idReply) +"' class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"10\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply'" + String(idReply) + " style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply()\">Comment</button></div>";
// //     idReply++;
// //     return idR;
// // }

// // function getReply(){
// //     var id = reply_cmt();
// //     var cmt = document.getElementById("add_reply" + String(id)).value;
// //     var allCommnet = document.getElementById(String(id));
// //     allCommnet.innerHTML = "<div class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"> <h5 class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span>" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\">Reply</h6></div></div></div>" + allCommnet.innerHTML ;
// //     idCmt ++;
// //     return id;
// // }
// // function is test
// function getReply1(){
//     var cmt = document.getElementById("add_reply1").value;
//     var allCommnet = document.getElementById('cmt1');
//     allCommnet.innerHTML = allCommnet.innerHTML + "<div style=\"margin-left: 40px\" id='" + String(idReply) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"20\"> <h6 style=\"font-size: 13px\" class=\"mr-2\">Lê Hoàng Thùy Na </h6><h5 style=\"font-size: 13px\"><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span style=\"font-size: 13px\">" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>";
//     idReply ++;
//     document.getElementById('repCmt1').remove();
// }

// function getReply2(){
//     var cmt = document.getElementById("add_reply2").value;
//     var allCommnet = document.getElementById('cmt2');
//     allCommnet.innerHTML = allCommnet.innerHTML + "<div style=\"margin-left: 40px\" id='"  + String(idReply) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"20\"> <h5 style=\"font-size: 13px\" class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5 style=\"font-size: 13px\"><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span style=\"font-size: 13px\">" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>";
//     idReply ++;
//     document.getElementById('repCmt2').remove();
// }

// function getReply3(){
//     var cmt = document.getElementById("add_reply3").value;
//     var allCommnet = document.getElementById('cmt3');
//     allCommnet.innerHTML = allCommnet.innerHTML + "<div style=\"margin-left: 40px\" id='" + String(idReply) +"' class=\"commented-section mt-2\"><div class=\"d-flex flex-row align-items-center commented-user\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"20\"> <h5 style=\"font-size: 13px\" class=\"mr-2\">Lê Hoàng Thùy Na </h5><h5 style=\"font-size: 13px\"><span class=\"dot mb-1\"></span><span class=\"mb-1 ml-2\">0m</span></h5></div><div class=\"comment-text-sm\"><span style=\"font-size: 13px\">" + cmt + "</span></div><div class=\"reply-section\"><div class=\"d-flex flex-row align-items-center voting-icons\"> <i onclick=\"myFunction(this)\" class=\"fa fa-thumbs-up\"></i><h6 class=\"ml-2 mt-1\" onclick=\"reply()\">Reply</h6></div></div></div>";
//     idReply ++;
//     document.getElementById('repCmt3').remove();
// }
// function reply_cmt1(){
//     var repCmt2 =  document.getElementById('repCmt2'), repCmt3 = document.getElementById('repCmt3');
//     if(repCmt2)
//         repCmt2.remove();
//     if(repCmt3)
//         repCmt3.remove();
//     var repCmt = document.getElementById('cmt1');
//     repCmt.innerHTML = repCmt.innerHTML + "<div id=\"repCmt1\" class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply1' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply1()\">Comment</button></div>";
// }

// function reply_cmt2(){
//     var repCmt1 =  document.getElementById('repCmt1'), repCmt3 = document.getElementById('repCmt3');
//     if(repCmt1)
//         repCmt1.remove();
//     if(repCmt3)
//         repCmt3.remove();
//     var repCmt = document.getElementById('cmt2');
//     repCmt.innerHTML = repCmt.innerHTML + "<div id=\"repCmt2\" class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply2' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply2()\">Comment</button></div>";
// }

// function reply_cmt3(){
//     var repCmt2 =  document.getElementById('repCmt2'), repCmt1 = document.getElementById('repCmt1');
//     if(repCmt2)
//         repCmt2.remove();
//     if(repCmt1)
//         repCmt1.remove();
//     var repCmt = document.getElementById('cmt3');
//     repCmt.innerHTML = repCmt.innerHTML + "<div id=\"repCmt3\" class=\"d-flex flex-row add-comment-section mt-4 mb-4\"><img class=\"img-fluid img-responsive rounded-circle mr-2\" src=\"image/nane.jpg\" width=\"35\"><input type=\"text\" class=\"form-control mr-3\" id='add_reply3' style=\"height: 35px;width: 1000px;\" placeholder=\"Add comment\"><button class=\"btn btn-primary\" type=\"button\" width=\"35\" onclick=\"getReply3()\">Comment</button></div>";

// }

// function myFunction(x) 
// {
//     x.classList.toggle("fa-thumbs-down");
// }


        $(function() {
            var saveComment = function(data) {

                // Convert pings to human readable format
                $(Object.keys(data.pings)).each(function(index, userId) {
                    var fullname = data.pings[userId];
                    var pingText = '@' + fullname;
                    data.content = data.content.replace(new RegExp('@' + userId, 'g'), pingText);
                });

                return data;
            }
            $('#comments-container').comments({
                profilePictureURL: 'https://scontent.fpnh22-3.fna.fbcdn.net/v/t1.6435-1/p240x240/149943665_467969470998408_3401684646876157977_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=7206a8&_nc_ohc=cGiUDb5rVQ0AX_5aRfx&_nc_ht=scontent.fpnh22-3.fna&tp=6&oh=6f710e994a6a95fe7038809a79d515f6&oe=60C80421',
                currentUserId: 1,
                roundProfilePictures: true,
                textareaRows: 1,
                enableAttachments: true,
                enableHashtags: true,
                enablePinging: true,
                scrollContainer: $(window),
                searchUsers: function(term, success, error) {
                    setTimeout(function() {
                        success(usersArray.filter(function(user) {
                            var containsSearchTerm = user.fullname.toLowerCase().indexOf(term.toLowerCase()) != -1;
                            var isNotSelf = user.id != 1;
                            return containsSearchTerm && isNotSelf;
                        }));
                    }, 500);
                },
                getComments: function(success, error) {
                    setTimeout(function() {
                        success(commentsArray);
                    }, 500);
                },
                postComment: function(data, success, error) {
                    setTimeout(function() {
                        success(saveComment(data));
                    }, 500);
                },
                putComment: function(data, success, error) {
                    setTimeout(function() {
                        success(saveComment(data));
                    }, 500);
                },
                deleteComment: function(data, success, error) {
                    setTimeout(function() {
                        success();
                    }, 500);
                },
                upvoteComment: function(data, success, error) {
                    setTimeout(function() {
                        success(data);
                    }, 500);
                },
                validateAttachments: function(attachments, callback) {
                    setTimeout(function() {
                        callback(attachments);
                    }, 500);
                },
            });
        });


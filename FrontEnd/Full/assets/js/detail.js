$(document).ready(function() {
    $(function() {
        var saveComment = function(data) {
            // Convert pings to human readable format
            $(Object.keys(data.pings)).each(function(index, userId) {
                var fullname = data.pings[userId];
                var pingText = "@" + fullname;
                data.content = data.content.replace(
                    new RegExp("@" + userId, "g"),
                    pingText
                );
            });

            return data;
        };
        $("#comments-container").comments({
            profilePictureURL: "https://scontent.fpnh22-3.fna.fbcdn.net/v/t1.6435-1/p240x240/149943665_467969470998408_3401684646876157977_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=7206a8&_nc_ohc=cGiUDb5rVQ0AX_5aRfx&_nc_ht=scontent.fpnh22-3.fna&tp=6&oh=6f710e994a6a95fe7038809a79d515f6&oe=60C80421",
            currentUserId: 1,
            roundProfilePictures: true,
            textareaRows: 1,
            enableAttachments: true,
            enableHashtags: true,
            enablePinging: true,
            scrollContainer: $(window),
            searchUsers: function(term, success, error) {
                setTimeout(function() {
                    success(
                        usersArray.filter(function(user) {
                            var containsSearchTerm =
                                user.fullname
                                .toLowerCase()
                                .indexOf(term.toLowerCase()) != -1;
                            var isNotSelf = user.id != 1;
                            return containsSearchTerm && isNotSelf;
                        })
                    );
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
});
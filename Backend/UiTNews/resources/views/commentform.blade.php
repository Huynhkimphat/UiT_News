<form id="createcmt">
    @csrf
    <div class="form-group">
        <input type="text" name="COMMENT_BODY" class="form-control" />
        <input type="hidden" name="COMMENT_POST_ID" id="COMMENT_POST_ID" value="{{ $Post->id }}" />    
        <input type="hidden" name="COMMENT_USER_ID" id="COMMENT_USER_ID" value="{{ Auth::user()->id }}" />                  
        <button type="submit" class="btn btn-warning" id="btn-submit" >Submit</button>
    </div>
                        
</form>
<script type="text/javascript"> 
    $("#createcmt").submit(function(){ 
        let COMMENT_BODY=$("input[name='COMMENT_BODY']").val();
        let COMMENT_POST_ID=$("#COMMENT_POST_ID").val();
        let COMMENT_USER_ID=$("#COMMENT_USER_ID").val();

        axios.post('http://127.0.0.1:8000/api/comments', {
            COMMENT_BODY: COMMENT_BODY,
            COMMENT_POST_ID: COMMENT_POST_ID,
            COMMENT_USER_ID: COMMENT_USER_ID
            })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });

        
    });
    $(document).ready(function(){
    axios.get('http://127.0.0.1:8000/api/comments')
    .then(function (response) {
        console.log(response);
  })
    .catch(function (error) {
      console.log(error);
  });
})          
</script>
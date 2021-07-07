
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">FeedBack User </div>
                  <div class="card-body">
                   <div> Visitor email : {{$email}}</div>
                   <div> Visitor Feedback : {{$content}}</div>
               </div>
           </div>
       </div>
   </div>
</div>

@include('user.partials.topbar')


<style type="text/css">
	body {padding-top:20px;}

.glyphicon-lg{font-size:3em}
.blockquote-box{border-right:5px solid #E6E6E6;margin-bottom:25px}
.blockquote-box .square{width:100px;min-height:50px;margin-right:22px;text-align:center!important;background-color:#E6E6E6;padding:20px 0}
.blockquote-box.blockquote-primary{border-color:#357EBD}
.blockquote-box.blockquote-primary .square{background-color:#428BCA;color:#FFF}
.blockquote-box.blockquote-success{border-color:#4CAE4C}
.blockquote-box.blockquote-success .square{background-color:#5CB85C;color:#FFF}
.blockquote-box.blockquote-info{border-color:#46B8DA}
.blockquote-box.blockquote-info .square{background-color:#5BC0DE;color:#FFF}
.blockquote-box.blockquote-warning{border-color:#EEA236}
.blockquote-box.blockquote-warning .square{background-color:#F0AD4E;color:#FFF}
.blockquote-box.blockquote-danger{border-color:#D43F3A}
.blockquote-box.blockquote-danger .square{background-color:#D9534F;color:#FFF}

/*!
 * @copyright © Kartik Visweswaran, Krajee.com, 2014
 * @version 2.5.0
 *
 * A simple yet powerful JQuery star rating plugin that allows rendering
 * fractional star ratings and supports Right to Left (RTL) input.
 *
 * For more JQuery/Bootstrap plugins and demos visit http://plugins.krajee.com
 * For more Yii related demos visit http://demos.krajee.com
 */
.rating-loading {
    width: 25px;
    height: 25px;
    font-size: 0px;
    color: #fff;
    background: transparent url('../img/loading.gif') top left no-repeat;
    border: none;
}
/*
 * Stars
 */
.rating-gly {
    font-family: 'Glyphicons Halflings';
}
.rating-gly-star {
    font-family: 'Glyphicons Halflings';
    padding-left: 2px;
}

.rating-gly-star .rating-stars:before {
    padding-left: 2px;
}

.rating-lg .rating-gly-star, .rating-lg .rating-gly-star .rating-stars:before {
    padding-left: 4px;
}

.rating-xl .rating-gly-star, .rating-xl .rating-gly-star .rating-stars:before {
    padding-left: 2px;
}

.rating-active {
    cursor: default;
}

.rating-disabled {
    cursor: not-allowed;
}

.rating-uni {
    font-size: 1.2em;
    margin-top: -5px;
}

.rating-container {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    color: #e3e3e3;
    overflow: hidden;
}

.rating-container:before {
    content: attr(data-content);
}

.rating-container .rating-stars {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    overflow: hidden;
    color: #fde16d;
    transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    -webkit-transition: all 0.25s ease-out;
}

.rating-container .rating-stars:before {
    content: attr(data-content);
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.7);
}

.rating-container-rtl {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    overflow: hidden;
    color: #fde16d;
}

.rating-container-rtl:before {
    content: attr(data-content);
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.7);
}

.rating-container-rtl .rating-stars {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    overflow: hidden;
    color: #e3e3e3;
    transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    -webkit-transition: all 0.25s ease-out;
}

.rating-container-rtl .rating-stars:before {
    content: attr(data-content);
}

/**
 * Rating sizes
 */
.rating-xl {
    font-size: 4.89em;
}

.rating-lg {
    font-size: 3.91em;
}

.rating-md {
    font-size: 3.13em;
}

.rating-sm {
    font-size: 2.5em;
}

.rating-xs {
    font-size: 2em;
}

/**
 * Clear rating button
 */
.star-rating .clear-rating, .star-rating-rtl .clear-rating {
    color: #aaa;
    cursor: not-allowed;
    display: inline-block;
    vertical-align: middle;
    font-size: 60%;
}

.clear-rating-active {
    cursor: pointer !important;
}

.clear-rating-active:hover {
    color: #843534;
}

.star-rating .clear-rating {
    padding-right: 5px;
}

/**
 * Caption
 */
.star-rating .caption, .star-rating-rtl .caption {
    color: #999;
    display: inline-block;
    vertical-align: middle;
    font-size: 55%;
}

.star-rating .caption {
    padding-left: 5px;
}

.star-rating-rtl .caption {
    padding-right: 5px;
}

</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<center><h2><a href="{{route('user')}}" >Back to Profile</a></h2></center>
<div class="container">
    <div class="row">
    <h3>Feedback</h3>
    <table width="100%" border="0">
      <div class="col-md-9 col-md-offset-0">
        <tr><td width="77%">
        <div class="">
          <form class="form-horizontal" action="{{route('givefeedback')}}" method="post">

            @csrf
          <fieldset>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Full Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control"value="{{auth()->user()->name}}" readonly="">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control" value="{{auth()->user()->email}}" readonly="">
              </div>
            </div>


            <!-- Subject input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="subject">Subject</label>
              <div class="col-md-9">
                <input id="subject" name="subject" type="text"  class="form-control" value="{{$single->package_name}}" readonly="" >
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your feedback here..." rows="5"></textarea>
              </div>
            </div>


            <!-- Rating -->
            <center>
            <div class="col-md-9">
                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                <button type="reset" class="btn btn-default btn-md">Clear</button>
              
            </div>
            </center>
    </td>
    
              </div>
            </div>
          </fieldset>
          </form>
        </div>
    </div>
    </td>
    </tr>
    </table>
</div>



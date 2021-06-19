@extends('layouts.admin')
@section('content')

<style>
.scroll-left {
 height: 50px;	
 overflow: hidden;
 position: relative;
 color: #A52A2A;
}
.scroll-left h2 {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 transform:translateX(100%);
 /* Apply animation to this element */
 animation: scroll-left 10s linear infinite;
}
/* Move it (define the animation) */
@keyframes scroll-left {
 0%   {
 transform: translateX(100%); 		
 }
 100% {
 transform: translateX(-100%); 
 }
}
</style>

<div class="scroll-left">
<h2>Welcome to IESCO Website </h2>
</div>


@endsection
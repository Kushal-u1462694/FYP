@if(Session::has('info'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ @Session('info')}}
</div>
@endif
@if(Session::has('danger'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{@Session('danger')}}
</div>
@endif
@if(Session::has('warning'))
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{@Session('warning')}}
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{@Session('success')}}
</div>
@endif

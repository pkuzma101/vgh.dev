@extends('master')
<title>Create Company</title>
<link rel="stylesheet" href="../css/create.css" type="text/css">
@section('content')
{{{ Form::open(array('action' => 'ConsoleController@store', 'files' => true)) }}}
  <h1>Insert a New Console</h1>
  {{{ Form::label('name', 'Name') }}}
  {{{ Form::text('name') }}}
  <br>
  {{{ Form::label('logo', 'Logo') }}}
  {{{ Form::file('logo') }}}
  <br>
  {{{ Form::label('generation', 'Generation') }}}
  {{{ Form::selectRange('generation', 1, 10) }}}
  <br>
  {{{ Form::label('company', 'Company') }}}
  <select name="company" id="company">
    @foreach($companies as $company)
      <option value="{{{ $company->id }}}">{{{ $company->name }}}</option>
    @endforeach
  </select>
  <br>
  {{{ Form::label('console_pic', 'Console Pic') }}}
  {{{ Form::file('console_pic') }}}
  <br>
  {{{ Form::label('controller_pic', 'Controller Pic') }}}
  {{{ Form::file('controller_pic') }}}
  <br>
  {{{ Form::label('start_date', 'Start Date') }}}
  {{{ Form::date('start_date') }}}
  <br>
  {{{ Form::label('end_date', 'End Date') }}}
  {{{ Form::date('end_date') }}}
  <br>
  {{{ Form::label('history', 'History') }}}
  {{{ Form::textarea('history') }}}
  <br>
  {{{ Form::label('analysis', 'Analysis') }}}
  {{{ Form::textarea('analysis') }}}
  <input type="text" id="company_name" style="display:none;" />

{{{ Form::close() }}}
<script type="text/javascript">
// grab name of company for hidden field
$(document).ready(function() {
  $('#company').change(function() {
    var name = $('#company option:selected').text();
    $('#company_name').val(name);
  });
});
</script>

@endsection
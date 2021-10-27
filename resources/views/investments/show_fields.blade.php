<!-- Lastname Field -->
<div class="col-sm-12">
    {!! Form::label('lastName', 'Lastname:') !!}
    <p>{{ $investment->lastName }}</p>
</div>

<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstName', 'Firstname:') !!}
    <p>{{ $investment->firstName }}</p>
</div>

<!-- Accountname Field -->
<div class="col-sm-12">
    {!! Form::label('accountName', 'Accountname:') !!}
    <p>{{ $investment->accountName }}</p>
</div>

<!-- Init Invest Field -->
<div class="col-sm-12">
    {!! Form::label('init_invest', 'Init Invest:') !!}
    <p>{{ $investment->init_invest }}</p>
</div>

<!-- Start Date Field -->
<div class="col-sm-12">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $investment->start_date }}</p>
</div>

<!-- Remarks Field -->
<div class="col-sm-12">
    {!! Form::label('remarks', 'Remarks:') !!}
    <p>{{ $investment->remarks }}</p>
</div>


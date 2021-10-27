<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastName', 'Lastname:') !!}
    {!! Form::text('lastName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstName', 'Firstname:') !!}
    {!! Form::text('firstName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Accountname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accountName', 'Accountname:') !!}
    {!! Form::text('accountName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Init Invest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('init_invest', 'Init Invest:') !!}
    {!! Form::number('init_invest', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::text('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Remarks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarks', 'Remarks:') !!}
    {!! Form::text('remarks', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
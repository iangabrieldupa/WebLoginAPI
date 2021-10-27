<div class="table-responsive">
    <table class="table" id="investments-table">
        <thead>
            <tr>
                <th>Lastname</th>
        <th>Firstname</th>
        <th>Accountname</th>
        <th>Init Invest</th>
        <th>Start Date</th>
        <th>Remarks</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($investments as $investment)
            <tr>
                <td>{{ $investment->lastName }}</td>
            <td>{{ $investment->firstName }}</td>
            <td>{{ $investment->accountName }}</td>
            <td>{{ $investment->init_invest }}</td>
            <td>{{ $investment->start_date }}</td>
            <td>{{ $investment->remarks }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['investments.destroy', $investment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('investments.show', [$investment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('investments.edit', [$investment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

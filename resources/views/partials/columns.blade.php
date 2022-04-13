<div class="card-header table-responsive">

    <h4> Table name ` {{$table_name}}</h4>

    <a class="nav-link delete_table"  data-url="{{route('delete_table',['table_name'=> $table_name , 'db_name'=>$db_name])}}"
      style="color: red" href="javascript:void(0)"  >


         Delete Table

    </a>
    <table id="datatablesSimple" class="dataTable-table">
        <thead>

        <tr>
            @if(count($columns))
                @foreach($columns as $column)

                    @php
                        $column=(array)$column;


                    @endphp
                    <th>{{$column['Field']}}</th>

                @endforeach
            @endif
        </tr>
        </thead>
        <tbody>

        @if(count($dataes))
            @foreach($dataes as $data)
                <tr>
                    @php
                        $data=(array)$data;

                    @endphp
                    @foreach($data as $key=>$value)

                        <td>{{$data[$key]}}</td>

                    @endforeach
                </tr>
            @endforeach
        @endif


        </tbody>

    </table>
</div>
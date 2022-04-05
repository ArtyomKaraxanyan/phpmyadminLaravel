

<a class="nav-link show_create_table"  data-url="{{route('show_create_table', $db_name )}}" style="color:green" href="javascript:void(0)"  >Create Table</a>
<nav class="sb-sidenav-menu-nested nav">
    @if(count($tables))
    @foreach($tables as $table)

    @php

    $table=(array)$table;
   
    @endphp
    
            <a class="nav-link table get_columns"  data-url="{{route('show_columns',['db_name' => $db_name, 'table_name'=>$table['Tables_in_' . $db_name]])}}" href="javascript:void(0)" >
            

            {{$table['Tables_in_' . $db_name]}}
            </a>
        
             
             @endforeach  
    @endif
                         
                                  
   </nav>        
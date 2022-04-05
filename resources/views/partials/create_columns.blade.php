

<form  data-action="{{route('create_table', $db_name )}}" id="columns-form">
    @csrf

    <div class="card-header ">
        <input class=" table_name " id="table_name" name="table_name" type="text" placeholder="Table name*" />
        <input  type="number" name="count" min="1" id="count" value="1" >
        <button type="button" class="btn" id="create_count_btn"  >
            ADD Columns
        </button>
    </div>

    <div class="card-body">
        <table class="table" id="columns-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Length</th>
                <th>Default</th>
                <th>Collate</th>
                <th>Index</th>

            </tr>

            </thead>
            <tbody>


          @include('partials.columns_row')


            </tbody>
        </table>
    </div>
<div class="pull-right">
    <button type="button" class="btn " id="create_table_btn" >
        Create Table
    </button>
</div>
</form>
